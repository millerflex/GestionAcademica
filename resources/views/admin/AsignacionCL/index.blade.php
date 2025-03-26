@extends('adminlte::page')  

@section('content')
<table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre Curso</th>
                <th>Ciclo</th>
                <th>Semestre</th>
                <th>Docente Disponible</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $curso_plan)
                <tr>
                    <td>{{ (int)$key + 1 }}</td>
                    <td>{{ $curso_plan->nombre }}</td>
                    <td>{{ $curso_plan->ciclo }}</td>
                    <td>{{ $curso_plan->año . '-' . $curso_plan->semestre }}</td>
                    <form action="{{ route('admin.Asignacion.asignar') }}" method="POST">
                    <td>
                        
                            @csrf
                            <input type="hidden" name="IdCursoAperturado" value="{{ $curso_plan->id }}">
                            <input type="hidden" name="IdSemestre" value="{{ $curso_plan->periodo_id }}">
                            
                            
                            <select class="form-control" name="docente_id" required>
                                <option value="">Seleccione Docente</option>
                                @foreach($docentes as $docente)
                                    <option value="{{ $docente->id }}">
                                        {{ $docente->nombres }} {{ $docente->apellidos }}
                                    </option>
                                @endforeach
                            </select>
                            
                        
                    </td>
                    <td>
                    <div class="d-flex justify-content-start gap-2">
                        <button type="submit" class="btn btn-primary">Asignar</button>
                        <a href="{{ route('admin.Asignacion.observar', ['IdCursoAperturado' => $curso_plan->id]) }}" class="btn btn-primary">Observar</a>
                    </div>

                    </td>
                    </form>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.Asignacion.reporte') }}" class="btn btn-success">Visualizar Reporte</a>
@endsection