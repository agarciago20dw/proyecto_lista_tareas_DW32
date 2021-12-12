<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class ControladorTareas extends Controller
{
    public function mostrar() {
        // RETORNAMOS LA VISTA 'lista' CON EL PARÁMETRO 'tareas' QUE ES UN ARRAY CON TODAS LAS TAREAS DE LA BD
        return view('lista')->with('tareas', Tarea::all());
    }

    public function insertar(Request $request) {
        // SI EL CAMPO 'nombre' DEL FORMULARIO NO ESTÁ VACÍO CREAMOS UNA NUEVA TAREA Y LA INSERTAMOS EN LA BD Y REDIRECCIONAMOS A LA RAÍZ DEL PROYECTO, SI NO DEVOLVEMOS LA VISTA EN LA QUE ESTAMOS ('formulario') CON UN MENSAJE DE ERROR
        $validatedData = $request->validate([
            'nombre' => ['required', 'unique:tareas', 'max:255'],
            'usuario' => ['required'],
        ]);

        $tarea = new Tarea;
        $tarea->nombre = $request->get('nombre');
        $tarea->usuario_id = $request->get('usuario');
        $tarea->save();
        
        return redirect('/');

        return view('formulario')->with('error', '¡DEBES RELLENAR EL CAMPO PARA AÑADIR UNA TAREA!');
    }

    public function eliminar($id) {
        // BUSCAMOS LA TAREA EN LA BD CON EL ID RECOGIDO POR PARÁMETRO EN ESTA FUNCIÓN Y LO ELIMINAMOS; REDIRECCIONAMOS A LA RAÍZ DEL PROYECTO
        $tarea = new Tarea;
        $tarea = Tarea::find($id);
        $tarea->delete();

        return redirect('/');
    }

    public function formulario() {
        $usuarios = Usuario::all();
        // RETORNAMOS LA VISTA 'formulario' PARA AÑADIR UNA NUEVA TAREA
        return view('formulario')->with('usuarios', $usuarios);
    }

    public function buscar() {
        // RETORNAMOS LA VISTA 'buscar' PARA BUSCAR UNA TAREA
        return view('buscar');
    }

    public function buscar_texto (Request $request) {
        // SI EL CAMPO 'texto' DEL FORMULARIO DE BUSCAR TAREA NO ESTÁ VACÍO HACEMOS UNA CONSULTA A LA BD CON LA FACHADA 'DB'; RETORNAMOS LA VISTA 'buscar' (EN LA QUE YA ESTAMOS) CON EL PARÁMETRO 'tareas_encontradas' QUE ES UN ARRAY CON LAS TAREAS ENCONTRADAS
        $tareas_encontradas = [];
        if ($request->get('texto') != "") {
            $tareas_encontradas = Tarea::where('tareas.nombre', 'LIKE', '%' . $request->get('texto') . '%')->get();
        }
        
        return view('buscar')->with('tareas_encontradas', $tareas_encontradas);   
    }

    public function buscar_avanzada() {
        $usuarios = Usuario::all();
        // RETORNAMOS LA VISTA 'buscar' PARA BUSCAR UNA TAREA - AVANZADA
        return view('buscar_avanzada')->with('usuarios', $usuarios);
    }

    public function buscar_avanzada_fecha (Request $request) {
        $usuarios = Usuario::all();
        // SI EL CAMPO 'fecha' DEL FORMULARIO DE BUSCAR TAREA NO ESTÁ VACÍO HACEMOS UNA CONSULTA A LA BD CON LA FACHADA 'DB'; RETORNAMOS LA VISTA 'buscar' (EN LA QUE YA ESTAMOS) CON EL PARÁMETRO 'tareas_encontradas' QUE ES UN ARRAY CON LAS TAREAS ENCONTRADAS
        $tareas_encontradas = [];
        if ($request->get('fecha') != "") {
            $tareas_encontradas = Tarea::where('tareas.created_at', 'LIKE', '%' . $request->get('fecha') . '%')->get();
        }
        
        return view('buscar_avanzada')->with('usuarios', $usuarios)->with('tareas_encontradas', $tareas_encontradas);
    }

    public function buscar_avanzada_usuario (Request $request) {
        $usuarios = Usuario::all();
        // SI EL CAMPO 'fecha' DEL FORMULARIO DE BUSCAR TAREA NO ESTÁ VACÍO HACEMOS UNA CONSULTA A LA BD CON LA FACHADA 'DB'; RETORNAMOS LA VISTA 'buscar' (EN LA QUE YA ESTAMOS) CON EL PARÁMETRO 'tareas_encontradas' QUE ES UN ARRAY CON LAS TAREAS ENCONTRADAS
        $tareas_encontradas = [];
        if ($request->get('usuario') != "") {
            $tareas_encontradas = Tarea::where('tareas.usuario_id', $request->get('usuario'))->get();
        }
        
        return view('buscar_avanzada')->with('usuarios', $usuarios)->with('tareas_encontradas', $tareas_encontradas);
    }
}
