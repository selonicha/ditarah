<?php

namespace App\Http\Controllers;

use App\Models\TrendingIsu;
use Exception;
use Illuminate\Http\Request;

class TrendingIsuUserControlller extends Controller
{
    public function index($id)
    {
        return view('user.trendingIsu.index');
    }
}
