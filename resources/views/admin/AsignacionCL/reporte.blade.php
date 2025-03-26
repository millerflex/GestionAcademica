@extends('adminlte::page')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container mt-4">
    <h1>Reporte de Asignación</h1>

    <!-- Formulario para seleccionar semestre -->
    <form action="{{ route('admin.Asignacion.reporte') }}" method="GET">
        <div class="form-group">
            <label for="semestre">Seleccionar Semestre:</label>
            <select name="semestre" id="semestre" class="form-control" onchange="this.form.submit()">
                <option value="" {{ !$semestreSeleccionado ? 'selected' : '' }}>Todos los Semestres</option>
                <option value="1" {{ $semestreSeleccionado == 1 ? 'selected' : '' }}>2023-I</option>
                <option value="2" {{ $semestreSeleccionado == 2 ? 'selected' : '' }}>2023-II</option>
                <option value="3" {{ $semestreSeleccionado == 3 ? 'selected' : '' }}>2024-EXT</option>
                <option value="4" {{ $semestreSeleccionado == 4 ? 'selected' : '' }}>2024-I</option>
                <option value="5" {{ $semestreSeleccionado == 5 ? 'selected' : '' }}>2024-II</option>
            </select>
        </div>
    </form>

    <!-- Tabla dinámica -->
    <table id="reporte-table" class="table table-striped">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Ciclo</th>
                <th>Semestre</th>
                <th>Docente</th>
                <th>Horas Semanales</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->curso_nombre }}</td>
                    <td>{{ $row->ciclo }}</td>
                    <td>{{ $row->año }}-{{ $row->semestre }}</td>
                    <td>{{ $row->docentes }}</td>
                    <td>{{ $row->horasSemanales }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botón para exportar PDF -->
    <form id="export-form" action="{{ route('admin.Asignacion.exportPDF') }}" method="GET" style="display: inline;">
        <input type="hidden" name="semestre" value="{{ $semestreSeleccionado }}">
        <button type="submit" class="btn btn-success mt-3">Descargar PDF</button>
    </form>

    <!-- Gráficos -->
    <div class="mt-5">
        <h2>Gráfico Resumen</h2>
        <canvas id="chart_image"></canvas>
    </div>
</div>

<!-- Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('chart_image').getContext('2d');
        
        // Usar los datos agrupados desde el controlador
        const labels = @json($dataGrouped->keys());  // Nombres de los cursos
        const horas = @json($dataGrouped->values()); // Horas semanales agrupadas por curso

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Horas Semanales por Curso',
                    data: horas,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Horas'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Cursos'
                        }
                    }
                }
            }
        });
    });

    function exportToPDF() {
        const canvas = document.getElementById('chart_image');
        const image = canvas.toDataURL('image/png'); // Convertir el gráfico a imagen base64
        
        // Enviar la imagen al servidor para ser incluida en el PDF
        $.ajax({
            url: "{{ route('admin.Asignacion.saveChartImage') }}",
            method: "POST",
            data: {
                image: image,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                window.location.href = "{{ route('admin.Asignacion.exportPDF') }}"; // Descargar el PDF
            }
        });
    }
</script>
@endsection
