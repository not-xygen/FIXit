<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\FixerController;
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
    return view('auth.login');
});
Route::get('/riwayat',[PemesananController::class,'riwayatPemesananAdmin']);
Route::group(['middleware' => ['auth', 'role:admin']],function(){
        Route::get('/daftaruser', [UserController::class, 'dataPelanggan']);
        Route::get('/daftarfixer', [UserController::class, 'dataFixer']);
});

Route::group(['middleware' => ['auth']],function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    });


Route::group(['middleware' => ['auth']],function(){
    Route::get('/profile',[UserController::class, 'profile'])->name('profile');
    });

Route::post('/profile/update/{id}',[UserController::class,'updateProfile']);
//Bagian Pelanggan
Route::get('/payments/{id_fixer}',[PelangganController::class,'pemesanan']);
Route::get('/listjasa',[PelangganController::class,'listjasa']);
//Bagian Pemesanan
Route::get('/riwayat/{id_pelanggan}',[PemesananController::class,'riwayatPemesananPelanggan']);
Route::Post('/payments/{id_fixer}/invoice',[PemesananController::class,'inputInvoice']);

//Bagian Fixer
Route::get('/pesanan/{id_fixer}',[PemesananController::class,'riwayatPemesananFixer']);
Route::post('/pesanan/{id}/update',[FixerController::class,'editPesanan']);
require __DIR__.'/auth.php';
