<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/', array('as' => 'Acceso', 'uses' => 'IndiceController@Acceso'));

Route::get('/', array('as' => 'OlvidarContrasenha', 'uses' => 'IndiceController@Acceso'));
Route::get('/', array('as' => 'RegistrarUsuario', 'uses' => 'IndiceController@Acceso'));

//Route::match(array('GET', 'POST'), 'Usuario/Editar/{id_usuario}/', array('as' => 'UsuarioEditar', 'uses' => 'UsuarioController@UsuarioEditar'));

//Route::post('Usuario/Eliminar/{id_usuario}/', array('as' => 'UsuarioEliminar', 'uses' => 'UsuarioController@UsuarioEliminar'));
