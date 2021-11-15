<form action="{{ route('tareas.eliminar', [$tarea->id]) }}" method="POST">
    @csrf
    @method('delete')

    <button class="boton_eliminar">
        <p class="m-0">Eliminar</p>
        <i class="far fa-trash-alt"></i>
    </button> 
</form>