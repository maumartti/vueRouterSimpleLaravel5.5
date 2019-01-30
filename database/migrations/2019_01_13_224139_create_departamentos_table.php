<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('prioridad')->nullable()->default(0);
        });

        //agregamos todos los 19 departamentos del Uruguay
        DB::table('departamentos')->insert(['nombre' => 'Artigas']);
        DB::table('departamentos')->insert(['nombre' => 'Canelones']);
        DB::table('departamentos')->insert(['nombre' => 'Cerro Largo']);
        DB::table('departamentos')->insert(['nombre' => 'Colonia']);
        DB::table('departamentos')->insert(['nombre' => 'Durazno']);
        DB::table('departamentos')->insert(['nombre' => 'Flores']);
        DB::table('departamentos')->insert(['nombre' => 'Florida']);
        DB::table('departamentos')->insert(['nombre' => 'Lavalleja']);
        DB::table('departamentos')->insert(['nombre' => 'Maldonado']);
        DB::table('departamentos')->insert(['nombre' => 'Montevideo']);
        DB::table('departamentos')->insert(['nombre' => 'Paysandú']);
        DB::table('departamentos')->insert(['nombre' => 'Río Negro']);
        DB::table('departamentos')->insert(['nombre' => 'Rivera']);
        DB::table('departamentos')->insert(['nombre' => 'Rocha']);
        DB::table('departamentos')->insert(['nombre' => 'Salto']);
        DB::table('departamentos')->insert(['nombre' => 'San José']);
        DB::table('departamentos')->insert(['nombre' => 'Soriano']);
        DB::table('departamentos')->insert(['nombre' => 'Tacuarembó']);
        DB::table('departamentos')->insert(['nombre' => 'Treinta y Tres']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
