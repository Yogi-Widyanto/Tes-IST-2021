<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtes1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtes_1s', function (Blueprint $table) {
            $table->increments('idsoal_t1');
            $table->text('keterangan_t1')->nullable();
            $table->string('t1_opsia', 100);
            $table->string('t1_opsib', 100);
            $table->string('t1_opsic', 100);
            $table->string('t1_opsid', 100);
            $table->string('t1_opsie', 100);
            $table->string('t1_jawaban', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtes_1s');
    }
}
