<?php

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
    return view('welcome');
});
Route::get('/asset/{divisi}',[\App\Http\Controllers\AssetController::class,'tambah'])->name('tambah_asset');
//Route::post('asset/{divisi}',[\App\Http\Controllers\AssetController::class,'save'])->name('save_asset');

Route::get('/pengajuan-dana/{divisi}',[\App\Http\Controllers\PengajuanDanaController::class,'tambah'])->name('buat_pengajuan');
// Route::get('/pengajuan-dana/all',[\App\Http\Controllers\PengajuanDanaController::class,'index'])->name('api_all_pengajuan');