<?php

namespace App\Http\Controllers;

use App\Models\pengajuan_dana;
use Illuminate\Http\Request;

class PengajuanDanaController extends Controller
{
    public function index()
    {
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

        return '201, Data Berhasil Disimpan';
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

        return '201, Data Berhasil Diupdate';
    }

    public function delete($id)
    {
        $pengajuan_dana = pengajuan_dana::find($id);
        $pengajuan_dana->delete();

        return 'Data Berhasil Dihapus';
    }
}
