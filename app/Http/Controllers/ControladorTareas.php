<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;

class ControladorTareas extends Controller
{
    public function mostrar() {
        // CÓDIGO MOSTRAR TAREAS
        return view('lista')->with('tareas', Tarea::all());
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

    public function formulario() {
        // CÓDIGO MOSTRAR FORMULARIO
        return view('formulario');
    }

    public function buscar(Request $request) {
        // CÓDIGO MOSTRAR FORMULARIO
        $tareas_encontradas = null;
        if ($request->get('texto') != null) {
            $tareas_encontradas = DB::table('tareas')
                  ->where('tareas.nombre', 'LIKE', '%' . $request->get('texto') . '%')
                  ->get();
        }
        
       
        return view('buscar')->with('tareas_encontradas', $tareas_encontradas);
    }
}
