@extends('adminlte::page')

@section('title', 'Detalle del Curso')

@section('content')
<div class="card shadow-lg rounded-lg">
    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title font-weight-bold">📘 Detalle del Curso</h3>
        <a href="{{ route('admin.carga.hl.index') }}" class="btn btn-light font-weight-bold">⬅️ Volver</a>
    </div>

    <div class="card-body">
        <h4 class="text-center text-info font-weight-bold">{{ $detalleCurso->apertura->curso->nombre ?? 'Sin Nombre' }}</h4>
        <p><strong>Código:</strong> {{ $detalleCurso->apertura->curso->codigo ?? 'Sin Código' }}</p>
        <p><strong>Ciclo:</strong> {{ $detalleCurso->apertura->curso->ciclo ?? 'Sin Ciclo' }}</p>
        <p><strong>Horas Semanales:</strong> {{ $detalleCurso->horas_semanales ?? 'No Definidas' }}</p>

        <h5 class="text-center text-primary font-weight-bold">Horarios Asignados</h5>
        <table class="table table-striped table-hover text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th>🕒 Tipo</th>
                    <th>📅 Día</th>
                    <th>⏰ Hora Inicio</th>
                    <th>⏳ Hora Fin</th>
                    <th>🏫 Aula</th>
                    <th>📍 Piso</th>
                    <th>🏢 Lugar</th>
                </tr>
            </thead>
            <tbody>
                @forelse($detalleCurso->horarios as $horario)
                    <tr>
                        <td>{{ $horario->tipo ?? 'Sin Tipo' }}</td>
                        <td>{{ $horario->dia ?? 'Sin Día' }}</td>
                        <td>{{ $horario->hora_inicio ?? 'Sin Hora' }}</td>
                        <td>{{ $horario->hora_fin ?? 'Sin Hora' }}</td>
                        <td>{{ $horario->aula->referencia ?? 'Sin Aula' }}</td>
                        <td>{{ $horario->aula->piso ?? 'Sin Piso' }}</td>
                        <td>{{ $horario->aula->lugar ?? 'Sin Lugar' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center bg-warning text-dark font-weight-bold">
                            ⚠️ No hay horarios asignados para este curso.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection