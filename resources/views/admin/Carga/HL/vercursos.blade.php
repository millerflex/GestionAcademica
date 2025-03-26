@extends('adminlte::page')

@section('title', 'Lista de Detalles CHL')

@section('content')
<div class="card shadow-lg rounded-lg">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title font-weight-bold">📋 Lista de Detalles CHL</h3>
    </div>

    <div class="card-body">
        <table class="table table-striped table-hover text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th>#</th>
                    <th>📖 Curso</th>
                    <th>👨‍🏫 Docente</th>
                    <th>📆 Semestre</th>
                    <th>🔧 Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($detalles as $detalle)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $detalle->apertura->curso->nombre }}</td>
                        <td>{{ $detalle->carga->profile->nombres }},{{ $detalle->carga->profile->apellidos }}</td>
                        <td>{{ $detalle->carga->periodo->año }}-{{ $detalle->carga->periodo->semestre }}</td>
                        <td>
                            <a href="{{ route('admin.carga.hl.horarios.ver', $detalle->id) }}" class="btn btn-success font-weight-bold">✏️ Asignar Horarios</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center bg-warning text-dark font-weight-bold">⚠️ No se encontraron detalles registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
