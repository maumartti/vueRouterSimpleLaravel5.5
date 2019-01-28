<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zonas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('departamentoID');
        });
        
        //agregamos zonas ARTIGAS
        DB::table('zonas')->insert(['nombre' => 'Artigas', 'departamentoID' => 1]);
        DB::table('zonas')->insert(['nombre' => 'Baltasar Brum', 'departamentoID' => 1]);
        DB::table('zonas')->insert(['nombre' => 'Bella Unión', 'departamentoID' => 1]);
        DB::table('zonas')->insert(['nombre' => 'Bernabé Rivera', 'departamentoID' => 1]);
        DB::table('zonas')->insert(['nombre' => 'Cuaro', 'departamentoID' => 1]);
        DB::table('zonas')->insert(['nombre' => 'Javier de Viana', 'departamentoID' => 1]);
        DB::table('zonas')->insert(['nombre' => 'Pintadito', 'departamentoID' => 1]);
        DB::table('zonas')->insert(['nombre' => 'Tomás Gomensoro', 'departamentoID' => 1]);
        DB::table('zonas')->insert(['nombre' => 'Topador', 'departamentoID' => 1]);

        //agregamos zonas CANELONES
        DB::table('zonas')->insert(['nombre' => 'Aeroparque', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Araminda', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Atlántida Norte', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Atlántida Sur', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Balneario Argentino', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Balneario Paraíso Suizo', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Barra de Carrasco', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Barrios Privados', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Barros Blancos', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Bello Horizonte', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Biarritz', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Canelones', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Ciudad de la Costa', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Colinas de Solymar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Colonia Nicolich', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Costa Azul', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Cuchilla Alta', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'El Bosque', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'El Colorado', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'El Pinar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Empalme Olmos', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Fortín de Santa Rosa', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Guazú - Virá', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Guazuvira', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Guazuvira Nuevo', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Jaureguiberry', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'La Floresta', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'La Paz', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'La Tuna', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Lagomar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Las Brujas', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Las Piedras', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Las Toscas', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Las vegas', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Lomas de Solymar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Los Cerrillos', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Los Titanes', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Marindia', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Médanos de Solymar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Migues', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Montes de Solymar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Neptunia', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Pando', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Parque de Carrasco', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Parque de Solymar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Parque del Plata Norte', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Parque del Plata Sur', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Paso Carrasco', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Pinamar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Pinares de Solymar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Progreso', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Salinas', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'San Antonio', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'San Cristóbal', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'San Jacinto', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'San José de Carrasco', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'San Luis', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'San Ramón', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Santa Ana', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Santa Lucía', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Santa Lucía del Este', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Santa Rosa', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Sauce', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Shangrilá', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Sierras del Mar- EL Galeon', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Solymar', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Tala', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Toledo', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Villa Aeroparque', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Villa Argentina', 'departamentoID' => 2]);
        DB::table('zonas')->insert(['nombre' => 'Villa El Tato', 'departamentoID' => 2]);
 
        //agregamos zonas CERRO LARGO
        DB::table('zonas')->insert(['nombre' => 'Aceguá', 'departamentoID' => 3]);
        DB::table('zonas')->insert(['nombre' => 'Cerro de las Cuentas', 'departamentoID' => 3]);
        DB::table('zonas')->insert(['nombre' => 'Fraile Muerto', 'departamentoID' => 3]);
        DB::table('zonas')->insert(['nombre' => 'Isidoro Noblía', 'departamentoID' => 3]);
        DB::table('zonas')->insert(['nombre' => 'Melo', 'departamentoID' => 3]);
        DB::table('zonas')->insert(['nombre' => 'Río Branco', 'departamentoID' => 3]);
        DB::table('zonas')->insert(['nombre' => 'Tres Islas', 'departamentoID' => 3]);

        //agregamos zonas COLONIA
        DB::table('zonas')->insert(['nombre' => 'Arrivillaga', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Artilleros', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Barker', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Blanca Arena', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Boca del Rosario', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Brisas del Plata', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Carmelo', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Cerros de San Juan', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Colonia Cosmopolita', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Colonia del Sacramento', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Colonia Mguelete', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Colonia Valdense', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Conchillas', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Cufré', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'El semillero', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'El Solado', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Estanzuela', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Juan Lacaze', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'La Paz', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Los Pinos', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Nueva Helvecia', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Nueva Palmira', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Ombúes de Lavalle', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Paraje Minuano', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Paso Antolín', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Paso Minuano', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Pastoreo', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Playa Azul', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Playa Britópolis', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Playa Parant', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Puerto Inglés', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Rosario', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Santa Regina', 'departamentoID' => 4]);
        DB::table('zonas')->insert(['nombre' => 'Tarariras', 'departamentoID' => 4]);

        //agregamos zonas DURAZNO
        DB::table('zonas')->insert(['nombre' => 'Durazno', 'departamentoID' => 5]);
        DB::table('zonas')->insert(['nombre' => 'San Jorge', 'departamentoID' => 5]);
        DB::table('zonas')->insert(['nombre' => 'Santa Bernardita', 'departamentoID' => 5]);

        //agregamos zonas FLORES
        DB::table('zonas')->insert(['nombre' => 'Trinidad', 'departamentoID' => 6]);
        DB::table('zonas')->insert(['nombre' => 'Andresito', 'departamentoID' => 6]);

        //agregamos zonas FLORIDA
        DB::table('zonas')->insert(['nombre' => '25 de Agosto', 'departamentoID' => 7]);
        DB::table('zonas')->insert(['nombre' => 'Cardal', 'departamentoID' => 7]);
        DB::table('zonas')->insert(['nombre' => 'Cerro Colorado', 'departamentoID' => 7]);
        DB::table('zonas')->insert(['nombre' => 'Florida', 'departamentoID' => 7]);
        DB::table('zonas')->insert(['nombre' => 'Fray Marcos', 'departamentoID' => 7]);
        DB::table('zonas')->insert(['nombre' => 'Independencia', 'departamentoID' => 7]);
        DB::table('zonas')->insert(['nombre' => 'La Cruz', 'departamentoID' => 7]);
        DB::table('zonas')->insert(['nombre' => 'Pintado', 'departamentoID' => 7]);
        DB::table('zonas')->insert(['nombre' => 'Sarandí Grande', 'departamentoID' => 7]);

        //agregamos zonas LAVALLEJA
        DB::table('zonas')->insert(['nombre' => 'Colón', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'Illescas', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'José Pedro Varela', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'La Mariscala', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'María Albina', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'Minas', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'Piraraja', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'Solís de Mataojo', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'Villa del Cerro', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'Villa Serrana', 'departamentoID' => 8]);
        DB::table('zonas')->insert(['nombre' => 'Zapican', 'departamentoID' => 8]);

        //agregamos zonas MALDONADO
        DB::table('zonas')->insert(['nombre' => 'Aidy Grill', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Aigua', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Arcobaleno', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Bahia del Pinar', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Balneario Buenos Aires', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Barrio Córdoba', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Barrio Country', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Barrio la Falda', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Beaulieu', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Beaullieu', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Bella Vista', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Beverly Hills', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Cantegril', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Castillo de Piria', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Centro', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Cerro del Toro', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Cerro San Antonio', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Chihuahua', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Club del Lago', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Club Laguna Blanca', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Edén Rock', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'El Caracol Costa Bonita', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'El Chorro', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'El Pejerrey', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'El Quijote', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'El Tesoro', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Estrella de Mar', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Fuente Venus', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Golf', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Gregorio Aznares', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Jagüel', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'José Ignacio', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'La Barra', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'La Cascada', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'La Gloria', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'La Juanita', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'La Pastora', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'La Pataia', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Laguna de Jose Ignacio', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Laguna del Diario', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Laguna del Sauce', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Laguna Garzón', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Lagunas del Diario', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Las Cumbres', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Las Delicias', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Las Flores', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Las Garzas', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Los Ángeles', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Lugano', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Maldonado', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Manantiales', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Montoya', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Ocean Park', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Pan de Azucar', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Península', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Pinares', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Piriápolis', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Piriapolis Centro Comercial', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Playa Brava', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Playa Grande', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Playa Hermosa', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Playa las Grutas', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Playa Mansa', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Playa Mansa Las Delicias', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Playa Mansa Pinares', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Playa Verde', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Portals', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Portezuelo', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Portezuelo Bosque', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Proa al Mar', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Pueblo Edén', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Pueblo Garzón', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Pueblo Obrero', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Puerto', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Punta Ballena', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Punta Colorada', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Punta del Chileno', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Punta del Este', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Punta Fría', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Punta Negra', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Punta Piedras', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Punta Shopping', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Rincón del Indio', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Rinconada', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Rinconada Alta', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Roosevelt', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'San Carlos', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'San Francisco', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'San Rafael', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'San Sebastián', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'San Vicente', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Santa Hilda', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Santa Isabel', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Santa Monica', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Santa Rita', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Sauce de Portezuelo', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Solanas', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Solís', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Tio Tom', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Zona El Golf', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Zona Hotel Argentino', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Zona Rural', 'departamentoID' => 9]);
        DB::table('zonas')->insert(['nombre' => 'Deseleccionar todos', 'departamentoID' => 9]);

        //agregamos zonas MONTEVIDEO
        DB::table('zonas')->insert(['nombre' => 'Aguada', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Aires Puros', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Arroyo Seco', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Atahualpa', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Bañados de Carrasco', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Barra de Carrasco', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Barrio Sur', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Bella Italia', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Bella Vista', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Belvedere', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Bolivar', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Brazo Oriental', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Buceo', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Camino Maldonado', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Capurro', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Capurro Bella Vista', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Carrasco', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Carrasco - Barrios con Seguridad', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Carrasco Este', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Carrasco Norte', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Casabo', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Casabo Pajas Blancas', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Casavalle', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Centro', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Cerrito', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Cerro', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Ciudad Vieja', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Colón', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Conciliación', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Cordón', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Flor de Maroñas', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Goes', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Golf', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Ituzaingó', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Jacinto Vera', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Jardines del Hipódromo', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'La Blanqueada', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'La Caleta', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'La Colorada', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'La Comercial', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'La Figurita', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'La Paloma Tomkinson', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'La Teja', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Larrañaga', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Las Acacias', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Las Canteras', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Lezica', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Malvín', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Malvín Norte', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Manga', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Marconi', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Maroñas', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Melilla', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Mercado Modelo', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Montevideo', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Nuevo París', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Pajas Blancas', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Palermo', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Parque Batlle', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Parque Miramar', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Paso de la Arena', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Paso Molino', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Peñarol', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Peñarol Lavalleja', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Perez Castellanos', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Piedras Blancas', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Pocitos', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Prado', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Prado Nueva Savona', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Puerto', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Puerto Buceo', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Punta Carretas', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Punta Espinillo', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Punta Gorda', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Punta Rieles', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Reducto', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Santiago Vázquez', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Sayago', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Tres Cruces', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Tres Ombues Pblo Victoria', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Unión', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Villa Biarritz', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Villa Dolores', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Villa Española', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Villa García Manga Rural', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Villa Muñoz', 'departamentoID' => 10]);
        DB::table('zonas')->insert(['nombre' => 'Zona Rural', 'departamentoID' => 10]);

        //agregamos zonas PAYSANDU
        DB::table('zonas')->insert(['nombre' => 'Chapicuy', 'departamentoID' => 11]);
        DB::table('zonas')->insert(['nombre' => 'Guaviyú', 'departamentoID' => 11]);
        DB::table('zonas')->insert(['nombre' => 'Guichón', 'departamentoID' => 11]);
        DB::table('zonas')->insert(['nombre' => 'Paysandú', 'departamentoID' => 11]);
        DB::table('zonas')->insert(['nombre' => 'Piedra Sola', 'departamentoID' => 11]);
        DB::table('zonas')->insert(['nombre' => 'Quebracho', 'departamentoID' => 11]);

        //agregamos zonas RIO NEGRO
        DB::table('zonas')->insert(['nombre' => 'Algorta', 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Andresito' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Barrio Anglo' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Cardozo' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Carlos Reyles' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Fray Bentos' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'General Borges', 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Grecco', 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Las Cañas' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Nuevo Berlín' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Pueblo Orgoroso' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Rincón del Bonete' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'San Javier' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Villa María' , 'departamentoID' => 12]);
        DB::table('zonas')->insert(['nombre' => 'Young' , 'departamentoID' => 12]);

        //agregamos zonas RIVERA
        DB::table('zonas')->insert(['nombre' => 'La Pedrera (Rivera)',  'departamentoID' => 13]);
        DB::table('zonas')->insert(['nombre' => 'Laguñón',  'departamentoID' => 13]);
        DB::table('zonas')->insert(['nombre' => 'Mandubí',  'departamentoID' => 13]);
        DB::table('zonas')->insert(['nombre' => 'Masoller',  'departamentoID' => 13]);
        DB::table('zonas')->insert(['nombre' => 'Minas de Corrales',  'departamentoID' => 13]);
        DB::table('zonas')->insert(['nombre' => 'Paso Campamento',  'departamentoID' => 13]);
        DB::table('zonas')->insert(['nombre' => 'Rivera',  'departamentoID' => 13]);
        DB::table('zonas')->insert(['nombre' => 'Santa Teresa',  'departamentoID' => 13]);
        DB::table('zonas')->insert(['nombre' => 'Tranqueras',  'departamentoID' => 13]);

        //agregamos zonas ROCHA
        DB::table('zonas')->insert(['nombre' => 'Aguas Dulces', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Antoniópolis', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Arachania', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Balneario la Alborada', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Balneario Puimayen', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Barra de Valizas', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Barra del Chuy', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Barra do Chui Brasil', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Barracas de la Pedrera', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Barrio Country', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Barrio Parque', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Cabo Polonio', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Casco Viejo', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Castillos', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Centro', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Chuy', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Costa Azul', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Diamantes de la Pedrera', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Dieciocho de Julio (Ro)', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'El Cabito', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Jose Ignacio', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'La Aguada', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'La Coronilla', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'La Esmeralda', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'La Paloma', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'La Pedrera', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'La Riviera', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Laguna de Rocha', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Laguna Garzón', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Laguna Garzón', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Las Garzas', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Lascano', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Lascano', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Los Botes', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Oceanía Del Polonio', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa Anaconda', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa Bahía', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa de la Viuda', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa del Barco', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa del Rivero', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa Desplayado', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa la Balconada', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa la Calavera (Norte)', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa Serena y Solari', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Playa Sur', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Pueblo Nuevo', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Punta del Diablo', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Punta Rubia', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Rincón del Rosario', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Rocha', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'San Antonio', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'San Sebastián de la Pedrera', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Santa Isabel de la Pedrera', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Santa María De Rocha', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Santa María De Rocha', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Santa María de Rocha', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Tajamares de la Pedrera', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Valizas', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Valizas', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Vuelta del Palmar', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Zona el Bosque', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Zona Rural', 'departamentoID' => 14]);
        DB::table('zonas')->insert(['nombre' => 'Zona Terminal', 'departamentoID' => 14]);

        //agregamos zonas SALTO
        DB::table('zonas')->insert(['nombre' => 'Arenitas Blancas', 'departamentoID' => 15]);
        DB::table('zonas')->insert(['nombre' => 'Artaux', 'departamentoID' => 15]);
        DB::table('zonas')->insert(['nombre' => 'Belén', 'departamentoID' => 15]);
        DB::table('zonas')->insert(['nombre' => 'Colonia 18 de Julio', 'departamentoID' => 15]);
        DB::table('zonas')->insert(['nombre' => 'Constitución', 'departamentoID' => 15]);
        DB::table('zonas')->insert(['nombre' => 'Salto', 'departamentoID' => 15]);
        DB::table('zonas')->insert(['nombre' => 'Termas del Arapey', 'departamentoID' => 15]);
        DB::table('zonas')->insert(['nombre' => 'Termas del Daymán', 'departamentoID' => 15]);

        //agregamos zonas SAN JOSE
        DB::table('zonas')->insert(['nombre' => 'Boca del Cufré', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Ciudad del Plata', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Delta del Tigre', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Ecilda Paullier', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Ituzaingó', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Kiyú', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Libertad', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Playa Pascual', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'San José', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'San José de Mayo', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Scavino', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Villa Rodríguez', 'departamentoID' => 16]);
        DB::table('zonas')->insert(['nombre' => 'Deseleccionar todos        ', 'departamentoID' => 16]);

        //agregamos zonas SORIANO
        DB::table('zonas')->insert(['nombre' => 'Canada Nieto', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'Cardona', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'Dolores', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'Egana', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'Florencio Sánchez', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'José Enrique Rodó', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'Mercedes', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'Palmitas', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'Risso', 'departamentoID' => 17]);
        DB::table('zonas')->insert(['nombre' => 'Santa Catalina', 'departamentoID' => 17]);

        //agregamos zonas TACUAREMBO
        DB::table('zonas')->insert(['nombre' => 'Clara', 'departamentoID' => 18]);
        DB::table('zonas')->insert(['nombre' => 'Paso Bonilla', 'departamentoID' => 18]);
        DB::table('zonas')->insert(['nombre' => 'Paso de los Toros', 'departamentoID' => 18]);
        DB::table('zonas')->insert(['nombre' => 'Paso del Cerro', 'departamentoID' => 18]);
        DB::table('zonas')->insert(['nombre' => 'San Gregorio de Polanco', 'departamentoID' => 18]);
        DB::table('zonas')->insert(['nombre' => 'Tacuarembó', 'departamentoID' => 18]);
        DB::table('zonas')->insert(['nombre' => 'Villa Ansina', 'departamentoID' => 18]);

        //agregamos zonas TREINTA Y TRES
        DB::table('zonas')->insert(['nombre' => 'Isla Patrulla', 'departamentoID' => 19]);
        DB::table('zonas')->insert(['nombre' => 'Treinta y Tres', 'departamentoID' => 19]);
        DB::table('zonas')->insert(['nombre' => 'Tupambae', 'departamentoID' => 19]);
        DB::table('zonas')->insert(['nombre' => 'Vergara', 'departamentoID' => 19]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zonas');
    }
}



