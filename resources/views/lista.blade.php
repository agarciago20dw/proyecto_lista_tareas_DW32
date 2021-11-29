@extends('principal')

@section('articulo2')
    <article class="articulo">
        <h5 class="m-0">Tareas Actuales</h5>
        <table>
            <tr>
                <td class="titulos_tabla izquierda">TAREA</td>
                <td class="titulos_tabla">USUARIO</td>
                <td class="titulos_tabla"></td>
            </tr>
            <!-- RECORREMOS EL ARRAY '$tareas' LLAMÁNDO A LA VISTA PARCIAL 'boton_eliminar' -->
            @each('boton_eliminar', $tareas, 'tarea')
        </table>
    </article>
@endsection