@extends('principal')

@section('articulo1')
    
        <form method="POST" action="{{ config('app.url')}}/tarea">
            @csrf 
            <input type="text" name="insertar" id="insertar">
            <input type="submit" value="Añadir tarea">
            <i class="fas fa-plus"></i>
        </form>

@endsection

@section('articulo2')
    
    <table class="tabla">
        @foreach ($tareas as $tarea)
            <tr>
                <td><a href="{{ config('app.url')}}/tarea/" . $tarea->id</a>><i class="far fa-trash-alt"></i>{{ $tarea->nombre }}</a></td>
            </tr>
        @endforeach
    </table>
    

@endsection