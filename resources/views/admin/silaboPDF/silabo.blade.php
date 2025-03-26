<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF con Encabezado Repetido</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <style>

        @page{
            margin: 3.5cm 0.5cm 1.5cm 0.5cm;
        }

        #header {
            position: fixed;
            top: -3cm;
            left: 0cm;
            right: 0cm;
            /* border-bottom: 2px solid #000; Línea inferior del encabezado */
            padding: 10px 0;
            z-index: 1000; /* Asegura que el encabezado esté por encima del contenido */
        }
        
        .imgHeader{
            float:left;
            width: 3cm;
            margin-left: 1cm;
        }

        .infoHeader{
            float:right;
            margin-right: 1cm;
        }

        #footer{
            position: fixed;
            bottom: -1.5cm;
            left: 0cm;
            width: 100%;
        }

        .textFooter{
            text-align: center;
            width: 100%;
        }

        .salto{
            page-break-after: always;
        }

        table {
            width: 100%; /* Tabla que ocupe el 100% del ancho */
            margin-bottom: 20px;
        }

        .table-fixed {
            table-layout: fixed;
            width: 100%;
        }

    </style>
</head>
<body>

    <!-- Encabezado que se repetirá en cada página -->
    <div id="header">
        <img src="image/logoUnt.png" alt="LOGO DE LA UNIVERSIDAD NACIONAL DE TRUJILLO" class="imgHeader">

        @if ($silabo->visado == 1)
            <img src="image/VISADO.jpg" alt="LOGO DE LA UNIVERSIDAD NACIONAL DE TRUJILLO" style="width: 80px; height: auto;" class="mx-5">
        @endif

        <div class="infoHeader">
            <p class="mb-0" style="font-weight: bold;">UNIVERSIDAD NACIONAL DE TRUJILLO</p>
            <p class="mb-0">FACULTAD DE INGENIERÍA</p>
            <p class="mb-0">DEPARTAMENTO DE INGENIERÍA DE SISTEMAS</p>
        </div>
    </div>

    {{-- <div id="footer">
        <p class="textFooter">SILABO</p>
    </div> --}}

    <div id="container" class="mx-3">   

        {{-- <h2 class="text-center" style="font-weight: bold;">SILABO DE SEGURIDAD DE LA INFORMACIÓN</h2> --}}
        <h2 class="text-center" style="font-weight: bold; text-transform: uppercase;">{{ $silabo->curso->nombre }}</h2>

        {{-- I. DATOS DE IDENTIFICACION --}}

        <div class="mt-4">
            <h3 style="font-weight: bold;">I. DATOS DE IDENTIFICACION</h3>
        </div>

        <table style="width: 100%; table-layout: fixed; border-collapse: collapse;" class="mt-3">

            <tr>
                <td class="px-4" style="width: 50%;"><b>1.1. Área:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->carrera->area }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.2. Facultad:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->carrera->facultad }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.3. Departamento Académico:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->carrera->departamento }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.4. Programa de Estudios:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->carrera->programa }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.5. Sede:</b></td>
                <td class="" style="width: 50%;">Trujillo</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.6. Año - Semestre académico:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->periodo->año }}-{{ $silabo->periodo->semestre }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.7. Ciclo:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->curso->ciclo }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.8. Código de la experiencia curricular:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->curso->codigo }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.9. Sección(es)/grupo(s):</b></td>
                <td class="" style="width: 50%;">1</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.10. Créditos:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->curso->creditos }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.11. Requisitos:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->curso->requisitos }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.12. Inicio – término:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->periodo->inicio }}/{{ $silabo->periodo->termino }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 50%;"><b>1.13. Tipo:</b></td>
                <td class="" style="width: 50%;">{{ $silabo->curso->tipo }}</td>
            </tr>
            <tr>
                <td class="px-4" style="width: 100%;" colspan="2"><b>1.14. Organización semestral del tiempo (semanas):</b></td>
            </tr>

            <tr>
                <td class="px-4 pt-3" style="width: 100%;" colspan="2">
                    <table class="table table-bordered table-fixed">
                        <thead class="align-middle text-center">
                            <tr>
                                <th rowspan="2" colspan="2" style="border: 2px solid black;">Actividades</th>
                                <th rowspan="2" style="border: 2px solid black;">Total de Horas</th>
                                <th colspan="3" style="border: 2px solid black;">Unidades</th>
                            </tr>
                            <tr>
                                <th style="border: 2px solid black;">I</th>
                                <th style="border: 2px solid black;">II</th>
                                <th style="border: 2px solid black;">III</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 2px solid black;" colspan="2" class="px-3"><strong>Teóricas</strong></td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hte1u+$silabo->organizacion->hte2u+$silabo->organizacion->hte3u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hte1u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hte2u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hte3u }}</td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid black;" colspan="2" class="px-3"><strong>Prácticas</strong></td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hpr1u+$silabo->organizacion->hpr2u+$silabo->organizacion->hpr3u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hpr1u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hpr2u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hpr3u }}</td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid black;" colspan="2" class="px-3"><strong>Retroalimentación</strong></td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hre1u+$silabo->organizacion->hre2u+$silabo->organizacion->hre3u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hre1u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hre2u }}</td>
                                <td style="border: 2px solid black;" class="text-center">{{ $silabo->organizacion->hre3u }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            
            <!-- Segunda fila: Docente / equipo docente(s) -->
            <tr>
                <td class="px-4" style="width: 100%;" colspan="2"><b>1.15. Docente / equipo docente(s):</b></td>
            </tr>
            <tr>
                <td class="px-4 pt-3" style="width: 100%;" colspan="2">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th class="text-center px-2" style="border: 2px solid black;">Condición</th>
                                <th class="text-center px-2" style="border: 2px solid black;">Apellidos y Nombres</th>
                                <th class="text-center px-2" style="border: 2px solid black;">Profesión</th>
                                <th class="text-center px-2" style="border: 2px solid black;">Email Institucional</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @php
                                // Ordenar docentes por la condición, mostrando primero "coordinador" y luego "apoyo"
                                $docentesOrdenados = $silabo->docentes->sortBy(function ($docente) {
                                    return $docente->pivot->condicion === 'coordinador' ? 0 : 1;
                                });
                            @endphp
                            @foreach ($docentesOrdenados as $docente)
                                <tr>
                                    <td class="text-center px-2" style="border: 2px solid black;">{{ $docente->pivot->condicion }}</td>
                                    <td class="text-center px-2" style="border: 2px solid black;">{{ $docente->apellidos }} {{ $docente->nombres }}</td>
                                    <td class="text-center px-2" style="border: 2px solid black;">{{ $docente->profesion }}</td>
                                    <td class="text-center px-2" style="border: 2px solid black;">{{ $docente->correo_institucional }}</td>
                                </tr>
                            @endforeach                          
                        </tbody>
                    </table>
                </td>
            </tr>

        </table>
        
        {{-- II. SUMILLA --}}

        <div class="salto"></div>

        <div class="mt-4 mb-3">
            <h3 style="font-weight: bold;">II. SUMILLA</h3>
        </div>

        <p class="px-4" style="text-align: justify;">
            {{ $silabo->sumilla }}
        </p>

        {{-- III. COMPETENCIA DE EXPERIENCIA CURRICULAR --}}

        <div class="mt-4">
            <h3 style="font-weight: bold;">III. COMPETENCIA DE EXPERIENCIA CURRICULAR</h3>
        </div>

        <div class="px-4">
            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">UNIDAD DE COMPETENCIA</h4>
            </div>
            <p style="text-align: justify;">
                {{ $silabo->unidad_competencia }}
            </p>
    
            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">COMPETENCIA GENERAL DE LA UNT</h4>
            </div>
            <p style="text-align: justify;">
                {{ $silabo->competencia_general }}
            </p>
    
            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">RESULTADOS DEL ESTUDIANTE QUE SON ABORDADOS POR EL CURSO</h4>
            </div>

            @foreach ($silabo->resultados as $resultado)
                <p class="my-2">{!! preg_replace('/(RE\d+:)/', '<strong>$1</strong>', $resultado->resultado) !!}</p>
            @endforeach


        </div>

        {{-- IV. PROGRAMACIÓN ACADÉMICA --}}

        <div class="mb-4">
            <h3 style="font-weight: bold;">IV. PROGRAMACIÓN ACADÉMICA</h3>
        </div>

        <div class="salto"></div>

        @php
            // Contador para determinar la última unidad
            $totalUnidades = $silabo->unidades->unique('id')->count();
            $contadorUnidad = 1; // Inicializa el contador de unidades
            // Inicializa la fecha de inicio
            $fechaInicio = new DateTime($silabo->periodo->inicio);
            // Clona la fecha para calcular la semana final
            $fechaFin = clone $fechaInicio;
            $fechaFin->modify('+4 days'); // Rango de 7 días
        @endphp

        @foreach ($silabo->unidades->unique('id') as $unidad)

            <table class="table table-bordered">
                <tbody>
                    <tr class="text-center">
                        <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px"><b>Capacidades Terminales</b></td>
                        <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px"><b>Resultados de Aprendizajes</b></td>
                        <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px"><b>Organización de Unidades de Contenidos</b></td>
                        <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px"><b>Estrategias Didácticas</b></td>
                        <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px"><b>Evidencias de Desempeño</b></td>
                        <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px"><b>Instrumentos de Evaluación</b></td>
                        <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px"><b>N° Semana</b></td>
                    </tr>

                    <tr class="text-center">
                        <td class="align-middle p-1" rowspan="6" style="border: 1px solid black; font-size: 10px">{{ $unidad->capacidades }}</td>
                        <td class="align-middle p-1" rowspan="6"  style="border: 1px solid black; font-size: 10px">{{ $unidad->resultados }}</td>
                        <td class="align-middle p-1" colspan="5" style="border: 1px solid black; font-size: 10px"><b>UNIDAD {{ $unidad->unidad }}:</b> {{ $unidad->titulo }}</td>
                    </tr>

                    @foreach ($unidad->programaciones as $programacion)
                        <tr>
                            <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px">{{ $programacion->contenido }}</td>
                            <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px">{{ $programacion->estrategias }}</td>
                            <td class="align-middle p-1" style="border: 1px solid black; font-size: 10px">{{ $programacion->evidencias }}</td>
                            <td class="text-center align-middle p-1" style="border: 1px solid black; font-size: 10px">{{ $programacion->instrumentos }}</td>
                            <td class="text-center align-middle p-1" style="border: 1px solid black; font-size: 10px">
                                {{ $programacion->semana }} <br><br> {{ $fechaInicio->format('d/m/Y') }} - {{ $fechaFin->format('d/m/Y') }}
                            </td>
                        </tr>

                        @php
                            $fechaInicio->modify('+7 days');
                            $fechaFin->modify('+7 days');
                        @endphp
                    @endforeach

                    <!-- Si es la última unidad, agrega dos filas adicionales para las semanas 16 y 17 -->
                    @if ($contadorUnidad == $totalUnidades)
                        @php
                            $semana16Inicio = clone $fechaInicio;
                            $semana16Fin = clone $semana16Inicio;
                            $semana16Fin->modify('+4 days');
                        @endphp

                        <tr>
                            <td class="align-middle p-1 text-center" style="border: 1px solid black; font-size: 10px" colspan="6">Examen Sustitutorio - Examen Aplazado</td>
                            <td class="text-center align-middle p-1" style="border: 1px solid black; font-size: 10px">
                                16 <br><br> {{ $semana16Inicio->format('d/m/Y') }} - {{ $semana16Fin->format('d/m/Y') }}
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>

            <div class="salto"></div>

            @php
                $contadorUnidad++; // Incrementa el contador de unidades
            @endphp
        @endforeach



        {{-- V. TEMA DE EVALUACION --}}

        <div class="mt-4">
            <h3 style="font-weight: bold;">V. TEMA DE EVALUACION</h3>
        </div>

        <div class="px-4">

            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">BASE LEGAL</h4>
            </div>
            
            <p style="text-align: justify;">
                Reglamento de Normas Generales de Evaluación y Aprendizaje con el enfoque en competencias, de los
                Estudiantes de Pregrado de la Universidad Nacional de Trujillo.
            </p>
    
            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">PRINICIPIOS Y PROCEDIMIENTOS</h4>
            </div>

            <ul>

                @foreach ($silabo->evaluacions as $evaluacion)
                <li class="my-1">{{ $evaluacion->evaluacion }}</li>
                @endforeach

                <div class="mx-4 my-2">
                    <li>{{ $silabo->promedio->pu1 }}</li>
                
                    <li>{{ $silabo->promedio->pu2 }}</li>
                    
                    <li>{{ $silabo->promedio->pu3 }}</li>
                </div>

                <li>La fórmula para calcular el promedio promocional es la siguiente:</li>

                <div class="mx-4 my-2">
                    <li>{{ $silabo->promedio->pp }}</li>
                </div>

            </ul>

            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">PRINICIPIOS Y PROCEDIMIENTOS</h4>
            </div>

            <p style="text-align: justify;">
                El sistema de calificación es vigesimal (0-20). La nota aprobatoria es 14, en el promedio promocional el medio punto (0.5) favorece
                al estudiante. La asistencia será en función al ingreso a la plataforma y/o a los productos académicos virtuales presentados en la
                semana por parte de los estudiantes En caso de incumplimiento en un 30%, serán inhabilitados.
                En caso de estudiantes que asuman la modalidad no presencial con módulo auto instructivo, la asistencia será en función a las
                tareas presentadas.
            </p>

            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">NIVELES DE LOGROS</h4>
            </div>

            <p style="text-align: justify;">
                Valoración integral de la competencia a través de las evidencias de desempeño de los estudiantes obtenidos al finalizar la
                experiencia curricular. Se establece cuatro niveles de logro:
            </p>

            <ul>
                <li>Nivel de inicio: Necesita reforzar las capacidades previstas en coordinación con la Dirección de Escuela y/o
                    Estudios Generales, según corresponda. (0-13).</li>
                <li>Nivel logrado: Muestra un nivel adecuado de dominio de las capacidades en la asignatura (14-17).</li>
                <li>Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría,
                    práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará
                    acreedor a la nota de 00.</li>
                <li>Nivel avanzado: Posee un alto nivel de dominio de las capacidades de la asignatura (18-20).</li>
            </ul>
            
            <p style="text-align: justify;">
                Al final de cada unidad de aprendizaje, se implementarán acciones correctivas (retroalimentación), para aquellos
                estudiantes que se encuentran en los niveles de inicio. Se reportará a la Dirección de la Escuela los niveles de logros
                alcanzados, adjuntando un plan de mejora, en caso lo haya requerido. Para ello, se emitirá un informe virtual cuantitativo
                y cualitativo de logro de competencias de la experiencia curricular.
            </p>

        </div>

        {{-- VI. CONSEJERIA ACADÉMICA --}}

        <div class="mt-4">
            <h3 style="font-weight: bold;">VI. CONSEJERIA ACADÉMICA</h3>
        </div>

        <div class="px-4">
            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">PROPÓSITO</h4>
            </div>
    
            <p style="text-align: justify;">
                Acompañamiento y monitoreo académico oportuno al estudiante que no logra las capacidades programadas en el
                proceso del desarrollo de la experiencia curricular como parte del plan de mejora.
            </p>
    
            <div class="mt-4 mb-3">
                <h4 style="font-weight: bold;">DESARROLLO DE TUTORIA</h4>
            </div>
    
            <div class="px-3">
                <p class="my-0"><b>DÍA: </b>{{ $silabo->tutoria->dia }}</p>
                <p class="my-0"><b>HORARIO: </b>{{ $silabo->tutoria->horario }}</p>
                <p class="my-0"><b>LUGAR: </b>{{ $silabo->tutoria->lugar }}</p>
                <p class="my-0"><b>EMAIL: </b>santos@unitru.edu.pe</p>
            </div>
        </div>

        {{-- VII. REFERENCIAS BIBLIOGRÁFICAS --}}

        <div class="mt-4">
            <h3 style="font-weight: bold;">VII. REFERENCIAS BIBLIOGRÁFICAS</h3>
        </div>

        <div class="px-4">
            @foreach ($silabo->referencias as $referencia)
            <p style="text-align: justify;">
                {{ $referencia->referencia }}
            </p>
            @endforeach  
        </div>

    </div>

    <script type = "text/php">
        if(isset($pdf)){
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(300, 800, "Página $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ')
        }
    </script>

</body>
</html>
