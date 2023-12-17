<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControl extends Controller
{
    
    
    public function index(){
        return view('layout.user.login') ;
    }

    function login(Request $request) {
        $request -> validate( [
            'email'=> 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email Wajib Di Isi!',
            'password.required' => 'Password Wajib Di Isi!'

        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with('success','Sukses Login');
        } else {
            return 'gagal';
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login')->with('success', 'Anda Berhasil Logout!');
    }
    
}