<?php

namespace App\Http\Controllers;

use App\Models\bukti_pebayaran;
use Illuminate\Http\Request;

class BuktiPebayaranController extends Controller
{
    //
    public function index()
    {
        $bukti_pembayaran = bukti_pebayaran::get_data_bukti_pembayaran();
        return response()->json($bukti_pembayaran, 200);
    }

    public function create(Request $request)
    {
        $bukti_pembayaran = new bukti_pebayaran();
        $bukti_pembayaran->nama_pembayaran = $request->nama_pembayaran;
        $bukti_pembayaran->tanggal_submisi = $request->tanggal_submisi;
        $bukti_pembayaran->keterangan = $request->keterangan;
        $bukti_pembayaran->id_transaksi = $request->id_transaksi;
        $bukti_pembayaran->save();

        return response()->json(['message'=>'berhasil ditambahkan'],200);
    }

    public function update(Request $request, $id)
    {
        $bukti_pembayaran = bukti_pebayaran::find($id);
        $bukti_pembayaran->nama_pembayaran = $request->nama_pembayaran;
        $bukti_pembayaran->tanggal_submisi = $request->tanggal_submisi;
        $bukti_pembayaran->keterangan = $request->keterangan;
        $bukti_pembayaran->id_transaksi = $request->id_transaksi;
        $bukti_pembayaran->save();

        return response()->json($bukti_pembayaran, 201);
    }

    public function delete($id)
    {
        $bukti_pembayaran = bukti_pebayaran::find($id);
        $bukti_pembayaran->delete();

        return response()->json($bukti_pembayaran, 201);
    }

    public function get_data_bukti_pembayaran(){
        $bukti_pembayaran = bukti_pebayaran::get_data_bukti_pembayaran();
        return view('bukti_pembayaran.bukti_pembayaran',['data_bukti_pembayaran'=>$bukti_pembayaran]);
    }
}
