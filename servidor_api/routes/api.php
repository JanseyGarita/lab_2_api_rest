<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('obtener_personas','personas_controller@obtener_personas');

Route::get('obtener_persona/{id?}','personas_controller@obtener_persona');

Route::post('insertar_persona','personas_controller@insertar_persona');

Route::post('actualizar_persona/{id?}','personas_controller@actualizar_persona');

Route::get('eliminar_persona/{id?}','personas_controller@eliminar_persona');