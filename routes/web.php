<?php

use App\Http\Controllers\CalonAdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\EventLoginController;
use App\Http\Controllers\KisahInspiratifAdminController;
use App\Http\Controllers\KisahInspiratifUserController;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SejarahAdminController;
use App\Http\Controllers\SejarahUserController;
use App\Http\Controllers\TopikUtamaAdminController;
use App\Http\Controllers\TopikUtamaUserController;
use App\Http\Controllers\TrendingIsuAdminController;
use App\Http\Controllers\TrendingIsuUserControlller;
use App\Models\KisahInspiratif;
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
// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/authLogin', [LoginController::class, 'processLogin']);

Route::controller(LoginController::class)->group(function () {
    // Route::get('/login', 'index');
    Route::post('/authLogin', 'processLogin');
});
// register
// Route::get('/register', [RegisterController::class, 'index']);
Route::controller(RegisterController::class)->group(function () {
    Route::post('/authRegister', 'create');
});

//logout
Route::get('/logout', [LogoutController::class, 'index']);

// Admin Dashboard
Route::controller(DashboardAdminController::class)->group(function () {
    Route::get('/dashboard', 'index');
});
//Admin Topik Utama
Route::controller(TopikUtamaAdminController::class)->group(function () {
    Route::get('/topikUtama', 'index');
    Route::get('/searchTopikUtama', 'search');
    Route::get('/tambahTopikUtama', 'create');
    Route::post('/createContentTopikUtama', 'saveCreate');
    Route::get('/editTopikUtama/{id}', 'edit');
    Route::put('/updateTopikUtama/{id}', 'update');
    Route::get('/deleteTopikUtama/{id}', 'destroy');
    Route::get('/showTopikUtama/{id}', 'show');
});

Route::controller(TrendingIsuAdminController::class)->group(function () {
    Route::get('/trendingIsu', 'index');
    Route::get('/tambahTrendingIsu', 'create');
    Route::post('/createContentTrendingIsu', 'saveCreate');
    Route::get('/editTrendingIsu/{id}', 'edit');
    Route::put('/updateTrendingIsu/{id}', 'update');
    Route::get('/deleteTrendingIsu/{id}', 'destroy');
    Route::get('/showTrendingIsu/{id}', 'show');
});

Route::controller(SejarahAdminController::class)->group(function () {
    Route::get('/sejarah', 'index');
    Route::get('/tambahSejarah', 'create');
    Route::post('/createContentSejarah', 'saveCreate');
    Route::get('/editSejarah/{id}', 'edit');
    Route::put('/updateSejarah/{id}', 'update');
    Route::get('/deleteSejarah/{id}', 'destroy');
    Route::get('/showSejarah/{id}', 'show');
});

Route::controller(KisahInspiratifAdminController::class)->group(function () {
    Route::get('/kisahInspiratif', 'index');
    Route::get('/tambahKisahInspiratif', 'create');
    Route::post('/createContentKisahInspiratif', 'saveCreate');
    Route::get('/editKisahInspiratif/{id}', 'edit');
    Route::put('/updateKisahInspiratif/{id}', 'update');
    Route::get('/deleteKisahInspiratif/{id}', 'destroy');
    Route::get('/showKisahInspiratif/{id}', 'show');
});

Route::controller(CalonAdminController::class)->group(function () {
    Route::get('/calonAdmin', 'index');
    Route::post('/createAdmin/{id}', 'create');
    Route::get('/reject/{id}', 'reject');
});

//Admin Event Login
Route::get('/eventLogin', [EventLoginController::class, 'index']);


//User 
//User Topik Utama
Route::get('/showTopikUtamaUser/{id}', [TopikUtamaUserController::class, 'index']);

//User Trending Isu
Route::get('/showTrendingIsuUser/{id}', [TrendingIsuUserControlller::class, 'index']);

//comment
Route::get('/createComment/{id}', [CommentController::class, 'create']);

//Sejarah
Route::controller(SejarahUserController::class)->group(function () {
    Route::get('/ceritaSejarah', 'index');
});

//KisahInspiratif
Route::controller(KisahInspiratifUserController::class)->group(function () {
    Route::get('/ceritaKisahInspiratif', 'index');
});
