<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'users';
	protected $table = 'usuarios';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');
	protected $hidden = array('contrasenha', 'remember_token');

	/**
	 * Obtiene el identificador unico del usuario
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier(){
		return $this->getKey();
	}

	/**
	 * Obtiene la contraseña del usuario
	 *
	 * @return string
	 */
	public function getAuthPassword(){
		return $this->contrasenha;
	}

	/**
	 * Obtiene el correo electronico
	 *
	 * @return string
	 */
	public function getReminderEmail(){
		return $this->correo_electronico;
	}

	public function contacto(){
		return $this->hasMany('Contactos', 'id_usuario');
	}

}
