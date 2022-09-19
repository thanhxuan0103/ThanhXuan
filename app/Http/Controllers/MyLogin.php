<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Psr7\Request as Psr7Request;

class MyLogin extends Controller
{

    public function ShowLogin(){
        if(Session::has('loginID')){
            return redirect('dashboard')->with('AlreadyLoggedIn','Bạn đã đăng nhập, hãy đăng xuất để kết thúc phiên làm việc');
        }
        else return view('AuthSignIn');

    }
    public function ValidateLogin(request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ],[
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email chưa đúng định dạng',
            'password.required'=>'Mật khẩu không được để trống',
            'password.min'=>'Mật khẩu ít nhất 8 ký tự',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginID',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Mật khẩu không đúng! Hãy thử lại');
            }
        }
        else{
            return back()->with('fail','Email không đúng! Hãy thử lại');
        }
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginID')){
            $data = User::where('id','=',Session::get('loginID'))->first();
        }
        return view('dashboard',compact('data'));
    }
    public function logoutUser(){
        if(Session::has('loginID')){
            Session::pull('loginID');
            return redirect('login');
        }
    }
}
