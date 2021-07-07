<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes8sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_8s', function (Blueprint $table) {
            $table->increments('id_sub8jawaban');
            $table->text('sub8_jawabanUser')->nullable();
            $table->integer('sub8_idUser')->index()->unsigned();
            $table->integer('sub8_idSoal')->index()->unsigned();
            $table->enum('sub8_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub8_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub8_idSoal')
                    ->references('idsoal_t8')
                    ->on('subtes_8s')
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
        Schema::dropIfExists('jawaban_subtes_8s');
    }
}
