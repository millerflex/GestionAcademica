<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Solicitudes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            color: #2c3e50;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        header img {
            height: 60px;
        }
        header h1 {
            font-size: 18px;
            text-align: center;
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
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
        .footer {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <header>


        <h1>Reporte de Solicitudes de Apertura de Cursos</h1>
        <div></div> <!-- Espacio opcional -->
    </header>
    
    <!-- Información del Periodo y Usuario -->
    <p><strong>Periodo seleccionado:</strong> 
        {{ $periodo->año ?? 'Año no disponible' }} - {{ $periodo->semestre ?? 'Semestre no disponible' }}
    </p>
    <p><strong>Generado por:</strong> {{ $usuarioActual->name ?? 'Usuario no identificado' }}</p>
    
    <!-- Tabla de Solicitudes -->
    <table>
        <thead>
            <tr>
                <th>Programa</th>
                <th>Curso</th>
                <th>Estado</th>
                <th>Enviado Por</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($solicitudes as $solicitud)
                <tr>
                    <td>{{ $solicitud->programa }}</td>
                    <td>{{ $solicitud->nombre }}</td>
                    <td>{{ $solicitud->estado }}</td>
                    <td>{{ $solicitud->enviado_por }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay solicitudes para mostrar</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="grafico">
        <img src="{{ public_path('images2/grafico_barras_solicitudes.png') }}" alt="Gráfico de Documentos">
    </div>
    <!-- Pie de Página -->
    <div class="footer">
        <p>Generado el {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
    </div>
</body>
</html>
``
