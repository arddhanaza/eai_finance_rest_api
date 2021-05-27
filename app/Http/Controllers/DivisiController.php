<?php

namespace App\Http\Controllers;

use App\Models\divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        return divisi::all();
    }

    public function create(Request $request)
    {
        $divisi = new divisi();
        $divisi->nama_divisi = $request->nama_divisi;
        $divisi->save();

        return '201, Data Berhasil Disimpan';
    }
}
