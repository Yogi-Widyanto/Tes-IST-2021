<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_1s', function (Blueprint $table) {
            $table->increments('id_sub1jawaban');
            $table->string('sub1_jawabanUser', 100)->nullable();
            $table->integer('sub1_idUser')->index()->unsigned();
            $table->integer('sub1_idSoal')->index()->unsigned();
            $table->enum('sub1_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub1_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub1_idSoal')
                    ->references('idsoal_t1')
                    ->on('subtes_1s')
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
        Schema::dropIfExists('jawaban_subtes_1s');
    }
}
