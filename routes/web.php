<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

Auth::routes();

//Administrador
Route::group(['middleware' => ['admin']], function () {
    Route::get('/administrador', 'HomeController@administrador');
    Route::get('/registrarProducto', 'ProductoController@registrarV');
    Route::post('/guardarProducto', 'ProductoController@registrar');
});

Route::group(['middleware' => ['auth']], function () {
	Route::get('/inicio', 'HomeController@inicio');
	Route::get('/editar/{id}', 'HomeController@editar');
	Route::post('/actualizar/{id}', 'HomeController@actualizar');
    Route::get('/productos', 'ProductoController@productos');
});
