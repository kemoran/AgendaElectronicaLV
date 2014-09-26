<?php
	class IndiceController extends BaseController{
		
		//Controlador para Acceso al sistema
		public function Acceso(){
			return View::make('Indice.Acceso');
		}

	}
?>