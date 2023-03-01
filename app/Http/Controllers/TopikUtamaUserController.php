<?php

namespace App\Http\Controllers;

use App\Models\TopikUtama;
use Illuminate\Http\Request;

class TopikUtamaUserController extends Controller
{
    public function index($id)
    {
        $topikUtama = TopikUtama::find($id);
        return view('user.topikUtama.index', compact(['topikUtama']))->with('success', 'Berhasil');
    }
}
