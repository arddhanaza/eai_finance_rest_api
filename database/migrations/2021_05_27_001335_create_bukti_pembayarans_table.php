<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuktiPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_pembayarans', function (Blueprint $table) {
            $table->bigIncrements('id_pembayaran');
            $table->string('nama_pembayaran');
            $table->timestamp('tanggal_submisi');
            $table->text('keterangan');
            $table->foreignId('id_transaksi')
                ->references('id_transaksi')->on('transaksis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti_pembayarans');
    }
}
