@extends('principal')

@section('articulo4')
    <article class="articulo">
        <h5 class="m-0">Nuevo Usuario</h5>
        <form class="formulario" method="POST" action="{{ route('usuarios.insertar') }}">
            @csrf 
            <input type="text" name="nombre" class="campo" placeholder="Introduce el nombre del usuario...">
            <input type="text" name="apellido" class="campo" placeholder="Introduce el apellido del usuario...">
            <button class="boton_insertar" type="submit">
                <i class="far fa-plus-square"></i>
                <p class="m-0">Añadir Usuario</p>
            </button>
        </form>
        <!-- SI LA VARIABLE '$error' ESTÁ DEFINIDA MOSTRAMOS SU CONTENIDO -->
        @if (isset($error))
            <p class="m-0 error">{{ $error }}</p>
        @endif
    </article>
@endsection