<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksi';

    public static function get_data_transaksi()
    {
        $data = DB::table('transaksis')
            ->select('transaksis.id_transaksi', 'tipe_transaksi','total', 
                'waktu_transaksi', 'deskripsi', 'bukti_invoice',
                'divisis.id_divisi', 'divisis.nama_divisi')
            ->join('divisis', 'divisis.id_divisi', '=', 'transaksis.id_divisi')
            ->get();
    
        return $data;
    }
}