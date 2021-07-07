<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_4s', function (Blueprint $table) {
            $table->increments('id_sub4jawaban');
            $table->text('sub4_jawabanUser')->nullable();
            $table->integer('sub4_idUser')->index()->unsigned();
            $table->integer('sub4_idSoal')->index()->unsigned();
            $table->enum('sub4_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub4_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub4_idSoal')
                    ->references('idsoal_t4')
                    ->on('subtes_4s')
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
        Schema::dropIfExists('jawaban_subtes_4s');
    }
}
