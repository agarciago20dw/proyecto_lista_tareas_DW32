<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnadirTarea;
use App\Models\Usuario;

class ControladorUsuario extends Controller
{
    public function formulario() {
        // RETORNAMOS LA VISTA 'formulario_usuarios' PARA AÑADIR UN NUEVO USUARIO
        return view('formulario_usuarios');
    }

    public function insertar(AnadirTarea $request) {
        // SI EL CAMPO 'nombre' DEL FORMULARIO NO ESTÁ VACÍO CREAMOS UNA NUEVA TAREA Y LA INSERTAMOS EN LA BD Y REDIRECCIONAMOS A LA RAÍZ DEL PROYECTO, SI NO DEVOLVEMOS LA VISTA EN LA QUE ESTAMOS ('formulario') CON UN MENSAJE DE ERROR
        $usuario = new Usuario;
        $usuario->nombre = $request->get('nombre');
        $usuario->apellido = $request->get('apellido');
        $usuario->save();
        
        return redirect('/task');   
    }
}
