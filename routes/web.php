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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('api_list');
Route::get('/asset/{divisi}',[\App\Http\Controllers\AssetController::class,'tambah'])->name('tambah_asset');
//Route::post('asset/{divisi}',[\App\Http\Controllers\AssetController::class,'save'])->name('save_asset');

Route::get('/pengajuan_dana/', [PengajuanDanaController::class,'get_data_pengajuan_dana'])->name('get_data_pengajuan_dana');
Route::get('/pengajuan_dana/tambah',[PengajuanDanaController::class,'tambah_data_pengajuan'])->name('view_tambah_pengajuan');
Route::post('/pengajuan_dana/tambah/save',[PengajuanDanaController::class,'save_tambah_data_pengajuan'])->name('save_tambah_pengajuan');
Route::get('/pengajuan_dana/delete/{id_pengajuan}',[PengajuanDanaController::class,'delete_pengajuan'])->name('delete_pengajuan');
Route::get('/pengajuan_dana/edit/{id_pengajuan}',[PengajuanDanaController::class,'update_data_pengajuan'])->name('update_data_pengajuan');
Route::get('/pengajuan_dana/edit/{id_pengajuan}/save',[PengajuanDanaController::class,'save_update_data_pengajuan'])->name('save_update_data_pengajuan');
// Route::get('/pengajuan-dana/{divisi}',[\App\Http\Controllers\PengajuanDanaController::class,'tambah'])->name('buat_pengajuan');
// Route::get('/pengajuan-dana/all',[\App\Http\Controllers\PengajuanDanaController::class,'index'])->name('api_all_pengajuan');

Route::get('/tanggungan/', [TanggunganController::class,'get_data_tanggungan'])->name('get_data_tanggungan');
Route::get('/tanggungan/tambah',[TanggunganController::class,'tambah_data_tanggungan'])->name('view_tambah_tanggungan');
Route::post('/tanggungan/tambah/save',[TanggunganController::class,'save_tambah_data_tanggungan'])->name('save_tambah_tanggungan');
Route::get('/tanggungan/bayar/{id_tanggungan}',[TanggunganController::class,'view_bayar_tanggungan'])->name('bayar_tanggungan');
Route::post('/tanggungan/bayar/{id_tanggungan}/save',[TanggunganController::class,'save_bayar_tanggungan'])->name('save_bayar_tanggungan');
Route::get('/tanggungan/edit/{id_tanggungan}',[TanggunganController::class,'update_data_tanggungan'])->name('update_data_tanggungan');
Route::get('/tanggungan/edit/{id_tanggungan}/save',[TanggunganController::class,'save_update_data_tanggungan'])->name('save_update_data_tanggungan');
Route::get('tanggungan/delete/{id_tanggungan}',[TanggunganController::class,'delete_tanggungan'])->name('delete_tanggungan');


//bukti pembayaran
Route::get('/bukti_pembayaran/', [BuktiPebayaranController::class,'get_data_bukti_pembayaran'])->name('get_data_bukti_pembayaran');
Route::get('/bukti_pembayaran/tambah',[BuktiPebayaranController::class,'tambah_data_bukti_pembayaran'])->name('view_tambah_bukti_pembayaran');
Route::post('/bukti_pembayaran/tambah/save',[BuktiPebayaranController::class,'save_tambah_data_bukti_pembayaran'])->name('save_tambah_data_bukti_pembayaran');
Route::get('/bukti_pembayaran/edit/{id_pembayaran}',[BuktiPebayaranController::class,'update_data_bukti_pembayaran'])->name('update_data_bukti_pembayaran');
Route::get('/bukti_pembayaran/edit/{id_pembayaran}/save',[BuktiPebayaranController::class,'save_update_data_bukti_pembayaran'])->name('save_update_data_bukti_pembayaran');
Route::get('bukti_pembayaran/delete/{id_pembayaran}',[BuktiPebayaranController::class,'delete_bukti_pembayaran'])->name('delete_bukti_pembayaran');

// Daftar Transaksi
Route::get('/transaksi', [TransaksiController::class, 'get_data_transaksi'])->name('get_data_transaksi');
Route::get('/transaksi/tambah', [TransaksiController::class, 'tambah_data_transaksi'])->name('view_tambah_transaksi');
Route::post('/transaksi/tambah', [TransaksiController::class, 'save_tambah_data_transaksi'])->name('save_tambah_transaksi');
Route::get('/transaksi/delete/{id_transaksi}', [TransaksiController::class, 'delete_transaksi'])->name('delete_transaksi');