<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Models\contractlog;
use App\Models\customerinfo;
use App\Models\customerrequirement;
use App\Models\role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use PhpParser\Node\Expr\Variable as ExprVariable;
use PHPUnit\TextUI\XmlConfiguration\Variable;
use Prophecy\Call\Call;
use Psy\TabCompletion\Matcher\VariablesMatcher;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\VarDumper;

class ContractController extends Controller
{
    public function showAddContract()
    {
        return view('contract.AddContract');
    }
    public function showEditContract($idContract)
    {
        $contract = contract::find($idContract);
        $req = customerrequirement::find($contract->idRequirement);
        return view('contract.EditContract',compact('contract','req'));
    }
    public function showListContract()
    {
        $contractList = contract::all();
        return view('contract.ListContract', compact('contractList'));
    }
    public function GetEmplById($idUser){
        $data = User::distinct()
        ->leftJoin('usergroup','users.idUserGroup','=','usergroup.idUserGroup')
        ->where('users.id','=',$idUser)->get();
        return $data;
    }
    public function GetEmplByType (Request $request){
            $idContract = $request->idContract;
            $idRole = $request->idRole;
            // echo ($type);
            // \DB::enableQueryLog();
            $data = User::leftJoin('role', function($join) use ($idContract,$idRole){
                $join->on('users.id', '=', 'role.idUser');
                $join->on('idContract','=',DB::raw("'".$idContract."'"));
                $join->on('idRole','=',DB::raw("'".$idRole."'"));
            })
            ->leftJoin('usergroup', 'usergroup.idUserGroup', '=', 'users.idUserGroup')
            ->where('users.idUserGroup', '=', $request->type)
            ->get();
            // dd(\DB::getQueryLog());
            return $data;
    }
    public function GetEmplById_Contract($idUser,$idContract)
    {
        $data = DB::table('users')->distinct()
        ->join('usergroup', 'usergroup.idUserGroup', '=', 'users.idUserGroup')
        ->leftJoin('role', function($join) use ($idContract){
            $join->on('users.id', '=', 'role.idUser');
            $join->on('idContract','=',DB::raw("'".$idContract."'"));
        })->where('users.id', '=', $idUser)
        ->get();
        return $data;
    }
    public function GetDeveloper($idContract)
    {
        $data = User::leftJoin('role', 'role.idUser', '=', 'users.id')
        ->leftjoin('usergroup', 'usergroup.idUserGroup', '=', 'users.idUserGroup')
        ->where('users.idUserGroup', '=', 1)
        ->get();
        return $data;
    }
    public function AddDeveloper($idUser)
    {
        $data = User::join('usergroup', 'usergroup.idUserGroup', '=', 'users.idUserGroup')
        ->where('users.id', '=', $idUser)
        ->get();
        return $data;
    }
    public function GetUserParticipate($idContract)
    {
        $data = User::distinct()->leftJoin('role', 'role.idUser', '=', 'users.id')
        ->leftjoin('usergroup', 'usergroup.idUserGroup', '=', 'users.idUserGroup')
        ->where('idContract','=',$idContract)
        ->get();
        return $data;
    }
    public function AddDirectManagerToProject(Request $request)
    {
        $listDirectManager = json_decode($request->get('data'), true);
        $idContract = $listDirectManager[0]['idContract'];
        // DB::statement('DELETE FROM `role` WHERE idContract = '+$idContract+' and idRole = 1;');
        $cleardata = role::where('idRole','=',1)->where('idContract','=',$idContract)->delete();
        unset($listDirectManager[0]);

        foreach ($listDirectManager as $k => $val) {
            $idUser = $val['idUser'];
            if ((!role::where('idContract', '=', $idContract)->where('idUser', '=', $idUser)
            ->where('idRole', '=', 1)->exists())) {
                role::create([
                    'idUser' => $idUser,
                    'idRole' => 1,
                    'idContract' => $idContract,
                ]);
            }
        }
    }
    public function AddIndirectManagerToProject(Request $request)
    {
        $listIndirectManager = json_decode($request->get('data'), true);
        var_dump($listIndirectManager);
        $idContract = $listIndirectManager[0]['idContract'];
        $cleardata = role::where('idRole','=',2)->where('idContract','=',$idContract)->delete();
        // DB::statement('DELETE FROM `role` WHERE idContract = '+$idContract+' and idRole = 2;');
        unset($listIndirectManager[0]);
        foreach ($listIndirectManager as $k => $val) {
            $idUser = $val['idUser'];
            if ((!role::where('idContract', '=', $idContract)->where('idUser', '=', $idUser)
            ->where('idRole', '=', 2)
            ->exists())) {
                role::create([
                    'idUser' => $idUser,
                    'idRole' => 2,
                    'idContract' => $idContract,
                ]);
            }
        }
    }
    public function AddDeveloperToProject(Request $request)
    {
        $listDeveloper = json_decode($request->get('data'), true);
        $idContract = $listDeveloper[0]['idContract'];
        $cleardata = role::where('idRole','=',3)->where('idContract','=',$idContract)->delete();
        unset($listDeveloper[0]);
        foreach ($listDeveloper as $k => $val) {
            $idUser = $val['idUser'];
            if ((!role::where('idContract', '=', $idContract)->where('idUser', '=', $idUser)->where('idRole', '=', 3)->exists())) {
                var_dump("this not exists");
                role::create([
                    'idUser' => $idUser,
                    'idRole' => 3,
                    'idContract' => $idContract,
                ]);
            }
        }
    }
    public function UpdateContract(Request $request){
        $oldContract = contract::find($request->idContract);
        $request->validate([
            'SoftwareName' => 'required',
            'Status' => 'required',
            'Reason'  => 'required',
            'Price' => 'required|numeric'
        ],[
            'SoftwareName.required' => 'Tên phần mềm không được để trống',
            'Status.required' => 'Hãy chọn trạng thái hợp đồng',
            'Reason.required' => 'Mô tả thay đổi',
            'Price.required' => 'Hãy nhập giá',
            'Price.numeric' => 'Tiền nhập dạng số'
        ]);
        customerrequirement::find($oldContract->idRequirement)
        ->update([
            'Softwarename' =>$request->SoftwareName,
            'Price' =>$request->Price,
        ]);
        if($request->Status != $oldContract->Status){
            contractlog::create([
                'idContract' => $request->idContract,
                'OldStatus' => $oldContract->Status,
                'NewStatus' => $request->Status,
                'Reason' => $request->Reason,
                'Date'  => Carbon::now(),
                'idUser' => session()->get('loginID'),
            ]);
            contract::find($request->idContract)
        ->update([
            'Status' => $request->Status,
        ]);
        }
        if($request->Status == 2){
            contract::find($request->idContract)
            ->update([
                'SignDate'=>Carbon::now(),
            ]);
        };
        return redirect()->route('ListContract')->with('UpdateContractSucess','Cập nhật hợp đồng thành công');
    }
}
