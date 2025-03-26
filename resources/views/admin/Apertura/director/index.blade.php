@extends('adminlte::page')

@section('content')
<div class="container">
    <h2 class="mb-4">Gestión de Oficios</h2>



    <!-- Botón de Reporte -->
    <div class="mb-3">
        <a  href="{{ route('report.solicitudes_pdf') }}" class="btn btn-warning">
            Generar Reporte PDF
        </a>
        <a href="{{ route('reporte.departamentos') }}" class="btn btn-info">
            Ver Reporte de Departamentos
        </a>
        
    </div>


 <!-- Botón de Reporte -->

    <!-- Filtro de período -->
    <form method="GET" action="{{ route('director.escuela.index') }}" class="mb-4">
        <div class="row align-items-center">
            <div class="col-md-2">




                <label for="periodo" class="form-label">Filtrar por Período:</label>
            </div>
            <div class="col-md-6">
                <select name="periodo" id="periodo" class="form-control">
                    <option value="">Todos los Períodos</option>
                    @foreach ($periodos as $periodo)
                        <option value="{{ $periodo->id }}" {{ $periodoId == $periodo->id ? 'selected' : '' }}>
                            {{ $periodo->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 text-md-end">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-filter"></i> Filtrar
                </button>
            </div>
        </div>
    </form>

    <!-- Tabla de solicitudes recibidas -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Curso</th>
                    <th>Programa</th>
                    <th>Periodo Académico</th>
                    <th>Enviado Por</th>
                    <th>Ver Solicitud</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitudesRecibidas as $solicitud)
                    <tr>
                        <td>{{ $solicitud->curso }}</td>
                        <td>{{ $solicitud->programa }}</td>
                        <td>{{ $solicitud->periodo }}</td>
                        <td>{{ $solicitud->enviado_por }}</td>
                        <td>
                            <a href="{{ route('director.escuela.solicitud.pdf', $solicitud->solicitud_id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-file-pdf"></i> Ver PDF
                            </a>
                        </td>
                        <td class="text-center">
                            @if ($solicitud->estado == 0)
                                <div class="d-flex justify-content-center gap-2">
                                    <!-- Botón Aprobar -->
                                    <form action="{{ route('director.escuela.aprobarSolicitud', $solicitud->solicitud_id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i> Aprobar
                                        </button>
                                    </form>

                                    <!-- Botón Rechazar -->
                                    <form action="{{ route('director.rechazar', $solicitud->solicitud_id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-times"></i> Rechazar
                                        </button>
                                    </form>
                                </div>
                            @elseif ($solicitud->estado == 1)
                                <span class="badge bg-success">Aprobada</span>
                            @elseif ($solicitud->estado == 2)
                                <span class="badge bg-danger">Rechazada</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
