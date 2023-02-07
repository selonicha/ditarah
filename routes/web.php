<?php

use App\Http\Controllers\EventLoginController;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TopikUtamaAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.homeUser');
});

// login 
Route::get('/login', [LoginController::class, 'index']);
Route::post('/authLogin', [LoginController::class, 'processLogin']);

// register
Route::get('/register', [RegisterController::class, 'index']);

//logout
Route::get('/logout', [LogoutController::class, 'index']);

//Admin Topik Utama
Route::get(
    '/topikUtama',
    [TopikUtamaAdminController::class, 'index']

)->middleware('can:show dashboard');
Route::get(
    '/tambahTopikUtama',
    [TopikUtamaAdminController::class, 'create']

);
//Admin Event Login
Route::get('/eventLogin', [EventLoginController::class, 'index']);
