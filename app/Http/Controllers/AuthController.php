<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){
        return view('auth/login');
    }

    function postlogin(Request $request){

        // dd($request->all());
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }else{
            return redirect('/login');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
