<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggungans', function (Blueprint $table) {
            $table->bigIncrements('id_tanggungan');
            $table->string('status_tanggungan');
            $table->string('periode_tanggungan');
            $table->string('tujuan_tanggungan');
            $table->bigInteger('total_tanggungan');
            $table->foreignId('id_asset')
                ->references('id_asset')->on('assets')
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
        Schema::dropIfExists('tanggungans');
    }
}
