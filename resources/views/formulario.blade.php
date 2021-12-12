@extends('principal')

@section('articulo1')
    <article class="articulo">
        <h5 class="m-0">Nueva Tarea</h5>
        <form class="formulario" method="POST" action="{{ route('tareas.insertar') }}">
            @csrf 
            <input type="text" name="nombre" class="campo" placeholder="Introduce el nombre de la tarea..." maxlength="40">
            
            <div class="usuario_elegir">
                <select name="usuario">
                    <option disabled selected>Selecciona un usuario...</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }} {{ $usuario->apellido }}</option>
                    @endforeach
                </select>
                <p>-</p>
                <a href="{{ route('usuarios.formulario') }}">Crea un usuario</a>
            </div>
            
            <button class="boton_insertar" type="submit">
                <i class="far fa-plus"></i>
                <p class="m-0">Añadir Tarea</p>
            </button>      
        </form>
        <!-- SI HAY ALGÚN ERROR LO MOSTRAMOS -->
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="m-0 error">{{ strtoupper($error) }}</p>
            @endforeach
        @endif

    </article>
@endsection