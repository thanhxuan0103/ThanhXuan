<?php

namespace App\Http\Controllers;

use App\Models\contract;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\file;
use App\Rules\MatchOldPassword;
use App\Models\UserGroup;
use Carbon\Carbon;
use Faker\Provider\ar_EG\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Svg\Tag\Rect;

class UserController extends Controller
{

    public function UserList()
    {

        $data1 = User::all();
        return view('user.UserList',compact('data1'));
    }
    public function AddUser()
    {
        $data1 = UserGroup::all();
        return view('user.AddUser',compact('data1'));
    }


    public function store(Request $request)
    {
        $request->validate([
                'idUserGroup' =>'required',
                'name' => 'required',
                'email' => 'required|unique:Users',
                'password' => 'required|min:8|confirmed',
            ],[
                'name.required' => 'Tên người dùng không được để trống',
                'email.required' =>'Email không được để trống',
                'email.unique' =>'Email đã được sử dụng',
                'password.required' =>'Chưa nhập mật khẩu',
                'password.min:8' =>'Mật khẩu ít nhất 8 ký tự',
                'password.confirmed' =>'Xác nhận mật khẩu không đúng',
                'idUserGroup.required' =>'Hãy chọn nhóm người dùng',
            ],
        );
        // if($request->hasFile('PFPic')){
        //     $filename = $request->PFPic->getClientOriginalName();
        //     $request->PFPic->storeAs('PFPic',$filename,'public');
        //     file::create([
        //         'file' => $request->PFPic->getClientOriginalName(),
        //         'filename' => 'Ảnh đại diện',
        //         'UploadDate' => Carbon::now(),
        //         ''

        //     ]);
        // }
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

    public function showUserProfile(){
        return view('user.UserProfile');
    }
    public function showEditProfile(){
        return view('user.UserProfileEdit');
    }
    public function updateProfile(Request $request){
        $idUser = Session::get('loginID');
        $user = User::find($idUser);
        $fileName = 'AvatarOf'.$user->id.'_'.$request->file('avatar')->getClientOriginalName();
        $path = storage_path('app\public\Avatars');
        $request->file('avatar')->storeAs('Avatars', $fileName,'local');
        file::create([
            'File' => $fileName,
            'FileName' => 'Avatar của '.$user->name.'_'.$user->id,
            'UploadDate' => Carbon::now(),
            'idUser' => Session()->get('loginID'),
            'Prefix' => 'AVT'.$user->id,
        ]);
        User::where('id','=',$idUser)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' =>  $request->phone,
            'address' =>  $request->address,
        ]);

        return redirect()->route('UserProfile')->with('UpdateProfileSuccess', 'Cập nhật thông tin thành công ');
    }
    public function changePassword(Request $request){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        $idUser = Session()->get('loginID');
        // $User = User::find($idUser);
        User::find($idUser)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('EditProfile')->with('ChangePasswordSuccess', 'Đổi mật khẩu thành công!');

    }
    public function updateUser($idUser){
        $User = User::find($idUser);
        $Group = UserGroup::all();
        return view('user.EditUser',compact('User','Group'));
    }
    public function storeUpdateUser(Request $request){
        if($request->idUserGroup == null){
        User::find($request->user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);}
        else{
            User::find($request->user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'idUserGroup' =>  $request->idUserGroup,
            ]);
        }
        return redirect()->route('UserList')->with('UpdateUserSuccess','Cập nhật thông tin thành công');

    }
    public function resetUserPassword($idUser){
        User::find($idUser)->update(['password'=> Hash::make('68686868')]);
        return redirect()->route('UserList')->with('ResetPasswordSuccess','Reset mật khẩu thành công');

    }

}
