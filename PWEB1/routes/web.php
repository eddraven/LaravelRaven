<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('numero/{num?}',function($num='No ingresó ningún parámetro...'){
	return 'Número ingresado por URL es : '.$num;
})->where('num', '[0-9]+');


//mi propio ejemplo
	//ruta básica con vista
	Route::get('fotos',function(){
		return view('fotos');
	});

	//ruta con parametro a una vista (fotos)
	Route::get('fotos/{nume}',function($numm='No ingresó ningún parámetro...'){
		return view('fotos', ['num'=>$numm]);
	});
