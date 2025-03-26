<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Documentos - Presentados a Tiempo vs No Presentados a Tiempo</title>
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

    <h1>Reporte de Documentos</h1>

    <!-- Información General -->
    <p><strong>Periodo Actual: </strong>{{ $periodo->año }}-{{ $periodo->semestre }}</p>
    <p><strong>Total de Documentos: </strong>{{ $documentos->count() ?? 'N/A' }}</p>

    <!-- Mostrar los datos de documentos -->
    <p>Documentos Presentados a Tiempo: {{ $presentados_a_tiempo ?? 'No disponible' }}</p>
    <p>Documentos No Presentados a Tiempo: {{ $no_presentados_a_tiempo ?? 'No disponible' }}</p>

    <!-- Gráfico Barras -->
    <div class="grafico mt-5">
        <img src="{{ public_path('images/grafico_barras.png') }}" alt="Gráfico de Barras">
    </div>

    <!-- Pie de página -->
    <div class="footer">
        <p>Reporte generado por el sistema de administración de carga docente</p>
        <p>Fecha: {{ now()->format('d-m-Y H:i') }}</p>
    </div>

</body>
</html>
