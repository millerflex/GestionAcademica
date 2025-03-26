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
                        
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                        </div>

                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>

                        <div class="form-group">
                            <label for="profesion">Profesión</label>
                            <input type="text" class="form-control" id="profesion" name="profesion" required>
                        </div>

                        <div class="form-group">
                            <label for="correo_institucional">Correo Institucional</label>
                            <input type="email" class="form-control" id="correo_institucional" name="correo_institucional" required>
                        </div>

                        <div class="form-group">
                            <label for="carrera_id">Carrera</label>
                            <select class="form-control" id="carrera_id" name="carrera_id" required>
                                <option value="">Selecciona una carrera</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->id }}">{{ $carrera->programa }}</option>
                                @endforeach
                            </select>
                        </div>
                    </fieldset>

                    <!-- Datos de Acceso -->
                    <fieldset class="border p-3 bg-light rounded">
                        <legend class="w-auto px-2 text-primary">Datos de Acceso</legend>

                        <div class="form-group">
                            <label for="name">Usuario</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword" aria-label="Mostrar u ocultar contraseña">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <small class="form-text text-muted">La contraseña debe tener al menos 8 caracteres.</small>
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

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        
        // Alterna el tipo de input entre password y text
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>
