<?php

namespace App\Http\Controllers;
use App\Models\contract;
use App\Models\User;
use App\Models\taskinfo;
use App\Models\role;
use App\Models\roletype;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class SoftwareBuildController extends Controller
{
    public function showAddSoftwareBuild(){
        return view('softwarebuild.AddSoftwareBuild');
    }
    public function showAddTask(){
        return view('softwarebuild.AddTask');
    }
    public function showEditTask(){
        return view('softwarebuild.EditTask');
    }
    public function showListSoftwareBuild(){
        $data1 = contract::where('status','=','2')->get();
        return view('softwarebuild.ListSoftwareBuild',compact('data1'));
    }
    public function showListTask(){
        return view('softwarebuild.ListTask');
    }
    public function showSoftwareBuildDetails($idContract){
        $contract = contract::find($idContract);
    if (is_null($contract)) {
        return response()->json([
            'message' => 'contract Not Found',
            'status' => 404
        ], 404);
    }
        $data1 = contract::leftJoin('taskinfo','taskinfo.idSoftwareContract','=','softwarecontract.idContract')
        ->where('softwarecontract.Status','=',2)
        ->get();
        $taskInfo = User::leftJoin('taskinfo','taskinfo.TaskidUser','=','users.id')->where('idSoftwareContract','=',$idContract)->get();
        return view('softwarebuild.SoftwareBuildDetails',compact('data1','idContract','taskInfo'));
    }
    public function GetDevOfContract(Request $request){
        $idContract = $request->idContract;
        $idRole = 3;

            $data = User::leftJoin('role', function($join) use ($idContract,$idRole){
                $join->on('users.id', '=', 'role.idUser');
                $join->on('idContract','=',DB::raw("'".$idContract."'"));
                $join->on('idRole','=',DB::raw("'".$idRole."'"));
            })
            ->leftJoin('usergroup', 'usergroup.idUserGroup', '=', 'users.idUserGroup')
            ->where('users.idUserGroup', '=', 1)
            ->get();
            // dd(\DB::getQueryLog());
            // dd($data);
            return $data;
    }
    public function storeTaskInfo(Request $request){
        // dd($request);
        $request->validate([
            'TaskName' =>'required|unique:taskinfo,TaskName',
            'idUser' => 'required',
            'TaskDesc' => 'required',
            'datestart' => 'required',
            'dateend' => 'required'
        ],[
            'TaskName.required' => 'T??n c??ng vi???c kh??ng ???????c ????? tr???ng',
            'idUser.required' =>'H??y ch???n nh??n vi??n',
            'TaskName.unique' =>'C??ng vi???c ???? t???n t???i',
            'TaskDesc.required' =>'M?? t??? c??ng vi???c kh??ng ???????c ????? tr???ng',
            'datestart.required' =>'H??y ch???n ng??y b???t ?????u',
            'dateend.required' =>'H??y ch???n ng??y k???t th??c',
        ]);
        if(taskinfo::create([
            'idSoftwareContract' => $request['idContract'],
            'TaskName' => $request['TaskName'],
            'TaskDesc' => $request['TaskDesc'],
            'TaskidUser' => $request['idUser'],
            'TaskStartTime' => $request['datestart'],
            'ExpectToEnd' => $request['dateend'],
            'UserAddTask' => Session::get('loginID'),
            'Status' => '0',
        ])){
            return redirect(route('ShowSoftwareBuildDetails',['idContract' =>$request['idContract']]))->with('successAddTask','Th??m c??ng vi???c th??nh c??ng');
        }else{

        }
    }
}
