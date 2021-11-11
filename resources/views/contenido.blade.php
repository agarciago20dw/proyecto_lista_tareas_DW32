@extends('principal')

@section('articulo1')

        <h3>Nueva Tarea</h3>
        <form class="formulario" method="POST" action="{{ route('tareas.insertar') }}">
            @csrf 
            <input type="text" name="nombre" class="campo" placeholder="Introduce el nombre de la tarea...">
            <button class="boton_insertar" type="submit">
                <i class="far fa-plus-square"></i>
                <p>Añadir Tarea</p>
            </button>      
        </form>

@endsection

@section('articulo2')
    
    <h3>Tareas Actuales</h3>
    <table>
        @foreach ($tareas as $tarea)
            <tr>
                <td>
                    {{ $tarea->nombre }}

                    <form action="{{ route('tareas.eliminar', [$tarea->id]) }}" method="POST">
                        @csrf
                        @method('delete')

                        <button class="boton_eliminar">
                            <p>Eliminar</p>
                            <i class="far fa-trash-alt"></i>
                        </button> 
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
@endsection