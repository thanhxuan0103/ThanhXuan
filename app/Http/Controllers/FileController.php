<?php

namespace App\Http\Controllers;

use App\Models\customerinfo;
use App\Models\contract;
use App\Models\customerrequirement;
use Illuminate\Support\Facades\Session;
use App\Models\file;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use LDAP\Result;
use PDF;
use Symfony\Component\VarDumper\VarDumper;

class FileController extends Controller
{
    public function StoreFile(Request $request){

        $request->validate([
            'filename' => 'required|unique:file,FileName',
            'file' => 'required|max:50000'
        ],[
            'filename.unique' => 'Tên file đã tồn tại, hãy kiểm tra lại',
            'filename.required' => 'Tên file không được để trống',
            'file.required' => 'Vui lòng chọn file',
            'file.max' => 'Kích cỡ tối đa 50000kb',
        ]);
        $prefix = $request->Prefix;
        $idPrefix = $request->idPrefix;
        $file = $request->file->getClientOriginalName();
        $request->file->storeAs('YCKH_Files',$prefix.$idPrefix."_".$file,'public');
        if(file::create([
            'File' => $file,
            'FileName' => $request->filename,
            'UploadDate' => Carbon::now(),
            'idUser' => Session()->get('loginID'),
            'Prefix' => $prefix.$idPrefix,
        ])){
            return redirect()->back()->with('UpFileSuccess', 'Thêm file thành công');
        }
    }
    public function getFileReq($idReq){
        $data =file::where('Prefix','LIKE','YCKH'.$idReq)->get();
        return $data;
    }
    public function showListFile(){
        $data = $this->getSessionUser();
        $files = file::where('idUser','=',$data->id);
        // $files
        return view('filemanagement.AllFile',compact('files'));
    }


    public function CreateContractWordFile($id){
        $data = customerrequirement::find($id);
        if(contract::where('idRequirement','=',$id )->first() == null){
            $path = storage_path('app\public\Word_Files');
            $contract_template = new \PhpOffice\PhpWord\TemplateProcessor($path.'\ContractTemplate.docx');

            $contract_template->setValue('name',$data->CustomerInfo->CustomerName);
            try {
                $contract_template->saveAs($path.'\\'.$data->CustomerInfo->CustomerName.$id.'_Contract.docx');
                file::create([
                    'File' => $data->CustomerInfo->CustomerName.'Contract.docx',
                    'FileName' => 'Hợp đồng của '.$data->CustomerInfo->CustomerName,
                    'UploadDate' => Carbon::now(),
                    'idUser' => Session()->get('loginID'),
                    'Prefix' => 'CTF'.$id,
                ]);
            }
            catch (\Exception $e) {
            }
            if(contract::create([
                'idRequirement' => $id,
                'Price' => $data['Price'],
                'ReqirementDesc' => $data['DesReq'],
                'Note' => $data['NoteReq'],
                'Creator' => Session()->get('loginID'),
                'CreateDate' => Carbon::now(),
            ])){
                return redirect(route('ListContract'))->with('successCreateContract','Tạo hợp đồng thành công');
            }
        }
        else{
            return redirect()->back()->with(['erorCreateContract' => 'Hợp đồng đã tồn tại, hãy kiểm tra lại']);

        }
    }
    public function downloadFileReq($idFile){
        $data = file::find($idFile);
        $path = storage_path('app\public\YCKH_Files\\'.($data->Prefix).'_'.($data->File));
        return response()->download($path);

    }

}
