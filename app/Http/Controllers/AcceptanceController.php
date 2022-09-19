<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
    }
}
