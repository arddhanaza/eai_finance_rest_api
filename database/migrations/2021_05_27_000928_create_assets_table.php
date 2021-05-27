<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('id_asset');
            $table->string('nama_asset');
            $table->bigInteger('valuasi_asset');
            $table->date('tanggal_aktif');
            $table->string('jenis_asset');
            $table->string('tipe_asset');
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
        Schema::dropIfExists('assets');
    }
}
