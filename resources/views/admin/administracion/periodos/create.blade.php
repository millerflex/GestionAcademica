<!-- Modal para crear un nuevo usuario -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="createModalLabel"><strong>Crear Nuevo Usuario</strong></h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route('usuario.store') }}" method="POST">
                    @csrf

                    <!-- Datos de Perfil -->
                    <fieldset class="border p-3 mb-4 bg-light rounded">
                        <legend class="w-auto px-2 text-primary">Datos del Perfil</legend>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="anio">Semestre</label>
                                <input type="text" class="form-control" id="anio" name="anio" value="{{ $semestre }}" readonly required>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="semestre">Año</label>
                                <input type="text" class="form-control" id="semestre" name="semestre" value="{{ $año }}" readonly required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fecha_inicio">Fecha Inicio</label>
                                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required value="{{ date('Y-m-d') }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fecha_fin">Fecha Fin</label>
                                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                    </fieldset>

                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
