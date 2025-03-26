<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte General de Sílabos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .subtitle {
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .table td, .table th {
            text-align: center;
            vertical-align: middle;
        }
        .info-box {
            text-align: center;
            padding: 15px;
            border-radius: 5px;
            font-size: 14px;
        }
        .bg-info {
            background-color: #17a2b8 !important;
            color: #fff;
        }
        .bg-success {
            background-color: #28a745 !important;
            color: #fff;
        }
        .bg-warning {
            background-color: #ffc107 !important;
            color: #212529;
        }
        .bg-danger {
            background-color: #dc3545 !important;
            color: #fff;
        }

        .custom-table {
        border-collapse: collapse;
        width: 100%;
        font-family: Arial, sans-serif;
        margin-top: 20px;
        }

        .custom-table thead {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }

        .custom-table th, .custom-table td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #dee2e6;
        }

        .custom-table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .custom-table .bg-danger {
            background-color: #f8d7da !important;
            color: #721c24 !important;
        }

        .custom-table .bg-success {
            background-color: #d4edda !important;
            color: #155724 !important;
        }

        .custom-table .bg-warning {
            background-color: #fff3cd !important;
            color: #856404 !important;
        }

        .custom-table .bg-info {
            background-color: #d1ecf1 !important;
            color: #0c5460 !important;
        }

        .custom-table .header-text {
            color: #343a40;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <!-- Título -->
        <h1 class="title">REPORTE GENERAL DE SÍLABOS</h1>

        <!-- Información del período -->
        <table class="table table-bordered mt-4 text-center" style="width: 100%;">
            <tr>
                <td style="width: 25%;"><strong>Periodo:</strong> {{ $periodo->año }} - {{ $periodo->semestre }}</td>
                <td style="width: 25%;"><strong>Fecha de Inicio:</strong> {{ $periodo->inicio }}</td>
                <td style="width: 25%;"><strong>Fecha de Fin:</strong> {{ $periodo->termino }}</td>
                <td style="width: 25%;"><strong>Fecha Actual:</strong> {{ now()->format('Y-m-d') }}</td>
            </tr>
        </table>

        <div style="visibility: hidden;">d</div>
        
        <!-- Lista de cursos -->
        <div class="subtitle">DETALLE DE SÍLABOS POR CURSO</div>


        <table class="custom-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>CURSO</th>
                    <th>DOCENTE</th>
                    <th>ESTADO SÍLABO</th>
                </tr>
            </thead>

            {{-- <tbody>
                @foreach ($resultados as $resultado)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $resultado->curso }}</td>
                        <td>{{ $resultado->docente }}</td>
                        <td>{{ $resultado->estado_silabo }}</td>
                    </tr>
                @endforeach
            </tbody> --}}

            <tbody>
                @foreach ($resultados as $resultado)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $resultado->curso }}</td>
                        <td>{{ $resultado->docente ?? 'Sin docente asignado' }}</td>

                        <td class="text-center text-muted bg-light"><strong>Cumplido</strong></td>

                    </tr>
                @endforeach
            </tbody>
            
            
        </table>
        
    </div>
</body>
</html>
