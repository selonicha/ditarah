<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

     public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        // ],[
        //     'email.required' => 'Email tidak boleh kosong',
        //     'password.required' => 'Password tidak boleh kosong',
        // 
    ]);

        $checkAccount = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        if (Auth::attempt($checkAccount)) {
            return view('admin.dashboard');
        } else {
            return 'gagal';
        }
    }
}
