<?php

namespace App\Http\Controllers;

use App\Models\divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = divisi::all();
        return response()->json($divisi, 200);
    }

    public function create(Request $request)
    {
        $divisi = new divisi();
        $divisi->nama_divisi = $request->nama_divisi;
        $divisi->save();

        return response()->json($divisi, 201);
    }
}
