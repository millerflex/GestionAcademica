<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>F03-CAD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
            margin: 20px;
        }

        /* Estilos generales */
        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            color: #2c3e50;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            border: 1px solid #000; /* Bordes visibles para toda la tabla */
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }

        .table th {
            background-color: #2c3e50;
            color: #ffffff;
            font-size: 14px;
            font-weight: bold;
        }

        .table td {
            font-size: 12px;
            color: #34495e;
        }

        /* Cabecera de información */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .info-table td {
            border: 1px solid #000; /* Bordes visibles en toda la tabla de información */
            padding: 8px;
            font-size: 12px;
        }

        .info-table td strong {
            color: #2c3e50;
        }

        /* Resaltar totales */
        .table tfoot td {
            font-weight: bold;
            background-color: #f2f2f2;
        }

        /* Estilo adicional para la tabla */
        .highlight {
            background-color: #ecf0f1; /* Color alternado para filas pares */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Horario Semanal de la Carga Académica Docente (F03-CAD)</h1>
    </div>

    <!-- Información general -->
    <table class="info-table">
        <tr>
            <td colspan="3">Facultad/Filial: <strong>{{ $DOCENTE->carrera->facultad }}</strong></td>
            <td colspan="2">Dpto. Académico: <strong>{{ $DOCENTE->carrera->departamento }}</strong></td>
        </tr>
        <tr>
            <td>DNI:</td>
            <td><strong>18013017</strong></td>
            <td colspan="2">Docente: <strong>{{ $DOCENTE->nombres }} {{ $DOCENTE->apellidos }}</strong></td>
            <td>Categoría: <strong>DE</strong></td>
        </tr>
        <tr>
            <td colspan="5">
                Año Académico: <strong>{{ $PERIODO->año }}</strong> &nbsp;&nbsp; Semestre: <strong>{{ $PERIODO->semestre }}</strong> &nbsp;&nbsp;
                Fecha de Inicio: <strong>{{ $PERIODO->inicio }}</strong> &nbsp;&nbsp;
                Fecha de Fin: <strong>{{ $PERIODO->termino }}</strong>
            </td>
        </tr>
    </table>    

    <!-- Tabla de horarios -->
    <table class="table">
        <thead>
            <tr>
                <th>Horario</th>
                <th>Carga Horaria Lectiva (CHL)</th>
                <th>Lugar</th>
                <th>Aula</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($CARGA_HL->detalle as $detalle)
            <tr class="{{ $loop->even ? 'highlight' : '' }}">
                <td>
                    @foreach($detalle->horarios as $horario)
                    <strong>{{ substr($horario->Tipo, 0, 1) }}:</strong>
                    {{ substr($horario->Dia, 0, 2) }} ({{ $horario->HoraInicio }} - {{ $horario->HoraFin }})<br>
                    @endforeach
                </td>
                <td>{{ $detalle->apertura->curso->nombre }}<br>{{ $detalle->apertura->curso->ciclo }}-C Ingeniería de Sistemas</td>
                <td>{{ optional($detalle->horarios->where('Tipo', 'Teórico')->first())->aula->Lugar ?? 'Sin lugar' }}</td>
                <td>{{ optional($detalle->horarios->where('Tipo', 'Teórico')->first())->aula->Edificio ?? 'Sin edificio' }}</td>
                <td>{{ $detalle->horasSemanales }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" style="text-align: right;">Total de Horas:</td>
                <td>{{ $CARGA_HL->detalle->sum('horasSemanales') }}</td>
            </tr>
        </tfoot>
        <thead>
            <tr>
                <th>Horario</th>
                <th>Carga Horaria No Lectiva (CHNL)</th>
                <th>Lugar</th>
                <th>Aula</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($CARGA_HNLC->detalles as $detalle)
            <tr class="{{ $loop->even ? 'highlight' : '' }}">
                <td>
                    @foreach($detalle->horarios as $horario)
                    {{ substr($horario->dia, 0, 2) }} ({{ $horario->hora_inicio }} - {{ $horario->hora_fin }})<br>
                    @endforeach
                </td>
                <td>{{ $detalle->nombre}}</td>
                <td>{{ optional($detalle->horarios->first())->aula->lugar ?? 'Sin lugar' }}</td>
                <td>{{ optional($detalle->horarios->first())->aula->edificio ?? 'Sin edificio' }}</td>
                <td>{{ $detalle->horasSemanales }}</td>
            </tr>
            @endforeach
        </tbody>
        <tbody>
            @foreach($CARGA_HNLA->detalles as $detalle)
            <tr class="{{ $loop->even ? 'highlight' : '' }}">
                <td>
                    @foreach($detalle->horarios as $horario)
                    {{ substr($horario->dia, 0, 2) }} ({{ $horario->hora_inicio }} - {{ $horario->hora_fin }})<br>
                    @endforeach
                </td>
                <td>{{ $detalle->nombre}}</td>
                <td>{{ optional($detalle->horarios->first())->aula->lugar ?? 'Sin lugar' }}</td>
                <td>{{ optional($detalle->horarios->first())->aula->edificio ?? 'Sin edificio' }}</td>
                <td>{{ $detalle->horasSemanales }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" style="text-align: right;">Total de Horas:</td>
                <td>{{ $CARGA_HNLA->detalles->sum('horasSemanales') + $CARGA_HNLC->detalles->sum('horasSemanales') }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>