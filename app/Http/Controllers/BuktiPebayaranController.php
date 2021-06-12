<?php

namespace App\Http\Controllers;

use App\Models\bukti_pebayaran;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\True_;

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
        $bukti_pembayaran = Http::get('http://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran')->object();
        return view('bukti_pembayaran.bukti_pembayaran',['data_bukti_pembayaran'=>$bukti_pembayaran]);
    }

    public function tambah_data_bukti_pembayaran(){
        $transaksi = Http::get('http://eai-finance.arddhanaaa.com/public/api/transaksi')->object();
        return view('bukti_pembayaran.tambah_bukti_pembayaran',['data_transaksi'=>$transaksi]);
    }

    public function save_tambah_data_bukti_pembayaran(Request $request){
        $response = Http::post('http://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran', [
            'status_tanggungan' => $request->status_tanggungan,
            'periode_tanggungan' => $request->periode_tanggungan,
            'tujuan_tanggungan' => $request->tujuan_tanggungan,
            'total_tanggungan' => $request->total_tanggungan,
            'id_asset' => $request->id_asset
        ]);
        return redirect(route('get_data_bukti_pembayaran'));
    }
}
