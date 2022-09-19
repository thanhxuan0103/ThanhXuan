<?php

namespace App\Http\Controllers;

use App\Models\UserGroup;
use Illuminate\Http\Request;

class UserGroupController extends Controller
{
    public function showUserGroupList()
    {
        $data = $this->getSessionUser();
        $data1 = UserGroup::paginate(5);
        return view('user.UserGroupList',compact('data1','data'));
    }
    public function showAddUserGroup(){
        $data = $this->getSessionUser();
        return view('user.AddUserGroup',compact('data'));
    }
    public function StoreUserGroup(Request $request)
    {

        $request->validate([
            'GroupName' => 'required|unique:UserGroup'
        ],[
            'GroupName.required' => 'Tên nhóm người dùng không được để trống',
            'GroupName.unique' => 'Tên nhóm người đã tồn tại',
        ]);
        if(UserGroup::create($request->all())){
            return redirect(url('/user/UserGroupList'))->with('success','Thêm nhóm người dùng thành công');

        }
    }
}
