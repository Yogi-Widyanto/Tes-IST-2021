<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHafalanSubtes9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hafalan_subtes9s', function (Blueprint $table) {
            $table->increments('id_hafalan');
            $table->string('kata_kunci', 100)->nullable();
            $table->string('sub_kata1', 100)->nullable();
            $table->string('sub_kata2', 100)->nullable();
            $table->string('sub_kata3', 100)->nullable();
            $table->string('sub_kata4', 100)->nullable();
            $table->string('sub_kata5', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hafalan_subtes9s');
    }
}
