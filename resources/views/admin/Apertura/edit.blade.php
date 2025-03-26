@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Apertura de Curso</h1>

    <form method="POST" action="{{ route('aperturas.update', $apertura->id) }}">
        @csrf
        @method('PUT')

        <!-- Selección del Curso -->
        <div class="form-group">
            <label for="IdCursoPlan">Curso</label>
            <select name="IdCursoPlan" id="IdCursoPlan" class="form-control" required>
                <option value="">Seleccione un curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->IdCursoPlan }}" {{ $curso->IdCursoPlan == $apertura->IdCursoPlan ? 'selected' : '' }}>
                        {{ $curso->Nombre }} ({{ $curso->Codigo }})
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Capacidad Máxima -->
        <div class="form-group">
            <label for="Capacidad">Capacidad Máxima</label>
            <input type="number" name="Capacidad" id="Capacidad" class="form-control" value="{{ $apertura->Capacidad }}" required>
        </div>

        <!-- Selección del Semestre Académico -->
        <div class="form-group">
            <label for="IdSemestre">Período Académico</label>
            <select name="IdSemestre" id="IdSemestre" class="form-control" required>
                <option value="">Seleccione un período</option>
                @foreach($semestres as $semestre)
                    <option value="{{ $semestre->IdSemestre }}" {{ $semestre->IdSemestre == $apertura->IdSemestre ? 'selected' : '' }}>
                        {{ $semestre->Año }} - {{ $semestre->Periodo }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Modalidad -->
        <div class="form-group">
            <label for="Modalidad">Modalidad</label>
            <select name="Modalidad" id="Modalidad" class="form-control">
                <option value="Presencial" {{ $apertura->Modalidad == 'Presencial' ? 'selected' : '' }}>Presencial</option>
                <option value="Virtual" {{ $apertura->Modalidad == 'Virtual' ? 'selected' : '' }}>Virtual</option>
                <option value="Híbrido" {{ $apertura->Modalidad == 'Híbrido' ? 'selected' : '' }}>Híbrido</option>
            </select>
        </div>

        <!-- Aula -->
        <div class="form-group">
            <label for="Aula">Aula</label>
            <input type="text" name="Aula" id="Aula" class="form-control" value="{{ $apertura->Aula }}" placeholder="Ingrese el aula o salón">
        </div>

        <!-- Descripción -->
        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea name="Descripcion" id="Descripcion" class="form-control" rows="3">{{ $apertura->Descripcion }}</textarea>
        </div>

        <!-- Botones -->
        <button type="submit" class="btn btn-primary">Actualizar Curso</button>
        <a href="{{ route('aperturas.ver') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection