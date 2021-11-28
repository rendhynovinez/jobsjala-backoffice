<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacyController extends Controller
{
    
    public function index(Request $request){
        
        return view('privacy-policy');    
    }

    public function welcome(Request $request){
        return view('welcome');    
    }

}
