<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Reporte de Asignación</h1>
    <h2>Cuadro Resumen</h2>
    <table>
        <thead>
            <tr>
                <th>Curso</th>
                <th>Ciclo</th>
                <th>Semestre</th>
                <th>Docente</th>
                <th>Horas Semanales</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->curso_nombre }}</td>
                    <td>{{ $row->ciclo }}</td>
                    <td>{{ $row->año }}-{{ $row->semestre }}</td>
                    <td>{{ $row->docentes }}</td>
                    <td>{{ $row->horasSemanales }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Gráfico</h2>
    
    @if($chartImage)
        <img src="{{ url('storage/app/public/' . $chartImage) }}" alt="Gráfico" style="width: 100%; height: auto;">
    @endif




</body>
</html>
