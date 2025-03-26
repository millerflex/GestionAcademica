<!-- Modal de confirmación -->
<div class="modal fade" id="confirmacionModal" tabindex="-1" role="dialog" aria-labelledby="confirmacionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="confirmacionModalLabel"><strong>Confirmación de Visado</strong></h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea visar este sílabo? Este proceso es irreversible.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="confirmForm" action="" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success">Sí, estoy seguro</button>
                </form>
            </div>
        </div>
    </div>
</div>