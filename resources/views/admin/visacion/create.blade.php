@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')

<div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title"><i class="fas fa-plus"></i> Nuevo Silabo</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.visacion.store') }}">

            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="carrera_nombre">Carrera</label>
                        <input type="text" class="form-control" id="carrera_nombre" name="carrera_nombre" value="{{ $carrera->programa }}" readonly>
                        <input type="hidden" id="carrera_id" name="carrera_id" value="{{ $carrera->id }}">
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="curso_nombre">Curso</label>
                        <select class="form-control" id="curso_id" name="curso_id">
                            @foreach($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="periodo">Periodo</label>
                        <input type="text" class="form-control" id="periodo" name="periodo" value="{{ $periodo->año }} - {{ $periodo->semestre }}" readonly>
                        <input type="hidden" id="periodo_id" name="periodo_id" value="{{ $carrera->id }}">
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mt-3">
                            
                            <thead class="bg-primary text-white text-center">
                                <tr>
                                    <th class="align-middle" style="border: 1px solid black;">Condición</th>
                                    <th class="align-middle" style="border: 1px solid black;">Apellidos y Nombres</th>
                                    <th class="align-middle" style="border: 1px solid black;">Profesión</th>
                                    <th class="align-middle" style="border: 1px solid black;">Email Institucional</th>
                                    <th class="align-middle" style="border: 1px solid black;">Eliminar</th>
                                </tr>
                            </thead>

                            <tbody id="tableDocente">
                                <tr>
                                    <td style="border: 1px solid black;">
                                        <select class="form-control" name="docente_condicion[]">
                                            <option value="Coordinador">Coordinador</option>
                                            <option value="Apoyo">Apoyo</option>
                                        </select>
                                    </td>
                                    <td style="border: 1px solid black;">
                                        <select class="form-control" name="docente_id[]" onchange="updateDocenteInfo(this)">
                                            <option value="" selected disabled>Seleccione docente</option>
                                            @foreach ($docentes as $docente)
                                            <option value="{{ $docente->id }}" data-profesion="{{ $docente->profesion }}" data-correo="{{ $docente->correo_institucional }}">
                                                {{ $docente->apellidos }} {{ $docente->nombres }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="border: 1px solid black;" class="align-middle text-center"></td>
                                    <td style="border: 1px solid black;" class="align-middle text-center"></td>
                                    <td style="border: 1px solid black;" class="align-middle text-center">
                                        <button type="button" class="btn btn-danger btn-sm" onclick="eliminarFila(this)"><i class="fas fa-times"></i></button>
                                    </td>
                                </tr>
                            </tbody>                            

                        </table>
                        <button type="button" class="btn btn-success my-2" id="addDocenteBtn">Más</button>
                    </div>
                </div>
            </div>

            {{-- <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Grabar</button>
                <a href="{{ route('animal.cancelar') }}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
            </div> --}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Grabar</button>
                <a href="" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
            </div>
            
        </form>
    </div>
</div>

@stop

@section('css')
@stop

@section('js')
<script>
    // Función para actualizar la información del docente
    function updateDocenteInfo(selectElement) {
        const selectedOption = selectElement.options[selectElement.selectedIndex]; 
        const profesion = selectedOption.getAttribute('data-profesion'); 
        const correo = selectedOption.getAttribute('data-correo'); 

        const row = selectElement.closest('tr'); // Obtener la fila padre

        const emailCell = row.querySelector('td:nth-child(4)'); // Celda para el email
        const profesionCell = row.querySelector('td:nth-child(3)'); // Celda para la profesión

        emailCell.innerText = correo; // Asignar el correo
        profesionCell.innerText = profesion; // Asignar la profesión
    }

    // Función para agregar una nueva fila
    document.getElementById('addDocenteBtn').addEventListener('click', function() {
        const tableBody = document.getElementById('tableDocente');
        
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td style="border: 1px solid black;">
                <select class="form-control" name="docente_condicion[]">
                    <option value="coordinador">Coordinador</option>
                    <option value="apoyo">Apoyo</option>
                </select>
            </td>
            <td style="border: 1px solid black;">
                <select class="form-control" name="docente_id[]" onchange="updateDocenteInfo(this)">
                    <option value="" selected disabled>Seleccione docente</option>
                    @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}" data-profesion="{{ $docente->profesion }}" data-correo="{{ $docente->correo_institucional }}">
                        {{ $docente->apellidos }} {{ $docente->nombres }}
                    </option>
                    @endforeach
                </select>
            </td>
            <td style="border: 1px solid black;" class="align-middle text-center"></td>
            <td style="border: 1px solid black;" class="align-middle text-center"></td>
            <td style="border: 1px solid black;" class="align-middle text-center">
                <button type="button" class="btn btn-danger btn-sm" onclick="eliminarFila(this)"><i class="fas fa-times"></i></button>
            </td>
        `;
        
        tableBody.appendChild(newRow); // Añadir la nueva fila al final de la tabla
    });

    // Función para eliminar la fila correspondiente al botón de eliminar
    function eliminarFila(button) {
        const fila = button.parentElement.parentElement; // Obtener la fila completa (tr) del botón
        fila.remove(); // Eliminar la fila de la tabla
    }
</script>
@stop



