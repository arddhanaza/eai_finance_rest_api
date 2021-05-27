<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembayaranTanggungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembayaran_tanggungans', function (Blueprint $table) {
            $table->bigIncrements('id_pembayaran');
            $table->foreignId('id_transaksi')
                ->references('id_transaksi')->on('transaksis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('id_tanggungan')
                ->references('id_tanggungan')->on('tanggungans')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('total_pembayaran');
            $table->timestamp('tanggal_pembayaran');
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
        Schema::dropIfExists('detail_pembayaran_tanggungans');
    }
}
