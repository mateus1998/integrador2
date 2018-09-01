<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaAtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_ato')->unsigned();
            $table->integer('periodo_letivo')->unsigned();
            $table->string('situacao');
            $table->string('data');
            $table->string('titulo_ato');
            $table->string('descricao');
            $table->string('cancelar_motivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atos');
    }
}
