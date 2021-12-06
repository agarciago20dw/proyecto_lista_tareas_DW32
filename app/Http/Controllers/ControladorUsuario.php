<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class ControladorUsuario extends Controller
{
    public function formulario() {
        // RETORNAMOS LA VISTA 'formulario_usuarios' PARA AÑADIR UN NUEVO USUARIO
        return view('formulario_usuarios');
    }

    public function insertar(Request $request) {
        // SI EL CAMPO 'nombre' DEL FORMULARIO NO ESTÁ VACÍO CREAMOS UNA NUEVA TAREA Y LA INSERTAMOS EN LA BD Y REDIRECCIONAMOS A LA RAÍZ DEL PROYECTO, SI NO DEVOLVEMOS LA VISTA EN LA QUE ESTAMOS ('formulario') CON UN MENSAJE DE ERROR
        if (($request->get('nombre') != "") && ($request->get('apellido') != "")) {
            $usuario = new Usuario;
            $usuario->nombre = $request->get('nombre');
            $usuario->apellido = $request->get('apellido');
            $usuario->save();
            
            return redirect('/task');
        }
        else {
            return view('formulario_usuarios')->with('error', '¡DEBES RELLENAR LOS CAMPOS PARA AÑADIR UN USUARIO!');
        }
        
    }
}
