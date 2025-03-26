<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Apertura de Curso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
        }
        header {
            text-align: center;
            margin-bottom: 3rem;
        }
        header h1 {
            font-size: 1.8rem;
            margin: 0;
        }
        header p {
            font-size: 1rem;
            margin: 0;
        }
        .content {
            font-size: 1rem;
            line-height: 1.6;
        }
        .section-title {
            font-weight: bold;
            margin-top: 2rem;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        .footer {
            margin-top: 4rem;
            text-align: center;
            font-size: 0.9rem;
            color: #666;
        }
        .signature {
            margin-top: 4rem;
            text-align: right;
        }
        .signature p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Universidad Nacional de Trujillo</h1>
        <p>Oficina de Gestión Académica</p>
        <p><strong>Solicitud de Apertura de Curso</strong></p>
    </header>

    <div class="content">
        <p>
            Por la presente, se solicita la apertura del curso detallado a continuación, según los parámetros establecidos
            para el periodo académico correspondiente. La información se detalla como sigue:
        </p>

        <p class="section-title">Datos del Curso</p>
        <p><strong>Nombre del Curso:</strong> {{ $solicitud->curso }}</p>
        <p><strong>Programa Académico:</strong> {{ $solicitud->programa }}</p>
        <p><strong>Período Académico:</strong> {{ $solicitud->periodo }}</p>

        <p class="section-title">Información del Solicitante</p>
        <p><strong>Enviado Por:</strong> {{ $solicitud->enviado_por }}</p>
        <p><strong>Fecha de Solicitud:</strong> {{ \Carbon\Carbon::parse($solicitud->fecha_solicitud)->format('d/m/Y') }}</p>

        <p>
            La solicitud se presenta en conformidad con los lineamientos académicos y administrativos vigentes. Quedamos
            a la espera de la confirmación para proceder con las acciones correspondientes.
        </p>
    </div>

    <div class="signature">
        <p>Atentamente,</p>
        <p><strong>___________________________</strong></p>
        <p>Director de Escuela {{ $solicitud->enviado_por }}</p>
    </div>

    <div class="footer">
        <p>Universidad Nacional de Trujillo - Oficina de Gestión Académica</p>
        <p>Teléfono: (044) 123-4567 | Email: gestion.academica@unt.edu.pe</p>
    </div>
</body>
</html>
