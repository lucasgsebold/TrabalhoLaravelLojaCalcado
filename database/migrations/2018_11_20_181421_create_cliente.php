<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('clicodigo');
            $table->string('clinome', 50);
            $table->string('clicpf', 20);
            $table->string('cliidade', 3);
            $table->string('cliemail', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente');
    }
}
