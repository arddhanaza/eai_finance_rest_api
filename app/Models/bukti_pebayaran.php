<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class bukti_pebayaran extends Model
{
    use HasFactory;
    protected $table = 'bukti_pembayarans';
    protected $primaryKey = 'id_pembayaran';

    public static function get_data_bukti_pembayaran()
    {
        $data = DB::table('bukti_pembayarans')
            ->select('bukti_pembayarans.id_pembayaran', 'nama_pembayaran', 'tanggal_submisi', 'keterangan',
                'bukti_pembayarans.id_transaksi','transaksis.tipe_transaksi', 'divisis.nama_divisi', 'divisis.id_divisi')
            ->join('transaksis', 'transaksis.id_transaksi', '=', 'bukti_pembayarans.id_transaksi')
            ->join('divisis', 'divisis.id_divisi', '=', 'transaksis.id_divisi')
            ->get();
        return $data;
    }
}

