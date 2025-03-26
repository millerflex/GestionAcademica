<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Solicitudes por Departamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #2c3e50;
        }

        h1, h2 {
            text-align: center;
            color: #34495e;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #34495e;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        img {
            display: block;
            margin: 20px auto;
            max-width: 50%;
            border: 2px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Reporte de Solicitudes por Departamento</h1>
    
            @foreach ($reporteDepartamentos as $reporte)
            <h1>Periodo: {{ $reporte->año}} - {{ $reporte->semestre}}</h1>
            @endforeach
    <!-- Tabla de datos -->
    <table>
        <thead>
            <tr>
                <th>Departamento</th>
                <th>Total Solicitudes</th>
                <th>Pendientes</th>
                <th>Aprobadas</th>
                <th>Rechazadas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reporteDepartamentos as $reporte)
            <tr>
                <td>{{ $reporte->departamento_solicitante }}</td>
                <td>{{ $reporte->total_solicitudes }}</td>
                <td>{{ $reporte->pendientes }}</td>
                <td>{{ $reporte->aprobadas }}</td>
                <td>{{ $reporte->rechazadas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Gráfico circular -->
    <h2>Distribución de Solicitudes por Departamento</h2>
    <img   src="{{ public_path('images2/grafico_departamentos.png') }}" alt="Gráfico Circular">

    <div class="footer">
        <p>Generado el {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
    </div>
</body>
</html>
