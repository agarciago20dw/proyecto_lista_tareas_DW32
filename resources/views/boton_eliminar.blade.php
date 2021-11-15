<tr>
    <td>
        {{ $tarea->nombre }}
        <form action="{{ route('tareas.eliminar', [$tarea->id]) }}" method="POST">
            @csrf
            @method('delete')

            <button type="button" class="boton_eliminar" data-bs-toggle="modal" data-bs-target="#modal_eliminar_{{ $tarea->id }}">
                <p class="m-0">Eliminar</p>
                <i class="far fa-trash-alt"></i>
            </button> 

            <div class="modal fade" id="modal_eliminar_{{ $tarea->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title titulo_eliminar">¿Seguro que quieres borrar esta tarea?</h4>
                            <button type="button" class="btn-close close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">"{{ $tarea->nombre }}"</div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger boton_modal1" data-bs-dismiss="modal">SÍ</button>
                            <button type="button" class="btn btn-danger boton_modal2" data-bs-dismiss="modal">NO</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </td>
</tr>

