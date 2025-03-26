<!-- Modal para editar un usuario -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="editModalLabel"><strong>Editar Usuario</strong></h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="POST" id="editUserForm">
                    @csrf
                    @method('PUT') <!-- Simula una solicitud PUT -->

                    <!-- Datos de Perfil -->
                    <fieldset class="border p-3 mb-4 bg-light rounded">
                        <legend class="w-auto px-2 text-info">Datos del Perfil</legend>
                        
                        <div class="form-group">
                            <label for="edit_nombres">Nombres</label>
                            <input type="text" class="form-control" id="edit_nombres" name="nombres" required>
                        </div>

                        <div class="form-group">
                            <label for="edit_apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="edit_apellidos" name="apellidos" required>
                        </div>

                        <div class="form-group">
                            <label for="edit_profesion">Profesión</label>
                            <input type="text" class="form-control" id="edit_profesion" name="profesion" required>
                        </div>

                        <div class="form-group">
                            <label for="edit_correo_institucional">Correo Institucional</label>
                            <input type="email" class="form-control" id="edit_correo_institucional" name="correo_institucional" required>
                        </div>

                        <div class="form-group">
                            <label for="edit_carrera_id">Carrera</label>
                            <select class="form-control" id="edit_carrera_id" name="carrera_id" required>
                                <option value="">Selecciona una carrera</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->id }}">{{ $carrera->programa }}</option>
                                @endforeach
                            </select>
                        </div>
                    </fieldset>

                    <!-- Datos de Acceso -->
                    <fieldset class="border p-3 bg-light rounded">
                        <legend class="w-auto px-2 text-info">Datos de Acceso</legend>

                        <div class="form-group">
                            <label for="edit_name">Usuario</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="edit_password">Contraseña (dejar en blanco para no cambiar)</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="edit_password" name="password">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="toggleEditPassword" aria-label="Mostrar u ocultar contraseña">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
