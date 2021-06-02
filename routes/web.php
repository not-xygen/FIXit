<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});
Route::group(['middleware' => ['auth', 'role:admin']],function(){
        Route::get('/daftaruser', [UserController::class, 'dataPelanggan']);
        Route::get('/daftarfixer', [UserController::class, 'dataFixer']);
});

Route::view('/keluarbang', 'Admin.keluar');

Route::group(['middleware' => ['auth']],function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    });


Route::group(['middleware' => ['auth', 'role:pelanggan,fixer,admin']],function(){
    Route::get('/profile',[UserController::class, 'profile'])->name('profile');
    });

Route::get('/payments/{id_fixer}',[PemesananController::class,'pemesanan']);
Route::get('/riwayat/{id_pelanggan}',[PemesananController::class,'riwayatPemesanan']);
Route::Post('/payments/{id_fixer}/invoice',[PemesananController::class,'inputInvoice']);

require __DIR__.'/auth.php';
