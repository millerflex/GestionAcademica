@extends('adminlte::page')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Formulario de Apertura de Curso</h2>

    <!-- Formulario de Creación -->
    <form method="POST" action="{{ route('admin.Apertura.store') }}">
        @csrf
        <div class="row">
            <!-- Filtro de Carrera -->
            <div class="col-md-6 mb-3">
                <label for="carrera" class="form-label"><strong>Carrera Profesional</strong></label>
                <select name="carrera" id="carrera" class="form-control" required>
                    <option value="">Seleccionar Carrera</option>
                    @foreach ($carreras as $carrera)
                        <option value="{{ $carrera->id }}" {{ old('carrera') == $carrera->id ? 'selected' : '' }}>
                            {{ $carrera->programa }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Filtro de Periodo -->
            <div class="col-md-6 mb-3">
                <label for="periodo" class="form-label"><strong>Periodo Académico</strong></label>
                <select name="periodo_id" id="periodo" class="form-control" required>
                    <option value="">Seleccionar Periodo</option>
                    @foreach ($periodos as $periodo)
                        <option value="{{ $periodo->id }}" {{ old('periodo_id') == $periodo->id ? 'selected' : '' }}>
                            {{ $periodo->año }} - {{ $periodo->semestre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Filtro de Tipo de Apertura -->
            <div class="col-md-6 mb-3">
                <label for="tipo_apertura" class="form-label"><strong>Tipo de Apertura</strong></label>
                <select name="tipo_apertura" id="tipo_apertura" class="form-control" required>
                    <option value="">Seleccionar Tipo</option>
                    <option value="Regular" {{ old('tipo_apertura') == 'Regular' ? 'selected' : '' }}>Regular</option>
                    <option value="Repetidores" {{ old('tipo_apertura') == 'Repetidores' ? 'selected' : '' }}>Repetidores</option>
                </select>
            </div>

            <!-- Filtro de Ciclo -->
            <div class="col-md-6 mb-3">
                <label for="ciclo" class="form-label"><strong>Ciclo Académico</strong></label>
                <select name="ciclo" id="ciclo" class="form-control" required>
                    <option value="">Seleccionar Ciclo</option>
                </select>
            </div>

            <!-- Filtro de Curso -->
            <div class="col-md-6 mb-3">
                <label for="curso" class="form-label"><strong>Curso</strong></label>
                <select name="curso_id" id="curso" class="form-control" required>
                    <option value="">Seleccionar Curso</option>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}" data-ciclo="{{ $curso->ciclo }}" 
                            data-info="{{ json_encode($curso) }}" 
                            {{ old('curso_id') == $curso->id ? 'selected' : '' }}>
                            {{ $curso->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Tabla de información del curso -->
        <div id="info-curso" class="mt-4" style="display: none;">
            <h4>Información del Curso</h4>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Créditos</th>
                        <th>Ciclo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="curso-codigo"></td>
                        <td id="curso-nombre"></td>
                        <td id="curso-creditos"></td>
                        <td id="curso-ciclo"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Botón de Envío -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-lg">
                <i class="fas fa-plus-circle"></i> Crear Apertura
            </button>
        </div>
    </form>
</div>

<!-- Scripts -->
<script>
    const selectPeriodo = document.getElementById('periodo');
    const selectTipoApertura = document.getElementById('tipo_apertura');
    const selectCiclo = document.getElementById('ciclo');

    // Actualizar opciones del ciclo según el periodo y tipo de apertura
    function actualizarCiclos() {
        const selectedPeriodo = selectPeriodo.options[selectPeriodo.selectedIndex]?.text || '';
        const semestre = selectedPeriodo.includes('II') ? 'II' : 'I';
        const tipoApertura = selectTipoApertura.value;

        let ciclos = [];

        if (tipoApertura === 'Repetidores') {
            ciclos = semestre === 'II' ? [1,3, 5, 7, 9] : [2, 4, 6, 8, 10];
        } else if (tipoApertura === 'Regular') {
            ciclos = semestre === 'II' ? [2, 4, 6, 8, 10] : [1, 3, 5, 7, 9];
        }

        selectCiclo.innerHTML = '<option value="">Seleccionar Ciclo</option>';
        ciclos.forEach(ciclo => {
            const option = document.createElement('option');
            option.value = ciclo;
            option.textContent = `Ciclo ${ciclo}`;
            selectCiclo.appendChild(option);
        });
    }
    // Llenado dinámico del select de ciclos según el curso seleccionado
    document.getElementById('ciclo').addEventListener('change', function () {
        var selectedCiclo = this.value;
        var selectCurso = document.getElementById('curso');
        var opcionesCurso = selectCurso.options;

        for (var i = 0; i < opcionesCurso.length; i++) {
            var opcion = opcionesCurso[i];
            var ciclo = opcion.getAttribute('data-ciclo');

            if (!ciclo || ciclo === selectedCiclo) {
                opcion.style.display = ''; 
            } else {
                opcion.style.display = 'none'; 
            }
        }

        selectCurso.value = '';
    });
    // Eventos para actualizar los ciclos dinámicamente
    selectPeriodo.addEventListener('change', actualizarCiclos);
    selectTipoApertura.addEventListener('change', actualizarCiclos);

    // Mostrar información del curso seleccionado
    document.getElementById('curso').addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const cursoInfo = JSON.parse(selectedOption.getAttribute('data-info'));

        if (cursoInfo) {
            document.getElementById('info-curso').style.display = 'block';
            document.getElementById('curso-codigo').textContent = cursoInfo.codigo || 'N/A';
            document.getElementById('curso-nombre').textContent = cursoInfo.nombre || 'N/A';
            document.getElementById('curso-creditos').textContent = cursoInfo.creditos || 'N/A';
            document.getElementById('curso-ciclo').textContent = cursoInfo.ciclo || 'N/A';
        }
    });
</script>
@endsection
