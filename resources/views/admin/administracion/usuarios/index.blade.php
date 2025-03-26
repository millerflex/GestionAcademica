@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')


    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>LISTA USUARIOS</strong></h3>
        </div>

        <div class="card-body">

            {{-- <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> NUEVO REGISTRO</a> --}}

            <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createModal">
                <i class="fas fa-plus"></i> NUEVO REGISTRO
            </a>

            {{-- <form class="form-inline my-2 my-lg-0 float-right">

                <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" value="">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                
            </form> --}}
        
            @if (session('datos'))
                <div id="alerta-datos" class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    {{ session('datos') }}
                    <button id="alerta-cerrar" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->profile->nombres }} {{ $user->profile->apellidos }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm" onclick="showUser({{ $user->id }})">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-info btn-sm" onclick="editUser({{ $user->id }})">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $user->id }})">
                                    <i class="fas fa-trash"></i>
                                </a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <!-- /.card -->
    
    @include('admin.administracion.usuarios.create')
    @include('admin.administracion.usuarios.show')
    @include('admin.administracion.usuarios.edit')
    @include('admin.administracion.usuarios.delete')

@stop

@section('css')
@stop

@section('js')
<script>
    function showUser(userId) {
        // Realizar la petición AJAX para obtener los datos del usuario
        fetch(`/admin/usuario/${userId}`)
            .then(response => response.json())
            .then(data => {
                // Llenar los campos del modal con los datos del usuario
                document.getElementById('showNombres').textContent = data.profile.nombres;
                document.getElementById('showApellidos').textContent = data.profile.apellidos;
                document.getElementById('showProfesion').textContent = data.profile.profesion;
                document.getElementById('showCorreoInstitucional').textContent = data.profile.correo_institucional;
                
                // Acceder a la carrera dentro de profile.carrera
                document.getElementById('showCarrera').textContent = data.profile.carrera.programa;

                document.getElementById('showUsuario').textContent = data.name;

                // Mostrar el modal
                $('#showModal').modal('show');
            })
            .catch(error => console.error('Error al obtener datos del usuario:', error));
    }
</script>

<script>
    function editUser(userId) {
        // Realizar la petición AJAX para obtener los datos del usuario
        fetch(`/admin/usuario/${userId}`)
            .then(response => response.json())
            .then(data => {
                // Llenar los campos del modal con los datos del usuario
                document.getElementById('edit_nombres').value = data.profile.nombres;
                document.getElementById('edit_apellidos').value = data.profile.apellidos;
                document.getElementById('edit_profesion').value = data.profile.profesion;
                document.getElementById('edit_correo_institucional').value = data.profile.correo_institucional;
                document.getElementById('edit_carrera_id').value = data.profile.carrera_id;
                document.getElementById('edit_name').value = data.name;

                // Ajusta la acción del formulario para enviar a la ruta de actualización
                document.getElementById('editUserForm').action = `/admin/usuario/${userId}`;

                // Mostrar el modal de edición
                $('#editModal').modal('show');
            })
            .catch(error => console.error('Error al obtener datos del usuario:', error));
    }

    // Alternar la visibilidad de la contraseña en el modal de edición
    document.getElementById('toggleEditPassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('edit_password');
        const icon = this.querySelector('i');
        
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

<script>
    function confirmDelete(userId) {
        // Configura la URL del formulario de eliminación
        const deleteFormAction = `/admin/usuario/${userId}`;
        document.getElementById('deleteUserForm').action = deleteFormAction;

        // Mostrar el modal de confirmación de eliminación
        $('#deleteModal').modal('show');
    }
</script>


@stop