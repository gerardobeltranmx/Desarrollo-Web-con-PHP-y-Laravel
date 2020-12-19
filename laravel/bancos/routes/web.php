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

Route::get('/cuentas', 'CuentasController@index');
Route::get('/cuentas/detalle/{id}', 'CuentasController@detalle');
Route::get('/cuentas/nuevo', 'CuentasController@nuevo');
Route::get('/cuentas/guardar', 'CuentasController@guardar');


