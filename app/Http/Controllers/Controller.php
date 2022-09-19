<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getSessionUser(){
        $data = array();
        if(Session()->has('loginID')){
            $data = User::where('id','=',Session()->get('loginID'))->first();
            }
        return $data;
    }
    public $data = array();
    public function __construct(){
        $data = $this->getSessionUser();
    }
    
        
    
}
