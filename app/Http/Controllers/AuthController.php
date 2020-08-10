<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    function login(){
        return view('auth/login');
    }

    function postlogin(Request $request){

        // dd($request->all());
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard')->with('alert', 'Berhasil!');
        }else{
            return redirect('/login');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }

    function register(){
        return view('auth/register');
    }

    function postregister(Request $request){

        // $now = Carbon::now();
        // $unique_code = $now->format('YmdHisu');

        $user = new \App\User;
        $user->id = '2';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->role = 'user';
        $user->save();
        return redirect('/dashboard')->with('alert', 'Berhasil!');
    }
}
