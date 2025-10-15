<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaController extends Controller
{
    
    public function index(){
        return view('policies.index');
    }


    public function privacy_policy(){
        return view('policies.privacy_policy');
    }

    public function app_privacy(){
        return view('policies.app_privacy');
    }
}
