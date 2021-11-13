@extends('principal')

@section('articulo3')
    <article class="articulo3">
        <h5 class="m-0">Buscador Tareas</h5>
        <form class="formulario" method="POST" action="{{ route('tareas.insertar') }}">
            @csrf 
            <input type="text" name="nombre" class="campo" placeholder="Introduce el nombre de la tarea...">
            <button class="boton_insertar" type="submit">
                <i class="far fa-plus-square"></i>
                <p class="m-0">Añadir Tarea</p>
            </button>      
        </form>
    </article>
@endsection