<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\detail_pembayaran_tanggungan;
use App\Models\divisi;
use App\Models\tanggungan;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\DocBlock\Tags\Method;
use phpDocumentor\Reflection\Types\True_;
use function PHPUnit\Framework\isEmpty;

class TanggunganController extends Controller
{
    public function index()
    {
        $tanggungan = tanggungan::get_data_tanggungan();
        return response()->json($tanggungan, 200);
    }

    public function show_by_id($id_tanggungan)
    {
        if (tanggungan::where('id_tanggungan', $id_tanggungan)->exists()) {
            $tanggungan = tanggungan::get_data_tanggungan()->where('id_tanggungan', $id_tanggungan);
            return response($tanggungan, 200);
        } else {
            return response()->json([
                "message" => "Tanggungan not found"
            ], 404);
        }
    }

    public function show_by_asset($id_asset)
    {
        if (tanggungan::where('id_asset', $id_asset)->exists()) {
            $tanggungan = tanggungan::where('id_asset', $id_asset);
            return response($tanggungan, 200);
        } else {
            return response()->json([
                "message" => "Tanggungan not found"
            ], 404);
        }
    }

    public function show_by_divisi($nama_divisi){
        if (divisi::where('nama_divisi',$nama_divisi)->exists()){
            $tanggungan = tanggungan::get_data_tanggungan()->where('nama_divisi', 'LIKE', $nama_divisi);
            return response()->json($tanggungan,200);
        }else{
            return response()->json([
                "message" => "Divisi or Tanggungan not found"
            ], 404);
        }
    }


    public function create(Request $request)
    {
        $tanggungan = new tanggungan();
        $tanggungan->status_tanggungan = $request->status_tanggungan;
        $tanggungan->periode_tanggungan = $request->periode_tanggungan;
        $tanggungan->tujuan_tanggungan = $request->tujuan_tanggungan;
        $tanggungan->total_tanggungan = $request->total_tanggungan;
        $tanggungan->id_asset = $request->id_asset;
        $tanggungan->save();

        return response()->json($tanggungan, 201);
    }

    public function update(Request $request, $id_tanggungan)
    {
        $tanggungan = tanggungan::find($id_tanggungan);
        $tanggungan->status_tanggungan = $request->status_tanggungan;
        $tanggungan->periode_tanggungan = $request->periode_tanggungan;
        $tanggungan->tujuan_tanggungan = $request->tujuan_tanggungan;
        $tanggungan->total_tanggungan = $request->total_tanggungan;
        $tanggungan->id_asset = $request->id_asset;
        $tanggungan->save();

        return response()->json($tanggungan, 200);
    }

    public function update_total_tanggungan(Request $request, $id_tanggungan)
    {
        $tanggungan = tanggungan::find($id_tanggungan);
        $tanggungan->total_tanggungan = $request->total_tanggungan;
        $tanggungan->save();

        return response()->json($tanggungan, 200);
    }

    public function delete($id_tanggungan)
    {
        $tanggungan = tanggungan::find($id_tanggungan);
        $tanggungan->delete();
        return response()->json(['Message' => 'Tanggungan Dihapus'], 204);
    }

    public function get_data_tanggungan()
    {
        $tanggungan = Http::get('https://eai-finance.arddhanaaa.com/public/api/tanggungan/')->object();
//        dd($tanggungan[0]->id_tanggungan);
        return view('pembayaran_tanggungan.pembayaran_tanggungan', ['data_tanggungan' => $tanggungan]);
    }

    public function tambah_data_tanggungan()
    {
        $assets = Http::get('https://eai-finance.arddhanaaa.com/public/api/assets')->object();
        return view('pembayaran_tanggungan.tambah_data_tanggungan', ['data_asset' => $assets]);
    }

    public function save_tambah_data_tanggungan(Request $request)
    {
        $response = Http::post('https://eai-finance.arddhanaaa.com/public/api/tanggungan', [
            'status_tanggungan' => $request->status_tanggungan,
            'periode_tanggungan' => $request->periode_tanggungan,
            'tujuan_tanggungan' => $request->tujuan_tanggungan,
            'total_tanggungan' => $request->total_tanggungan,
            'id_asset' => $request->id_asset
        ]);
        return redirect(route('get_data_tanggungan'));
    }

    public function update_data_tanggungan($id_tanggungan)
    {
        $tanggungan = Http::get('https://eai-finance.arddhanaaa.com/public/api/tanggungan/'.$id_tanggungan)->json();
        $key = key($tanggungan);
        $tanggungan = (object) $tanggungan[$key];

        return view('pembayaran_tanggungan.update_data_tanggungan',['data_tanggungan'=>$tanggungan]);
    }

    public function save_update_data_tanggungan(Request $request, $id_tanggungan)
    {
        $update_tanggungan = Http::put('https://eai-finance.arddhanaaa.com/public/api/tanggungan/'.$id_tanggungan, [
            'status_tanggungan' => $request->status_tanggungan,
            'periode_tanggungan' => $request->periode_tanggungan,
            'tujuan_tanggungan' => $request->tujuan_tanggungan,
            'total_tanggungan' => $request->total_tanggungan,
            'id_asset' => $request->id_asset
        ])->status();
        return redirect(route('get_data_tanggungan'));
    }

    public function view_bayar_tanggungan($id_tanggungan)
    {
        $tanggungan = Http::get('https://eai-finance.arddhanaaa.com/public/api/tanggungan/'.$id_tanggungan)->json();
        $key = key($tanggungan);
        $tanggungan = (object) $tanggungan[$key];
        return view('pembayaran_tanggungan.tambah_pembayaran_tanggungan', ['data_tanggungan' => $tanggungan]);
    }

    public function save_bayar_tanggungan($id_tanggungan, Request $request)
    {
        $response = Http::post('https://eai-finance.arddhanaaa.com/public/api/tanggungan/pay/'.$id_tanggungan, [
            'total' => $request->total,
            'deskripsi' => $request->deskripsi,
            'id_divisi' => $request->id_divisi,
            'id_tanggungan' => $id_tanggungan,
            'total_pembayaran' => $request->total,
        ])->status();
        return redirect(route('get_data_tanggungan'));
    }

    public function delete_tanggungan($id_tanggungan){
        $request = Http::delete('https://eai-finance.arddhanaaa.com/public/api/tanggungan/'.$id_tanggungan);
        return redirect(route('get_data_tanggungan'));
    }

    public function proses_bayar_tanggungan(Request $request, $id_tanggungan)
    {

        $total = $request->total;

        $transaksi = new transaksi();
        $transaksi->tipe_transaksi = 'Kredit';
        $transaksi->total = $total;
        $transaksi->deskripsi = $request->deskripsi;
        $transaksi->bukti_invoice = '';
        $transaksi->id_divisi = $request->id_divisi;
        $transaksi->save();
        $last_transaction_id = $transaksi->id_transaksi;

        $detail_pembayaran = new detail_pembayaran_tanggungan();
        $detail_pembayaran->id_transaksi = $last_transaction_id;
        $detail_pembayaran->id_tanggungan = $id_tanggungan;
        $detail_pembayaran->total_pembayaran = $total;
        $detail_pembayaran->save();

        $tanggungan = tanggungan::find($id_tanggungan);
        $tanggungan->status_tanggungan = 'Lunas';
        $tanggungan->save();

        return response()->json($detail_pembayaran, 201);
    }
}
