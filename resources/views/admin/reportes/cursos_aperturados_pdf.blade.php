<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Cursos Aperturados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 12px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 20px;
            margin: 0;
        }

        .header p {
            font-size: 14px;
            margin: 0;
        }

        .sub-title {
            text-align: left;
            margin-bottom: 20px;
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
            font-size: 12px;
        }

        table th {
            font-weight: bold;
            background-color: #f4f4f4;
        }

        .chart {
            text-align: center;
            margin-top: 30px;
        }

        .chart img {
            width: 80%;
            max-width: 600px;
            height: auto;
        }

        .signature {
            margin-top: 40px;
            text-align: center;
        }

        .signature p {
            margin: 5px 0;
            font-size: 12px;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Universidad Nacional de Trujillo</h1>
        <p>Reporte de Cursos Aperturados</p>
    </div>

    <div class="sub-title">
        <p><strong>Período Académico:</strong> {{ $per ? $per->periodo : 'Todos los periodos' }}</p>
        <p><strong>Fecha de Generación:</strong> {{ date('d/m/Y') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>CURSO</th>
                <th>CÓDIGO</th>
                <th>CRÉDITOS</th>
                <th>CICLO</th>
                <th>PERÍODO</th>
            </tr>
        </thead>
        <tbody>
            @forelse($aperturas as $apertura)
                <tr>
                    <td>{{ $apertura->curso }}</td>
                    <td>{{ $apertura->Codigo }}</td>
                    <td>{{ $apertura->Creditos }}</td>
                    <td>{{ $apertura->Ciclo }}</td>
                    <td>{{ $apertura->periodo }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">No se encontraron cursos aperturados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="chart">
        <h3>Gráfico de Cursos por Período</h3>
        <div class="grafico">
        <img src="{{ public_path('images2/grafico_barras.png') }}" alt="Gráfico de Documentos">
    </div>
    </div>

    <div class="signature">
        <p>______________________________</p>
        <p><strong>Decano de la Facultad</strong></p>
        <p>Universidad Nacional de Trujillo</p>
    </div>
</body>
</html>
