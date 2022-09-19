<?php

namespace App\Http\Controllers;

use App\Models\softwareacceptancedoc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;

class AcceptanceController extends Controller
{

    public function showAddAcceptanceDetail(){
        return view('acceptance.AddAcceptanceDetail');
    }
    public function showEditAcceptance(){
        return view('acceptance.EditAcceptance');
    }
    public function showListAcceptance(){
        return view('acceptance.ListAcceptance');
    }
    public function UploadAccptDocs(Request $request)
    {
        $random = Str::random(20);
        if ($request->has('TKCT')){
            $TKCT = $random.$request->TKCT->getClientOriginalName();
            $request->TKCT->storeAs('Files','TKCT'.$request->idContract."_".$TKCT,'public');
            if(!softwareacceptancedoc::where([
                ['ActFileName','TKCT'.$request->idContract]
            ])->exists()){

            softwareacceptancedoc::create([
                'idSoftwareContract' => $request->idContract,
                'ActFileName' => 'TKCT'.$request->idContract,
                'ActFile' => $TKCT,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }else{
            $file = DB::select( DB::raw("SELECT * FROM softwareacceptancedoc WHERE ActFileName = 'TKCT"+$request->idContract+"'"));
            File::delete(public_path('Files/'.$file[0]->ActFile));
            softwareacceptancedoc::where([
                ['ActFileName','TKCT'.$request->idContract]
            ])->update([
                'ActFile' => $TKCT,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }
        };
        if ($request->has('SoureCode')){
            $SoureCode = $random.$request->SoureCode->getClientOriginalName();
            $request->SoureCode->storeAs('Files','SoureCode'.$request->idContract."_".$SoureCode,'public');
            if(!softwareacceptancedoc::where([
                ['ActFileName','SoureCode'.$request->idContract]
            ])->exists()){

            softwareacceptancedoc::create([
                'idSoftwareContract' => $request->idContract,
                'ActFileName' => 'SoureCode'.$request->idContract,
                'ActFile' => $SoureCode,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),

            ]);
        }else{
            $file = DB::select( DB::raw("SELECT * FROM softwareacceptancedoc WHERE ActFileName = 'SoureCode"+$request->idContract+"'"));
            File::delete(public_path('Files/'.$file[0]->ActFile));
            softwareacceptancedoc::where([
                ['ActFileName','SoureCode'.$request->idContract]
            ])->update([
                'ActFile' => $SoureCode,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }
        };
        if ($request->has('HDSD')){
            $HDSD = $random.$request->HDSD->getClientOriginalName();
            $request->HDSD->storeAs('Files','HDSD'.$request->idContract."_".$HDSD,'public');
            if(!softwareacceptancedoc::where([
                ['ActFileName','HDSD'.$request->idContract]
            ])->exists()){
            softwareacceptancedoc::create([
                'idSoftwareContract' => $request->idContract,
                'ActFileName' => 'HDSD'.$request->idContract,
                'ActFile' => $HDSD,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),

            ]);
        }else{
            $file = DB::select( DB::raw("SELECT * FROM softwareacceptancedoc WHERE ActFileName = 'HDSD"+$request->idContract+"'"));
            File::delete(public_path('Files/'.$file[0]->ActFile));
            softwareacceptancedoc::where([
                ['ActFileName','HDSD'.$request->idContract]
            ])->update([
                'ActFile' => $HDSD,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }
        };
        if ($request->has('HDQT')){
            $HDQT = $random.$request->HDQT->getClientOriginalName();
            $request->HDQT->storeAs('Files','HDQT'.$request->idContract."_".$HDQT,'public');
            if(!softwareacceptancedoc::where([
                ['ActFileName','HDQT'.$request->idContract]
            ])->exists()){
            softwareacceptancedoc::create([
                'idSoftwareContract' => $request->idContract,
                'ActFileName' => 'HDQT'.$request->idContract,
                'ActFile' => $HDQT,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }
            else{
                $file = DB::select( DB::raw("SELECT * FROM softwareacceptancedoc WHERE ActFileName = 'HDQT"+$request->idContract+"'"));
                File::delete(public_path('Files/'.$file[0]->ActFile));
                softwareacceptancedoc::where([
                    ['ActFileName','HDQT'.$request->idContract]
                ])->update([
                    'ActFile' => $HDQT,
                    'DateUpload' =>Carbon::now(),
                    'idUser' => Session()->get('loginID'),
                ]);
            }
        };
        if ($request->has('THPM')){
            $THPM = $random.$request->THPM->getClientOriginalName();
            $request->TKCT->storeAs('Files','THPM'.$request->idContract."_".$THPM,'public');
            if(!softwareacceptancedoc::where([
                ['ActFileName','THPM'.$request->idContract]
            ])->exists()){
            softwareacceptancedoc::create([
                'idSoftwareContract' => $request->idContract,
                'ActFileName' => 'THPM'.$request->idContract,
                'ActFile' => $THPM,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }else{
            $file = DB::select( DB::raw("SELECT * FROM softwareacceptancedoc WHERE ActFileName = 'THPM"+$request->idContract+"'"));
                File::delete(public_path('Files/'.$file[0]->ActFile));
            softwareacceptancedoc::where([
                ['ActFileName','THPM'.$request->idContract]
            ])->update([
                'ActFile' => $THPM,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }
        };
        if ($request->has('TLHD')){
            $TLHD = $random.$request->TLHD->getClientOriginalName();
            $request->TKCT->storeAs('Files','TLHD'.$request->idContract."_".$TLHD,'public');
            if(!softwareacceptancedoc::where([
                ['ActFileName','TLHD'.$request->idContract]
            ])->exists()){
            softwareacceptancedoc::create([
                'idSoftwareContract' => $request->idContract,
                'ActFileName' => 'TLHD'.$request->idContract,
                'ActFile' => $TLHD,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }else{
            $file = DB::select( DB::raw("SELECT * FROM softwareacceptancedoc WHERE ActFileName = 'TLHD"+$request->idContract+"'"));
                File::delete(public_path('Files/'.$file[0]->ActFile));
            softwareacceptancedoc::where([
                ['ActFileName','TLHD'.$request->idContract]
            ])->update([
                'ActFile' => $HDQT,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
            ]);
        }
        };
        if ($request->has('HD')){
            $HD = $random.$request->HD->getClientOriginalName();
            $request->TKCT->storeAs('Files','HD'.$request->idContract."_".$HD,'public');
            if(!softwareacceptancedoc::where([
                ['ActFileName','HD'.$request->idContract]
            ])->exists()){
            softwareacceptancedoc::create([
                'idSoftwareContract' => $request->idContract,
                'ActFileName' => 'HD'.$request->idContract,
                'ActFile' => $HD,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
                'Status' => $request->StatusHD,
            ]);
        }else{
            $file = DB::select( DB::raw("SELECT * FROM softwareacceptancedoc WHERE ActFileName = 'HD"+$request->idContract+"'"));
                File::delete(public_path('Files/'.$file[0]->ActFile));
            softwareacceptancedoc::where([
                ['ActFileName','HD'.$request->idContract]
            ])->update([
                'ActFile' => $HD,
                'DateUpload' =>Carbon::now(),
                'idUser' => Session()->get('loginID'),
                'Status' => $request->StatusHD,
            ]);
        }
        };
        if($request->StatusTKCT != null){
            softwareacceptancedoc::where([
                ['ActFileName','TKCT'.$request->idContract]
            ])->update([
                'Status' => $request->StatusHD,
            ]);
        }
        if($request->StatusSoureCode != null){
            softwareacceptancedoc::where([
                ['ActFileName','SoureCode'.$request->idContract]
            ])->update([
                'Status' => $request->StatusHD,
            ]);
        }
        if($request->StatusHDSD != null){
            softwareacceptancedoc::where([
                ['ActFileName','HDSD'.$request->idContract]
            ])->update([
                'Status' => $request->StatusHD,
            ]);
        }
        if($request->StatusHDQT != null){
            softwareacceptancedoc::where([
                ['ActFileName','HDQT'.$request->idContract]
            ])->update([
                'Status' => $request->StatusHD,
            ]);
        }
        if($request->StatusTHPM != null){
            softwareacceptancedoc::where([
                ['ActFileName','THPM'.$request->idContract]
            ])->update([
                'Status' => $request->StatusHD,
            ]);
        }
        if($request->StatusTLHD != null){
            softwareacceptancedoc::where([
                ['ActFileName','TLHD'.$request->idContract]
            ])->update([
                'Status' => $request->StatusHD,
            ]);
        }
        if($request->StatusHD != null){
            softwareacceptancedoc::where([
                ['ActFileName','HD'.$request->idContract]
            ])->update([
                'Status' => $request->StatusHD,
            ]);
        }

        return redirect()->route('ListContract')->with('UpfileActSuccess', 'Upload File nghiệm thu thành công');

    }

    public function getFileAct($idContract){
        $data = softwareacceptancedoc::where('idSoftwareContract','=',$idContract)->get();
        return $data;
    }
    public function DownloadAcpFile($idContract,$typeFile){
        $filename = $typeFile.$idContract;
        $data = DB::select( DB::raw("SELECT * FROM softwareacceptancedoc WHERE ActFileName = '$filename'") );
        $path = storage_path('app\public\Files\\'.$typeFile.$idContract.'_'.($data[0]->ActFile));
        return response()->download($path);

    }

}
