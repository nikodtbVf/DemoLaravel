<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('/', function () {
    return view('welcome');
});
Route::get('prueba',function(){
	return "Hola Routes";
});
Route::get('edad/{edad}',function($edad){
	return "Mi edad es ".$edad;
});
Route::get('nombre/{nombre?}',function($nombre = "Pepe"){
	return "Mi nombre es ".$nombre;
});
Route::resource('movie','MovieController');*/
Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');
Route::resource('usuario','UsuarioController');