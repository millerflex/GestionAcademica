<!DOCTYPE html>
<html>
<head>
    <title>Oficio - {{ $departamento->departamento }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Oficio de Asignación de Cursos</h1>
    <p><strong>Departamento:</strong> {{ $departamento->departamento }}</p>
    <p><strong>Periodo Académico:</strong> {{ $periodo->año }} - {{ $periodo->semestre }}</p>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre del Curso</th>
                <th>Créditos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->codigo }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->creditos }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>Atentamente,</p>
    <p><strong>Director de Escuela</strong></p>
</body>
</html>
