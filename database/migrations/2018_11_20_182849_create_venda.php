<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->increments('vendacodigo');
            $table->date('vendadata');      
            $table->string('vendaformapag');
            $table->integer('clicodigo');
            $table->integer('vencodigo');
            $table->integer('calcodigo');

            $table->foreign('clicodigo')->references('clicodigo')->on('cliente');
            $table->foreign('vencodigo')->references('vencodigo')->on('vendedor');
            $table->foreign('calcodigo')->references('calcodigo')->on('calcado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venda');
    }
}
