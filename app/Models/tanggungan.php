<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tanggungan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tanggungan';
    protected $table = 'tanggungans';

    public static function get_data_tanggungan()
    {
        $data = DB::table('tanggungans')
            ->select('tanggungans.id_tanggungan', 'status_tanggungan', 'periode_tanggungan',
                'tujuan_tanggungan', 'total_tanggungan', 'tanggungans.id_asset', 'assets.nama_asset',
                'divisis.nama_divisi', 'divisis.id_divisi')
            ->join('assets', 'assets.id_asset', '=', 'tanggungans.id_asset')
            ->join('divisis', 'divisis.id_divisi', '=', 'assets.id_divisi')
            ->get();
        return $data;
    }
}
