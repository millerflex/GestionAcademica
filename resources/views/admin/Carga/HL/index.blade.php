@extends('adminlte::page')

@section('title', 'Carga Lectiva')

@section('content')
<div class="card shadow-lg rounded-lg">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title font-weight-bold">📚 Carga Lectiva {{ $periodoSeleccionado->año }}-{{ $periodoSeleccionado->semestre }}</h3>
    </div>

    <div class="card-body">
        <h4 class="text-center text-info font-weight-bold">Mi Carga Lectiva</h4>
        <table class="table table-striped table-hover text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th>📄 Nombre</th>
                    <th>🔢 Código</th>
                    <th>📚 Ciclo</th>
                    <th>📘 Tipo</th>
                    <th>🔍 Detalle</th>
                </tr>
            </thead>
            <tbody>
                    @forelse($cargota->detalle as $detalle)
                        <tr>
                            <td>{{ $detalle->apertura->curso->nombre ?? 'Sin Nombre' }}</td>
                            <td>{{ $detalle->apertura->curso->codigo ?? 'Sin Código' }}</td>
                            <td>{{ $detalle->apertura->curso->ciclo ?? 'Sin Ciclo' }}</td>
                            <td>{{ $detalle->apertura->curso->tipo ?? 'Sin Tipo' }}</td>
                            <td>
                                <a href="{{ route('admin.carga.hl.detalle', $detalle->id) }}" class="btn btn-info btn-sm font-weight-bold">Ver Detalle</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center bg-warning text-dark font-weight-bold">
                                ⚠️ No tienes carga lectiva para el período seleccionado.
                            </td>
                        </tr>
                    @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
