<!-- Modal para mostrar información del usuario -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="showModalLabel"><strong>Comentario del Sílabo</strong></h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <fieldset class="border p-3 bg-light rounded">
                    <legend class="w-auto px-2 text-warning">Comentario</legend>
                    
                    <div class="form-group">
                        <label for="comentario">Comentario del sílabo</label>
                        <textarea class="form-control" id="showComentario" name="showComentario" rows="3" required readonly></textarea>
                    </div>
                </fieldset>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>