@extends('adminlte::page')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Generar Oficio por Departamento</h2>

    <!-- Formulario -->
    <form method="POST" action="{{ route('director.escuela.oficio.generar') }}">
        @csrf
        <div class="row">
            <!-- Selección de Periodo -->
            <div class="col-md-6 mb-3">
                <label for="periodo_id" class="form-label"><strong>Periodo Académico</strong></label>
                <select name="periodo_id" id="periodo_id" class="form-control" required>
                    <option value="">Seleccionar Periodo</option>
                    @foreach ($periodos as $periodo)
                        <option value="{{ $periodo->id }}">
                            {{ $periodo->año }} - {{ $periodo->semestre }}
                        </option>
                    @endforeach
                </select>
            </div>



            

            <!-- Selección de Departamento -->
          <!-- Selección de Departamento -->
<div class="col-md-6 mb-3">
    <label for="departamento_id" class="form-label"><strong>Departamento</strong></label>
    <select name="departamento_id" id="departamento_id" class="form-control" required>
        <option value="">Seleccionar Departamento</option>
        @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->id }}">
                {{ $departamento->departamento }}
            </option>
        @endforeach
    </select>
</div>


        <!-- Botón de Generar -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-file-pdf"></i> Generar Oficio
            </button>
        </div>
    </form>
</div>
@endsection
