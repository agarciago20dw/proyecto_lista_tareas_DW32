@extends('principal')

@section('articulo2')
    <article class="articulo1">
    <h5 class="m-0">Tareas Actuales</h5>
        <table>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>
                        {{ $tarea->nombre }}
                        
                        @include('boton_eliminar', ['tarea' => $tarea])
                    </td>
                </tr>
            @endforeach
        </table>
    </article>
@endsection