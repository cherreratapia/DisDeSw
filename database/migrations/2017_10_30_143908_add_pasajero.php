<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPasajero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajero', function(Blueprint $table){
            $table->increments('id');
            $table->string('Run');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->integer('Telefono');
            $table->boolean('Profugo')->default('0');

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
        Schema::drop('pasajero');
    }
}
