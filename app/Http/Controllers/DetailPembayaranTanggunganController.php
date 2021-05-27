<?php

namespace App\Http\Controllers;

use App\Models\detail_pembayaran_tanggungan;
use App\Models\tanggungan;
use Illuminate\Http\Request;

class DetailPembayaranTanggunganController extends Controller
{
    public function index(){
        $detail = detail_pembayaran_tanggungan::all();
        return response()->json($detail,200);
    }

    public function show_by_id_tanggungan($id_tanggungan){
        if (detail_pembayaran_tanggungan::where('id_tanggungan', $id_tanggungan)->exists()) {
            $detail = detail_pembayaran_tanggungan::where('id_tanggungan', $id_tanggungan)->get();
            return response($detail, 200);
        } else {
            return response()->json([
                "message" => "Detail Pembayaran Tanggungan not found"
            ], 404);
        }
    }

    public function create(Request $request){
        $detail = new detail_pembayaran_tanggungan();
        $detail->id_transaksi = $request->id_transaksi;
        $detail->id_tanggungan = $request->id_tanggungan;
        $detail->total_pembayaran = $request->total_pembayaran;
        $detail->save();

        return response()->json($detail,201);
    }

    public function update(Request $request, $id_pembayaran){
        $detail = detail_pembayaran_tanggungan::find($id_pembayaran);
        $detail->id_transaksi = $request->id_transaksi;
        $detail->id_tanggungan = $request->id_tanggungan;
        $detail->total_pembayaran = $request->total_pembayaran;
        $detail->save();

        return response()->json($detail,201);
    }


    public function delete($id_pembayaran){
        $detail = tanggungan::find($id_pembayaran);
        $detail->delete();
        return response()->json(['Message'=>'Detail Pembayaran Dihapus'],204);
    }
}
