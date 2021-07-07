<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_7s', function (Blueprint $table) {
            $table->increments('id_sub7jawaban');
            $table->text('sub7_jawabanUser')->nullable();
            $table->integer('sub7_idUser')->index()->unsigned();
            $table->integer('sub7_idSoal')->index()->unsigned();
            $table->enum('sub7_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub7_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub7_idSoal')
                    ->references('idsoal_t7')
                    ->on('subtes_7s')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_subtes_7s');
    }
}
