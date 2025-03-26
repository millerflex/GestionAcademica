@extends('adminlte::page')

@section('title', 'Asignar Horarios')

@section('content')
<div class="card shadow-lg rounded-lg">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title font-weight-bold">📅 Asignar Horarios</h3>
        <a href="{{ route('admin.carga.hl.index') }}" class="btn btn-light font-weight-bold">⬅️ Volver</a>
    </div>
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
    <div class="card-body">
        <form action="{{ route('admin.carga.hl.horarios.asignar', $detalle->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="dia">Día</label>
                    <select name="dia" id="dia" class="form-control" required>
                        <option value="" disabled selected>Selecciona un día</option>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miércoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sábado">Sábado</option>
                        <option value="Domingo">Domingo</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="hora_inicio">Hora de Inicio</label>
                    <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" min="08:00" max="22:00" required>
                </div>

                <div class="form-group col-6">
                    <label for="hora_fin">Hora de Fin</label>
                    <input type="time" name="hora_fin" id="hora_fin" class="form-control" min="08:00" max="22:00" required>
                </div>

                <div class="form-group col-6">
                    <label for="aula_id">Aula</label>
                    <select name="aula_id" id="aula_id" class="form-control" required>
                        <option value="" disabled selected>Selecciona un aula</option>
                        @foreach($aulas as $aula)
                            <option value="{{ $aula->id }}">{{ $aula->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control" required>
                        <option value="" disabled selected>Selecciona un tipo</option>
                        <option value="Teórico">Teórico</option>
                        <option value="Práctico">Práctico</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-success font-weight-bold">💾 Asignar Horario</button>
        </form>

        <hr>

        <h4 class="text-info font-weight-bold">Horarios Asignados</h4>
        <table class="table table-striped table-hover text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Día</th>
                    <th>Hora de Inicio</th>
                    <th>Hora de Fin</th>
                    <th>Aula</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @forelse($detalle->horarios as $horario)
                    <tr>
                        <td>{{ $horario->dia }}</td>
                        <td>{{ $horario->hora_inicio }}</td>
                        <td>{{ $horario->hora_fin }}</td>
                        <td>{{ $horario->aula->nombre ?? 'Sin asignar' }}</td>
                        <td>{{ $horario->tipo }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center bg-warning text-dark font-weight-bold">⚠️ No hay horarios asignados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
