<?php

namespace App\Http\Controllers;

use Auth;
use Users;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('name','password'))){
            return redirect('/')->with('toast_success','Anda Berhasil Login');
        }
        
        return redirect('login')->with('toast_error','Username / Password yang dimasukkan salah!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('toast_success','Anda Berhasil logout');
    }
}
