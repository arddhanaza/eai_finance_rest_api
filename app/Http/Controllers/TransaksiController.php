<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function index()
    {
        return transaksi::all();
    }

    public function create(Request $request)
    {
        $transaksi = new transaksi();
        $transaksi->tipe_transaksi = $request->tipe_transaksi;
        $transaksi->total = $request->total;
        $transaksi->waktu_transaksi = $request->waktu_transaksi;
        $transaksi->deskripsi = $request->deskripsi;
        $transaksi->bukti_invoice = $request->bukti_invoice;
        $transaksi->id_divisi = $request->id_divisi;
        $transaksi->save();

        return response()->json(['message'=>'berhasil ditambahkan'],200);
    }

    public function update(Request $request, $id)
    {        
        $transaksi = transaksi::find($id);
        $transaksi->tipe_transaksi = $request->tipe_transaksi;
        $transaksi->total = $request->total;
        $transaksi->waktu_transaksi = $request->waktu_transaksi;
        $transaksi->deskripsi = $request->deskripsi;
        $transaksi->bukti_invoice = $request->bukti_invoice;
        $transaksi->id_divisi = $request->id_divisi;
        $transaksi->save();

        return response()->json($transaksi, 201);
    }

    public function delete($id)
    {
        $transaksi = transaksi::find($id);
        $transaksi->delete();

        return response()->json($transaksi, 201);
    }
}
