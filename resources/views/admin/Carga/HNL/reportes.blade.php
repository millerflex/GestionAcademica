<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Carga HNL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
        }

        .grafico {
            margin-top: 20px;
            text-align: center;
            width: 100%;
            height: 500px;
        }
    </style>
</head>
<body>

    <h1>Reporte de Carga HNL</h1>

    <!-- Información General -->
    <p><strong>Periodo Actual: </strong>{{ $periodo->año }}-{{ $periodo->semestre }}</p>
    <p><strong>Total de Cargas: </strong>{{ $grafico_data['cargas'] ?? 'N/A' }}</p>
    <p><strong>Total de Docentes: </strong>{{ $grafico_data['docentes'] ?? 'N/A' }}</p>
    <p><strong>Total de Horas Semanales: </strong>{{ $grafico_data['horas'] ?? 'N/A' }}</p>

    <!-- Mostrar los datos de horas para depuración -->
    <p>Horas Complementarias: {{ $grafico_data['totalC'] ?? 'No disponible' }}</p>
    <p>Horas Administrativas: {{ $grafico_data['totalA'] ?? 'No disponible' }}</p>

    <!-- Tabla de Cargas -->
    <table>
        <thead>
            <tr>
                <th>Carga</th>
                <th>Tipo</th>
                <th>Cantidad de Actividades</th>
                <th>Horas Semanales</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargas as $carga)
                <tr>
                    <td>{{ $carga->profile->nombres ?? 'Sin datos' }} {{ $carga->profile->apellidos ?? 'Sin datos' }}</td>
                    <td>{{ $carga->tipo->nombre ?? 'Sin datos' }}</td>
                    <td>{{ $carga->detalles->count() }}</td>
                    <td>{{ $carga->horasSemanales ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pie de página -->
    <div class="footer">
        <p>Reporte generado por el sistema de administración de carga docente</p>
        <p>Fecha: {{ now()->format('d-m-Y H:i') }}</p>
    </div>

    <!-- Gráfico Circular -->
    <div class="grafico mt-5">
        <img src="{{ public_path('images/grafico.png') }}" alt="Gráfico de Distribución de Horas">
        <br>Verde: Administrativa | Rojo: Complementaria
    </div>

</body>
</html>
