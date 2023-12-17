<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function index()
    {
        return view('layout.user.register');
    }
    function regist(Request $request)
    {

    
        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/')->with('success', 'Sukses Register');
        } else {
            return 'gagal';
        }
    }
}
