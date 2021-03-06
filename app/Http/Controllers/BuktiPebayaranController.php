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

    public function show_by_id($id_pembayaran)
    {
        if (bukti_pebayaran::where('id_pembayaran', $id_pembayaran)->exists()) {
            $bukti_pembayaran = bukti_pebayaran::get_data_bukti_pembayaran()->where('id_pembayaran', $id_pembayaran);
            return response($bukti_pembayaran, 200);
        } else {
            return response()->json([
                "message" => "Bukti pembayaran not found"
            ], 404);
        }
    }


    public function create(Request $request)
    {
        $bukti_pembayaran = new bukti_pebayaran();
        $bukti_pembayaran->nama_pembayaran = $request->nama_pembayaran;
        $bukti_pembayaran->tanggal_submisi = $request->tanggal_submisi;
        $bukti_pembayaran->keterangan = $request->keterangan;
        $bukti_pembayaran->id_transaksi = $request->id_transaksi;
        $bukti_pembayaran->save();

        return response()->json($bukti_pembayaran, 201);
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

    public function delete($id_pembayaran)
    {
        $bukti_pembayaran = bukti_pebayaran::find($id_pembayaran);
        $bukti_pembayaran->delete();

        return response()->json(['Message' => 'Bukti Pembayaran Dihapus'], 204);
    }

    public function get_data_bukti_pembayaran(){
        $bukti_pembayaran = Http::get('http://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran')->object();
        
        return view('bukti_pembayaran.bukti_pembayaran',['data_bukti_pembayaran'=>$bukti_pembayaran]);
    }

    public function tambah_data_bukti_pembayaran(){
        $transaksi = Http::get('http://eai-finance.arddhanaaa.com/public/api/transaksi')->object();
        return view('bukti_pembayaran.tambah_bukti_pembayaran',['data_transaksi'=>$transaksi]);
    }

    public function save_tambah_data_bukti_pembayaran(Request $request)
    {
        $response = Http::post('http://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran', [
            'nama_pembayaran' => $request->nama_pembayaran,
            'keterangan' => $request->keterangan,
            'id_transaksi' => $request->id_transaksi
        ]);
        return redirect(route('get_data_bukti_pembayaran'));
    }

    public function update_data_bukti_pembayaran($id_pembayaran)
    {
        $bukti_pembayaran = Http::get('http://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran/'.$id_pembayaran)->json();
        // dd($bukti_pembayaran);
        $key = key($bukti_pembayaran);
        $bukti_pembayaran = (object) $bukti_pembayaran[$key];
    
        return view('bukti_pembayaran.update_bukti_pembayaran',['data_bukti_pembayaran'=>$bukti_pembayaran]);
    }

    public function save_update_data_bukti_pembayaran(Request $request, $id_pembayaran)
    {
        $update_tanggungan = Http::put('http://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran/'.$id_pembayaran, [
            'nama_pembayaran' => $request->nama_pembayaran,
            'keterangan' => $request->keterangan,
            'id_transaksi' => $request->id_transaksi
        ])->status();
        return redirect(route('get_data_bukti_pembayaran'));
    }

    public function delete_bukti_pembayaran($id_pembayaran){
        $request = Http::delete('http://eai-finance.arddhanaaa.com/public/api/bukti_pembayaran/'.$id_pembayaran);
        return redirect(route('get_data_bukti_pembayaran'));
    }
}
