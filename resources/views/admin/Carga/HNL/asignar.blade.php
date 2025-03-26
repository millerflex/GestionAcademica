@extends('adminlte::page')

@section('title', 'Asignar Horarios')

@section('content')
<div class="card shadow-lg rounded-lg">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title font-weight-bold">📅 Asignar Horarios</h3>
        <a href="{{ route('admin.carga.hnl.index') }}" class="btn btn-light font-weight-bold">⬅️ Volver</a>
    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.carga.hnl.asignar.horario', $detalle->id) }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
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

                <div class="form-group col-md-6">
                    <label for="aula_id">Aula</label>
                    <div class="input-group">
                        <select name="aula_id" id="aula_id" class="form-control" required>
                            <option value="" disabled selected>Selecciona un aula</option>
                            @foreach($aulas as $aula)
                                <option value="{{ $aula->id }}">{{ $aula->nombre }}</option>
                            @endforeach
                        </select>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAula" style="border-radius: 0 5px 5px 0;">+</a>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="hora_inicio">Hora de Inicio</label>
                    <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" min="08:00" max="22:00" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="hora_fin">Hora de Fin</label>
                    <input type="time" name="hora_fin" id="hora_fin" class="form-control" min="08:00" max="22:00" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success font-weight-bold">💾 Asignar Horario</button>
        </form>

        <hr>

        <h4 class="font-weight-bold mt-4">⏰ Horarios Asignados</h4>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Día</th>
                    <th>Hora de Inicio</th>
                    <th>Hora de Fin</th>
                    <th>Aula</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($detalle->horarios as $horario)
                    <tr>
                        <td>{{ $horario->dia }}</td>
                        <td>{{ $horario->hora_inicio }}</td>
                        <td>{{ $horario->hora_fin }}</td>
                        <td>{{ $horario->aula->nombre }}</td>
                        <td>
                            <form action="{{ route('admin.carga.hnl.eliminar.horario', $horario->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este horario?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">🗑️ Eliminar</button>
                            </form>
                        </td>
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
<!-- Modal para registrar nueva aula -->
<div class="modal fade" id="modalAula" tabindex="-1" aria-labelledby="modalAulaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAulaLabel">Registrar Nueva Aula</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.carga.hnl.asignar.agregarAula') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre_aula">Nombre del Aula</label>
                        <input type="text" class="form-control" id="nombre_aula" name="nombre" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="piso">Piso</label>
                        <input type="number" class="form-control" id="piso" name="piso" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="referencia">Referencia</label>
                        <input type="text" class="form-control" id="referencia" name="referencia" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="lugar">Lugar</label>
                        <input type="text" class="form-control" id="lugar" name="lugar" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="capacidad">Capacidad</label>
                        <input type="number" class="form-control" id="capacidad" name="capacidad" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="edificio">Edificio</label>
                        <input type="text" class="form-control" id="edificio" name="edificio" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Registrar Aula</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

@endsection
