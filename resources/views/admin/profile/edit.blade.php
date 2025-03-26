@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>CONFIGURAR PROFILE</strong></h3>
        </div>

        <div class="card-body">
            <div class="row">
                <!-- Formulario de actualización de perfil -->
                <div class="col-md-8">
                    <form action="{{ route('admin.profile.update', $profile->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombres" class="form-control" value="{{ $profile->nombres }}" required>
                        </div>

                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" value="{{ $profile->apellidos }}" required>
                        </div>

                        <div class="form-group">
                            <label for="profesion">Profesión</label>
                            <input type="text" name="profesion" class="form-control" value="{{ $profile->profesion }}" required>
                        </div>

                        <div class="form-group">
                            <label for="correo_institucional">Correo Institucional</label>
                            <input type="email" name="correo_institucional" class="form-control" value="{{ $profile->correo_institucional }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>

                <!-- Sección de actualización de imagen de perfil -->
                <div class="col-md-4 text-center">
                    <div class="col-md-6 mx-auto">
                        <div class="card shadow-sm border-0 rounded-lg">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-3">Actualizar Imagen de Perfil</h5>

                                <!-- Imagen de perfil actual -->
                                <img src="{{ $profile->url_imagen }}" alt="NO TIENE AUN IMAGEN" class="img-fluid rounded-circle mb-3" width="120" height="120">

                                <form action="{{ route('admin.profile.image.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="profile_image" class="btn btn-outline-secondary w-100 mb-2">
                                            <i class="fas fa-upload"></i> Seleccionar Imagen
                                        </label>
                                        <input type="file" name="profile_image" id="profile_image" class="form-control-file d-none" required>

                                        <!-- Mensaje que indica que una imagen ha sido seleccionada -->
                                        <small id="image-selected-message" class="text-success mt-2" style="display: none;">
                                            Imagen seleccionada. Haz clic en "Cambiar Imagen" para guardar.
                                        </small>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 mt-2">
                                        <i class="fas fa-save"></i> Cambiar Imagen
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        /* Opcional: estilos personalizados */
    </style>
@stop

@section('js')
    <script>
        // Detectar cuando se selecciona una imagen
        document.getElementById('profile_image').addEventListener('change', function() {
            const successMessage = document.getElementById('image-selected-message');
            successMessage.style.display = 'block'; // Muestra el mensaje cuando se selecciona una imagen
        });
    </script>
@stop
