<?php

namespace App\Http\Controllers;

use App\Models\KisahInspiratif;
use Illuminate\Http\Request;

class KisahInspiratifUserController extends Controller
{
    public function index()
    {
        $posts = KisahInspiratif::all();
        return view('user.kisahInspiratif.index', compact($posts));
    }
}
