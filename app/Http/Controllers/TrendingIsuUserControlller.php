<?php

namespace App\Http\Controllers;

use App\Models\TrendingIsu;
use Exception;
use Illuminate\Http\Request;

class TrendingIsuUserControlller extends Controller
{
    public function index($id)
    {
        $trendingIsu = TrendingIsu::find($id);
        try {
            return view('user.trendingIsu.index', compact(['trendingIsu']));
        } catch (Exception $e) {
            abort(404);
        }
    }
}
