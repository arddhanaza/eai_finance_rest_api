<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\tanggungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\True_;

class TanggunganController extends Controller
{
    public function index(){
        $tanggungan = tanggungan::get_data_tanggungan();
        return response()->json($tanggungan,200);
    }

    public function show_by_id($id_tanggungan){
        if (tanggungan::where('id_tanggungan', $id_tanggungan)->exists()) {
            $tanggungan = asset::where('id_tanggungan', $id_tanggungan)->get();
            return response($tanggungan, 200);
        } else {
            return response()->json([
                "message" => "Tanggungan not found"
            ], 404);
        }
    }

    public function show_by_asset($id_asset){
        if (tanggungan::where('id_asset', $id_asset)->exists()) {
            $tanggungan = asset::where('id_asset', $id_asset)->get();
            return response($tanggungan, 200);
        } else {
            return response()->json([
                "message" => "Tanggungan not found"
            ], 404);
        }
    }

    public function create(Request $request){
        $tanggungan = new tanggungan();
        $tanggungan->status_tanggungan = $request->status_tanggungan;
        $tanggungan->periode_tanggungan = $request->periode_tanggungan;
        $tanggungan->tujuan_tanggungan = $request->tujuan_tanggungan;
        $tanggungan->total_tanggungan = $request->total_tanggungan;
        $tanggungan->id_asset = $request->id_asset;
        $tanggungan->save();

        return response()->json($tanggungan,201);
    }

    public function update(Request $request, $id_tanggungan){
        $tanggungan = tanggungan::find($id_tanggungan);
        $tanggungan->status_tanggungan = $request->status_tanggungan;
        $tanggungan->periode_tanggungan = $request->periode_tanggungan;
        $tanggungan->tujuan_tanggungan = $request->tujuan_tanggungan;
        $tanggungan->total_tanggungan = $request->total_tanggungan;
        $tanggungan->id_asset = $request->id_asset;
        $tanggungan->save();

        return response()->json($tanggungan,200);
    }

    public function update_total_tanggungan(Request $request, $id_tanggungan){
        $tanggungan = tanggungan::find($id_tanggungan);
        $tanggungan->total_tanggungan = $request->total_tanggungan;
        $tanggungan->save();

        return response()->json($tanggungan,200);
    }

    public function delete($id_tanggungan){
        $tanggungan = tanggungan::find($id_tanggungan);
        $tanggungan->delete();
        return response()->json(['Message'=>'Tanggungan Dihapus'],204);
    }

    public function get_data_tanggungan(){
        $tanggungan = Http::get('http://eai-finance.arddhanaaa.com/public/api/tanggungan')->object();
        return view('pembayaran_tanggungan.pembayaran_tanggungan',['data_tanggungan'=>$tanggungan]);
    }

    public function tambah_data_tanggungan(){
        $assets = Http::get('http://eai-finance.arddhanaaa.com/public/api/assets')->object();
        return view('pembayaran_tanggungan.tambah_data_tanggungan',['data_asset'=>$assets]);
    }

    public function save_tambah_data_tanggungan(Request $request){
        $response = Http::post('http://eai-finance.arddhanaaa.com/public/api/tanggungan', [
            'status_tanggungan' => $request->status_tanggungan,
            'periode_tanggungan' => $request->periode_tanggungan,
            'tujuan_tanggungan' => $request->tujuan_tanggungan,
            'total_tanggungan' => $request->total_tanggungan,
            'id_asset' => $request->id_asset
        ]);
        return redirect(route('get_data_tanggungan'));
    }

    public function update_data_tanggungan(){
        return true; //return view
    }

    public function update_status_tanggungan(){
        return true;
    }
    public function bayar_tanggungan(){
        return true; //return view
        //redirect ke halaman
        //bayar_transaksi
        //add transaksi
        //add detail
        //update data
    }
    public function proses_bayar_tanggungan(){
        return true; //generate API
    }
}
