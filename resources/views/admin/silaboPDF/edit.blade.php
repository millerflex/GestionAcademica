@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')

<div class="container mt-4">

    <form method="POST" action="{{ route('admin.silaboPDF.update', $silabo->id) }}">

        @csrf
        @method('PUT')

        <!-- DATOS DE IDENTIFICACION READY -->

        <div class="row mb-2">
            <div class="col-md-6">
                <h5 class="text-left" style="font-weight: bold;">
                    I. DATOS DE IDENTIFICACION
                </h5>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary" id="autoFillBtn">
                    <i class="fas fa-magic"></i> Completar automáticamente
                </button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="carrera_nombre">Carrera</label>
                    <input type="text" class="form-control" id="carrera_nombre" name="carrera_nombre" value="{{ $silabo->carrera->programa }}" readonly>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="form-group">
                    <label for="curso_nombre">Curso</label>
                    <input type="text" class="form-control" id="carrera_nombre" name="carrera_nombre" value="{{ $silabo->curso->nombre }}" readonly>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="form-group">
                    <label for="periodo">Periodo</label>
                    <input type="text" class="form-control" id="periodo" name="periodo" value="{{ $silabo->periodo->año }} - {{ $silabo->periodo->semestre }}" readonly>
                </div>
            </div>
        </div>

        <!-- ORGANIZACIÓN SEMESTRAL DEL TIEMPO READY -->

        <div class="row mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    II. ORGANIZACIÓN SEMESTRAL DEL TIEMPO
                </h5>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive table-striped">
                    <table class="table table-bordered">
                        <thead class="bg-primary text-white text-center">
                            <tr>
                                <th rowspan="2" class="align-middle" style="border: 2px solid black;">Actividades</th>
                                <th rowspan="2" class="align-middle" style="border: 2px solid black;">Total de Horas</th>
                                <th colspan="3" style="border: 2px solid black;">Unidades</th>
                            </tr>
                            <tr>
                                <th class="align-middle" style="border: 2px solid black;">I</th>
                                <th class="align-middle" style="border: 2px solid black;">II</th>
                                <th class="align-middle" style="border: 2px solid black;">III</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center bg-primary" style="border: 2px solid black; color: white;"><strong>Teóricas</strong></td>
                                <td style="border: 2px solid black;" id="total1" class="align-middle text-center"></td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hte1u" class="form-control text-center hte" name="hte1u" oninput="updateTotal('total1', 'hte1u', 'hte2u', 'hte3u')" value="{{ $silabo->organizacion->hte1u ?? '' }}">
                                </td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hte2u" class="form-control text-center hte" name="hte2u" oninput="updateTotal('total1', 'hte1u', 'hte2u', 'hte3u')" value="{{ $silabo->organizacion->hte2u ?? '' }}">
                                </td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hte3u" class="form-control text-center hte" name="hte3u" oninput="updateTotal('total1', 'hte1u', 'hte2u', 'hte3u')" value="{{ $silabo->organizacion->hte3u ?? '' }}">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center bg-primary" style="border: 2px solid black; color: white;"><strong>Prácticas</strong></td>
                                <td style="border: 2px solid black;" id="total2" class="align-middle text-center"></td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hpr1u" class="form-control text-center hpr" name="hpr1u" oninput="updateTotal('total2', 'hpr1u', 'hpr2u', 'hpr3u')" value="{{ $silabo->organizacion->hpr1u ?? '' }}">
                                </td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hpr2u" class="form-control text-center hpr" name="hpr2u" oninput="updateTotal('total2', 'hpr1u', 'hpr2u', 'hpr3u')" value="{{ $silabo->organizacion->hpr2u ?? '' }}">
                                </td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hpr3u" class="form-control text-center hpr" name="hpr3u" oninput="updateTotal('total2', 'hpr1u', 'hpr2u', 'hpr3u')" value="{{ $silabo->organizacion->hpr3u ?? '' }}">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center bg-primary" style="border: 2px solid black; color: white;"><strong>Retroalimentación</strong></td>
                                <td style="border: 2px solid black;" id="total3" class="align-middle text-center"></td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hre1u" class="form-control text-center hre" name="hre1u" oninput="updateTotal('total3', 'hre1u', 'hre2u', 'hre3u')" value="{{ $silabo->organizacion->hpr3u ?? '' }}">
                                </td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hre2u" class="form-control text-center hre" name="hre2u" oninput="updateTotal('total3', 'hre1u', 'hre2u', 'hre3u')" value="{{ $silabo->organizacion->hpr3u ?? '' }}">
                                </td>
                                <td style="border: 2px solid black;">
                                    <input type="text" id="hre3u" class="form-control text-center hre" name="hre3u" oninput="updateTotal('total3', 'hre1u', 'hre2u', 'hre3u')" value="{{ $silabo->organizacion->hpr3u ?? '' }}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- DOCENTE/EQUIPO DOCENTE -->

        <div class="row mt-3 mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    III. DOCENTE/EQUIPO DOCENTE
                </h5>
            </div>
        </div>  

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        
                        <thead class="bg-primary text-white text-center">
                            <tr>
                                <th class="align-middle" style="border: 2px solid black;">Condición</th>
                                <th class="align-middle" style="border: 2px solid black;">Apellidos y Nombres</th>
                                <th class="align-middle" style="border: 2px solid black;">Profesión</th>
                                <th class="align-middle" style="border: 2px solid black;">Email Institucional</th>
                            </tr>
                        </thead>

                        <tbody id="tableDocente">
                            @foreach($silabo->docentes as $docente)
                            <tr>
                                <td style="border: 1px solid black;">
                                    <select class="form-control" name="docente_condicion[]" disabled>
                                        <option value="Coordinador" {{ $docente->pivot->condicion == "Coordinador" ? 'selected' : '' }}>Coordinador</option>
                                        <option value="Apoyo" {{ $docente->pivot->condicion == "Apoyo" ? 'selected' : '' }}>Apoyo</option>
                                    </select>
                                </td>
                                <td style="border: 1px solid black;">
                                    <select class="form-control" name="docente_id[]" disabled>
                                        <option value="" disabled>Seleccione docente</option>
                                        @foreach ($silabo->docentes as $docent)
                                        <option value="{{ $docent->id }}" data-profesion="{{ $docent->profesion }}" data-correo="{{ $docent->correo_institucional }}"
                                            {{ $docent->id == $docente->id ? 'selected' : '' }}>
                                            {{ $docent->apellidos }} {{ $docent->nombres }}
                                        </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td style="border: 1px solid black;" class="align-middle text-center"></td>
                                <td style="border: 1px solid black;" class="align-middle text-center"></td>
                            </tr>                            
                            @endforeach
                        </tbody>   

                    </table>
                </div>
            </div>
        </div>

        <!-- SUMILLA READY --> 
        
        <div class="row mt-3 mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    IV. SUMILLA
                </h5>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" rows="4" name="sumilla" id="sumilla">{{ $silabo->sumilla }}</textarea>
            </div>
        </div>

        <!-- UNIDAD DE COMPETENCIA -->

        <div class="row mt-3 mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    V. UNIDAD DE COMPETENCIA
                </h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" rows="4" name="unidad_competencia" id="unidad_competencia">{{ $silabo->unidad_competencia }}</textarea>
            </div>
        </div>

        <!-- COMPETENCIAS GENERALES DE LA UNT READY -->

        <div class="row mt-3 mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    VI. COMPETENCIAS GENERALES DE LA UNT
                </h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" rows="4" name="competencia_general" id="competencia_general">{{ $silabo->competencia_general }}</textarea>
            </div>
        </div>

        <!-- RESULTADOS DEL ESTUDIANTE QUE SON ABORDADOS POR EL CURSO READY -->

        <div class="row mt-3 mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    VII. RESULTADOS DEL ESTUDIANTE QUE SON ABORDADOS POR EL CURSO
                </h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group" id="checkboxContainer">
                    @foreach ($resultados as $resultado)
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="{{ $resultado->id }}" id="resultado_{{ $resultado->id }}" name="resultados[]"
                            @if($silabo->resultados->contains($resultado->id)) checked @endif>
                        <label class="form-check-label" for="resultado_{{ $resultado->id }}">
                            {{ $resultado->resultado }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- PROGRAMACION ACADEMICA ULTIMO READY -->

        <div class="row mt-3 mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    VIII. PROGRAMACION ACADEMICA
                </h5>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <!-- I UNIDAD -->
                            <!-- Fila 1 -->
                            <tr class="bg-primary text-white text-center">
                                <td class="align-middle">Capacidades Terminales</td>
                                <td class="align-middle">Resultados de Aprendizajes</td>
                                <td class="align-middle">Organización de Unidades de Contenidos</td>
                                <td class="align-middle">Estrategias Didácticas</td>
                                <td class="align-middle">Evidencias de Desempeño</td>
                                <td class="align-middle">Instrumentos de Evaluación</td>
                                <td class="align-middle">N° Semana</td>
                            </tr>
                            <!-- Fila 2 -->
                            <tr class="text-center">
                                <td rowspan="6" class="align-middle"><textarea class="form-control" rows="44" name="capacidades[]" id='capacidades1'>{{ $silabo->unidades[0]->capacidades ?? '' }}</textarea></td>
                                <td rowspan="6" class="align-middle"><textarea class="form-control" rows="44" name="resultadosuni[]" id='resultados1'>{{ $silabo->unidades[0]->resultados ?? '' }}</textarea></td>
                                <td class="align-middle"><b>UNIDAD I:</b></td>
                                <td colspan="4" class="text-center"><input type="text" class="form-control" name="titulos[]" id='titulo1' value="{{ $silabo->unidades[0]->titulo ?? '' }}"></td>
                            </tr>
                            <!-- Fila 3 -->
                            <tr>
                                <td><textarea id="contenidos1" class="form-control" rows="7" name="contenido1[]">{{ $silabo->programaciones[0]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias1" class="form-control" rows="7" name="estrategias1[]">{{ $silabo->programaciones[0]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias1" class="form-control" rows="7" name="evidencias1[]">{{ $silabo->programaciones[0]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos1" class="form-control" rows="7" name="intrumentos1[]">{{ $silabo->programaciones[0]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">1</td>
                            </tr>
                            <!-- Fila 4 -->
                            <tr>
                                <td><textarea id="contenidos2" class="form-control" rows="7" name="contenido1[]">{{ $silabo->programaciones[1]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias2" class="form-control" rows="7" name="estrategias1[]">{{ $silabo->programaciones[1]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias2" class="form-control" rows="7" name="evidencias1[]">{{ $silabo->programaciones[1]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos2" class="form-control" rows="7" name="intrumentos1[]">{{ $silabo->programaciones[1]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">2</td>
                            </tr>
                            <!-- Fila 5 -->
                            <tr>
                                <td><textarea id="contenidos3" class="form-control" rows="7" name="contenido1[]">{{ $silabo->programaciones[2]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias3" class="form-control" rows="7" name="estrategias1[]">{{ $silabo->programaciones[2]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias3" class="form-control" rows="7" name="evidencias1[]">{{ $silabo->programaciones[2]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos3" class="form-control" rows="7" name="intrumentos1[]">{{ $silabo->programaciones[2]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">3</td>
                            </tr>
                            <!-- Fila 6 -->
                            <tr>
                                <td><textarea id="contenidos4" class="form-control" rows="7" name="contenido1[]">{{ $silabo->programaciones[3]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias4" class="form-control" rows="7" name="estrategias1[]">{{ $silabo->programaciones[3]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias4" class="form-control" rows="7" name="evidencias1[]">{{ $silabo->programaciones[3]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos4" class="form-control" rows="7" name="intrumentos1[]">{{ $silabo->programaciones[3]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">4</td>
                            </tr>
                            <!-- Fila 7 -->
                            <tr>
                                <td><textarea id="contenidos5" class="form-control" rows="7" name="contenido1[]">{{ $silabo->programaciones[4]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias5" class="form-control" rows="7" name="estrategias1[]">{{ $silabo->programaciones[4]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias5" class="form-control" rows="7" name="evidencias1[]">{{ $silabo->programaciones[4]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos5" class="form-control" rows="7" name="intrumentos1[]">{{ $silabo->programaciones[4]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>       
        
        <div class="row my-2">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <!-- II UNIDAD -->
                            <!-- Fila 1 -->
                            <tr class="bg-primary text-white text-center">
                                <td class="align-middle">Capacidades Terminales</td>
                                <td class="align-middle">Resultados de Aprendizajes</td>
                                <td class="align-middle">Organización de Unidades de Contenidos</td>
                                <td class="align-middle">Estrategias Didácticas</td>
                                <td class="align-middle">Evidencias de Desempeño</td>
                                <td class="align-middle">Instrumentos de Evaluación</td>
                                <td class="align-middle">N° Semana</td>
                            </tr>
                            <!-- Fila 2 -->
                            <tr class="text-center">
                                <td rowspan="6" class="align-middle"><textarea class="form-control" rows="44" name="capacidades[]" id='capacidades2'>{{ $silabo->unidades[5]->capacidades ?? '' }}</textarea></td>
                                <td rowspan="6" class="align-middle"><textarea class="form-control" rows="44" name="resultadosuni[]" id='resultados2'>{{ $silabo->unidades[5]->resultados ?? '' }}</textarea></td>
                                <td class="align-middle"><b>UNIDAD II:</b></td>
                                <td colspan="4" class="text-center"><input type="text" class="form-control" name="titulos[]" id='titulo2' value="{{ $silabo->unidades[5]->titulo ?? '' }}"></td>
                            </tr>
                            <!-- Fila 3 -->
                            <tr>
                                <td><textarea id="contenidos6" class="form-control" rows="7" name="contenido2[]">{{ $silabo->programaciones[5]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias6" class="form-control" rows="7" name="estrategias2[]">{{ $silabo->programaciones[5]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias6" class="form-control" rows="7" name="evidencias2[]">{{ $silabo->programaciones[5]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos6" class="form-control" rows="7" name="intrumentos2[]">{{ $silabo->programaciones[5]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">6</td>
                            </tr>
                            <!-- Fila 4 -->
                            <tr>
                                <td><textarea id="contenidos7" class="form-control" rows="7" name="contenido2[]">{{ $silabo->programaciones[6]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias7" class="form-control" rows="7" name="estrategias2[]">{{ $silabo->programaciones[6]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias7" class="form-control" rows="7" name="evidencias2[]">{{ $silabo->programaciones[6]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos7" class="form-control" rows="7" name="intrumentos2[]">{{ $silabo->programaciones[6]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">7</td>
                            </tr>
                            <!-- Fila 5 -->
                            <tr>
                                <td><textarea id="contenidos8" class="form-control" rows="7" name="contenido2[]">{{ $silabo->programaciones[7]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias8" class="form-control" rows="7" name="estrategias2[]">{{ $silabo->programaciones[7]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias8" class="form-control" rows="7" name="evidencias2[]">{{ $silabo->programaciones[7]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos8" class="form-control" rows="7" name="intrumentos2[]">{{ $silabo->programaciones[7]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">8</td>
                            </tr>
                            <!-- Fila 6 -->
                            <tr>
                                <td><textarea id="contenidos9" class="form-control" rows="7" name="contenido2[]">{{ $silabo->programaciones[8]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias9" class="form-control" rows="7" name="estrategias2[]">{{ $silabo->programaciones[8]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias9" class="form-control" rows="7" name="evidencias2[]">{{ $silabo->programaciones[8]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos9" class="form-control" rows="7" name="intrumentos2[]">{{ $silabo->programaciones[8]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">9</td>
                            </tr>
                            <!-- Fila 7 -->
                            <tr>
                                <td><textarea id="contenidos10" class="form-control" rows="7" name="contenido2[]">{{ $silabo->programaciones[9]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias10" class="form-control" rows="7" name="estrategias2[]">{{ $silabo->programaciones[9]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias10" class="form-control" rows="7" name="evidencias2[]">{{ $silabo->programaciones[9]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos10" class="form-control" rows="7" name="intrumentos2[]">{{ $silabo->programaciones[9]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <!-- III UNIDAD -->
                            <!-- Fila 1 -->
                            <tr class="bg-primary text-white text-center">
                                <td class="align-middle">Capacidades Terminales</td>
                                <td class="align-middle">Resultados de Aprendizajes</td>
                                <td class="align-middle">Organización de Unidades de Contenidos</td>
                                <td class="align-middle">Estrategias Didácticas</td>
                                <td class="align-middle">Evidencias de Desempeño</td>
                                <td class="align-middle">Instrumentos de Evaluación</td>
                                <td class="align-middle">N° Semana</td>
                            </tr>
                            <!-- Fila 2 -->
                            <tr class="text-center">
                                <td rowspan="6" class="align-middle"><textarea class="form-control" rows="44" name="capacidades[]" id='capacidades3'>{{ $silabo->unidades[10]->capacidades ?? '' }}</textarea></td>
                                <td rowspan="6" class="align-middle"><textarea class="form-control" rows="44" name="resultadosuni[]" id='resultados3'>{{ $silabo->unidades[10]->resultados ?? '' }}</textarea></td>
                                <td class="align-middle"><b>UNIDAD III:</b></td>
                                <td colspan="4" class="text-center"><input type="text" class="form-control" name="titulos[]" id='titulo3' value="{{ $silabo->unidades[10]->titulo ?? '' }}"></td>
                            </tr>
                            <!-- Fila 3 -->
                            <tr>
                                <td><textarea id="contenidos11" class="form-control" rows="7" name="contenido3[]">{{ $silabo->programaciones[10]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias11" class="form-control" rows="7" name="estrategias3[]">{{ $silabo->programaciones[10]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias11" class="form-control" rows="7" name="evidencias3[]">{{ $silabo->programaciones[10]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos11" class="form-control" rows="7" name="intrumentos3[]">{{ $silabo->programaciones[10]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">11</td>
                            </tr>
                            <!-- Fila 4 -->
                            <tr>
                                <td><textarea id="contenidos12" class="form-control" rows="7" name="contenido3[]">{{ $silabo->programaciones[11]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias12" class="form-control" rows="7" name="estrategias3[]">{{ $silabo->programaciones[11]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias12" class="form-control" rows="7" name="evidencias3[]">{{ $silabo->programaciones[11]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos12" class="form-control" rows="7" name="intrumentos3[]">{{ $silabo->programaciones[11]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">12</td>
                            </tr>
                            <!-- Fila 5 -->
                            <tr>
                                <td><textarea id="contenidos13" class="form-control" rows="7" name="contenido3[]">{{ $silabo->programaciones[12]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias13" class="form-control" rows="7" name="estrategias3[]">{{ $silabo->programaciones[12]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias13" class="form-control" rows="7" name="evidencias3[]">{{ $silabo->programaciones[12]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos13" class="form-control" rows="7" name="intrumentos3[]">{{ $silabo->programaciones[12]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">13</td>
                            </tr>
                            <!-- Fila 6 -->
                            <tr>
                                <td><textarea id="contenidos14" class="form-control" rows="7" name="contenido3[]">{{ $silabo->programaciones[13]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias14" class="form-control" rows="7" name="estrategias3[]">{{ $silabo->programaciones[13]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias14" class="form-control" rows="7" name="evidencias3[]">{{ $silabo->programaciones[13]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos14" class="form-control" rows="7" name="intrumentos3[]">{{ $silabo->programaciones[13]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">14</td>
                            </tr>
                            <!-- Fila 7 -->
                            <tr>
                                <td><textarea id="contenidos15" class="form-control" rows="7" name="contenido3[]">{{ $silabo->programaciones[14]->contenido ?? '' }}</textarea></td>
                                <td><textarea id="estrategias15" class="form-control" rows="7" name="estrategias3[]">{{ $silabo->programaciones[14]->estrategias ?? '' }}</textarea></td>
                                <td><textarea id="evidencias15" class="form-control" rows="7" name="evidencias3[]">{{ $silabo->programaciones[14]->evidencias ?? '' }}</textarea></td>
                                <td><textarea id="instrumentos15" class="form-control" rows="7" name="intrumentos3[]">{{ $silabo->programaciones[14]->instrumentos ?? '' }}</textarea></td>
                                <td class="text-center">15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  

        <!-- SISTEMA EVALUACION READY -->

        <div class="row mt-3 mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    IX. SISTEMA EVALUACION
                </h5>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <p><b>PRINCIPIOS Y PROCEDIMIENTOS</b></p>

                <!-- Contenedor donde se agregarán los textareas dinámicamente -->
                
                @if ($silabo->evaluacions->isNotEmpty())
                    @foreach ($silabo->evaluacions->slice(0, -1) as $evaluacion)
                        <div id="evaluacionContainer" class="form-group">
                            <textarea class="form-control mb-3" rows="2" name="evaluacion[]">{{ $evaluacion->evaluacion ?? '' }}</textarea>
                        </div>
                    @endforeach
                @else
                    <div id="evaluacionContainer" class="form-group">
                        <textarea class="form-control mb-3" rows="2" name="evaluacion[]"></textarea>
                    </div>
                @endif

                <!-- Botón para agregar más textareas -->
                <button type="button" class="btn btn-primary" id="addEvaluacionBtn">Más</button>

                <p class="mt-3"><b>EVIDENCIAS DE EVALUACION</b></p>

                <textarea class="form-control mb-3" rows="1" placeholder="IF=Informe EP=Exposicion EX=Examen" name="evaluacion[]">{{ $silabo->evaluacions->last()->evaluacion ?? '' }}</textarea>

                <p class="mt-3"><b>FORMULA DE UNIDAD I</b></p>
                <textarea class="form-control mb-3" rows="1" placeholder="'[IF+EP+EX]/3' o '0.2*IF + 0.3*EP + 0.5*EX'" name="pu1" id="pu1">{{ $silabo->promedio->pu1 ?? '' }}</textarea>

                <p class="mt-3"><b>FORMULA DE UNIDAD II</b></p>
                <textarea class="form-control mb-3" rows="1" placeholder="'[IF+EP+EX]/3' o '0.2*IF + 0.3*EP + 0.5*EX'" name="pu2" id="pu2">{{ $silabo->promedio->pu2 ?? '' }}</textarea>

                <p class="mt-3"><b>FORMULA DE UNIDAD III</b></p>
                <textarea class="form-control mb-3" rows="1" placeholder="'[IF+EP+EX]/3' o '0.2*IF + 0.3*EP + 0.5*EX'" name="pu3" id="pu3">{{ $silabo->promedio->pu3 ?? '' }}</textarea>

                <p class="mt-3"><b>FORMULA DE PROMEDIO PROMOCIONAL</b></p>
                <textarea class="form-control mb-3" rows="1" placeholder="'[PU1+PU2+PU3]/3' o '0.3*PU1 + 0.3*PU2 + 0.4*PU3'" name="pp" id="pp">{{ $silabo->promedio->pp ?? '' }}</textarea>

            </div>

        </div>

        <!-- CONSEJERIA ACADEMICA READY -->

        <div class="row mt-3 mb-2">
            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    X. CONSEJERIA ACADEMICA
                </h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p><b>DIA</b></p>
                <div class="form-group"><input type="text" id="tutoria_dia" class="form-control" name="dia" value="{{ $silabo->tutoria->dia ?? '' }}"></div>
            </div>
            <div class="col-md-4">
                <p><b>LUGAR</b></p>
                <div class="form-group"><input type="text" id="tutoria_lugar" class="form-control" name="lugar" value="{{ $silabo->tutoria->lugar ?? '' }}"></div>
            </div>
            <div class="col-md-4">
                <p><b>HORARIO</b></p>
                <div class="form-group"><input type="text" id="tutoria_horario" class="form-control" name="horario" value="{{ $silabo->tutoria->horario ?? '' }}"></div>
            </div>
        </div>

        <!-- REFERENCIAS BIBLIOGRAFICAS -->

        <div class="row mt-3 mb-2">

            <div class="col-md-12">
                <h5 class="text-left" style="font-weight: bold;">
                    X. REFERENCIAS BIBLIOGRAFICAS
                </h5>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                <!-- Contenedor donde se agregarán los textareas dinámicamente -->


                @if ($silabo->referencias->isNotEmpty())
                    @foreach ($silabo->referencias->slice(0, -1) as $referencia)
                        <div id="referenciaContainer" class="form-group">
                            <textarea class="form-control mb-3" rows="2" name="referencia[]">{{ $referencia->referencia ?? '' }}</textarea>
                        </div>
                    @endforeach
                @else
                    <div id="referenciaContainer" class="form-group">
                        <textarea class="form-control mb-3" rows="2" name="referencia[]"></textarea>
                    </div>
                @endif

                <!-- Botón para agregar más textareas -->
                <button type="button" class="btn btn-primary" id="addReferenciaBtn">Agregar Referencias</button>
            </div>

        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
            <a href="" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
        </div>

    </form>

</div>

@stop

@section('css')
@stop

@section('js')
<script>
    // Función para actualizar la información del docente
    function updateDocenteInfo(selectElement) {
        const selectedOption = selectElement.options[selectElement.selectedIndex]; 
        const profesion = selectedOption.getAttribute('data-profesion'); 
        const correo = selectedOption.getAttribute('data-correo'); 

        const row = selectElement.closest('tr'); // Obtener la fila padre

        const emailCell = row.querySelector('td:nth-child(4)'); // Celda para el email
        const profesionCell = row.querySelector('td:nth-child(3)'); // Celda para la profesión

        emailCell.innerText = correo; // Asignar el correo
        profesionCell.innerText = profesion; // Asignar la profesión
    }

    // Función para agregar una nueva fila
    document.getElementById('addDocenteBtn').addEventListener('click', function() {
        const tableBody = document.getElementById('tableDocente');
        
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td style="border: 2px solid black;">
                <select class="form-control" name="docente_condicion[]">
                    <option value="coordinador">Coordinador</option>
                    <option value="apoyo">Apoyo</option>
                </select>
            </td>
            <td style="border: 2px solid black;">
                <select class="form-control" name="docente_id[]" onchange="updateDocenteInfo(this)">
                    <option value="" selected disabled>Seleccione docente</option>
                    @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}" data-profesion="{{ $docente->profesion }}" data-correo="{{ $docente->correo_institucional }}">
                        {{ $docente->apellidos }} {{ $docente->nombres }}
                    </option>
                    @endforeach
                </select>
            </td>
            <td style="border: 2px solid black;" class="align-middle text-center"></td>
            <td style="border: 2px solid black;" class="align-middle text-center"></td>
        `;
        
        tableBody.appendChild(newRow); // Añadir la nueva fila al final de la tabla
    });
</script>

<script>
    document.getElementById('addEvaluacionBtn').addEventListener('click', function() {
        // Crear un nuevo textarea
        var newTextarea = document.createElement('textarea');
        newTextarea.className = 'form-control mb-3'; // Clase para el estilo
        newTextarea.rows = 2; // Número de filas
        newTextarea.name = 'evaluacion[]'; // Asignar el name para enviar como array

        // Agregar el textarea al contenedor
        document.getElementById('evaluacionContainer').appendChild(newTextarea);
    });
</script>

<script>
    document.getElementById('addReferenciaBtn').addEventListener('click', function() {
        // Crear un nuevo textarea
        var newTextarea = document.createElement('textarea');
        newTextarea.className = 'form-control mb-3'; // Clase para el estilo
        newTextarea.rows = 2; // Número de filas
        newTextarea.name = 'referencia[]'; // Asignar el name para enviar como array

        // Agregar el textarea al contenedor
        document.getElementById('referenciaContainer').appendChild(newTextarea);
    });
</script>

<script>
    function updateTotal(totalId, input1, input2, input3) {
        // Obtener los valores de los inputs
        const val1 = parseFloat(document.querySelector(`input[name="${input1}"]`).value) || 0;
        const val2 = parseFloat(document.querySelector(`input[name="${input2}"]`).value) || 0;
        const val3 = parseFloat(document.querySelector(`input[name="${input3}"]`).value) || 0;
    
        // Calcular el total
        const total = val1 + val2 + val3;
    
        // Actualizar el total en la celda correspondiente
        document.getElementById(totalId).innerText = total;
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Llama a updateTotal para cada total al cargar la página
        updateTotal('total1', 'hte1u', 'hte2u', 'hte3u');
        updateTotal('total2', 'hpr1u', 'hpr2u', 'hpr3u');
        updateTotal('total3', 'hre1u', 'hre2u', 'hre3u');
    });
</script>

<script>
    // Llamar a updateDocenteInfo para las opciones seleccionadas al cargar
    document.querySelectorAll('select[name="docente_id[]"]').forEach(select => {
        if (select.value) {
            updateDocenteInfo(select);
        }
    });
</script>

<script>
    // Funcionalidad para rellenar automáticamente los datos
    document.getElementById('autoFillBtn').addEventListener('click', function (event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del botón
        const silaboId = '{{ $silabo->id }}'; // Obtiene el ID del silabo
        const url = `{{ route('admin.silabo.llenar', '') }}/${silaboId}`; // Construye la URL

        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Rellena los inputs con los datos del JSON
                document.getElementById('sumilla').value = data.silabo.sumilla || 'Sin información';
                document.getElementById('unidad_competencia').value = data.silabo.unidad_competencia || 'Sin información';
                document.getElementById('competencia_general').value = data.silabo.competencia_general || 'Sin información';

                document.getElementById('hte1u').value = data.silabo.organizacion.hte1u || 'Sin información';
                document.getElementById('hte2u').value = data.silabo.organizacion.hte2u || 'Sin información';
                document.getElementById('hte3u').value = data.silabo.organizacion.hte3u || 'Sin información';
                document.getElementById('hpr1u').value = data.silabo.organizacion.hpr1u || 'Sin información';
                document.getElementById('hpr2u').value = data.silabo.organizacion.hpr2u || 'Sin información';
                document.getElementById('hpr3u').value = data.silabo.organizacion.hpr3u || 'Sin información';
                document.getElementById('hre1u').value = data.silabo.organizacion.hre1u || 'Sin información';
                document.getElementById('hre2u').value = data.silabo.organizacion.hre2u || 'Sin información';
                document.getElementById('hre3u').value = data.silabo.organizacion.hre3u || 'Sin información';
                updateTotal('total1', 'hte1u', 'hte2u', 'hte3u');
                updateTotal('total2', 'hpr1u', 'hpr2u', 'hpr3u');
                updateTotal('total3', 'hre1u', 'hre2u', 'hre3u');

                document.getElementById('tutoria_dia').value = data.silabo.tutoria.dia || 'Sin información';
                document.getElementById('tutoria_lugar').value = data.silabo.tutoria.lugar || 'Sin información';
                document.getElementById('tutoria_horario').value = data.silabo.tutoria.horario || 'Sin información';

                document.getElementById('pu1').value = data.silabo.promedio.pu1 || 'Sin información';
                document.getElementById('pu2').value = data.silabo.promedio.pu2 || 'Sin información';
                document.getElementById('pu3').value = data.silabo.promedio.pu3 || 'Sin información';
                document.getElementById('pp').value = data.silabo.promedio.pp || 'Sin información';

                // Marcar checkboxes de resultados
                if (data.silabo.resultados) {
                    const checkboxes = document.querySelectorAll('#checkboxContainer .form-check-input');
                    checkboxes.forEach(checkbox => {
                        const resultadoId = parseInt(checkbox.value); // Obtén el ID del checkbox
                        const encontrado = data.silabo.resultados.some(resultado => resultado.id === resultadoId);
                        checkbox.checked = encontrado; // Marca si el ID está en el JSON
                    });
                }

                // Rellenar referencias dinámicamente
                const referenciaContainer = document.getElementById('referenciaContainer');
                referenciaContainer.innerHTML = ''; // Limpia las referencias existentes

                if (data.silabo.referencias && data.silabo.referencias.length > 0) {
                    data.silabo.referencias.forEach(referencia => {
                        const div = document.createElement('div');
                        div.className = 'form-group';

                        const textarea = document.createElement('textarea');
                        textarea.className = 'form-control mb-3';
                        textarea.rows = 2;
                        textarea.name = 'referencia[]';
                        textarea.value = referencia.referencia || '';

                        div.appendChild(textarea);
                        referenciaContainer.appendChild(div);
                    });
                } else {
                    // Si no hay referencias, agrega un textarea vacío
                    const div = document.createElement('div');
                    div.className = 'form-group';

                    const textarea = document.createElement('textarea');
                    textarea.className = 'form-control mb-3';
                    textarea.rows = 2;
                    textarea.name = 'referencia[]';

                    div.appendChild(textarea);
                    referenciaContainer.appendChild(div);
                }

                // Rellenar evaluaciones dinámicamente
                const evaluacionContainer = document.getElementById('evaluacionContainer');
                evaluacionContainer.innerHTML = ''; // Limpia las evaluaciones existentes

                if (data.silabo.evaluacions && data.silabo.evaluacions.length > 0) {
                    // Todas las evaluaciones menos la última
                    const evaluaciones = data.silabo.evaluacions.slice(0, -1);
                    evaluaciones.forEach(evaluacion => {
                        const div = document.createElement('div');
                        div.className = 'form-group';

                        const textarea = document.createElement('textarea');
                        textarea.className = 'form-control mb-3';
                        textarea.rows = 2;
                        textarea.name = 'evaluacion[]';
                        textarea.value = evaluacion.evaluacion || '';

                        div.appendChild(textarea);
                        evaluacionContainer.appendChild(div);
                    });

                    // Última evaluación
                    const ultimaEvaluacion = data.silabo.evaluacions[data.silabo.evaluacions.length - 1];
                    if (ultimaEvaluacion) {
                        const evidenciaTextarea = document.querySelector(
                            'textarea[placeholder="IF=Informe EP=Exposicion EX=Examen"]'
                        );
                        evidenciaTextarea.value = ultimaEvaluacion.evaluacion || '';
                    }
                } else {
                    // Si no hay evaluaciones, agrega un textarea vacío
                    const div = document.createElement('div');
                    div.className = 'form-group';

                    const textarea = document.createElement('textarea');
                    textarea.className = 'form-control mb-3';
                    textarea.rows = 2;
                    textarea.name = 'evaluacion[]';

                    div.appendChild(textarea);
                    evaluacionContainer.appendChild(div);
                }

                // Asignar valores a los inputs correspondientes
                document.getElementById('capacidades1').value = data.silabo.unidades[0].capacidades;
                document.getElementById('capacidades2').value = data.silabo.unidades[5].capacidades;
                document.getElementById('capacidades3').value = data.silabo.unidades[10].capacidades;

                document.getElementById('resultados1').value = data.silabo.unidades[0].resultados;
                document.getElementById('resultados2').value = data.silabo.unidades[5].resultados;
                document.getElementById('resultados3').value = data.silabo.unidades[10].resultados;

                document.getElementById('titulo1').value = data.silabo.unidades[0].titulo;
                document.getElementById('titulo2').value = data.silabo.unidades[5].titulo;
                document.getElementById('titulo3').value = data.silabo.unidades[10].titulo;

                // Asignar valores a los inputs correspondientes
                document.getElementById('contenidos1').value = data.silabo.programaciones[0].contenido;
                document.getElementById('estrategias1').value = data.silabo.programaciones[0].estrategias;
                document.getElementById('evidencias1').value = data.silabo.programaciones[0].evidencias;
                document.getElementById('instrumentos1').value = data.silabo.programaciones[0].instrumentos;

                document.getElementById('contenidos2').value = data.silabo.programaciones[1].contenido;
                document.getElementById('estrategias2').value = data.silabo.programaciones[1].estrategias;
                document.getElementById('evidencias2').value = data.silabo.programaciones[1].evidencias;
                document.getElementById('instrumentos2').value = data.silabo.programaciones[1].instrumentos;

                document.getElementById('contenidos3').value = data.silabo.programaciones[2].contenido;
                document.getElementById('estrategias3').value = data.silabo.programaciones[2].estrategias;
                document.getElementById('evidencias3').value = data.silabo.programaciones[2].evidencias;
                document.getElementById('instrumentos3').value = data.silabo.programaciones[2].instrumentos;

                document.getElementById('contenidos4').value = data.silabo.programaciones[3].contenido;
                document.getElementById('estrategias4').value = data.silabo.programaciones[3].estrategias;
                document.getElementById('evidencias4').value = data.silabo.programaciones[3].evidencias;
                document.getElementById('instrumentos4').value = data.silabo.programaciones[3].instrumentos;

                document.getElementById('contenidos5').value = data.silabo.programaciones[4].contenido;
                document.getElementById('estrategias5').value = data.silabo.programaciones[4].estrategias;
                document.getElementById('evidencias5').value = data.silabo.programaciones[4].evidencias;
                document.getElementById('instrumentos5').value = data.silabo.programaciones[4].instrumentos;

                document.getElementById('contenidos6').value = data.silabo.programaciones[5].contenido;
                document.getElementById('estrategias6').value = data.silabo.programaciones[5].estrategias;
                document.getElementById('evidencias6').value = data.silabo.programaciones[5].evidencias;
                document.getElementById('instrumentos6').value = data.silabo.programaciones[5].instrumentos;

                document.getElementById('contenidos7').value = data.silabo.programaciones[6].contenido;
                document.getElementById('estrategias7').value = data.silabo.programaciones[6].estrategias;
                document.getElementById('evidencias7').value = data.silabo.programaciones[6].evidencias;
                document.getElementById('instrumentos7').value = data.silabo.programaciones[6].instrumentos;

                document.getElementById('contenidos8').value = data.silabo.programaciones[7].contenido;
                document.getElementById('estrategias8').value = data.silabo.programaciones[7].estrategias;
                document.getElementById('evidencias8').value = data.silabo.programaciones[7].evidencias;
                document.getElementById('instrumentos8').value = data.silabo.programaciones[7].instrumentos;

                document.getElementById('contenidos9').value = data.silabo.programaciones[8].contenido;
                document.getElementById('estrategias9').value = data.silabo.programaciones[8].estrategias;
                document.getElementById('evidencias9').value = data.silabo.programaciones[8].evidencias;
                document.getElementById('instrumentos9').value = data.silabo.programaciones[8].instrumentos;

                document.getElementById('contenidos10').value = data.silabo.programaciones[9].contenido;
                document.getElementById('estrategias10').value = data.silabo.programaciones[9].estrategias;
                document.getElementById('evidencias10').value = data.silabo.programaciones[9].evidencias;
                document.getElementById('instrumentos10').value = data.silabo.programaciones[9].instrumentos;

                document.getElementById('contenidos11').value = data.silabo.programaciones[10].contenido;
                document.getElementById('estrategias11').value = data.silabo.programaciones[10].estrategias;
                document.getElementById('evidencias11').value = data.silabo.programaciones[10].evidencias;
                document.getElementById('instrumentos11').value = data.silabo.programaciones[10].instrumentos;

                document.getElementById('contenidos12').value = data.silabo.programaciones[11].contenido;
                document.getElementById('estrategias12').value = data.silabo.programaciones[11].estrategias;
                document.getElementById('evidencias12').value = data.silabo.programaciones[11].evidencias;
                document.getElementById('instrumentos12').value = data.silabo.programaciones[11].instrumentos;
                
                document.getElementById('contenidos13').value = data.silabo.programaciones[12].contenido;
                document.getElementById('estrategias13').value = data.silabo.programaciones[12].estrategias;
                document.getElementById('evidencias13').value = data.silabo.programaciones[12].evidencias;
                document.getElementById('instrumentos13').value = data.silabo.programaciones[12].instrumentos;

                document.getElementById('contenidos14').value = data.silabo.programaciones[13].contenido;
                document.getElementById('estrategias14').value = data.silabo.programaciones[13].estrategias;
                document.getElementById('evidencias14').value = data.silabo.programaciones[13].evidencias;
                document.getElementById('instrumentos14').value = data.silabo.programaciones[13].instrumentos;

                document.getElementById('contenidos15').value = data.silabo.programaciones[14].contenido;
                document.getElementById('estrategias15').value = data.silabo.programaciones[14].estrategias;
                document.getElementById('evidencias15').value = data.silabo.programaciones[14].evidencias;
                document.getElementById('instrumentos15').value = data.silabo.programaciones[14].instrumentos;

            })
            .catch(error => console.error('Error al completar los datos:', error));
    });


</script>
@stop

{{-- document.getElementById('unidad_competencia').value = data.organizacion?.hte1u || 'Sin información';
document.getElementById('competencia_general').value = data.promedio?.pu1 || 'Sin información'; --}}