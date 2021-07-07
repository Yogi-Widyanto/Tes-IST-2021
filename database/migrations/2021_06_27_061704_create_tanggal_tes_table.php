<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggalTesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggal_tes', function (Blueprint $table) {
            $table->increments('id_tanggalTes');
            $table->string('keterangan_tes', 100)->nullable();
            $table->date('tglMulai');
            $table->date('tglHasil');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggal_tes');
    }
}
