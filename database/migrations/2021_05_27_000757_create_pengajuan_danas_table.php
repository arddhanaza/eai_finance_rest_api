<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanDanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_danas', function (Blueprint $table) {
            $table->bigIncrements('id_pengajuan');
            $table->string('penanggung_jawab');
            $table->string('nomor_rekening');
            $table->text('keterangan');
            $table->date('tanggal_pengajuan');
            $table->foreignId('id_divisi')
                ->references('id_divisi')->on('divisis')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('pengajuan_danas');
    }
}
