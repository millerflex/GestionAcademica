<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Declaraciones</title>
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
        }
    </style>
</head>
<body>

    <h1>Reporte de Declaraciones</h1>

    <!-- Información General -->
    <p><strong>Periodo Actual: </strong>{{ $periodo->año }}-{{ $periodo->semestre }}</p>
    <p><strong>Total de Documentos: </strong>{{ $documentos->count() ?? 'N/A' }}</p>

    <!-- Mostrar los datos de horas para depuración -->
    <p>Documentos Observados: {{ $observados ?? 'No disponible' }}</p>
    <p>Documentos Aceptados: {{ $aceptados ?? 'No disponible' }}</p>
    <p>Documentos Pendientes: {{ $pendientes ?? 'No disponible' }}</p>

    <!-- Gráfico Circular de Documentos -->
    <div class="grafico">
        <img src="{{ public_path('images/grafico1.png') }}" alt="Gráfico de Documentos">
    </div>

    <!-- Pie de página -->
    <div class="footer">
        <p>Reporte generado por el sistema de administración de carga docente</p>
        <p>Fecha: {{ now()->format('d-m-Y H:i') }}</p>
    </div>

</body>
</html>
