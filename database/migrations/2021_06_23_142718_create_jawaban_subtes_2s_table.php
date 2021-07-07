<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_2s', function (Blueprint $table) {
            $table->increments('id_sub2jawaban');
            $table->string('sub2_jawabanUser', 100)->nullable();
            $table->integer('sub2_idUser')->index()->unsigned();
            $table->integer('sub2_idSoal')->index()->unsigned();
            $table->enum('sub2_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub2_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub2_idSoal')
                    ->references('idsoal_t2')
                    ->on('subtes_2s')
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
        Schema::dropIfExists('jawaban_subtes_2s');
    }
}
