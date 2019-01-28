<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePropiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function(Blueprint $table){
            $table->increments('id');
            $table->string('titulo');
            $table->string('operacion');
            $table->string('precio');
            $table->string('financia');
            $table->string('propiedad');
            $table->string('direccion');
            $table->integer('cuartos');
            $table->integer('baños');
            $table->integer('garajes');
            $table->integer('metros_propiedad')->nullable();
            $table->integer('metros_terreno')->nullable();
            $table->string('estado');
            $table->string('disposicion')->nullable();
            $table->string('primera_linea_playa')->nullable();
            $table->string('distancia_playa')->nullable();
            $table->integer('plantas');
            $table->string('piso')->nullable();
            $table->string('cuenta_con')->nullable();
            $table->string('descripcion');
            $table->string('garantia')->nullable();
            $table->string('zonaID');
            $table->string('departamentoID');
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
        Schema::dropIfExists('propiedades');
    }
}
