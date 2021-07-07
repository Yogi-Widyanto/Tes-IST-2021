<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_5s', function (Blueprint $table) {
            $table->increments('id_sub5jawaban');
            $table->text('sub5_jawabanUser')->nullable();
            $table->integer('sub5_idUser')->index()->unsigned();
            $table->integer('sub5_idSoal')->index()->unsigned();
            $table->enum('sub5_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub5_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub5_idSoal')
                    ->references('idsoal_t5')
                    ->on('subtes_5s')
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
        Schema::dropIfExists('jawaban_subtes_5s');
    }
}
