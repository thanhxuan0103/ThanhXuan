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
    public function convert_number_to_words($number) {
		$hyphen      = ' ';
		$conjunction = '  ';
		$separator   = ' ';
		$negative    = 'âm ';
		$decimal     = ' phẩy ';
		$dictionary  = array(
		0                   => 'không',
		1                   => 'một',
		2                   => 'hai',
		3                   => 'ba',
		4                   => 'bốn',
		5                   => 'năm',
		6                   => 'sáu',
		7                   => 'bảy',
		8                   => 'tám',
		9                   => 'chín',
		10                  => 'mười',
		11                  => 'mười một',
		12                  => 'mười hai',
		13                  => 'mười ba',
		14                  => 'mười bốn',
		15                  => 'mười năm',
		16                  => 'mười sáu',
		17                  => 'mười bảy',
		18                  => 'mười tám',
		19                  => 'mười chín',
		20                  => 'hai mươi',
		30                  => 'ba mươi',
		40                  => 'bốn mươi',
		50                  => 'năm mươi',
		60                  => 'sáu mươi',
		70                  => 'bảy mươi',
		80                  => 'tám mươi',
		90                  => 'chín mươi',
		100                 => 'trăm',
		1000                => 'nghìn',
		1000000             => 'triệu',
		1000000000          => 'tỷ',
		1000000000000       => 'nghìn tỷ',
		1000000000000000    => 'nghìn triệu triệu',
		1000000000000000000 => 'tỷ tỷ'
		);
	if (!is_numeric($number)) {
		return false;
	}
	if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
		// overflow
		trigger_error(
		'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
		E_USER_WARNING
		);
		return false;
	}
	if ($number < 0) {
		return $negative . $this->convert_number_to_words(abs($number));
	}
	$string = $fraction = null;
		if (strpos($number, '.') !== false) {
		list($number, $fraction) = explode('.', $number);
	}
	switch (true) {
	case $number < 21:
		$string = $dictionary[$number];
	break;
	case $number < 100:
		$tens   = ((int) ($number / 10)) * 10;
		$units  = $number % 10;
		$string = $dictionary[$tens];
		if ($units) {
			$string .= $hyphen . $dictionary[$units];
		}
	break;
	case $number < 1000:
		$hundreds  = $number / 100;
		$remainder = $number % 100;
		$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
		if ($remainder) {
			$string .= $conjunction . $this->convert_number_to_words($remainder);
		}
	break;
	default:
		$baseUnit = pow(1000, floor(log($number, 1000)));
		$numBaseUnits = (int) ($number / $baseUnit);
		$remainder = $number % $baseUnit;
		$string = $this->convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
		if ($remainder) {
			$string .= $remainder < 100 ? $conjunction : $separator;
			$string .= $this->convert_number_to_words($remainder);
		}
		break;
	}
	if (null !== $fraction && is_numeric($fraction)) {
		$string .= $decimal;
		$words = array();
		foreach (str_split((string) $fraction) as $number) {
			$words[] = $dictionary[$number];
		}
		$string .= implode(' ', $words);
	}
		return $string;
}
    // ---------------------------------------------------------------- --------------------------------
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
        $random = Str::random(20);
        $file = $random.$request->file->getClientOriginalName();
        $request->file->storeAs('Files',$prefix.$idPrefix."_".$file,'public');
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
    public function getFileContract($id){
        $data =file::where('Prefix','LIKE','CTF'.$id)->get();
        return $data;
    }
    public function showListFile(){
        $files = file::all();
        $data = $this->getSessionUser();
        return view('filemanagement.AllFile',compact('data','files'));
    }

    public function ReCreateContractWordFile($id){
        $data = customerrequirement::find($id);
        $pathTemplate = storage_path('app\public\Word_Files');
        $path = storage_path('app\public\Files');

            $contract_template = new \PhpOffice\PhpWord\TemplateProcessor($pathTemplate.'\ContractTemplate.docx');
            $random = Str::random(20);
            $priceNum = $this->currency_format($data->Price);
            $priceWord = $this->convert_number_to_words($data->Price);
            $contract_template->setValue('name',$data->CustomerInfo->CustomerName);
            $contract_template->setValue('phone',$data->CustomerInfo->CustomerPhone);
            $contract_template->setValue('priceNum',$priceNum);
            $contract_template->setValue('priceWord',ucfirst($priceWord));
            try {
                $contract_template->saveAs($path.'\\'.$data->CustomerInfo->CustomerName.$data->idRequirement.'_'.$random.'_Contract.docx');
                file::create([
                    'File' => $data->CustomerInfo->CustomerName.$id.$random.'Contract.docx',
                    'FileName' => 'Hợp đồng của '.$data->CustomerInfo->CustomerName,
                    'UploadDate' => Carbon::now(),
                    'idUser' => Session()->get('loginID'),
                    'Prefix' => 'CTF'.$id,
                ]);
            }
            catch (\Exception $e) {
            }
            return redirect()->route('ListContract')->with('ReCreateContractSuccess' , 'Hợp đồng đã được tạo lại');

    }

    public function currency_format($number) {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') ;
        }
    }
    public function CreateContractWordFile($id){
        $data = customerrequirement::find($id);

        if(contract::where('idRequirement','=',$id )->first() == null){
            $pathTemplate = storage_path('app\public\Word_Files');
            $path = storage_path('app\public\Files');
            $contract_template = new \PhpOffice\PhpWord\TemplateProcessor($pathTemplate.'\ContractTemplate.docx');
            $random = Str::random(20);
            $priceNum = $this->currency_format($data->Price);
            $priceWord = $this->convert_number_to_words($data->Price);
            $contract_template->setValue('name',$data->CustomerInfo->CustomerName);
            $contract_template->setValue('phone',$data->CustomerInfo->CustomerPhone);
            $contract_template->setValue('priceNum',$priceNum);
            $contract_template->setValue('priceWord',ucfirst($priceWord));

            try {
                $contract_template->saveAs($path.'\\'.$data->CustomerInfo->CustomerName.$id.'_'.$random.'_Contract.docx');
                file::create([
                    'File' => $data->CustomerInfo->CustomerName.$id.$random.'Contract.docx',
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
                'ReqirementDesc' => $data['DesReq'],
                'Note' => $data['NoteReq'],
                'Creator' => Session()->get('loginID'),
                'CreateDate' => Carbon::now(),
            ])){
                return redirect(route('ListContract'))->with('successCreateContract','Tạo hợp đồng thành công');
            }
        }
        else{
            return redirect()->route('ListContract')->with(['erorCreateContract' => 'Hợp đồng đã tồn tại, Hãy tìm "Đã được tạo" để xem hợp đồng','idRequirement' => $data['idRequirement']]);

        }
    }
    public function downloadFile($idFile){
        $data = file::find($idFile);
        $path = storage_path('app\public\Files\\'.($data->Prefix).'_'.($data->File));
        return response()->download($path);

    }



}
