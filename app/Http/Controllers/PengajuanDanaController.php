<?php

namespace App\Http\Controllers;

use App\Models\divisi;
use App\Models\pengajuan_dana;
use Illuminate\Http\Request;

class PengajuanDanaController extends Controller
{
    public function index()
    {
        // $pengajuan_dana = pengajuan_dana::latest()->paginate(5);
        // return view('data_pengajuan', compact('pengajuan_dana'))->with('i', (request()->input('page', 1) - 1) * 5);
        return pengajuan_dana::all();
    }

    public function create(Request $request)
    {
        $pengajuan_dana = new pengajuan_dana();
        $pengajuan_dana->penanggung_jawab = $request->penanggung_jawab;
        $pengajuan_dana->nomor_rekening = $request->nomor_rekening;
        $pengajuan_dana->keterangan = $request->keterangan;
        $pengajuan_dana->tanggal_pengajuan = $request->tanggal_pengajuan;
        $pengajuan_dana->id_divisi = $request->id_divisi;
        $pengajuan_dana->save();

        return response()->json(['message'=>'berhasil ditambahkan'],200);
    }

    public function update(Request $request, $id)
    {        
        $pengajuan_dana = pengajuan_dana::find($id);
        $pengajuan_dana->penanggung_jawab = $request->penanggung_jawab;
        $pengajuan_dana->nomor_rekening = $request->nomor_rekening;
        $pengajuan_dana->keterangan = $request->keterangan;
        $pengajuan_dana->tanggal_pengajuan = $request->tanggal_pengajuan;
        $pengajuan_dana->id_divisi = $request->id_divisi;
        $pengajuan_dana->save();

        return response()->json(['message'=>'berhasil diubah'],200);
    }

    public function delete($id)
    {
        $pengajuan_dana = pengajuan_dana::find($id);
        $pengajuan_dana->delete();

        return 'Data Berhasil Dihapus';
    }

    public function tambah($divisi){
        $divisi = divisi::where('nama_divisi',$divisi)->firstOrFail();
        return view('buat_pengajuan',['divisi'=>$divisi]);
    }
}
