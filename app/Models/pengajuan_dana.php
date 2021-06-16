<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pengajuan_dana extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_danas';
    protected $primaryKey = 'id_pengajuan';

    public static function get_data_pengajuan_dana()
    {
        $data = DB::table('pengajuan_danas')
            ->select('pengajuan_danas.id_pengajuan', 'divisis.nama_divisi', 'penanggung_jawab', 'keterangan',
                'nomor_rekening', 'tanggal_pengajuan', 'divisis.id_divisi')            
            ->join('divisis', 'divisis.id_divisi', '=', 'pengajuan_danas.id_divisi')
            ->get();
        return $data;
    }
}
