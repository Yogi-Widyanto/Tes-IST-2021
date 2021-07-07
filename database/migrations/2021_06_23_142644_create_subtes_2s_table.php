<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtes2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtes_2s', function (Blueprint $table) {
            $table->increments('idsoal_t2');
            $table->text('keterangan_t2')->nullable();
            $table->string('t2_opsia', 100);
            $table->string('t2_opsib', 100);
            $table->string('t2_opsic', 100);
            $table->string('t2_opsid', 100);
            $table->string('t2_opsie', 100);
            $table->string('t2_jawaban', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtes_2s');
    }
}
