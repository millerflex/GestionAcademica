@extends('adminlte::page')

@section('title', 'Carga No Lectiva')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Carga No Lectiva</h3>
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
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('admin.carga.hnl.guardar') }}" method="POST" class="p-3">
        @csrf
        <!-- Campo oculto para IdCargaHNL -->
        <input type="hidden" name="idA" id="idA" value="{{ $cargaAdministrativa->id }}">
        <input type="hidden" name="idC" id="idC" value="{{ $cargaComplementaria->id }}">
        <div class="row">
            <div class="form-group col-6">
                <label>Tipo</label>
                <select name="tipo" id="tipo" class="form-control" required>
                    <option value="">Seleccione el tipo</option>
                    <option value="COMPLEMENTARIA">Complementaria</option>
                    <option value="ADMINISTRATIVA">Administrativa</option>
                </select>
            </div>

            <div class="form-group col-6">
                <label>Nombre</label>
                <select name="nombre" id="nombre" class="form-control" required>
                    <option value="">Seleccione un nombre</option>
                </select>
            </div>

            <div class="form-group col-12">
                <label>Descripción</label>
                <input type="text" name="descripcion" class="form-control" required>
            </div>

            <div class="form-group col-6">
                <label>Horas Semanales</label>
                <input type="number" name="horasSemanales" class="form-control" min="1" required>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProyecto">Agregar Proyecto</button>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>

    <div class="card-body">
        <h2 class="text-primary text-lg text-center bg-warning py-2 fw-bolder">ADMINISTRATIVA</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Horas Semanales</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cargaAdministrativa->detalles as $detalle)
                    <tr>
                        <td class="text-center">{{ $detalle->nombre }}</td>
                        <td class="text-center">{{ $detalle->descripcion }}</td>
                        <td class="text-center">{{ $detalle->horasSemanales }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.carga.hnl.asignar', $detalle->id) }}" class="btn btn-sm btn-info">Asignar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center bg-warning text-dark font-weight-bold">⚠️ No se encontraron detalles registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <h2 class="text-primary text-lg text-center bg-warning py-2 mt-3 fw-bolder">COMPLEMENTARIA</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Horas Semanales</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cargaComplementaria->detalles as $detalle)
                    <tr>
                        <td class="text-center">{{ $detalle->nombre }}</td>
                        <td class="text-center">{{ $detalle->descripcion }}</td>
                        <td class="text-center">{{ $detalle->horasSemanales }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.carga.hnl.asignar', $detalle->id) }}" class="btn btn-sm btn-info">Asignar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center bg-warning text-dark font-weight-bold">⚠️ No se encontraron detalles registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalAgregarProyecto" tabindex="-1" role="dialog" aria-labelledby="modalAgregarProyectoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarProyectoLabel">Agregar Proyecto RSU o Investigación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.proyecto.guardar') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- Tipo de Proyecto -->
                    <div class="form-group">
                        <label for="tipoProyecto">Tipo de Proyecto</label>
                        <select name="tipo_proyecto" id="tipoProyecto" class="form-control" required>
                            <option value="RSU">Responsabilidad Social Universitaria</option>
                            <option value="Investigacion">Investigación</option>
                        </select>
                    </div>

                    <!-- Descripción -->
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                    </div>

                    <!-- Horas Semanales -->
                    <div class="form-group">
                        <label for="horasSemanales">Horas Semanales</label>
                        <input type="number" name="horasSemanales" id="horasSemanales" class="form-control" required min="1" max="10">
                    </div>

                    <!-- Selección de Docentes -->
                    <div class="form-group">
                        <label for="docentes">Seleccionar Docentes</label>
                        <select name="docentes[]" id="docentes" class="form-control" multiple required>
                            @foreach($profiles as $docente)
                                <option value="{{ $docente->id }}">{{ $docente->nombres }} {{ $docente->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Agregar Proyecto</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tipoSelect = document.getElementById('tipo');
        const nombreSelect = document.getElementById('nombre');

        const opciones = @json($datos);

        tipoSelect.addEventListener('change', function () {
            const tipoSeleccionado = tipoSelect.value;
            nombreSelect.innerHTML = '<option value="">Seleccione un nombre</option>';

            if (tipoSeleccionado && opciones[tipoSeleccionado]) {
                opciones[tipoSeleccionado].forEach(function (nombre) {
                    const option = document.createElement('option');
                    option.value = nombre;
                    option.textContent = nombre;
                    nombreSelect.appendChild(option);
                });
            }
        });
    });
</script>
@endsection
