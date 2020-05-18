<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class personas_controller extends Controller
{

    public function obtener_personas()
    {
        return Persona::all();
    }
    public function obtener_persona($id)
    {
        return Persona::find($id);
    }
    public function insertar_personas(Request $datos)
    {
        return Persona::insertar_personas($datos);
    }
    public function actualizar_persona(Request $datos)
    {
        return Persona::actualizar_persona($datos);
    }
}
