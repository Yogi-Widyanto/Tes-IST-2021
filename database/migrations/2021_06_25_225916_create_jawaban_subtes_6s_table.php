<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSubtes6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_subtes_6s', function (Blueprint $table) {
            $table->increments('id_sub6jawaban');
            $table->text('sub6_jawabanUser')->nullable();
            $table->integer('sub6_idUser')->index()->unsigned();
            $table->integer('sub6_idSoal')->index()->unsigned();
            $table->enum('sub6_nilaiJawaban', ['benar', 'salah'])->nullable();

            $table->foreign('sub6_idUser')
                    ->references('id_user')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('sub6_idSoal')
                    ->references('idsoal_t6')
                    ->on('subtes_6s')
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
        Schema::dropIfExists('jawaban_subtes_6s');
    }
}
