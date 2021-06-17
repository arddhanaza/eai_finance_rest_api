<?php

namespace App\Http\Controllers;

use App\Models\divisi;
use App\Models\pengajuan_dana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PengajuanDanaController extends Controller
{
    public function get_data_pengajuan_dana(){
        $pengajuan_dana = pengajuan_dana::get_data_pengajuan_dana();
        return view('pengajuan_dana.pengajuan_dana',['data_pengajuan_dana'=>$pengajuan_dana]);
    }

    public function tambah_data_pengajuan(){
        $divisi = divisi::all();
        return view('pengajuan_dana.tambah_data_pengajuan', ['data_divisi'=>$divisi]);
    }

    public function show_by_id($id_pengajuan){
        if (pengajuan_dana::where('id_pengajuan', $id_pengajuan)->exists()) {
            $pengajuan_dana = pengajuan_dana::where('id_pengajuan', $id_pengajuan)->get();
            return response($pengajuan_dana, 200);
        } else {
            return response()->json([
                "message" => "Pengajuan Dana not found"
            ], 404);
        }
    }


    public function save_tambah_data_pengajuan(Request $request){
        $pengajuan_dana = new pengajuan_dana();
        $pengajuan_dana->id_divisi = $request->id_divisi;
        $pengajuan_dana->penanggung_jawab = $request->penanggung_jawab;
        $pengajuan_dana->nomor_rekening = $request->nomor_rekening;
        $pengajuan_dana->keterangan = $request->keterangan;
        $pengajuan_dana->tanggal_pengajuan = $request->tanggal_pengajuan;
        $pengajuan_dana->save();
        return redirect(route('get_data_pengajuan_dana'));
    }

    public function delete_pengajuan($id_pengajuan){
        $pengajuan_dana = pengajuan_dana::find($id_pengajuan);
        $pengajuan_dana->delete();

        // return 'Data Berhasil Dihapus';
        return redirect(route('get_data_pengajuan_dana'));
    }

    public function update_data_pengajuan($id_pengajuan)
    {
        $pengajuan_dana = Http::get('http://eai-finance.arddhanaaa.com/public/api/pengajuan_dana/'.$id_pengajuan)->json();
        $key = key($pengajuan_dana);
        $pengajuan_dana = (object) $pengajuan_dana[$key];

        return view('pengajuan_dana.update_pengajuan',['data_pengajuan'=>$pengajuan_dana]);
    }

    public function save_update_data_pengajuan(Request $request, $id_pengajuan)
    {
        $update_pengajuan = Http::put('http://eai-finance.arddhanaaa.com/public/api/pengajuan_dana/'.$id_pengajuan, [
            'id_divisi' => $request->id_divisi,
            'penanggung_jawab' => $request->penanggung_jawab,
            'nomor_rekening' => $request->nomor_rekening,
            'keterangan' => $request->keterangan,
            'tanggal_pengajuan' => $request->tanggal_pengajuan
        ])->status();
        return redirect(route('get_data_tanggungan'));
    }

    // ----------
    public function index()
    {
        // $pengajuan_dana = pengajuan_dana::latest()->paginate(5);
        // return view('data_pengajuan', compact('pengajuan_dana'))->with('i', (request()->input('page', 1) - 1) * 5);
        return pengajuan_dana::all();
    }

    public function create(Request $request)
    {
        $pengajuan_dana = new pengajuan_dana();
        $pengajuan_dana->id_divisi = $request->id_divisi;
        $pengajuan_dana->penanggung_jawab = $request->penanggung_jawab;
        $pengajuan_dana->nomor_rekening = $request->nomor_rekening;
        $pengajuan_dana->keterangan = $request->keterangan;
        $pengajuan_dana->tanggal_pengajuan = $request->tanggal_pengajuan;
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
