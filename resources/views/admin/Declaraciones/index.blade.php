@extends('adminlte::page')

@section('title', 'Gestión de Documentos')

@section('content_header')
    <h1>DECLARACIONES DEL DOCENTE</h1>
@stop

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <h5>Se encontraron los siguientes errores:</h5>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('error'))
    <script>
        window.onload = function() {
            alert("{{ session('error') }}");
        };
    </script>
    @endif
    <!-- Información del docente -->
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Información del Docente</h5>
                </div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $profile->nombres }} {{ $profile->apellidos }}</p>
                    <p><strong>Periodo: {{ $periodo->año }}-{{ $periodo->semestre }} </strong></p>
                    <p><strong>Facultad:</strong> {{ $profile->carrera->facultad }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla de declaraciones -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-gradient-primary text-white text-center">
                    <h5 class="mb-0"><b>DECLARACIONES DEL DOCENTE</b></h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tipo de Declaración</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>F01-CAD</td>
                                <td>
                                    @if($documento1->estado == 1)
                                        <span class="badge badge-success">Aprobada</span>
                                    @else
                                        <span class="badge badge-warning">Pendiente</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.declaraciones.generar', ['id' => $documento1->id]) }}" class="btn btn-primary" target="_blank">
                                        <i class="fas fa-file-pdf"></i> Generar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>F02-CAD</td>
                                <td>
                                    @if($documento2->estado == 1)
                                        <span class="badge badge-success">Aprobada</span>
                                    @else
                                        <span class="badge badge-warning">Pendiente</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.declaraciones.generar', ['id' => $documento2->id]) }}" class="btn btn-primary" target="_blank">
                                        <i class="fas fa-file-pdf"></i> Generar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>F03-CAD</td>
                                <td>
                                    @if($documento3->estado == 1)
                                        <span class="badge badge-success">Aprobada</span>
                                    @else
                                        <span class="badge badge-warning">Pendiente</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.declaraciones.generar', ['id' => $documento3->id]) }}" class="btn btn-primary" target="_blank">
                                        <i class="fas fa-file-pdf"></i> Generar
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

