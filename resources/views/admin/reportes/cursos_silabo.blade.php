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
        
        <!-- Cantidad de sílabos y gráfico -->
        <table class="table table-bordered mt-4 text-center" style="width: 100%; table-layout: fixed;">
            <tr>
                <td class="bg-info info-box" style="width: 25%; padding: 5px; height: 80px;">
                    <h3 style="margin: 0;">{{ $asignados }}</h3>
                    <p style="margin: 0;">Asignados</p>
                </td>
                <td class="bg-success info-box" style="width: 25%; padding: 5px; height: 80px;">
                    <h3 style="margin: 0;">{{ $visados }}</h3>
                    <p style="margin: 0;">Visados</p>
                </td>
                <td class="bg-danger info-box" style="width: 25%; padding: 5px; height: 80px;">
                    <h3 style="margin: 0;">{{ $enviados }}</h3>
                    <p style="margin: 0;">Enviados</p>
                </td>
                <td class="bg-warning info-box" style="width: 25%; padding: 5px; height: 80px;">
                    <h3 style="margin: 0;">{{ $comentados }}</h3>
                    <p style="margin: 0;">Comentados</p>
                </td>
            </tr>
        </table><br><br>

        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                background-color: #f9f9f9;
            }
            .professional-table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                background-color: #fff;
            }
            .professional-table th {
                background-color: #4CAF50;
                color: white;
                padding: 12px;
                text-align: center;
                font-size: 14px;
                border: 1px solid #ddd;
            }
            .professional-table td {
                text-align: center;
                padding: 10px;
                font-size: 14px;
                border: 1px solid #ddd;
            }
            .professional-table tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            .professional-table tr:hover {
                background-color: #f1f9f1;
                transition: 0.2s;
            }
        </style>
    </head>
    <body>
    
    <table class="professional-table">
        <thead>
            <tr>
                <th>PERIODO</th>
                <th>ASIGNADOS</th>
                <th>VISADOS</th>
                <th>ENVIADOS</th>
                <th>COMENTADOS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>2024 - II</strong></td>
                <td>0</td>
                <td>0</td>
                <td>10</td>
                <td>0</td>
            </tr>
            <tr>
                <td><strong>2024 - I</strong></td>
                <td>0</td>
                <td>11</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td><strong>2024 - EXT</strong></td>
                <td>0</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td><strong>2023 - II</strong></td>
                <td>0</td>
                <td>0</td>
                <td>10</td>
                <td>0</td>
            </tr>
            <tr>
                <td><strong>2023 - I</strong></td>
                <td>2</td>
                <td>0</td>
                <td>10</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>
