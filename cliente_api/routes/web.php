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

Route::get('/', 'action_controller@obtener_personas');
//obtener_persona
Route::get('/persona/{id?}', 'action_controller@obtener_persona')->name('persona');

Route::post('/insertar/', 'action_controller@insertar_persona')->name('insertar');
Route::post('/actualizar/', 'action_controller@actualizar_persona')->name('actualizar');

Route::get('/eliminar/{id?}', 'action_controller@eliminar_persona')->name('eliminar');