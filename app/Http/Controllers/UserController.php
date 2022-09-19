<?php

namespace App\Http\Controllers;

use App\Models\contract;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\file;
use App\Rules\MatchOldPassword;
use App\Models\UserGroup;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Facade\FlareClient\View;
use Faker\Provider\ar_EG\Company;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\Handler;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use PharIo\Manifest\Email;

class UserController extends Controller
{
    public function getUserbyID($idUser){
        $data = User::find($idUser);
        return $data;
    }
    public function showUserProfile()
    {
        $data = $this->getSessionUser();
        return view('user.UserProfile',compact('data'));
    }
    public function showUserProfileEdit(){
        $data = $this->getSessionUser();
        return view('user.UserProfileEdit', compact('data'));
    }
    public function EditUser($idUser){
        $data1 = UserGroup::all();
        $data = User::find($idUser);
        return View('user.EditUser', compact('data','data1'));
    }
    public function AddUser()
    {
        $data1 = UserGroup::all();
        return view('user.AddUser',compact('data1'));
    }
    public function UnlockUser($idUser){
        User::find($idUser)
        ->update([
            'deleted' => 0
        ]);
        return redirect()->back()->with('unlockUserSuccess','Mở khóa người dùng thành công');
    }
    public function UpdateUser(Request $request){
        try{
        User::find($request->idUser)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'idUserGroup' => $request->idUserGroup
        ]);
        if($request->resetpassword ==  'yes'){
            User::find($request->idUser)
            ->update([
                'password' => Hash::make('12345678')
            ]);

        }
        return redirect()->route('UserList')->with('updateUserSuccess','Cập nhật người dùng thành công');
    } catch(\Throwable $e){
        return redirect()->route('UserList')->with('error','Cập nhật không thành công');

    }
    }
    public function UserList(){
        $data = User::orderBy('deleted', 'asc')->get();
        return view('user.UserList',compact('data'));
    }
    public function DeleteUser($idUser){
        User::find($idUser)
        ->update([
            'deleted' => 1
        ]);
        return redirect()->back()->with('deletedUser','Khóa người dùng thành công');
    }

    public function store(Request $request)
    {
        $request->validate([
                'idUserGroup' =>'required',
                'name' => 'required',
                'email' => 'required|unique:Users|email',
                'password' => 'required|min:8|confirmed',
            ],[
                'name.required' => 'Tên người dùng không được để trống',
                'email.required' =>'Email không được để trống',
                'email.unique' =>'Email đã được sử dụng',
                'email.email' =>'Email không đúng định dạng',
                'password.required' =>'Chưa nhập mật khẩu',
                'password.min:8' =>'Mật khẩu ít nhất 8 ký tự',
                'password.confirmed' =>'Xác nhận mật khẩu không đúng',
                'idUserGroup.required' =>'Hãy chọn nhóm người dùng',
            ],
        );

        if(User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'idusergroup' => $request['idUserGroup'],
            'iduseradd' => Session::get('loginID'),
        ])){
            return redirect(url('/user/UserList'))->with('success','Thêm nhóm người dùng thành công');
        }
    }
    public function ChangePassword(Request $request){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required','confirmed'],
            'new_password_confirmation' => ['required'],
        ],[
            'current_password.required'=> 'Nhập mật khẩu cũ',
            'new_password.required' => 'Hãy nhập mật khẩu mới',
            'new_password.confirmed' =>'Nhập lại mật khẩu không đúng',
            'new_password_confirmation.required' => 'Hãy xác nhận mật khẩu',
        ]
    );
        User::find(Session::get('loginID'))->update(['password'=> Hash::make($request->new_password)]);


            return redirect()->route('UserProfile')->with('success','Cập nhật mật khẩu thành công');
    }

    public function UpdateProfile(Request $request){
        $id = session::get('loginID');
        $user = User::find($id);
        $random = Str::random(10);
        $request->validate([
            'name'  => 'required',
            'phone' => 'min:10',
            'email' => 'required|email|unique:Users,email,'.$id,
            'name.required' => 'Tên người dùng không được để trống',
            'phone.unique' => 'Số điện thoại đã tồn tại, hãy kiểm tra lại',
            'phone.min:10' => 'Số điện thoại ít nhất 10 chữ số',
            'email.required' =>'Email không được để trống',
            'email.unique' =>'Email đã được sử dụng',
            'email.email' =>'Email không đúng định dạng',
        ]);
        if($request->has('avatar')&& $request->avatar!=null)
        {
            if(!file::where('Prefix','AVT'.$id)->exists()){
                $fileName = $random.$request->file('avatar')->getClientOriginalName();
                $request->avatar->storeAs('Avatars','Avatar'.$id.$fileName,'local');
                file::create([
                    'File' => 'Avatar'.$id.$fileName,
                    'FileName' => "Avatar của ".$user->name,
                    'UploadDate' => Carbon::now(),
                    'idUser' => $id,
                    'Prefix' => "AVT".$id
                ]);
            }else{
                $avtFile =  file::where('Prefix','LIKE','AVT'.$id)->get();
                Storage::delete(storage_path('app\public\Avatars\\'.$avtFile[0]->File));
                $fileName = $random.$request->file('avatar')->getClientOriginalName();
                $request->avatar->storeAs('Avatars','Avatar'.$id.$fileName,'local');
                file::where('Prefix','AVT'.$id)->update([
                    'File' => 'Avatar'.$id.$fileName,
                    'UploadDate' => Carbon::now(),
                ]);
            }
        }
        User::find($id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);

            return redirect()->route('UserProfile')->with('success','Cập nhật thông tin thành công');

    }


}
