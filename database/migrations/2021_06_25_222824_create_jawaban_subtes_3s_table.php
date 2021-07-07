<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_3s', function (Blueprint $table) {
            $table->increments('id_sub3jawaban');
            $table->string('sub3_jawabanUser', 100)->nullable();
            $table->integer('sub3_idUser')->index()->unsigned();
            $table->integer('sub3_idSoal')->index()->unsigned();
            $table->enum('sub3_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub3_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub3_idSoal')
                    ->references('idsoal_t3')
                    ->on('subtes_3s')
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
        Schema::dropIfExists('jawaban_subtes_3s');
    }
}
