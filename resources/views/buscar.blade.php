@extends('principal')

@section('articulo3')
    <article class="articulo3">
        <h5 class="m-0">Buscador Tareas</h5>
        <form class="formulario" method="POST" action="{{ route('tareas.buscar_texto') }}">
            @csrf 
            <input type="text" name="texto" class="campo" placeholder="Introduce el nombre de la tarea...">
            <button class="boton_insertar" type="submit">
                <i class="far fa-plus-square"></i>
                <p class="m-0">Buscar Tarea</p>
            </button>    
        </form>
        @if (isset($tareas_encontradas))
            <h5 class="m-0 titulo_encontrados">Tareas Encontradas</h5>
            <table>
                @if (count($tareas_encontradas) > 0)
                    @foreach ($tareas_encontradas as $tarea)
                        <tr>
                            <td>
                                {{ $tarea->nombre }}

                                <form action="{{ route('tareas.eliminar', [$tarea->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="boton_eliminar">
                                        <p class="m-0">Eliminar</p>
                                        <i class="far fa-trash-alt"></i>
                                    </button> 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr><td class="mensaje">¡BIEN, SE ENCONTRARON {{ count($tareas_encontradas) }} COINCIDENCIAS!</td></tr>
                @else
                    <tr><td class="mensaje">¡LO SIENTO, NO SE ENCONTRARON COINCIDENCIAS!</td></tr>
                @endif
                
            </table>
        @endif
    </article>
@endsection