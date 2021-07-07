<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtes3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtes_3s', function (Blueprint $table) {
            $table->increments('idsoal_t3');
            $table->text('keterangan_t3')->nullable();
            $table->string('t3_opsia', 100);
            $table->string('t3_opsib', 100);
            $table->string('t3_opsic', 100);
            $table->string('t3_opsid', 100);
            $table->string('t3_opsie', 100);
            $table->string('t3_jawaban', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtes_3s');
    }
}
