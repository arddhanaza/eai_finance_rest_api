<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


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
        $asset->jenis_asset = $request->jenis_asset;
        $asset->tipe_asset = $request->tipe_asset;
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

    public function get_data_asset(){
        $assets = Http::get('https://eai-finance.arddhanaaa.com/public/api/assets')->object();
        return view('assets.get_assets',['data_assets'=>$assets]);
    }

    public function create_data_asset(){
        $divisi = divisi::all();
        return view('assets.tambah_asset',['data_divisi'=>$divisi]);
    }

    public function save_create_data_asset(Request $request){
        $response = Http::post('http://eai-finance.arddhanaaa.com/public/api/assets', [
            'nama_asset' => $request->nama_asset,
            'valuasi_asset' => $request->valuasi_asset,
            'tanggal_aktif' => $request->tanggal_aktif,
            'jenis_asset' => $request->jenis_asset,
            'tipe_asset' => $request->tipe_asset,
            'id_divisi' => $request->id_divisi
        ]);
        return redirect(route('get_data_asset'));
    }

    public function edit_data_asset($id_asset){
        $divisi = divisi::all();
        $asset = Http::get('http://eai-finance.arddhanaaa.com/public/api/assets/'.$id_asset)->json();
        $key = key($asset);
        $asset = (object) $asset[$key];
        return view('assets.edit_asset',['data_asset'=>$asset,'data_divisi'=>$divisi]);
    }

    public function save_edit_data_asset(Request $request, $id_asset){
        $update_asset = Http::put('http://eai-finance.arddhanaaa.com/public/api/assets/'.$id_asset, [
            'nama_asset' => $request->nama_asset,
            'valuasi_asset' => $request->valuasi_asset,
            'tanggal_aktif' => $request->tanggal_aktif,
            'jenis_asset' => $request->jenis_asset,
            'tipe_asset' => $request->tipe_asset,
            'id_divisi' => $request->id_divisi
        ])->status();
        return redirect(route('get_data_asset'));
    }

    public function delete_asset($id_asset){
        $request = Http::delete('http://eai-finance.arddhanaaa.com/public/api/assets/'.$id_asset);
        return redirect(route('get_data_asset'));
    }
}
