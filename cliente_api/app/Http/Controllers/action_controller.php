<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class action_controller extends Controller
{

    //No sé como tiene configurado el locahost, lo dejaremos estándar
    //http://IP del otro pc:8080/lab_2/servidor_api/public/api/
    //Sería para acceder desde otra pc, se pasaa
    var $url = 'http://localhost:8000/api/'; 

    public function obtener_personas()
    {
        return view('personas', ['personas' => $this->obtener_json_personas()]);
    }
    public function obtener_persona($id)
    {
        $persona = json_decode(Http::get($this->url . 'obtener_persona/' . $id));

        $datos = array(
            'editar' => true, 'id' => $persona->id, 'nombre' => $persona->nombre,
            'telefono' => $persona->telefono, 'correo' => $persona->correo, 'personas' => $this->obtener_json_personas()
        );
        return view('personas', $datos);
    }
    public function insertar_persona(Request $datos)
    {
        $response = Http::post($this->url . 'insertar_persona', [
            'nombre' => $datos->nombre, 'correo' => $datos->correo,
            'telefono' => $datos->telefono
        ]);
        return back();
    }
    public function actualizar_persona(Request $datos)
    {
        $response = Http::post($this->url . 'actualizar_persona', [
            'id' => $datos->id, 'nombre' => $datos->nombre, 'correo' => $datos->correo,
            'telefono' => $datos->telefono
        ]);
        return redirect('/')->with('personas', $this->obtener_json_personas());
    }
    public function eliminar_persona($id)
    {
        $response = Http::get($this->url . 'eliminar_persona/' . $id);
        return back();
    }

    public function obtener_json_personas()
    {
        $personas = json_decode(Http::get($this->url . 'obtener_personas'));
        return $personas;
    }
}
