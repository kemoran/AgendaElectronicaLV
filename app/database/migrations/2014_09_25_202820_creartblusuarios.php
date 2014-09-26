<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creartblusuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creación de tabla usuarios
		Schema::create('usuarios', function($tabla){
			$tabla->increments('id_usuario');
			$tabla->string('nombre_usuario',12)->unique();;
			$tabla->string('contrasenha');
			$tabla->string('primer_nombre',50);
			$tabla->string('segundo_nombre',50);
			$tabla->string('primer_apellido',50);
			$tabla->string('segundo_apellido',50);
			$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Eliminación de tabla usuarios
		Schema::drop('usuarios');
	}

}
