<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_9s', function (Blueprint $table) {
            $table->increments('id_sub9jawaban');
            $table->text('sub9_jawabanUser')->nullable();
            $table->integer('sub9_idUser')->index()->unsigned();
            $table->integer('sub9_idSoal')->index()->unsigned();
            $table->enum('sub9_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub9_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub9_idSoal')
                    ->references('idsoal_t9')
                    ->on('subtes_9s')
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
        Schema::dropIfExists('jawaban_subtes_9s');
    }
}
