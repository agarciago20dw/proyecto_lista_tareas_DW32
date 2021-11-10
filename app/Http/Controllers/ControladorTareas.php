<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorTareas extends Controller
{
    public function mostrar() {
        // CÓDIGO MOSTRAR TAREAS
        return view('contenido');
    }

    public function insertar() {
        // CÓDIGO INSERTAR TAREAS
        return view('contenido');
    }

    public function eliminar($id) {
        // CÓDIGO ELIMINAR TAREAS
        return view('contenido')->with("id", $id);
    }
}
