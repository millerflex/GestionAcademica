<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaración de Carga Académica Docente (F01-CAD)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        h2 {
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #d0e4f5;
            font-weight: bold;
        }
        .header-table td {
            text-align: left;
            font-weight: bold;
        }
        .section-title {
            font-weight: bold;
            text-align: left;
            padding-left: 5px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <h2>DECLARACIÓN DE LA CARGA ACADÉMICA DOCENTE (F01-CAD)</h2>

    <table class="header-table" border="1">
        <tr>
            <td colspan="2">FACULTAD / FILIAL: <strong>{{ $DOCENTE->carrera->facultad }}</strong></td>
            <td colspan="3">DPTO. ACADÉMICO: <strong>{{ $DOCENTE->carrera->departamento }}</strong></td>
        </tr>
        <tr>
            <td>DNI</td>
            <td>NOMBRE COMPLETO</td>
            <td>CONDICIÓN</td>
            <td>CATEGORÍA</td>
            <td>MODALIDAD</td>
        </tr>
        <tr>
            <td><strong>18013017</strong></td>
            <td><strong>{{ $DOCENTE->nombres }} {{ $DOCENTE->apellidos }}</strong></td>
            <td><strong>ORDINARIO</strong></td>
            <td><strong>PRINCIPAL</strong></td>
            <td><strong>DE</strong></td>
        </tr>
        <tr>
            <td colspan="5">
                AÑO ACADÉMICO: <strong>{{ $PERIODO->año }}</strong>  SEMESTRE: <strong>{{ $PERIODO->semestre }}</strong>  
                Fecha de Inicio: <strong>{{ $PERIODO->inicio }}</strong>   
                Fecha de Fin: <strong>{{ $PERIODO->termino }}</strong>
            </td>
        </tr>
    </table>
    
    <h3 class="section-title">I. CARGA HORARIA LECTIVA (CHL)</h3>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Curso o Asignatura</th>
                <th>Tipo</th>
                <th>Ciclo</th>
                <th>Sección</th>
                <th>N° Alumnos</th>
                <th>Horas Teoría</th>
                <th>Horas Práctica</th>
                <th>Total Horas</th>
            </tr>
        </thead>
        <tbody>
            @php $totalCHL = 0; @endphp
            @foreach($DETALLE_CHL as $detalle)
                <tr>
                    <td>{{ $detalle->apertura->curso->codigo }}</td>
                    <td>{{ $detalle->apertura->curso->nombre }}</td>
                    <td>{{ $detalle->apertura->curso->tipo }}</td>
                    <td>{{ $detalle->apertura->curso->ciclo }}</td>
                    <td>{{ $detalle->curso->Seccion ?? 'A' }}</td>
                    <td>{{ $detalle->curso->NumeroAlumnos ?? 0 }}</td>
                    <td>{{ $detalle->apertura->curso->HT }}</td>
                    <td>{{ $detalle->apertura->curso->HP }}</td>
                    <td>{{ $detalle->horasSemanales }}</td>
                </tr>
                @php $totalCHL += $detalle->horasSemanales; @endphp
            @endforeach
            <tr>
                <td colspan="8" style="text-align: right"><strong>Total de Horas Lectivas</strong></td>
                <td><strong>{{ $totalCHL }}</strong></td>
            </tr>
        </tbody>
    </table>

    <h3 class="section-title">II. CARGA HORARIA NO LECTIVA (CHNL)</h3>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Horas Semanales</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="3"><h3>Carga No Lectiva Complementaria</h3></td></tr>
            @php $totalCHNLC = 0; @endphp
            @foreach($DETALLE_CHNLC as $detalle)
                <tr>
                    <td>{{ $detalle->nombre }}</td>
                    <td>{{ $detalle->descripcion }}</td>
                    <td>{{ $detalle->horasSemanales }}</td>
                </tr>
                @php $totalCHNLC += $detalle->horasSemanales; @endphp
            @endforeach
            <tr>
                <td colspan="2" style="text-align: right"><strong>Total Complementario</strong></td>
                <td><strong>{{ $totalCHNLC }}</strong></td>
            </tr>

            <tr><td colspan="3"><h3>Carga No Lectiva Administrativa</h3></td></tr>
            @php $totalCHNLA = 0; @endphp
            @foreach($DETALLE_CHNLA as $detalle)
                <tr>
                    <td>{{ $detalle->nombre }}</td>
                    <td>{{ $detalle->descripcion }}</td>
                    <td>{{ $detalle->horasSemanales }}</td>
                </tr>
                @php $totalCHNLA += $detalle->horasSemanales; @endphp
            @endforeach
            <tr>
                <td colspan="2" style="text-align: right"><strong>Total Administrativo</strong></td>
                <td><strong>{{ $totalCHNLA }}</strong></td>
            </tr>
        </tbody>
    </table>

    <p><strong>Total General de Horas:</strong> {{ $totalCHL + $totalCHNLC + $totalCHNLA }}</p>

    <p><strong>FIRMA DEL DOCENTE:</strong> ______________________</p>
    <p><strong>FIRMA Y SELLO DEL DIRECTOR DE DPTO. ACADÉMICO:</strong> ______________________</p>
    <p><strong>V°B° DECANO:</strong> ______________________</p>
</body>
</html>
