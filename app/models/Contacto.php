<?php
	class Contacto extends Eloquent {

		protected $table = 'contactos';

		public function usuario(){
			return $this->belongsTo('User');
		}

	}
?>