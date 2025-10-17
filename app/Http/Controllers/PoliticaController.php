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

    public function policy_cookies(){
        return view('policies.policy_cookies');
    }

    public function terms_use(){
        return view('policies.terms_use');
    }
}
