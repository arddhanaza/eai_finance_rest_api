<?php

namespace App\Http\Controllers;

use App\Models\tanggungan;
use Illuminate\Http\Request;

class TanggunganController extends Controller
{
    public function index(){
        $tanggungan = tanggungan::all();
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
        $tanggungan = tanggungan::get_data_tanggungan();
        return view('pembayaran_tanggungan.pembayaran_tanggungan',['data_tanggungan'=>$tanggungan]);
    }
}
