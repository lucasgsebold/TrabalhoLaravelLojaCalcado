<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalcado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcado', function (Blueprint $table) {
            $table->increments('calcodigo');
            $table->string('calmarca', 50);
            $table->string('caltamanho', 5);
            $table->string('calquantidade', 3);
            $table->decimal('calvalor', 6, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calcado');
    }
}
