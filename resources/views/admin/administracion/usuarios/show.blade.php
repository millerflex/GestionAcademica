<!-- Modal para mostrar información del usuario -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="showModalLabel"><strong>Información del Usuario</strong></h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Nombres:</th>
                            <td><span id="showNombres"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Apellidos:</th>
                            <td><span id="showApellidos"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Profesión:</th>
                            <td><span id="showProfesion"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Correo Institucional:</th>
                            <td><span id="showCorreoInstitucional"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Carrera:</th>
                            <td><span id="showCarrera"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Usuario:</th>
                            <td><span id="showUsuario"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
