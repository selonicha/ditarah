<?php

namespace App\Http\Controllers;

use App\Models\TopikUtama;
use Illuminate\Http\Request;

class TopikUtamaAdminController extends Controller
{
    public function index()
    {
        return view('admin.konten.topikUtama.index');
    }

    public function create()
    {
        return view('admin.konten.topikUtama.create');
    }

    public function saveCreate(Request $request)
    {
    }
}
