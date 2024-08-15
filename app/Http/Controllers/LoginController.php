<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){
        // exit('hola');
        return view('login.login');
    }

    public function registrar(Request $request){
        // exit('hola');
        dd($request);
    }
    
    public function logeo(Request $request){
        // exit('hola');
        dd($request);
    }
}
