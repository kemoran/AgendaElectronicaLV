<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creartblcontactos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creación de tabla contactos
		Schema::create('contactos', function($tabla){
			$tabla->increments('id_contacto');
			$tabla->integer('id_usuario')->unsigned();
			$tabla->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
			$tabla->string('primer_nombre',50);
			$tabla->string('segundo_nombre',50);
			$tabla->string('primer_apellido',50);
			$tabla->string('segundo_apellido',50);
			$tabla->string('telefono',8);
			$tabla->string('correo_electronico',100);
			$tabla->string('residencia');
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
		// Eliminación de tabla contactos
		Schema::drop('contactos');
	}

}
