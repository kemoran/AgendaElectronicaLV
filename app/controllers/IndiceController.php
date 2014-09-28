<?php
	class IndiceController extends BaseController{
		
		//Controlador para Acceso al sistema
		public function Acceso(){
			return View::make('Indice.Acceso');
		}

		//Controlador para Registro de usuarios
		public function RegistrarUsuario(){
			if(Request::isMethod('get')){
				return View::make('Indice.RegistrarUsuario', array());
			}
			elseif (Request::isMethod('post')) {
				//Proceso de validación en Laravel 4
				$inputs = Input::all(); //Obtención de los input
				$reglas = array( //Creación de reglas por cada input
					'txtNom1' => 'required',
					'txtApe1' => 'required',
					'txtNomUsuario' => 'required|unique:usuarios,nombre_usuario',
					'txtContrasenha' => 'required',
				);
				$mensajes = array( //Personalización de mensajes de error
					'required' => 'Campo obligatorio',
					'unique' => 'Usuario ya registrado',
				);

				$validar = Validator::make($inputs, $reglas, $mensajes);//Aplicación de validación
				
				if($validar->fails()){//Comprobación de validación
					return Redirect::back()->withErrors($validar);//Impresión de errores
				}
				else{
					$usuario = new User;//Creación de nueva instancia par inserción de registro
					$usuario->primer_nombre = Input::get('txtNom1');
					$usuario->segundo_nombre = Input::get('txtNom2');
					$usuario->primer_apellido = Input::get('txtApe1');
					$usuario->segundo_apellido = Input::get('txtApe2');
					$usuario->nombre_usuario = Input::get('txtNomUsuario');
					$usuario->contrasenha = Hash::make(Input::get('txtContrasenha'));
					$usuario->save();//Insert de registro
					return Redirect::to('/');
				}
			}
		}
		//Fin de Controlador para Registro de usuarios

	}
?>