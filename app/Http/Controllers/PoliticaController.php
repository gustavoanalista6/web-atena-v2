<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaController extends Controller
{
    
    public function index(){
        return view('policies');
    }


    public function privacy_policy(){
        return view('privacy_policy');
    }

    public function app_privacy(){
        return view('app_privacy');
    }
}
