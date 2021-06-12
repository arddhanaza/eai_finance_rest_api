<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengajuanDanaController;
use App\Http\Controllers\TanggunganController;
use App\Http\Controllers\BuktiPebayaranController;
use App\Http\Controllers\DetailPembayaranTanggunganController;

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
    return view('templates.template');
})->name('api_list');
Route::get('/asset/{divisi}',[\App\Http\Controllers\AssetController::class,'tambah'])->name('tambah_asset');
//Route::post('asset/{divisi}',[\App\Http\Controllers\AssetController::class,'save'])->name('save_asset');

Route::get('/pengajuan-dana/{divisi}',[\App\Http\Controllers\PengajuanDanaController::class,'tambah'])->name('buat_pengajuan');
// Route::get('/pengajuan-dana/all',[\App\Http\Controllers\PengajuanDanaController::class,'index'])->name('api_all_pengajuan');

Route::get('/tanggungan/', [TanggunganController::class,'get_data_tanggungan'])->name('get_data_tanggungan');
Route::get('/tanggungan/tambah',[TanggunganController::class,'tambah_data_tanggungan'])->name('view_tambah_tanggungan');
Route::post('/tanggungan/tambah/save',[TanggunganController::class,'save_tambah_data_tanggungan'])->name('save_tambah_tanggungan');
Route::get('/tanggungan/bayar/{id_tanggungan}',[TanggunganController::class,'view_bayar_tanggungan'])->name('bayar_tanggungan');
Route::post('/tanggungan/bayar/{id_tanggungan}/save',[TanggunganController::class,'save_bayar_tanggungan'])->name('save_bayar_tanggungan');
Route::get('/tanggungan/edit/{id_tanggungan}',[TanggunganController::class,'update_data_tanggungan'])->name('update_data_tanggungan');
Route::get('/tanggungan/edit/{id_tanggungan}/save',[TanggunganController::class,'save_update_data_tanggungan'])->name('save_update_data_tanggungan');
Route::get('tanggungan/delete/{id_tanggungan}',[TanggunganController::class,'delete_tanggungan'])->name('delete_tanggungan');

Route::get('/bukti_pembayaran/', [BuktiPebayaranController::class,'get_data_bukti_pembayaran'])->name('get_data_bukti_pembayaran');
