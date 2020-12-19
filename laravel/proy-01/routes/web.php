<?php

use Illuminate\Support\Facades\Route;

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
    return view('menu');
});



Route::get('/productos', 'ProductosController@index');
Route::get('/productos/detalle', 'ProductosController@detalle');


Route::get('/empleados', 'EmpleadosController@index');
Route::get('/empleados/detalle/{id}', 'EmpleadosController@detalle');
Route::get('/empleados/nuevo', 'EmpleadosController@nuevo');
Route::get('/empleados/guardar', 'EmpleadosController@guardar');
Route::get('/empleados/editar/{id}', 'EmpleadosController@editar');
Route::get('/empleados/actualizar/{id}', 'EmpleadosController@actualizar');
Route::get('/empleados/eliminar/{id}', 'EmpleadosController@eliminar');
Route::get('/empleados/eliminarConfirmar/{id}', 'EmpleadosController@eliminarConfirmar');
