@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>GESTIÓN DE SÍLABOS</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-gradient-primary text-white text-center">
                    <h5 class="mb-0"><b>PERÍODO ACADÉMICO ACTUAL</b></h5>
                </div>
                <div class="card-body d-flex justify-content-between align-items-center bg-light rounded">
                    <!-- Información del período -->
                    <div>
                        <p class="mb-2">
                            <i class="fas fa-bookmark text-primary"></i> 
                            <b>Nombre del periodo:</b> <span class="text-dark">{{ $periodo->año }} - {{ $periodo->semestre }}</span>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-calendar-check text-success"></i> 
                            <b>Inicio:</b> <span class="text-dark">{{ $periodo->inicio }}</span>
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-calendar-times text-danger"></i> 
                            <b>Fin:</b> <span class="text-dark">{{ $periodo->termino }}</span>
                        </p>
                    </div>
                    <!-- Ícono decorativo -->
                    <div>
                        <i class="fas fa-calendar-alt fa-4x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(auth()->user()->hasAnyRole(['Director de escuela', 'Admin']))

        <div class="row">
            <!-- Columnas a la izquierda: Cuadros de Asignados, Visados, Enviados y Comentados -->
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $asignados }}</h3>
                                <p>Asignados</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $visados }}</h3>
                                <p>Visados</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $enviados }}</h3>
                                <p>Enviados</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $comentados }}</h3>
                                <p>Comentados</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 my-3">
                        <!-- Botón Ir a Visar -->
                        <a href="{{ route('admin.visacion.index') }}" class="btn btn-lg btn-primary text-white shadow-sm d-block text-center py-3 mb-3">
                            <i class="fas fa-stamp fa-lg"></i> <strong>Ir a Visar</strong>
                        </a>
                
                        <!-- Botón Generar Reporte -->
                        <a href="{{ route('admin.reporte.silabo') }}" class="btn btn-lg btn-success text-white shadow-sm d-block text-center py-3">
                        {{-- <a href="{{ route('admin.reportes.silabos') }}" class="btn btn-lg btn-success text-white shadow-sm d-block text-center py-3"> --}}
                            <i class="fas fa-file-alt fa-lg"></i> <strong>Generar Reporte de cursos con sílabos</strong>
                        </a>

                        <a href="{{ route('admin.reporte.curso_silabo') }}" class="btn btn-lg btn-success text-white shadow-sm d-block text-center py-3">
                            {{-- <a href="{{ route('admin.reportes.silabos') }}" class="btn btn-lg btn-success text-white shadow-sm d-block text-center py-3"> --}}
                                <i class="fas fa-file-alt fa-lg"></i> <strong>Generar Reporte de estados sílabos</strong>
                        </a>

                        <a href="{{ route('admin.reporte.cumplimiento') }}" class="btn btn-lg btn-success text-white shadow-sm d-block text-center py-3">
                            {{-- <a href="{{ route('admin.reportes.silabos') }}" class="btn btn-lg btn-success text-white shadow-sm d-block text-center py-3"> --}}
                                <i class="fas fa-file-alt fa-lg"></i> <strong>Generar Reporte de cumplimiento</strong>
                        </a>
                    </div>
                </div>

            </div>
            
            <!-- Gráfico a la derecha -->
            <div class="col-lg-6 col-md-12 d-flex align-items-center">
                <div class="card w-100">
                    <div class="card-header">
                        <h3 class="card-title"><b>DISTRIBUCIÓN DE SÍLABOS</b></h3>
                    </div>
                    <div class="card-body">
                        <canvas id="silabosChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>

    @endif

@stop

@section('css')
    <style>
        .card-body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1.2rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Datos para el gráfico
        const asignados = {{ $asignados }};
        const visados = {{ $visados }};
        const enviados = {{ $enviados }};
        const comentados = {{ $comentados }};

        // Crear gráfico
        const ctx = document.getElementById('silabosChart').getContext('2d');
        const silabosChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Asignados', 'Visados', 'Enviados', 'Comentados'],
                datasets: [{
                    data: [asignados, visados, enviados, comentados],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.7)', // Azul (info)
                        'rgba(75, 192, 192, 0.7)', // Verde (success)
                        'rgba(255, 99, 132, 0.7)', // Rojo (danger)
                        'rgba(255, 206, 86, 0.7)'  // Amarillo (warning)
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const total = asignados + visados + enviados + comentados;
                                const value = tooltipItem.raw;
                                const percentage = ((value / total) * 100).toFixed(2);
                                return `${tooltipItem.label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });
    </script>

<script>
    document.addEventListener('keydown', function(event) {
        if (event.key === 'F8') {
            event.preventDefault(); // Prevenir el comportamiento predeterminado de F8
            // Abrir la página en una ventana emergente
            window.open('http://localhost/manual/', 'ventanaEmergente', 'width=800,height=600');
        }

        // Si se presiona F1, descarga el archivo CHM
        if (event.key === 'F1') {
            event.preventDefault(); // Prevenir el comportamiento predeterminado de F1
            window.location.href = '{{ route('download.chm') }}'; // Redirigir a la ruta de descarga del archivo CHM
        }

        // Si se presiona F2, descarga el archivo PDF
        if (event.key === 'F2') {
            event.preventDefault(); // Prevenir el comportamiento predeterminado de F2
            window.location.href = '{{ route('download.pdf') }}'; // Redirigir a la ruta de descarga del archivo PDF
        }
    });
</script>
@stop
