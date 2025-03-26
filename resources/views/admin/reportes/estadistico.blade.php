<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Estadístico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        .chart-container {
            text-align: center;
            margin: 30px auto;
        }

        .chart-image {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Universidad Nacional de Trujillo</h1>
    <h2>Reporte Estadístico de Aperturas</h2>
    <p><strong>Fecha de Generación:</strong> {{ date('d/m/Y') }}</p>

    <!-- Tabla de estadísticas -->
    <h3>Estadísticas de Aperturas por Período y Ciclo</h3>
    <table>
        <thead>
            <tr>
                <th>Período</th>
                <th>Ciclo</th>
                <th>Total de Cursos</th>
                <th>Total de Créditos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estadisticas as $estadistica)
                <tr>
                    <td>{{ $estadistica->periodo }}</td>
                    <td>{{ $estadistica->ciclo }}</td>
                    <td>{{ $estadistica->total_cursos }}</td>
                    <td>{{ number_format($estadistica->promedio_creditos, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Gráfico -->
    <h3>Gráfico: Total de Cursos por Período</h3>
@if(!empty($chartImage))
    <div class="chart-container">
        <img src="data:image/png;base64,{{ $chartImage }}" alt="Gráfico de Cursos" class="chart-image">
    </div>
@else
    <p>No se pudo generar el gráfico.</p>
@endif
</html>
