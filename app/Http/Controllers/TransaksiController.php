<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransaksiController extends Controller
{

    public function get_data_transaksi()
    {
        $data_transaksi = Http::get('http://eai-finance.arddhanaaa.com/public/api/transaksi')->object();
        
        return view('transaksi.data_transaksi', ['data_transaksi' => $data_transaksi]);
    }

    public function show_by_id($id_transaksi)
    {
        if (transaksi::where('id_transaksi', $id_transaksi)->exists()) {
            $transaksi = transaksi::get_data_transaksi()->where('id_transaksi', $id_transaksi);
            return response($transaksi, 200);
        } else {
            return response()->json([
                "message" => "Transaksi with $id_transaksi is not found"
            ], 404);
        }
    }

    public function show_by_divisi($nama_divisi)
    {
        if (divisi::where('nama_divisi', $nama_divisi)->exists()) {
            $transaksi = transaksi::get_data_transaksi()->where('nama_divisi', $nama_divisi);
            return response($transaksi, 200);
        } else {
            return response()->json([
                "message" => "Transaksi on divisi $nama_divisi is not found"
            ], 404);
        }
    }

    public function tambah_data_transaksi()
    {
        $data_transaksi = Http::get('http://eai-finance.arddhanaaa.com/public/api/transaksi')->object();

        return view('transaksi.tambah_data_transaksi', ['data_transaksi' => $data_transaksi]);
    }

    public function save_tambah_data_transaksi(Request $request) 
    {
        $response = Http::post('http://eai-finance.arddhanaaa.com/public/api/transaksi', [
            'tipe_transaksi' => $request->tipe_transaksi,
            'total' => $request->total,
            'waktu_transaksi' => $request->waktu_transaksi,
            'deskripsi' => $request->deskripsi,
            'bukti_invoice' => $request->bukti_invoice,
            'id_divisi' => $request->id_divisi
        ]);

        return redirect(route('get_data_transaksi'));
    }

    public function update_data_transaksi($id_transaksi)
    {
        $transaksi = Http::get('http://eai-finance.arddhanaaa.com/public/api/transaksi/' . $id_transaksi)->json();
        $key = key($transaksi);
        $transaksi = (object) $transaksi[$key];

        return view('transaksi.update_data_transaksi', ['transaksi' => $transaksi]);
    }

    public function save_update_data_transaksi(Request $request, $id_transaksi)
    {
        $transaksi = Http::put('http://eai-finance.arddhanaaa.com/public/api/transaksi/'.$id_transaksi, [
        'tipe_transaksi' => $request->tipe_transaksi,
        'total' => $request->total,
        'waktu_transaksi' => $request->waktu_transaksi,
        'deskripsi' => $request->deskripsi,
        'bukti_invoice' => $request->bukti_invoice,
        'id_divisi' => $request->id_divisi,
        ])->status();

        return redirect(route('get_data_transaksi'));
    }

    public function delete_transaksi($id_transaksi)
    {
        $request = Http::delete('http://eai-finance.arddhanaaa.com/public/api/transaksi/'.$id_transaksi);

        return redirect(route('get_data_transaksi'));
    }

    public function index()
    {
        $data_transaksi = transaksi::get_data_transaksi();
        return response()->json($data_transaksi, 200);
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

        return response()->json($transaksi, 201);
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

        return response()->json(['Message' => 'Data transaksi berhasil dihapus'], 204);
    }
}
