<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Declaración Jurada de No Impedimento Laboral</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
            line-height: 1.5;
        }
        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .subheader {
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 12px;
        }
        .content p {
            text-align: justify;
            margin-bottom: 10px;
        }
        .details {
            margin: 15px 0;
        }
        .details td {
            padding: 3px 5px;
        }
        .signature {
            text-align: center;
            margin-top: 40px;
        }
        .date {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="header">
        DECLARACIÓN JURADA DE NO ESTAR INCURSO EN CAUSALES<br>
        DE INCOMPATIBILIDAD O IMPEDIMENTO LABORAL
    </div>
    <div class="subheader">(F02-CAD)</div>

    <div class="content">
        <p>
            Yo, <strong>{{ $NOMBRE_COMPLETO }}</strong>, identificado(a) con DNI N° <strong>{{ $DNI }}</strong>, 
            de la Facultad/Filial de <strong>{{ $FACULTAD }}</strong>, adscrito al Departamento Académico de <strong>{{ $DEPARTAMENTO }}</strong>; 
            en el marco de la Ley Universitaria 30220, D.S. N° 418-2017-EF, Estatuto Reformado 2021 y el reglamento de asignación de la Carga Académica de los Docentes de la UNT,
            <strong>DECLARO BAJO JURAMENTO Y EN HONOR A LA VERDAD</strong>, que:
        </p>

        <p>
            <strong>NO ESTOY INCURSO</strong> en causales de incompatibilidad laboral y <strong>NO TENGO</strong> impedimento para ejercer la docencia en la Universidad Nacional de Trujillo, de conformidad con lo previsto en el Capítulo VIII de las Incompatibilidades, Impedimentos y sanciones, del Título XII: de los docentes, del Estatuto Institucional vigente, según la especificación siguiente:
        </p>

        <p>
            Soy docente, <strong>{{ $CONDICION }}</strong> a <strong>{{ $MODALIDAD }}</strong> y <strong>NO EJERZO</strong> cualquier otra actividad o cargo remunerado en otra universidad, entidad pública o privada, fuera de la Universidad Nacional de Trujillo (De conformidad con el Artículo 225° del Estatuto Institucional vigente).
        </p>

        <p>
            <strong>EN CASO DE FALTAR A LA VERDAD ME SOMETO A LAS SANCIONES QUE SEAN APLICABLES DE ACUERDO A LEY; ASIMISMO, DE ENCONTRARME INCURSO EN SITUACIÓN DE INCOMPATIBILIDAD O IMPEDIMENTO PARA EJERCER LA DOCENCIA EN LA U.N.T., ME SOMETO A LAS SANCIONES PREVISTAS POR SU ESTATUTO, Y AUTORIZO AL FUNCIONARIO COMPETENTE DISPONGA EL DESCUENTO DE MI PLANILLA DE HABERES, DEL MONTO QUE LA UNIDAD DE REMUNERACIONES LIQUIDE COMO PAGOS INDEBIDOS POR EL LAPSO DE TIEMPO LABORADO ILEGALMENTE.</strong>
        </p>
    </div>

    <div class="date">
        Trujillo, {{ \Carbon\Carbon::now()->format('d') }} de {{ \Carbon\Carbon::now()->locale('es')->translatedFormat('F') }} del {{ \Carbon\Carbon::now()->format('Y') }}
    </div>

    <div class="signature">
        _____________________________<br>
        Firma del Docente<br>
        {{ $NOMBRE_COMPLETO }}<br>
        DNI: {{ $DNI }}
    </div>

</body>
</html>
