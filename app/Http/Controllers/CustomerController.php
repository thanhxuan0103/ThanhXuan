<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Models\User;

use App\Models\customerinfo;
use App\Models\customerrequirement;
use Carbon\Carbon;
use App\Http\Controllers\Validator;
use App\Models\requirementlog;
use CurlHandle;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

use function PHPUnit\Framework\identicalTo;

class CustomerController extends Controller
{

    public function showAddCustomerReq(){
        $data1 = customerinfo::all();
        return view('customer.AddCustomerReq',compact('data1'));
    }
    public function showEditCustomerReq($idReq){
        $data = customerrequirement::find($idReq);
        $customer = customerinfo::find($data->idCustomer);
        return view('customer.EditCustomerReq',compact('data','customer'));
    }
    public function showListCustomerReq(){
        $data1 = CustomerRequirement::all();
        return view('customer.ListCustomerReq',compact('data1'));
    }
    public function showAddCustomerInfo(){
        return view('customer.AddCustomerInfo');
    }
    public function showEditCustomerInfo($idCustomer){
        $customer = customerinfo::find($idCustomer);
        // dd($customer);
        return view('customer.EditCustomerInfo',compact('customer'));
    }
    public function showListCustomerInfo(){
        $data1 = customerinfo::all();
        return view('customer.ListCustomerInfo',compact('data1'));
    }
    public function StoreCustomerInfo(Request $request){
        $request->validate([
            'CustomerName' => 'required|unique:CustomerInfo',
            'CustomerPhone' => 'required|unique:CustomerInfo',
            'CustomerMail' => 'email|unique:CustomerInfo',
        ],[
            'CustomerName.required'=>'Tên khách hàng không được để trống',
            'CustomerName.unique'=>'Tên khách hàng đã tồn tại, hãy kiểm tra lại',
            'CustomerPhone.required'=>'Số điện thoại khách hàng không được để trống',
            'CustomerPhone.required'=>'Số điện thoại đã tồn tại, hãy kiểm tra lại',
            'CustomerMail.email'=>'Email không đúng định dạng',
            'CustomerMail.unique'=>'Email đã tồn tại, hãy kiểm tra lại',
        ]);
        if(customerinfo::create([
            'CustomerName' => $request['CustomerName'],
            'CustomerPhone' => $request['CustomerPhone'],
            'OrgName' => $request['OrgName'],
            'CustomerMail' => $request['CustomerMail'],
            'MiddlemanName' => $request['MiddlemanName'],
            'DateAdd' => Carbon::now(),
        ])){
            return redirect(route('ListCustomerInfo'))->with('Thành công','Thêm thông tin thành công');
        }

    }

    public function StoreCustomerReq(Request $request){
        $request->validate([
            'SoftwareName' => 'required',
            'DesReq' => 'required',

        ],[
            'SoftwareName.required'=>'Tên phần mềm không được để trống',
            'DesReq.required'=>'Nhập mô tả về yêu cầu phần mềm',
        ]);
        if(customerrequirement::create([
            'idCustomer' => $request['idCustomer'],
            'SoftwareName' => $request['SoftwareName'],
            'Price' => $request['Price'],
            'ReqirementDesc' => $request['DesReq'],
            'Note' => $request['NoteReq'],
            'idUserAdd' => Session()->get('loginID'),
            'DateAdd' => Carbon::now(),
        ])){
            return redirect(route('ListCustomerReq'))->with('Success','Thêm thông tin thành công');
        }


    }
    public function CreateContract($idRequirement){
        $dataReq = customerrequirement::find($idRequirement);
        if(contract::where('idRequirement','=',$idRequirement )->first() == null){
            if(contract::create([
                'idRequirement' => $idRequirement,
                'Price' => $dataReq['Price'],
                'ReqirementDesc' => $dataReq['DesReq'],
                'Note' => $dataReq['NoteReq'],
                'Creator' => Session()->get('loginID'),
                'CreateDate' => Carbon::now(),
            ])){
                return redirect(route('ListContract'))->with('Success','Thêm thông tin thành công');
            }
        }
        else{
            return redirect()->back()->with(['ErrorCreateContract' => 'Hợp đồng đã tồn tại, hãy kiểm tra lại']);

        }
    }
    public function updateCustomerInfo(Request $request){
        $request->validate([
            'CustomerName' => 'required',
            'CustomerPhone' => 'required',
            'CustomerMail' => 'email',
        ],[
            'CustomerName.required'=>'Tên khách hàng không được để trống',
            'CustomerPhone.required'=>'Số điện thoại khách hàng không được để trống',
            'CustomerPhone.required'=>'Số điện thoại đã tồn tại, hãy kiểm tra lại',
            'CustomerMail.email'=>'Email không đúng định dạng',
        ]);
    customerinfo::find($request->idCustomer)
    ->update([
        'CustomerName' => $request->CustomerName,
        'CustomerPhone' => $request->CustomerPhone,
        'CustomerMail' => $request->CustomerMail,
        'OrgName' => $request->OrgName,
        'MiddlemanName' => $request->MiddlemanName,
    ]);
    return redirect()->route('ListCustomerInfo')->with('UpdateSuccess','Thông tin người dùng đã được cập nhật');
    }
    public function updateCustomerReq(Request $request){
        // dd($request);
        $request->validate([
            'SoftwareName' => 'required',
            'Status' => 'required',
            'DesReq' => 'required',
        ],[
            'SoftwareName.required'=>'Tên phần mềm không được để trống',
            'Status.required'=>'Chọn trạng thái của yêu cầu',
            'DesReq.required'=>'Nhập mô tả về yêu cầu phần mềm',

        ]);
        $req = customerrequirement::find($request->idRequirement);
        if($request->Status != $req->Status){
            requirementlog::create([
                'idRequirement' => $request->idRequirement,
                'OldStatus' => $req->Status,
                'NewStatus' => $request->Status,
                'Reason' => $request->reasonReq,
                'Date' => Carbon::now(),
                'User' => Session()->get('loginID'),
            ]);
        }
        customerrequirement::find($request->idRequirement)
        ->update([
            'SoftwareName' => $request->SoftwareName,
            'Status' => $request->Status,
            'Price' => $request->Price,
            'ReqirementDesc' => $request->DesReq,
            'Note' => $request->NoteReq,
        ]);
        return redirect()->route('ListCustomerReq')->with('UpdateReqSuccess','Yêu cầu khách hàng cập nhật thành công');
    }
    public function GetReqLog($idReq){
        $reqlog = requirementlog::join('users','users.id','=','requirementlog.User')
        ->where('idRequirement', '=', $idReq)->get();
        return $reqlog;
    }

}
