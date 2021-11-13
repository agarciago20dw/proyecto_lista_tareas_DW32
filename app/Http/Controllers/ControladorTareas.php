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
        if ($request->get('nombre') != "") {
            $tarea = new Tarea;
            $tarea->nombre = $request->get('nombre');
            $tarea->save();
            
            return redirect('/');
        }
        else {
            return view('formulario')->with('error', '¡DEBES RELLENAR EL CAMPO PARA AÑADIR UNA TAREA!');
        }
        
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

    public function buscar() {
        // CÓDIGO MOSTRAR FORMULARIO
        return view('buscar')  ;
    }

    public function buscar_texto (Request $request) {
        // CÓDIGO BUSCAR TEXTO
        $tareas_encontradas = [];
        if ($request->get('texto') != "") {
            $tareas_encontradas = DB::table('tareas')
                            ->where('tareas.nombre', 'LIKE', '%' . $request->get('texto') . '%')
                            ->get();
        }
        
        return view('buscar')->with('tareas_encontradas', $tareas_encontradas);   
    }
}
