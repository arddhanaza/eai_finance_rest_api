<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukti_pebayaran extends Model
{
    use HasFactory;
    protected $table = 'bukti_pembayaran';
    protected $primaryKey = 'id_pembayaran';
}
