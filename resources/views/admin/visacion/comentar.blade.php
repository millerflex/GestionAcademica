<!-- Modal de comentario -->
<div class="modal fade" id="comentarModal" tabindex="-1" role="dialog" aria-labelledby="comentarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="comentarModalLabel"><strong>Agregar Comentario</strong></h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="comentarForm" action="" method="POST">
                @csrf
                <div class="modal-body">
                    <fieldset class="border p-3 bg-light rounded">
                        <legend class="w-auto px-2 text-warning">Comentario</legend>
                        
                        <div class="form-group">
                            <label for="comentario">Escribe tu comentario</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer mt-4">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Comentar</button>
                </div>
            </form>
        </div>
    </div>
</div>