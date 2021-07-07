<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtes7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtes_7s', function (Blueprint $table) {
            $table->increments('idsoal_t7');
            $table->text('mainSoal_t7')->nullable();
            $table->text('keterangan_t7')->nullable();
            $table->text('t7_jawaban')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtes_7s');
    }
}
