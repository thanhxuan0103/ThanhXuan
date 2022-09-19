<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Models\User;

use App\Models\customerinfo;
use App\Models\customerrequirement;
use Carbon\Carbon;
use App\Http\Controllers\Validator;
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
    public function showEditCustomerReq(){
        return view('customer.EditCustomerReq');
    }
    public function showListCustomerReq(){
        $data1 = CustomerRequirement::all();
        return view('customer.ListCustomerReq',compact('data1'));
    }
    public function showAddCustomerInfo(){
        return view('customer.AddCustomerInfo');
    }
    public function showEditCustomerInfo(){
        return view('customer.EditCustomerInfo');
    }
    public function showListCustomerInfo(){
        $data1 = customerinfo::paginate(10);
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
            'Status' => 'required',
            'DesReq' => 'required',

        ],[
            'SoftwareName.required'=>'Tên phần mềm không được để trống',
            'Status.required'=>'Vui lòng chọn trạng thái',
            'DesReq.required'=>'Nhập mô tả về yêu cầu phần mềm',
        ]);
        if(customerrequirement::create([
            'idCustomer' => $request['idCustomer'],
            'SoftwareName' => $request['SoftwareName'],
            'Status' => $request['Status'],
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

}
