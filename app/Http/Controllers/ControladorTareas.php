<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class ControladorTareas extends Controller
{
    public function mostrar() {
        // CÓDIGO MOSTRAR TAREAS
        return view('contenido');
    }

    public function insertar(Request $request) {
        // CÓDIGO INSERTAR TAREAS
        $tarea = new Tarea;
        $tarea->fill(['nombre' => $request->get('nombre')]);
        
        return redirect('contenido');
    }

    public function eliminar($id) {
        // CÓDIGO ELIMINAR TAREAS
        $tarea = new Tarea;
        $tarea = Tarea::find($id);
        $tarea->delete();

        return redirect('contenido');
    }
}
