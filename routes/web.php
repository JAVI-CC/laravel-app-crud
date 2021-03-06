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

/*Route::get('/', function () {
    return view('usuarios');
});*/

Route::get('/', 'UsuariosController@index');

Route::resource('usuarios', 'UsuariosController');

Route::get('/productos', 'ProductoController@index');

Route::resource('producto', 'ProductoController');

Route::get('/entrega', 'EntregaController@index');

Route::resource('entrega', 'EntregaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


