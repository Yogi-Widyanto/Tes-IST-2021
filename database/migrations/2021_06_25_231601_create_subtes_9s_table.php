<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtes9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtes_9s', function (Blueprint $table) {
            $table->increments('idsoal_t9');
            $table->text('keterangan_t9')->nullable();
            $table->string('t9_opsia', 100);
            $table->string('t9_opsib', 100);
            $table->string('t9_opsic', 100);
            $table->string('t9_opsid', 100);
            $table->string('t9_opsie', 100);
            $table->string('t9_jawaban', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtes_9s');
    }
}
