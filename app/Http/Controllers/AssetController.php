<?php

namespace App\Http\Controllers;

use App\Models\asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        return asset::all();
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

        return '201, Data Berhasil Disimpan';
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

        return '201, Data Berhasil Diupdate';
    }

    public function delete($id)
    {
        $asset = asset::find($id);
        $asset->delete();

        return 'Data Berhasil Dihapus';
    }
}
