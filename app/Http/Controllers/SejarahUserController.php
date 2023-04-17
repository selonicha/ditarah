<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahUserController extends Controller
{
    public function index()
    {
        $posts = Sejarah::all();
        return view('user.sejarah.index', compact($posts));
    }
}
