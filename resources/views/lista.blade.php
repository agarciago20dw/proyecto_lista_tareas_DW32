@extends('principal')

@section('articulo2')
    <article class="articulo1">
        <h5 class="m-0">Tareas Actuales</h5>
        <table>
            @each('boton_eliminar', $tareas, 'tarea')
        </table>
    </article>
@endsection