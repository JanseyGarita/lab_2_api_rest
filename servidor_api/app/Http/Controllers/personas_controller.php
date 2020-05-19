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
    public function insertar_persona(Request $datos)
    {
        $persona = new Persona;
        $persona->nombre = ($datos->nombre != null) ? $datos->nombre : $persona->nombre;
        $persona->telefono = ($datos->telefono != null) ? $datos->telefono : $persona->telefono;
        $persona->correo = ($datos->correo != null) ? $datos->correo : $persona->correo;
        $persona->save();
        return "Insertado";
    }
    public function actualizar_persona(Request $datos)
    {
        $persona = Persona::find($datos->id);
        $persona->nombre = ($datos->nombre != null) ? $datos->nombre : $persona->nombre;
        $persona->telefono = ($datos->telefono != null) ? $datos->telefono : $persona->telefono;
        $persona->correo = ($datos->correo != null) ? $datos->correo : $persona->correo;
        $persona->save();
        return $persona;
    }

    public function eliminar_persona($id)
    {
        return Persona::find($id)->delete();
    }
}
