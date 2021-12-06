<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorTareas;
use App\Http\Controllers\ControladorUsuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// RUTA PARA LA RAÍZ DEL SITIO
Route::get('/', [ControladorTareas::class, "mostrar"])->name("tareas.mostrar");

// RUTA PARA /tarea
Route::post('/tarea', [ControladorTareas::class, "insertar"])->name("tareas.insertar");

// RUTA PARA /task/id
Route::delete('/task/{id}', [ControladorTareas::class, "eliminar"])->name("tareas.eliminar");

// RUTA PARA /task
Route::get('/task', [ControladorTareas::class, "formulario"])->name("tareas.formulario");

// RUTA PARA /buscar
Route::get('/buscar', [ControladorTareas::class, "buscar"])->name("tareas.buscar");

// RUTA PARA /buscar (post)
Route::post('/buscar', [ControladorTareas::class, "buscar_texto"])->name("tareas.buscar_texto");

// RUTA PARA /usuario
Route::get('/usuario', [ControladorUsuario::class, "formulario"])->name("usuarios.formulario");

// RUTA PARA /usuarios (post)
Route::post('/usuario', [ControladorUsuario::class, "insertar"])->name("usuarios.insertar");

// RUTA PARA /buscar
Route::get('/buscar_avanzada', [ControladorTareas::class, "buscar_avanzada"])->name("tareas.buscar_avanzada");

// RUTA PARA /buscar (post)
Route::post('/buscar/avanzada/fecha', [ControladorTareas::class, "buscar_avanzada_fecha"])->name("tareas.buscar_avanzada_fecha");

// RUTA PARA /buscar (post)
Route::post('/buscar/avanzada/usuario', [ControladorTareas::class, "buscar_avanzada_usuario"])->name("tareas.buscar_avanzada_usuario");