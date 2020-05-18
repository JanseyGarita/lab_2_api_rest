<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Persona extends Model
{

    public function insertar_persona($datos)
    {
        $persona = new Persona;
        $persona->nombre = $datos->nombre;
        $persona->telefono = $datos->telefono;
        $persona->correo = $datos->correo;
        $persona->save();
    }

    public function actualizar_persona($datos)
    {
        $persona = Persona::find($datos->id);
        $persona->nombre = $datos->nombre;
        $persona->telefono = $datos->telefono;
        $persona->correo = $datos->correo;
        $persona->save();
    }

    public function eliminar_persona($id)
    {
        Persona::find($id)->delete();
    }
}
