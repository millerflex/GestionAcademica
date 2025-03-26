@extends('adminlte::page')  

@section('content')
    <h1 class="mt-5">Curso: {{ $curso->first()->nombre }}</h1>
        <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Información del Curso</h5>
            </div>
            <div class="card-body">
                <p><strong>Código:</strong> {{ $curso->first()->codigo }}</p>
                <p><strong>Créditos:</strong> {{ $curso->first()->creditos }}</p>
                <p><strong>Ciclo:</strong> {{ $curso->first()->ciclo }}</p>
                <p><strong>Horas Teóricas:</strong> {{ $curso->first()->HT }}</p>
                <p><strong>Horas Prácticas:</strong> {{ $curso->first()->HP }}</p>
                <p><strong>Horas Laboratorio:</strong> {{ $curso->first()->HL }}</p>
                <h2 class="mt-5">Docentes asignados:</h2>
                @foreach($docentes as $docente)
                <p><strong>--</strong> {{ $docente->nombres }} {{ $docente->apellidos }}</p>
                @endforeach
                <a href="{{ route('admin.Asignacion.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div> 
            
        <p></p>

@endsection