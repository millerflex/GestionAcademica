@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>LISTA DE SILABOS</strong></h3>
        </div>

        <div class="card-body">

            <form  class="form-inline my-2 my-lg-2 float-right" method="GET" action="{{ route('admin.silabo.index') }}">
                <label for="buscarpor" class="mr-3">PERIODO:</label>
                <select id="buscarpor" name="buscarpor" class="custom-select mr-2" onchange="this.form.submit()">
                    @foreach ($periodos as $per)
                        <option value="{{ $per->id }}" {{ $per->id == $periodo->id ? 'selected' : '' }}>
                            {{ $per->año }} - {{ $per->semestre }}
                        </option>
                    @endforeach
                </select>
            </form>

            {{-- Mostrar mensaje de sesión --}}
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
                        <th scope="col">Cursos</th>
                        <th scope="col">Ciclo</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($silabos as $silabo)
                        <tr>
                            <td>{{ $silabo->curso}}</td>
                            <td>{{ $silabo->ciclo}}</td>
                            <td>

                                <span class="font-weight-bold {{ 
                                    $silabo->visado == 1 ? 'text-success' : 
                                    ($silabo->visado == 0 ? 'text-danger' : 
                                    ($silabo->visado == 2 ? 'text-warning' :
                                    ($silabo->visado == 3 ? 'text-info' : '')))
                                }}">
                                    {{ 
                                        $silabo->visado == 1 ? 'Visado' : 
                                        ($silabo->visado == 0 ? 'Enviado' : 
                                        ($silabo->visado == 2 ? 'Comentado' :
                                        ($silabo->visado == 3 ? 'Asignado' : '')))
                                    }}
                                </span>
                            </td>
                            <td>

                                @if ($silabo->condicion == 'Coordinador')
                                    @if ($silabo->visado == 1)
                                        <a href="{{ route('admin.silaboPDF.pdf', $silabo->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                                    @endif

                                    @if ($silabo->visado == 0)
                                        <a href="{{ route('admin.silaboPDF.pdf', $silabo->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                                        <a href="{{ route('admin.silaboPDF.edit', $silabo->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> </a>
                                        <a href="#" class="btn btn-warning btn-sm" onclick="showComentario('{{ $silabo->comentario }}')">
                                            <i class="far fa-comment-dots"></i>
                                        </a>
                                    @endif

                                    @if ($silabo->visado == 2)
                                        <a href="{{ route('admin.silaboPDF.pdf', $silabo->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                                        <a href="{{ route('admin.silaboPDF.edit', $silabo->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> </a>
                                        <a href="#" class="btn btn-warning btn-sm" onclick="showComentario('{{ $silabo->comentario }}')">
                                            <i class="far fa-comment-dots"></i>
                                        </a>
                                    @endif

                                    @if ($silabo->visado == 3)
                                        <a href="{{ route('admin.silaboPDF.edit', $silabo->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-paperclip"></i>
                                        </a>
                                    @endif
                                @endif

                                @if ($silabo->condicion == 'Apoyo')
                                    @if ($silabo->visado == 1)
                                        <a href="{{ route('admin.silaboPDF.pdf', $silabo->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                                    @endif

                                    @if ($silabo->visado == 0)
                                        <a href="{{ route('admin.silaboPDF.pdf', $silabo->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                                    @endif

                                    @if ($silabo->visado == 2)
                                        <a href="{{ route('admin.silaboPDF.pdf', $silabo->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
                                    @endif
                                @endif

                            </td>
                                               
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $silabos->links('pagination::bootstrap-4') }}
        </div>
    </div>

    @include('admin.silabo.comentario')
    
@stop

@section('css')
@stop

@section('js')
<script>
    // Función para mostrar el modal de comentarios y establecer el comentario en el modal
    function showComentario(comentario) {
        // Establece el contenido del comentario en el span correspondiente
        document.getElementById('showComentario').textContent = comentario;
        
        // Muestra el modal
        $('#showModal').modal('show');
    }
</script>

<script>
    document.addEventListener('keydown', function(event) {
        if (event.key === 'F8') {
            event.preventDefault(); // Prevenir el comportamiento predeterminado de F8
            // Abrir la página en una ventana emergente
            window.open('http://localhost/manual/', 'ventanaEmergente', 'width=800,height=600');
        }

        // Si se presiona F1, descarga el archivo CHM
        if (event.key === 'F1') {
            event.preventDefault(); // Prevenir el comportamiento predeterminado de F1
            window.location.href = '{{ route('download.chm') }}'; // Redirigir a la ruta de descarga del archivo CHM
        }

        // Si se presiona F2, descarga el archivo PDF
        if (event.key === 'F2') {
            event.preventDefault(); // Prevenir el comportamiento predeterminado de F2
            window.location.href = '{{ route('download.pdf') }}'; // Redirigir a la ruta de descarga del archivo PDF
        }
    });
</script>
@stop
