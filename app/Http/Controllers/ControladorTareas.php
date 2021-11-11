<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class ControladorTareas extends Controller
{
    public function mostrar() {
        // CÓDIGO MOSTRAR TAREAS
        return view('contenido')->with('tareas', Tarea::all());
    }

    public function insertar(Request $request) {
        // CÓDIGO INSERTAR TAREAS
        $tarea = new Tarea;
        $tarea->nombre = $request->get('nombre');
        $tarea->save();
        
        return redirect('/');
    }

    public function eliminar($id) {
        // CÓDIGO ELIMINAR TAREAS
        $tarea = new Tarea;
        $tarea = Tarea::find($id);
        $tarea->delete();

        return redirect('/');
    }
}
