@extends('principal')

@section('articulo1')
    <article class="articulo2">
        <h5 class="m-0">Nueva Tarea</h5>
        <form class="formulario" method="POST" action="{{ route('tareas.insertar') }}">
            @csrf 
            <input type="text" name="nombre" class="campo" placeholder="Introduce el nombre de la tarea...">
            <button class="boton_insertar" type="submit">
                <i class="far fa-plus-square"></i>
                <p class="m-0">Añadir Tarea</p>
            </button>      
        </form>
        @if (isset($error))
            <p class="m-0 error">{{ $error }}</p>
        @endif
    </article>
@endsection