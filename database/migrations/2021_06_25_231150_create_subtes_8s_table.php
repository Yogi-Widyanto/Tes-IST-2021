<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtes8sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtes_8s', function (Blueprint $table) {
            $table->increments('idsoal_t8');
            $table->text('mainSoal_t8')->nullable();
            $table->text('keterangan_t8')->nullable();
            $table->text('t8_jawaban')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtes_8s');
    }
}
