@extends('principal')

@section('articulo2')
    <article class="articulo1">
    <h5 class="m-0">Tareas Actuales</h5>
        <table>
            @foreach ($tareas as $tarea)
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
        </table>
    </article>
@endsection