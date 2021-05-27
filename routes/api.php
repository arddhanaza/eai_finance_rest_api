<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PengajuanDanaController;
use App\Http\Controllers\TanggunganController;
use App\Http\Controllers\DetailPembayaranTanggunganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('divisi', [DivisiController::class, 'index']);

Route::get('assets', [AssetController::class, 'index']);
Route::post('assets', [AssetController::class, 'create']);
Route::put('assets/{id_asset}', [AssetController::class, 'update']);
Route::delete('assets/{id_asset}', [AssetController::class, 'delete']);
Route::get('assets/{id_asset}',[AssetController::class,'show_by_id']);

Route::get('tanggungan', [TanggunganController::class, 'index']);
Route::post('tanggungan', [TanggunganController::class, 'create']);
Route::put('tanggungan/{id_tanggungan}', [TanggunganController::class, 'update']);
Route::delete('tanggungan/{id_tanggungan}', [TanggunganController::class, 'delete']);
Route::get('tanggungan/{id_tanggungan}', [TanggunganController::class, 'show_by_id']);
Route::get('tanggungan/{id_asset}', [TanggunganController::class, 'show_by_asset']);

Route::get('detail_tanggungan', [DetailPembayaranTanggunganController::class, 'index']);
Route::post('detail_tanggungan', [DetailPembayaranTanggunganController::class, 'create']);
Route::put('detail_tanggungan/{id_detail_tanggungan}', [DetailPembayaranTanggunganController::class, 'update']);
Route::delete('detail_tanggungan/{id_detail_tanggungan}', [DetailPembayaranTanggunganController::class, 'delete']);
Route::get('detail_tanggungan/{id_tanggungan}', [DetailPembayaranTanggunganController::class, 'show_by_id_tanggungan']);

Route::post('pengajuan_dana', [PengajuanDanaController::class, 'create']);
Route::get('pengajuan_dana', [PengajuanDanaController::class, 'index']);
Route::put('pengajuan_dana/{id_pengajuan}', [PengajuanDanaController::class, 'update']);
Route::delete('pengajuan_dana/{id_pengajuan}', [PengajuanDanaController::class, 'delete']);
