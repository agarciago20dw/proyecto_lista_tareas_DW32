@extends('principal')

@section('articulo3')
    <article class="articulo">
        <h5 class="m-0">Buscador Tareas (por fecha de creación)</h5>
        <form class="formulario" method="POST" action="{{ route('tareas.buscar_avanzada_fecha') }}">
            @csrf 
            <input type="date" name="fecha" class="campo" placeholder="Selecciona la fecha...">
            <button class="boton_buscar" type="submit">
                <i class="fas fa-search"></i>
                <p class="m-0">Buscar Tarea</p>
            </button>    
        </form>
        <h5 class="m-0">Buscador Tareas (por nombre de usuario)</h5>
        <form class="formulario" method="POST" action="{{ route('tareas.buscar_avanzada_usuario') }}">
            @csrf 
            <div class="usuario_elegir usuario_elegir_avanzada">
                <select name="usuario">
                    <option disabled selected>Selecciona un usuario...</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }} {{ $usuario->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <button class="boton_buscar" type="submit">
                <i class="fas fa-search"></i>
                <p class="m-0">Buscar Tarea</p>
            </button>    
        </form>
        <!-- SI LA VARIABLE '$tareas_encontradas' ESTÁ DEFINIDA... (SIGNIFICARÁ QUE SE HA RETORNADO ESTA VISTA CUANDO SE UTILIZÓ EL MÉTODO POST) -->
        @if (isset($tareas_encontradas))
            <h5 class="m-0 titulo_encontrados">Tareas Encontradas</h5>
            <table>
                <!-- SI EL ARRAY TIENE MÁS DE 0 ENTRADAS ENTONCES RECORREMOS EL ARRAY -->
                @if (count($tareas_encontradas) > 0)
                    <tr>
                        <td class="titulos_tabla izquierda">TAREA</td>
                        <td class="titulos_tabla">USUARIO</td>
                        <td class="titulos_tabla"></td>
                    </tr>
                    <!-- RECORREMOS EL ARRAY '$tareas' LLAMÁNDO A LA VISTA PARCIAL 'boton_eliminar' -->
                    @each('boton_eliminar', $tareas_encontradas, 'tarea')
                    <tr><td colspan="3" class="mensaje" style="padding-top: 25px;">¡BIEN, SE ENCONTRARON {{ count($tareas_encontradas) }} RESULTADOS!</td></tr>
                <!-- SI NO, SIGNIFICA QUE NO SE ENCONTRARON COINCIDENCIAS -->
                @else
                    <tr><td colspan="3" class="mensaje">¡LO SIENTO, NO SE ENCONTRARON RESULTADOS!</td></tr>
                @endif
                
            </table>
        @endif
    </article>
@endsection