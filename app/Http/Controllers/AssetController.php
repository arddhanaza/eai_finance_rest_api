<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\divisi;
use Illuminate\Http\Request;


class AssetController extends Controller
{
    public function index()
    {
        $assets = asset::all();
        return response()->json($assets,200);
    }

    public function show_by_id($id_assets){
        if (asset::where('id_asset', $id_assets)->exists()) {
            $asset = asset::where('id_asset', $id_assets)->get();
            return response($asset, 200);
        } else {
            return response()->json([
                "message" => "Asset not found"
            ], 404);
        }
    }

    public function create(Request $request)
    {
        $asset = new asset();
        $asset->nama_asset = $request->nama_asset;
        $asset->valuasi_asset = $request->valuasi_asset;
        $asset->tanggal_aktif = $request->tanggal_aktif;
        $asset->jenis_asset = $request->jenis_asset;
        $asset->tipe_asset = $request->tipe_asset;
        $asset->id_divisi = $request->id_divisi;
        $asset->save();

        return response()->json($asset, 201);
    }

    public function update(Request $request, $id)
    {
        $asset = asset::find($id);
        $asset->nama_asset = $request->nama_asset;
        $asset->valuasi_asset = $request->valuasi_asset;
        $asset->tanggal_aktif = $request->tanggal_aktif;
        $asset->jenis_asset = $request->jenis_assets;
        $asset->tipe_asset = $request->tipe_assets;
        $asset->id_divisi = $request->id_divisi;
        $asset->save();

        return response()->json($asset, 200);
    }

    public function delete($id)
    {
        $asset = asset::find($id);
        $asset->delete();

        return response()->json(null, 204);
    }

    public function tambah($divisi){
        $divisi = divisi::where('nama_divisi',$divisi)->firstOrFail();
        return view('tambah_asset',['divisi'=>$divisi]);
    }
}
