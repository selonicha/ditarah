<?php

namespace App\Http\Controllers;

use App\Models\CalonAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $newCalonAdmin = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ];

        CalonAdmin::create($newCalonAdmin);

        $checkCalonAdmin = [
            'email' => $request->email,
            'password' => $request->password,
            'nama' => $request->nama,
        ];

        if ($checkCalonAdmin) {
            return view('user.homeUser');
        } else {
            return ("gagal");
        }
    }
}
