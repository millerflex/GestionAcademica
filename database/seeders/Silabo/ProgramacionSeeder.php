<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Programacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Programacion = [
            #PRIMER AÑO
            #Arquitectura y organizacion de computadoras
            [
                'contenido' => 'Introducción a la Experiencia Curricular. Microprocesador. Arquitectura interna x86. Unidad de Ejecución y Unidad Básica de Interface. Componentes y unidades funcionales principales. Herramientas informáticas y emuladores de simulación de uso de procesador en tiempo real.',
                'estrategias' => 'Socialización del sílabo (Video conferencia). Video de conceptos básicos. Exposición docente Exposición docente de Práctica de laboratorio con PPT. (Video-conferencias). Realización y envío de la Tarea N° 1.',
                'evidencias' => 'Informe en diapositivas de instalación de herramientas y emuladores en su computadora personal.',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Registros Internos del Microprocesador. Registros de Uso general. Registros de Segmento. Registros Punteros e Índices. Proceso de Segmentación de Memoria a bajo nivel. Uso de un debuger para la segmentación de Memoria.',
                'estrategias' => 'Exposición docente (video conferencia). Lectura de artículo bibliográfico: procesadores de arquitectura x86 Exposición docente de Práctica de Laboratorio.  (videoconferencia de Uso de un debuger de segmentación de memoria) Realización y envío de la tarea N° 2.',
                'evidencias' => 'Informe en diapositivas de Práctica de Laboratorio:  Uso de un debuger para la segmentación de Memoria.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Direccionamiento de Memoria. Direccionamiento indirecto por registro Base e índice. Instrucciones básicas del procesador en assembler. Ejecución en tiempo Real de instrucciones del Procesador en Debug.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición docente de Práctica de Laboratorio. (videoconferencia de Uso de un debuger de segmentación de memoria) Realización y envío de la tarea N° 3.',
                'evidencias' => 'Informe en diapositivas de Práctica de Laboratorio Ejecución en tiempo Real de instrucciones del Procesador en Debug .',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 3
            ],[
                'contenido' => 'Compilador macroAsembler. Direccionamiento y Segmentación de memoria en macroAsembler. Direccionamiento inmediato, direccionamiento directo, direccionamiento indirecto, direccionamiento indexado. Uso de interrupciones BIOS y DOS. Uso del compilador MacroAsembler para ejecutar programas de asembler.',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Lectura de artículo bibliográfico: Set de Instrucciones de MacroAsembler. Exposición docente de Práctica de Laboratorio. (videoconferencia de Compilación y ejecución de programas básicos en MacroAsembler) Realización y envío de la tarea N° 4',
                'evidencias' => 'Video de desarrollo de práctica de Laboratorio: Compilación y ejecución de programas básicos en MacroAsembler.',
                'instrumentos' => 'Rúbrica. ',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de la Unidad I. ',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Practica de laboratorio Dirigida para la resolución de problemas de segmentación y direccionamiento de memoria.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta. Trabajo de Laboratorio de desarrollo de Practica Dirigida. (video de captura de pantalla del computador).',
                'instrumentos' => 'Examen objetivo. Selección múltiple con única respuesta. Examen de desarrollo de Laboratorio.',
                'semana' => 5
            ],[
                'contenido' => 'Arquitectura Interna del Computador. Ciclo de Instrucción. Ciclo de Instrucción con Interrupciones. Programación de Interrupciones en MacroAsembler del Computador: INT21h, INT16h, INT10h',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Lectura de artículo bibliográfico: Interrupciones Múltiples en el Computador. Exposición docente de Práctica de Laboratorio. (videoconferencia Programación de INT21h en MacroAsembler) Realización y envío de la tarea Nº4 Planteamiento de Tarea Nº5:  Trabajo de Investigación Monográfico Grupal.',
                'evidencias' => 'Programas Codificados en MacroAsembler. (Tarea Nº4)',
                'instrumentos' => 'Lista de Cotejo del Programa en Macro Asembler',
                'semana' => 6
            ],[
                'contenido' => 'Memoria Principal. Tipos y clasificación. Código Hamming. Memoria Cache L1 y L2 Programación de Interrupciones en MacroAsembler del Computador INT10h, INT',
                'estrategias' => 'Exposición docente (video conferencia). Lectura de artículo bibliográfico: Memoria Cache y correspondencias. Exposición docente de Práctica de Laboratorio. (videoconferencia Programación de INT16h e INT10h en MacroAsembler) Realización la tarea Nº6: Trabajo en Macroasembler. Envío de Evidencias de Trabajo Nº5',
                'evidencias' => 'Video de reunión grupal de coordinación de desarrollo de Trabajo de investigación monográfico. (Tarea Nº5)',
                'instrumentos' => 'Lista de cotejo de Reuniones Virtuales Grupales',
                'semana' => 7
            ],[
                'contenido' => 'Organización de la Memoria Cache L2: Correspondencia Directa y Correspondencia totalmente Asociativa. Microcontroladores. Uso y aplicaciones Presentación de trabajo de Macroassembler.',
                'estrategias' => 'Exposición docente con PPT y exposición de solución de problemas. (video conferencia). Exposición docente de Práctica de Laboratorio. (Microcontroladores y programación en MicrocodeStudio Plus) Envío de la tarea Nº6.',
                'evidencias' => 'Trabajo de Laboratorio: Programa de Utilización de interrupciones en MacroAsembler. (Tarea Nº6)',
                'instrumentos' => 'Rúbrica del Programa en Macro Asembler',
                'semana' => 8
            ],[
                'contenido' => 'Organización de la Memoria Cache L2: Correspondencia Asociativa por Conjuntos. Microcontroladores de alta gama. Simulación de ejecución de programas en microcontroladores usando interrupciones.',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Exposición docente de Práctica de Laboratorio. (Microcontroladores y programación en MicrocodeStudio Plus) Envío de la tarea Nº5',
                'evidencias' => 'Trabajo de Investigación Monográfico Grupal. (Tarea Nº5)',
                'instrumentos' => 'Rúbrica de evaluación del trabajo de Investigación Monográfico.',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de la Unidad II.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Práctica de solución de problemas.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta. Redacción de respuestas a preguntas de desarrollo. (fotografía)',
                'instrumentos' => 'Examen objetivo. Examen de desarrollo de Laboratorio.',
                'semana' => 10
            ],[
                'contenido' => 'Entradas y salidas del microprocesador I/O. Sistemas de interconexión interna. Arquitectura y Jerarquía de buses internos en el Computador. Arbitraje de buses. Buses actuales. Discos Duros y Sistemas RAID. Estructura de discos duros. RAID básicos niveles 1,2,3,4,5 y RAID híbridos 10,100,53.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Aprendizaje basado en problemas para laboratorio. Guía de Desarrollo de caso. (videoconferencia y guía de planteamiento de problema en Word de desarrollo)',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico. Video de exposición Grupal de Trabajo Monográfico. Lab: Programación embebida con microcontroladores. (Tarea N.º 07)',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 11
            ],[
                'contenido' => 'Procesamiento segmentado. Segmentación de instrucción. Conflictos y dependencias. Programación de entradas y salidas E/S del microcontrolador.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico. Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 12
            ],[
                'contenido' => 'Procesamiento súper-escalar. Comparación entre procesamiento segmentado, supersegmentado y superescalar.  Conflictos y dependencias del procesamiento Superescalar.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico. Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 13
            ],[
                'contenido' => 'Procesamiento CISC vs RISC. Procesamiento paralelo. Procesamiento Multi Core. Tendencias actuales en el diseño de computadores y supercomputadores. Programación de E/S, envío y recepción de mensajes entre computadores usando Visual Studio, con el componente SerialPort.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiandil con PPT.(video conferencia). Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia). Lectura de articulo: El top 10 de los supercomputadores, los nuevos gigantes científicos',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico. Video de exposición Grupal de Trabajo Monográfico. Envío de Trabajo Grupal en VisualStudio de solución a problema planteado.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación Rúbrica de Exposición y sustentación del trabajo Monográfico Rúbrica del Programa de Visual Studio.',
                'semana' => 14
            ],[
                'contenido' => 'Evaluación de la Unidad III.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta.',
                'instrumentos' => 'Examen objetivo. Selección múltiple.',
                'semana' => 15
            ],
                

            #Ingenieria de datos I
            [
                'contenido' => 'Sesión 01: Explicación del sílabo. Análisis de requisitos. Modelo del negocio. Proyecto de investigación formativa:',
                'estrategias' => '1. Socialización el sílabo (video conferencia)',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Modelo de Análisis del Negocio. Diagramas de CUN vs ON. Diagrama de Realización. Planteamiento de Foro de Unidad 1',
                'estrategias' => 'Videoconferen cias para tratar sobre los temas de la unidad 3. Videoconferen cia para dar las pautas para el trabajo de investigación asignado.',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Diagramas de Estados y Actividades del MAN.',
                'estrategias' => 'Lectura y análisis de material digital proporcionado en la plataforma virtual. 5. Elaboración y envío de Actividades.',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Modelo de casos de Uso por Paquetes.',
                'estrategias' => 'Elaboración y envío de Actividades.',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Práctica calificada',
                'semana' => 4
            ],[
                'contenido' => 'Sesión 05: Semana de Evaluaciones: Foro: 5%, Exposición de actividad: 35%, Práctica Calificada-en línea: 60%',
                'estrategias' => 'Evaluación de la unidad',
                'evidencias' => 'Evaluación de la unidad.',
                'instrumentos' => 'Exposiciones',
                'semana' => 5
            ],[
                'contenido' => 'El Modelado de Datos. Componentes. Migración hacia la base de datos física. Planteamiento de Foro de Unidad 2',
                'estrategias' => '1. Videoconferen cias para tratar los temas de la unidad. 2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Normalización de datos. Implementación de un modelado de datos en Erwin',
                'estrategias' => 'Elaboración y envío de las Actividades.',
                'evidencias' => 'Informe digital del Foro 2 de la unidad.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 7
            ],[
                'contenido' => 'El lenguaje SQL. Instrucciones DDL, DCL, y DML',
                'estrategias' => 'Distribución de las rúbricas de evaluación de las actividades',
                'evidencias' => 'Informe digital del Foro 2 de la unidad.',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Integridad de datos. Programación de PK, FK, check y default. Vistas: verticales, horizontales y otras variantes.',
                'estrategias' => 'Realización de un foro discusión de temas de interes',
                'evidencias' => 'Informe digital del Foro 2 de la unidad.',
                'instrumentos' => 'Práctica calificada',
                'semana' => 9
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5%, Exposición de actividad: 35%, Práctica Calificada-en línea: 60%',
                'estrategias' => 'Evaluación de la unidad',
                'evidencias' => 'Evaluación de la unidad',
                'instrumentos' => 'Exposiciones',
                'semana' => 10
            ],[
                'contenido' => 'Procedimientos almacenados. Parámetros de E/S. Planteamiento de Foro de Unidad 3',
                'estrategias' => 'Videoconferencias para tratar los temas de la unidad. 2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual de lactividades',
                'instrumentos' => 'Escala valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Funciones escalares en T-SQL. Funciones recursivas. Funciones de tabla de múltiples sentencias.',
                'estrategias' => 'Elaboración y envío de las Actividades.',
                'evidencias' => 'Informe digital del Foro 3 de la unidad',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 12
            ],[
                'contenido' => 'Triggers para la integridad de datos',
                'estrategias' => 'Distribución de las rúbricas de evaluación de las actividades',
                'evidencias' => 'Informe digital del Foro 3 de la unidad',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Informe y sustentación final: Proyecto de investigación formativa.',
                'estrategias' => 'Realización de un foro discusión de temas de interes.',
                'evidencias' => 'Informe digital del Foro 3 de la unidad',
                'instrumentos' => 'Práctica calificada',
                'semana' => 14
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5%, Exposición de actividad: 35%, Práctica Calificada-en línea: 60%',
                'estrategias' => 'Evaluación de la unidad',
                'evidencias' => 'Evaluación de la unidad',
                'instrumentos' => 'Proyecto de Investigación',
                'semana' => 15
            ],


            #Tecnologias web
            [
                'contenido' => 'Introducción a las tecnologías web',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital de trabajo aplicativo.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 1
            ],[
                'contenido' => 'Tecnologías web Frontend y Backend.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del tema de investigación',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 2
            ],[
                'contenido' => 'Pilas tecnológicas',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del trabajo de investigación',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 3
            ],[
                'contenido' => 'Exposición de Proyecto Web',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del trabajo de investigación',
                'instrumentos' => 'Guía de Prueba Ora',
                'semana' => 4
            ],[
                'contenido' => 'Examen I Unidad (Teoría y Laboratorio)',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba Escrita Objetiva Virtual.',
                'semana' => 5
            ],[
                'contenido' => 'Tecnologías de intercambio de datos',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital de trabajo aplicativo.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 6
            ],[
                'contenido' => 'Servicios Web',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del tema de investigación.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 7
            ],[
                'contenido' => 'API Rest',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del trabajo de investigación',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 8
            ],[
                'contenido' => 'GraphQL Exposición de Proyecto Web.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del trabajo de investigación',
                'instrumentos' => 'Guía de Prueba Oral',
                'semana' => 9
            ],[
                'contenido' => 'Examen II Unidad (Teoría y Laboratorio)',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba Escrita Objetiva Virtual.',
                'semana' => 10
            ],[
                'contenido' => 'Tecnologías web SPA.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Informe digital de trabajo aplicativo.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 11
            ],[
                'contenido' => 'Progressive web apps',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Informe digital del tema de investigación',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 12
            ],[
                'contenido' => 'Tecnologías cloud.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Informe digital del trabajo de investigación.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 13
            ],[
                'contenido' => 'Examen III Unidad (Exposición del Proyecto Real).',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Informe digital del trabajo de investigación.',
                'instrumentos' => 'Guía de Prueba Oral.',
                'semana' => 14
            ],[
                'contenido' => 'Examen de Aplazados.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Objetiva Virtual.',
                'semana' => 15
            ],


            #Sistemas de informacion
            [
                'contenido' => 'Los sistemas de información. Elementos de los sistemas de información. Laboratorio  Conociendo el entorno de laravel. Trabajo con Rutas y Controladores.',
                'estrategias' => 'Socialización del Sílabo. (video conferencia) 2. Video conferencia con la exposición docente con PPT. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe de historia de los sistemas de información.',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Tipos y usos de los sistemas de información. Los sistemas de información como soporte a las estrategias de negocio. Laboratorio Migraciones y modelos y View con laravel.',
                'estrategias' => 'Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro con ejemplos de los diferentes tipos de sistemas de información',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Infraestructura Tecnológica de la información y sus componentes. Laboratorio   Sistemas de autenticación, creación usuarios.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un mapa conceptual de la tecnología de la información.',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Las telecomunicacio nes y redes de datos en los negocios Laboratorio Trabajando con Plantillas Blade.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de diferencias de los tipos de redes.',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Primer Examen Parcial',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => '',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 5
            ],[
                'contenido' => 'Comercio Electrónico y sus tendencias en internet. Laboratorio Trabajo con plantilla AdminLte de bootstrap',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe de negocios electrónicos.',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Gestión de la información para la toma de decisiones.  Construcción y administración de sistemas. Laboratorio  Creando CRUD con laravel.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe de la importancia de la gestión de información en la toma de decisiones.',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => ' Fundamentos de Base de Datos y la gestión de la información. Laboratorio  Creando CRUD con laravel.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Diseña un modelo de base de datos.',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'Presentación de avance de Proyecto Final',
                'estrategias' => '1. Exposición de proyectos de estudiantes (video conferencia)',
                'evidencias' => 'Informe de avance proyecto',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Segundo Examen Parcial',
                'estrategias' => '',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 10
            ],[
                'contenido' => 'Planeación de los recursos empresariales (ERP).  Administración de relaciones con clientes (CRM). Laboratorio  Creando CRUD con laravel.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un mapa conceptual de herramientas de gestión.',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'Fundamentos de la Inteligencia de Negocios. Laboratorio  Trabajando tablas necesarias para un documento de venta.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de ejemplos sobre inteligencia de negocios',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => ' Concepción de Sistemas.  Análisis de Sistemas Laboratorio  Trabajando vista de documento de venta.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de de módulo aprendizaje. 3. Realización envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora cuadro un de ejemplos sobre inteligencia de negocios',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Presentación de Proyecto Final.',
                'estrategias' => '1. Exposición y de proyecto por los estudiantes (video conferencia)',
                'evidencias' => 'Informe de proyecto final',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Tercer Examen Parcial',
                'estrategias' => '',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 15
            ],


            #Ingenieria de datos II
            [
                'contenido' => 'Explicación del sílabo. Explicación del Perfil de Proyecto de base de datos. Implementación de Triggers.',
                'estrategias' => '1. Socialización el sílabo (video conferencia).',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Programación avanzada con T-SQL. Consultas agrupadas. Uso de group by, having. Uso de Left join, right join, inner join, cross join, unión. Programación de triggers for insert. Planteamiento de Foro de Unidad 1',
                'estrategias' => '2. Videoconferencias para tratar sobre los temas de la unidad',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Programación de Transacciones. Uso de begin transaction, commit y rollback. Programación de triggers for delete y for update.',
                'estrategias' => '3. Videoconferencia para dar las pautas para el trabajo de investigación asignado.',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Programación de Cursores. Modelos y tipos. Cursores estáticos y dinámicos. Cláusulas declare cursor, fetch, close y deallocate. Programación de autogenerados con T-SQL',
                'estrategias' => '4. Lectura y análisis de material digital proporcionado en la plataforma virtual. 5. Realización de un foro de discusión de temas de interes',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Práctica calificada',
                'semana' => 4
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5% Evaluación de Unidad-en línea: 35% Práctica Calificada-en línea: 60%',
                'estrategias' => '6. Evaluación de la unidad.',
                'evidencias' => 'Evaluaciones semanales',
                'instrumentos' => 'Exámenes',
                'semana' => 5
            ],[
                'contenido' => 'Uso de información para la toma de decisiones. Categorías de decisiones. Reportes. Quiebres y consultas agrupadas. Uso de parámetros. Planteamiento de Foro de Unidad 2',
                'estrategias' => '1. Videoconferencias para tratar los temas de la unidad.',
                'evidencias' => 'Informe digital del Foro 2 de la unidad',
                'instrumentos' => 'Escala valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Gráficos con Reporting Service. Uso de vistas, procedimientos almacenados y parámetros de E/S en la obtención de gráficos estadísticos',
                'estrategias' => '2. Lectura y análisis de material digital proporcionado en la plataforma virtual',
                'evidencias' => 'Informe digital del Foro 2 de la unidad',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 7
            ],[
                'contenido' => 'Índices de una base de datos. Estructura. Índices agrupados y no agrupados. Partición de tablas y de índices.',
                'estrategias' => '3. Realización de un foro de discusión de temas de interes.',
                'evidencias' => 'Informe digital del Foro 2 de la unidad',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Gestión de la seguridad de acceso al servidor. Gestión de los usuarios de una base de datos. Administración de los permisos y roles. Tareas planificadas. Configuración de servicios. Jobs. Alertas.',
                'estrategias' => '4. Realización de un foro de discusión de temas de interes.',
                'evidencias' => 'Informe digital del Foro 2 de la unidad',
                'instrumentos' => 'Práctica calificada',
                'semana' => 9
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5% Evaluación de Unidad-en línea: 35% Práctica Calificada-en línea: 60%',
                'estrategias' => '5. Evaluación de la unidad',
                'evidencias' => 'Evaluaciones semanales',
                'instrumentos' => 'Exámenes',
                'semana' => 10
            ],[
                'contenido' => 'Programación por capas. Aplicación en VB NET para el mantenimiento de tablas. Planteamiento de Foro de Unidad 3',
                'estrategias' => '1. Videoconferencias para tratar los temas de la unidad',
                'evidencias' => 'Informe digital del Foro 3 de la unidad.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Análisis Dimensional. Uso de la cláusula Merge para la implementación de la base de datos dimensional.',
                'estrategias' => '2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe digital del Foro 3 de la unidad.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 12
            ],[
                'contenido' => 'Pasos para la implementación de un DataMar',
                'estrategias' => '3. Informe de Proyecto integral',
                'evidencias' => 'Informe digital del Foro 3 de la unidad.',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Informe y sustentación final: Proyecto de investigación formativa.',
                'estrategias' => '4. Realización de un foro de discusión de temas de interes',
                'evidencias' => 'Informe de Proyecto integral.',
                'instrumentos' => 'Práctica calificada',
                'semana' => 14
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5% Evaluación de Unidad-en línea: 35% Práctica Calificada-en línea: 60%',
                'estrategias' => '5. Evaluación de la unidad.',
                'evidencias' => 'Evaluaciones semanales',
                'instrumentos' => 'Exámenes Proyecto de Investigación',
                'semana' => 15
            ],


            #Sistemas operativos
            [
                'contenido' => 'Introducción a la Experiencia Curricular y al desarrollo de la Asignatura.',
                'estrategias' => 'Socialización del sílabo (Video conferencia). Exposición docente de la introducción al desarrollo de la experiencia curricular. Exposición de la metodología del curso. Parte Práctica. Formación de grupos de trabajos de investigación. (Video-conferencias).',
                'evidencias' => 'Formatos del aula Virtual de la Socialización de Sílabus. Formato de formación de grupos del aula Virtual.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 1
            ],[
                'contenido' => 'Estructura y gestión de recursos en un Sistema Operativo',
                'estrategias' => 'Exposición docente (video conferencia). Lectura de artículo bibliográfico: virtualización de sistemas operativos. Exposición docente de Práctica de Laboratorio. Tarea N°01',
                'evidencias' => 'Informe en diapositivas de Práctica de Laboratorio.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Gestión de procesos. Estados y estructuras de control de procesos.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición docente de Práctica de Laboratorio. Tarea N°01 (videoconferencia de instalación de Sistema Operativo.) Trabajo de investigación Monográfico.',
                'evidencias' => 'Envío de la tarea N°01. Informe de práctica de Laboratorio instalación de Sistema Operativo Parte II.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 3
            ],[
                'contenido' => 'Arquitectura de un Sistema Operativo y Modelos de Diseño.',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Lectura de artículo bibliográfico: UEFI frente a Bios. Exposición docente de Práctica de Laboratorio. (Distribución Linux Debian vs Linux Centos) Realización y envío de la tarea N°02',
                'evidencias' => 'Envío de la tarea N°02 Trabajo de descripción de las diferencias y uso de las distribuciones Linux. Centos vs Debian.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de la Unidad I. ',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Examen Trabajo. Tarea Nº03 Laboratorio de informe de instalación de S.O.',
                'evidencias' => 'Examen objetivo',
                'instrumentos' => 'Examen de Selección múltiple. Examen de Laboratorio.',
                'semana' => 5
            ],[
                'contenido' => 'Planificación de memoria. Gestión de la memoria.',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Lectura de artículo bibliográfico: Minix, clon de Unix. Exposición docente de Práctica de Laboratorio. (videoconferencia comandos Linux)',
                'evidencias' => 'Trabajo de Laboratorio de desarrollo de. Tarea Nº03 Practica Dirigida. (video de capturas de pantalla de pc).',
                'instrumentos' => 'Lista de cotejo de Reuniones Virtuales Grupales',
                'semana' => 6
            ],[
                'contenido' => 'Planificación apropiativa y no apropiativa. Métodos . Ejemplos de planificación en sistemas operativos.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición docente de Práctica de Laboratorio. Planteamiento de Tarea Nº04:  Trabajo de Investigación Monográfico Grupal.',
                'evidencias' => 'Video de reunión grupal de coordinación de desarrollo de Trabajo de investigación monográfico. (Tarea Nº04)',
                'instrumentos' => 'Lista de cotejo de Reuniones Virtuales Grupales',
                'semana' => 7
            ],[
                'contenido' => 'Control de Concurrencia en sistemas operativos.',
                'estrategias' => 'Exposición docente con PPT y exposición de solución de problemas. (videoconferencia de instalación de Sistema Operativo 03 en máquina Virtual Box) Enunciado Tarea Nº05. Video de instalación de sistema operativo 03. (Windows Server) Exposición Individual/Grupal estudiandil con PPT. (video conferencia).',
                'evidencias' => 'Presentación del informe del Trabajo de Investigación Monográfico Grupal. (Tarea Nº04) Video de exposición Trabajo Monográfico.',
                'instrumentos' => 'Lista de Cotejo Rúbrica de evaluación del trabajo de Investigación Monográfico',
                'semana' => 8
            ],[
                'contenido' => 'Interbloqueo. Modelado del Interbloqueo Estrategias, Técnicas de detección y recuperación. Técnicas de prevención Dispositivos de E/S y sus controladores.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiandil con PPT. (video conferencia).',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico de la Tarea Nº03 Video de exposición Trabajo Monográfico.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de la Unidad II. ',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Examen de Laboratorio. Tarea Nº06',
                'evidencias' => 'Examen objetivo de Selección múltiple. Presentación de Tarea de Laboratorio Nº 06.',
                'instrumentos' => 'Examen objetivo. Examen de desarrollo de Laboratorio.',
                'semana' => 10
            ],[
                'contenido' => 'Memoria Virtual. Paginación de memoria. Criterios de sustitución de páginas.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Laboratorio, Aprendizaje basado en problemas. Guía de Desarrollo de caso. (videoconferencia y guía de planteamiento de problema en Word de desarrollo) Tarea Nº07 Video de virtualización, instalación y ejecución de comandos de S.O.',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 11
            ],[
                'contenido' => 'Administración de Archivos. Gestión del espacio en disco Archivos compartidos Coherencia del sistema de archivos.  Reserva de bloques Concurrencia con archivos',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Laboratorio. Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico. VideoMeet de Debate de Exposiciones.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 12
            ],[
                'contenido' => 'Seguridad y protección del sistema de archivos. Tipos de ataques. Comprobación de la identidad del usuario. Control de acceso',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiandil con PPT. (video conferencia). Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico. Video e Informe de Sustentación de TareaNº7',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico Rubrica TareaNº07',
                'semana' => 13
            ],[
                'contenido' => 'Introducción a la virtualización de sistemas operativos vs la virtualización de componentes.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiandil con PPT. (video conferencia). Laboratorio, Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico. VideoMeet de Debate de Exposiciones.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 14
            ],[
                'contenido' => 'Evaluación de la Unidad III.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta.',
                'instrumentos' => 'Examenobjetivo.Selecciónmúltiple.',
                'semana' => 15
            ],


            #Ingenieria de requerimientos
            [
                'contenido' => 'Que es la ingeniería de software y la ingeniería de requisitos. Conceptos básicos de RUP. Elementos Fases.',
                'estrategias' => '1. Socialización del Sílabo. (video conferencia) 2. Video conferencia con la exposición docente con PPT. 3. Realización y envío de tarea.',
                'evidencias' => 'Informe de metodologías agiles para el desarrollo de software.',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Modelado del Negocio. Casos de uso de Negocio. Modelo dominio.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe del modelado del negocio con BPMN.',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Modelo de clases. Diagramas de Actividades.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un diagrama para representar las actividades de un proceso seleccionado.',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Que son los requisitos de software. Definición de la Ingeniería de Requerimientos. La importancia de los requerimientos.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de listas de requerimientos funcionales y no funcionales.',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Primer Examen Parcial',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 5
            ],[
                'contenido' => 'Desarrollo y gestión de Requisitos. Actividades en el desarrollo de Requisitos: Captación, Análisis, Especificación y Validación de Requisitos.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico',
                'evidencias' => 'Informe de la importancia de los casos de uso del sistema.',
                'instrumentos' => 'Rubrica.',
                'semana' => 6
            ],[
                'contenido' => 'Captación de Requisitos: Definición de Fuentes de Requisitos, Definición de Técnicas de Requisitos (Entrevistas, Cuestionarios, Prototipos,  etc.), Identificación de la   lista de deseos de Stakeholders.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe de relaciones entre casos de usos.',
                'instrumentos' => 'Rubrica.',
                'semana' => 7
            ],[
                'contenido' => 'Análisis de Requisitos: Clasificación, Priorización, y Negociación de Requisitos. Matriz de Trazabilidad. Modelo Conceptual: UML. Actores, Casos de Usos,  Tipos de Casos de Usos, Diagrama de Clases, Relaciones.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Diseña diagramas de casos de uso y clases.',
                'instrumentos' => 'Rubrica.',
                'semana' => 8
            ],[
                'contenido' => 'Presentación de avance de Proyecto Final',
                'estrategias' => '1. Exposición de proyectos de estudiantes (video conferencia)',
                'evidencias' => 'Informe de avance proyecto',
                'instrumentos' => 'Rubrica.',
                'semana' => 9
            ],[
                'contenido' => 'Segundo Examen Parcial',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 10
            ],[
                'contenido' => 'Especificación de Requisitos: Importancia. Diferencias entre la Captación y Especificación de Requisitos. Software Requirements Specification (SRS). Estructura sugerida para un SRS.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un SRS.',
                'instrumentos' => 'Rubrica.',
                'semana' => 11
            ],[
                'contenido' => 'Validación de Requisitos: Técnicas de Validación de Requisitos (Revisión, Prototipos, Casos de Prueba). Revisión de Requisitos, Uso de Checklists para validar las Cualidades de Requisitos.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de checklist para la validación de requisitos.',
                'instrumentos' => 'Rubrica.',
                'semana' => 12
            ],[
                'contenido' => 'Estimación del costo: Estimación con Punto de Casos de Uso (PCU). Medición de un Proyecto con PCU.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de estimación de costos.',
                'instrumentos' => 'Rubrica.',
                'semana' => 13
            ],[
                'contenido' => 'Presentación de Proyecto Final.',
                'estrategias' => '1. Exposición de proyecto por los estudiantes (video conferencia)',
                'evidencias' => 'Informe de proyecto final',
                'instrumentos' => 'Rubrica.',
                'semana' => 14
            ],[
                'contenido' => 'Tercer Examen Parcial',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 15
            ],


            #Sistemas inteligentes
            [
                'contenido' => '1. Introducción a los Sistemas Inteligentes.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 1
            ],[
                'contenido' => '2. Introducción al Procesamiento de Imágenes.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 2
            ],[
                'contenido' => '3. Procesamiento de imágenes: Métodos.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 3
            ],[
                'contenido' => '4. Avance 01 - Proyecto de Curso.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 4
            ],[
                'contenido' => '5. Examen I Unidad (Teoría y Laboratorio).',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 5
            ],[
                'contenido' => '1. Medición de parámetros en una imagen.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 6
            ],[
                'contenido' => '2. Filtrado de imágenes y detección de bordes.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 7
            ],[
                'contenido' => '3. Homografía para la corrección de perspectiva.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 8
            ],[
                'contenido' => '4. Avance 02 - Proyecto de Curso.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 9
            ],[
                'contenido' => '5. Examen II Unidad (Teoría y Laboratorio).',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 10
            ],[
                'contenido' => '1. Detección de objetos en video.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 11
            ],[
                'contenido' => '2. Introducción al Deep Learning.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 12
            ],[
                'contenido' => '3. Exposición Avance Final 01 del desarrollo del Proyecto de Curso.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 13
            ],[
                'contenido' => '4. Exposición Avance Final 02 del desarrollo del Proyecto de Curso.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 14
            ],[
                'contenido' => '5. Examen III Unidad (Exposición desarrollo culminado del Proyecto de Curso). 6. Examen Aplazados.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 15
            ],


            #Ingenieria de software I
            [
                'contenido' => 'Presentación y socialización del sílabo Introducción a la Ingeniería de Software. La crisis del software. Introducción al Rational Unified Process (RUP).',
                'estrategias' => '1. Socialización del sílabo. 2. Exposición docente. 3. Lectura de módulo de aprendizaje. 4. Exposición referente a la tarea. 5. Ejecución y envío de la tarea N° 1.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 1
            ],[
                'contenido' => 'Diagrama de actores del negocio. Diagrama general de casos de uso del negocio. Diagrama de trabajadores del negocio Diagrama de entidades del negocio Diagrama de estados',
                'estrategias' => '1. Exposición docente. 2. Lectura del módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 2.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 2
            ],[
                'contenido' => 'Diagrama de realizaciones del negocio. Diagrama de clases del negocio Diagrama de actividades del negocio. Modelo del dominio',
                'estrategias' => '1. Exposición docente. 2. Lectura de módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 3.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => '1.Exposición / Presentación del trabajo aplicativo grupal 2. Debate. 3. Retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 4
            ],[
                'contenido' => ' Examen parcial I.',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba.',
                'instrumentos' => 'Prueba escrita.',
                'semana' => 5
            ],[
                'contenido' => 'Requerimientos funcionales y no funcionales. Matriz de actividades vs. requisitos. Modelado de requerimientos Diagrama de casos de uso Diagrama de actores Diagrama de casos de uso por proceso de negocio Diagrama de casos de uso general',
                'estrategias' => '1. Exposición docente 2. Debate. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 4',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 6
            ],[
                'contenido' => 'Estimación de tiempo de desarrollo basado en puntos de casos de uso. Estimación de tiempo de desarrollo basado en Método COCOMO II.',
                'estrategias' => '1. Exposición docente. 2. Lectura de módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 5.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 7
            ],[
                'contenido' => 'Estudio de Viabilidad Económica. Priorización de casos de uso. Gestión de Riesgos en Proyectos de Software. Documento del proyecto de software',
                'estrategias' => '1. Exposición docente. 2. Lectura del módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 6.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => '1.Exposición / Presentación del trabajo aplicativo grupal. 2. Debate. 3. Retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 9
            ],[
                'contenido' => 'Examen parcial II.',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba.',
                'instrumentos' => 'Prueba escrita.',
                'semana' => 10
            ],[
                'contenido' => 'Diagrama de clases de análisis. Diagramas de colaboración. Diagrama de paquetes. Diagrama subsistemas.',
                'estrategias' => '1. Exposición docente. 2. Debate. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 7.',
                'evidencias' => 'Informe.',
                'instrumentos' => 'Rúbrica.',
                'semana' => 11
            ],[
                'contenido' => 'Modelo conceptual. Modelo de entidades. Modelo lógico de B.D. Modelo físico de B.D. Diagrama de clases de diseño.',
                'estrategias' => '1. Exposición docente. 2. Lectura de módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 8.',
                'evidencias' => 'Informe.',
                'instrumentos' => 'Rúbrica.',
                'semana' => 12
            ],[
                'contenido' => 'Modelo de desarrollo Especificaciones lenguaje de del desarrollo. Generación de código.',
                'estrategias' => '1. Exposición docente. 2. Lectura de módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 9.',
                'evidencias' => 'Informe.',
                'instrumentos' => 'Rúbrica.',
                'semana' => 13
            ],[
                'contenido' => 'Presentación, sustentación y defensa del artículo de revisión grupal.',
                'estrategias' => '1.Exposición / Presentación del artículo de revisión. 2. Debate en foro. 3. Chat de retroalimentación.',
                'evidencias' => 'Informe.',
                'instrumentos' => 'Rúbrica.',
                'semana' => 14
            ],[
                'contenido' => 'Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => '1.Exposición / Presentación del trabajo aplicativo grupal. 2. Debate. 3. Retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 15
            ],


            #Metodologia de la investigacion
            [
                'contenido' => 'Explicación del sílabo. Análisis del Marco Normativo para la investigación. Estructura del Proyecto de investigación formativa:',
                'estrategias' => '1. Socialización el sílabo (video conferencia) 2. Exposiciones para tratar sobre los temas de la unidad.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Introducción. La ciencia; conceptos, tipos, funciones y objetivos de la ciencia. Metodología de la investigación científica.',
                'estrategias' => '3. Exposiciones para dar las pautas para el trabajo de investigación asignado',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 2
            ],[
                'contenido' => 'El Problema científico. Redacción sistémica de la realidad problemática. Uso de herramientas de apoyo.',
                'estrategias' => '4. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Antecedentes. Pertinencia de las fuentes de información y sus Aplicaciones.',
                'estrategias' => '5. Elaboración y envío de Actividades. 6. Distribución de las rúbricas de evaluación de actividades',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Prueba escrita',
                'semana' => 4
            ],[
                'contenido' => 'Semana de Evaluaciones: Evaluación de Avance 1 : 60% Informe de Avance 1  (30%) Exposición de avance (70%) Examen de Unidad 1: 40%',
                'estrategias' => '7. evaluación de la unidad.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Exposiciones',
                'semana' => 5
            ],[
                'contenido' => 'Tipos y métodos de investigación.',
                'estrategias' => '1. Exposiciones para tratar los temas de la unidad.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Bases teóricas. Estrategias para la selección de la teoría que fundamenta el problema de investigación.',
                'estrategias' => '2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 7
            ],[
                'contenido' => 'Lineamientos APA e ISO 690. Estándares para citas textuales.',
                'estrategias' => '3. Elaboración y envío de las Actividades.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Objetivos de la investigación.',
                'estrategias' => '4. Distribución de las rúbricas de evaluación de las actividades.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Prueba escrita',
                'semana' => 9
            ],[
                'contenido' => 'Semana de Evaluaciones: Evaluación de Avance 1 : 60% Informe de Avance 1  (30%) Exposición de avance (70%) Examen de Unidad 1: 40%',
                'estrategias' => '5. evaluación de la unidad.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Exposiciones',
                'semana' => 10
            ],[
                'contenido' => 'Hipótesis. Variables de investigación. Operacionalización de variables.',
                'estrategias' => '1. Exposiciones para tratar los temas de la unidad.',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Escala valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Diseño de la investigación. Población y muestra. Técnicas e instrumentos de recolección de datos.',
                'estrategias' => '2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 12
            ],[
                'contenido' => 'Técnicas para la validación y confiabilidad de los instrumentos de recolección de datos.',
                'estrategias' => '3. Elaboración y envío de las Actividades.',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Semana de Evaluaciones: Evaluación de Avance 1 : 60% Informe de Avance 1  (30%) Exposición de avance (70%) Examen de Unidad 1: 40%',
                'estrategias' => '4. Distribución de las rúbricas de evaluación de las actividades',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Prueba escrita',
                'semana' => 14
            ],[
                'contenido' => 'Examen de Unidad 3',
                'estrategias' => '5. evaluación de la unidad.',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Proyecto de Investigación',
                'semana' => 15
            ],


            #Planeamiento estrategico de la informacion
            [
                'contenido' => 'Descripción del sílabo. Formación de grupos de trabajo. Perfil de Proyecto Integral. Fundamentos de la Planificación Estratégica de Negocios y la Planificación Estratégica de TI',
                'estrategias' => 'Clase magistral',
                'evidencias' => 'Informes',
                'instrumentos' => 'Escala valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Métodos de recolección de información. Instrumentos de recolección de datos.',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Informes',
                'instrumentos' => 'Foro 1',
                'semana' => 2
            ],[
                'contenido' => 'Introducción a la Planificación Estratégica de Tecnologías de Información',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Objetivos de la Planificación Estratégica de Tecnologías de Información',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Práctica calificada',
                'semana' => 4
            ],[
                'contenido' => 'Práctica Calificada',
                'estrategias' => 'Aprendizaje colaborativo',
                'evidencias' => 'Exposiciones',
                'instrumentos' => 'Examen',
                'semana' => 5
            ],[
                'contenido' => 'Definición y Organización del PETI',
                'estrategias' => 'Clase magistral',
                'evidencias' => 'Informes',
                'instrumentos' => 'Escala valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Alineamiento del plan de sistemas al plan estratégico',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Informes',
                'instrumentos' => 'Foro 3',
                'semana' => 7
            ],[
                'contenido' => 'Identificación de requerimientos.',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Informes',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Diseño del modelo de sistemas institucional',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Práctica calificada',
                'semana' => 9
            ],[
                'contenido' => 'Práctica calificada',
                'estrategias' => 'Aprendizajecolaborativo',
                'evidencias' => 'Exposiciones',
                'instrumentos' => 'Examen',
                'semana' => 10
            ],[
                'contenido' => 'Modelamiento de la Arquitectura de TI',
                'estrategias' => 'Clase magistral',
                'evidencias' => 'Informes',
                'instrumentos' => 'Escala valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Identificación de las necesidades de la Infraestructura de TI',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Informes',
                'instrumentos' => 'Foro 3',
                'semana' => 12
            ],[
                'contenido' => 'Selección de la Arquitectura de TI Arquitectura de TI para contingencias',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Plan de Acción Cuadro de Mando Integral',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Práctica calificada',
                'semana' => 14
            ],[
                'contenido' => 'Práctica Calificada',
                'estrategias' => 'Aprendizaje colaborativo',
                'evidencias' => 'Exposiciones',
                'instrumentos' => 'Examen',
                'semana' => 15
            ],


            #Gestion de servicio de TIC
            [
                'contenido' => 'Presentación y socialización del sílabo Introducción a la gestión de servicios de TI. Conceptos relacionados a la Gestión de servicios de TI.',
                'estrategias' => '1. Socialización del sílabo 2. Exposición docente 3. Realización y envío de la tarea N° 1.',
                'evidencias' => 'Identifica los conceptos básicos de la Gestión de servicios de TI.',
                'instrumentos' => 'Rúbrica',
                'semana' => 1
            ],[
                'contenido' => 'Modelo ITIL: Conceptos clave de la gestión de servicios.',
                'estrategias' => '1. Exposición docente 2. Realización y envío de la tarea N° 2.',
                'evidencias' => 'Analiza los marcos de referencia dela Gestión de Servicios.',
                'instrumentos' => 'Rúbrica',
                'semana' => 2
            ],[
                'contenido' => 'Modelo ITIL: Sistema de Valor del Servicio (SVS), Principios Guías de ITIL',
                'estrategias' => '1. Exposición docente 2. Realización y envío de la tarea N° 3.',
                'evidencias' => 'Identifica componentes básicos del Modelo ITIL.en una organización.',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Primer Avance Trabajo Aplicativo: Informe.',
                'estrategias' => '1. Exposición estudiantes 2. Entrega informe 3. Retroalimentación Docente',
                'evidencias' => 'Sustenta el primer Avance Trabajo Aplicativo, demostrando conocimiento.',
                'instrumentos' => 'Rúbrica',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de Unidad I',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba online /presencial',
                'semana' => 5
            ],[
                'contenido' => 'Prácticas de Gestión general. Gestión de la arquitectura, mejora continua, Gestión de seguridad de la información, Gestión del conocimiento medición y reporte.',
                'estrategias' => '1. Exposición docente 2. Realización y envío de la tarea N° 4.',
                'evidencias' => 'Analiza las prácticas de gestión general del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 6
            ],[
                'contenido' => 'Prácticas de Gestión general. Gestión del cambio organizacional, Gestión del portafolio, Gestión de proyectos, Gestión de relaciones, Gestión de riesgos.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 5.',
                'evidencias' => 'Analiza las prácticas de gestión general del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 7
            ],[
                'contenido' => 'Prácticas de Gestión de servicios. Gestión de la disponibilidad Análisis del negocio, Gestión de la capacidad y el desempeño, Control de cambios, Gestión de incidentes.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 6.',
                'evidencias' => 'Analiza las prácticas de gestión de servicios del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Segundo Avance Trabajo Aplicativo: Informe.',
                'estrategias' => '1. Exposición estudiantes 2. Entrega informe 3. Retroalimentación Docente',
                'evidencias' => 'Sustenta el segundo Avance Trabajo Aplicativo, demostrando dominio del tema.',
                'instrumentos' => '',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de Unidad II',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba online /presencial',
                'semana' => 10
            ],[
                'contenido' => 'Prácticas de Gestión de servicios. Gestión de activos de TI. Gestión de eventos y monitoreo, Gestión de problemas, Gestión de liberación,  Gestión de catálogo de servicios, Gestión de configuración del servicio.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 7.',
                'evidencias' => 'Aplica las prácticas de gestión de servicios del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 11
            ],[
                'contenido' => 'Prácticas de Gestión de servicios. Gestión de continuidad del servicio, Diseño del servicio, Service Desk.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 8.',
                'evidencias' => 'Aplica las prácticas de gestión de servicios del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 12
            ],[
                'contenido' => 'Prácticas de Gestión de servicios. Gestión de niveles de servicio, Gestión de solicitudes de servicio,  Validación y pruebas del servicio.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 9.',
                'evidencias' => 'Aplica las prácticas de gestión de servicios del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Prácticas de Gestión Técnica. Gestión de implementación, Gestión de infraestructura y plataformas, Desarrollo y gestión de software.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 10.',
                'evidencias' => 'Aplica las prácticas de gestión técnica del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 14
            ],[
                'contenido' => 'Trabajo Aplicativo Final: Informe.',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba online /presencial',
                'semana' => 15
            ],


            #Redes y comunicaciones I
            [
                'contenido' => 'Introducción a la Experiencia Curricular. Conceptos generales de Sistemas de Comunicación. Niveles OSI. Introducción al Proyecto de Responsabilidad Social Universitaria: visita técnica a instituciones de la localidad.',
                'estrategias' => 'Socialización del sílabo Exposición docente Exposición docente de Práctica de laboratorio con PPT.',
                'evidencias' => 'Socialización del sílabo Exposición docente Exposición docente de Práctica de laboratorio con PPT.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 1
            ],[
                'contenido' => 'Capa1. Nivel Físico de las redes. Señales digitales, codificación digital. Modulación digital. Ancho de Banda, tipos de medios de transmisión.',
                'estrategias' => 'Exposición docente Exposición docente de Práctica de Laboratorio. Realización y envío de la tarea N° 1. Desarrollo de laboratorio.',
                'evidencias' => 'Revisión del avance de laboratorio en clases.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Capa 1. Nivel Físico, Redes punto a punto. Interfases Interfases y conectores. de comunicaciones RS232. Comunicación asíncrona. Transmisión y Recepción serial de señales codificadas.',
                'estrategias' => 'Exposición docente Lectura de tema bibliográfico: Zigbee y Z-Wave. Nivel Físico. Trabajo Grupal. Realización y envío de la tarea N° 2. Investigación sobre medios de transmisión. Características.',
                'evidencias' => 'Revisión del avance de laboratorio en clases.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 3
            ],[
                'contenido' => 'CAPA 2. Nivel Enlace. Funciones del nivel enlace. Protocolo HDLC. Técnicas de Control de Acceso al medio en Redes multipunto. CSMA/CD, token Ring, anillo doble FDDI, aloha, etc.',
                'estrategias' => 'Exposición docente con PPT Tarea. N° 3. Programación de Transmisión y recepción punto punto, en emulador virtual.',
                'evidencias' => 'Participación de un grupo de alumnos en las actividades del Proyecto de Responsabilidad Social Programación de visita técnica',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de la Unidad I.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Sustentación y evaluación del trabajo Grupal de Laboratorio.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta. Trabajo de Laboratorio grupal de 2 personas de transmisión y recepción en Visual C#.',
                'instrumentos' => 'Examen objetivo. Selección múltiple Examen de desarrollo de Laboratorio.',
                'semana' => 5
            ],[
                'contenido' => 'Nivel Enlace. Protocolo HDLC. Protocolos a nivel enlace. Tramado a nivel enlace Control de errores. Topologías de Redes Lan, Man Wan. Lab. Aplicación de comunicación serial con manejo de archivos binarios',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Exposición docente de Práctica de Laboratorio Tarea Nº5. Trabajo Grupal de Aplicación basada en hebras y procesos para el envío y recepción paralela de n archivos binarios',
                'evidencias' => 'Sustentación y evaluación del trabajo Grupal de Laboratorio Revisión del avance de laboratorio en clases.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 6
            ],[
                'contenido' => 'Protocolos TCP/IP. Capa Acceso al medio, capa internet, capa Transporte, capa aplicación. Direccionamiento IP. Lab. Trabajo grupal de 2 personas de transmisión y recepción de archivos en procesos paralelos',
                'estrategias' => 'Exposición docente (video conferencia). Lectura de artículo bibliográfico:',
                'evidencias' => 'Presentación y Sustentación de tarea Nº05',
                'instrumentos' => 'Lista de cotejo de Reuniones Virtuales Grupales',
                'semana' => 7
            ],[
                'contenido' => 'Redes de clase A, B, C, D Dirección Ip de red y de subred. SubNeteo, Redes de área local Ethernet.',
                'estrategias' => 'Exposición docente con PPT y exposición de solución de problemas. Tarea Nº6 Uso de Sockets para tx y Rx de tramas.',
                'evidencias' => 'Revisión del avance en el laboratorio,',
                'instrumentos' => 'Rúbrica del Programa en Visual C# de manejo de procesos y hebras para transmisión paralela de tramas.',
                'semana' => 8
            ],[
                'contenido' => 'Ejercicios de Subneteo con direcciones IP. Versión 4.0 Subneteo VLSM.',
                'estrategias' => 'Exposición docente con PPT Exposición docente de Práctica de Laboratorio. Tarea Nº 9 Trabajo Monográfico Grupal de Investigación.',
                'evidencias' => 'Revisión del avance en el laboratorio, Presentación de Tarea nº06 Transmisión y recepción de mensajes de Texto en red. TCP.',
                'instrumentos' => 'Rúbrica de evaluación del trabajo de Investigación Monográfico.',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de la Unidad II.',
                'estrategias' => 'Desarrollo de un examen objetivo. Examen Práctico de solución de problemas.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta de Teoría.',
                'instrumentos' => 'Examen objetivo. Selección múltiple.',
                'semana' => 10
            ],[
                'contenido' => 'Redes Frame Relay. Conmutación de circuitos y conmutación paquetes.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT. Tarea Nº8.',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación',
                'semana' => 11
            ],[
                'contenido' => 'Técnicas Nat y Pat, para conversión de direcciones IP privadas a públicas. Nivel Red. Datagrama IP. Fragmentación y Reensamblado IP.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT. Tarea Nº7 Cableado de una red. Configuración de la tarjeta de red',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación',
                'semana' => 12
            ],[
                'contenido' => 'Enrutamiento. Protocolos de enrutamiento. Vector distancia, Enrutamiento estático, enrutamiento dinámico. Ospf.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT.',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico. Presentación de la emulación de una red en Packet Tracer (Tarea Nº7)',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación',
                'semana' => 13
            ],[
                'contenido' => 'WiMax, Redes inalámbricas de banda angosta y banda ancha. Seguridad en Redes Inalámbricas. Voz IP.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT.',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 14
            ],[
                'contenido' => 'Evaluación de la Unidad III.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta.',
                'instrumentos' => 'Examen objetivo. Selección múltiple.',
                'semana' => 15
            ],



            #Seguridad de informacion
            [
                'contenido' => 'Presentación Socialización del sílabo Introducción a la seguridad de la información: Conceptos básicos',
                'estrategias' => 'Socialización del sílabo (Presencial/Video conferencia) Exposición docente (Video conferencia) Realización y envío de la tarea N° 1',
                'evidencias' => 'Identifica los elementos y la importancia de la seguridad de la información',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Gestión de la Seguridad de la Información Beneficios Ciclo de Deming Planificar Hacer Alcance',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 2',
                'evidencias' => 'Identifica las ventajas del sistema de Gestión de la Seguridad de la Información',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Gestión de riesgos: Análisis de riesgos Tratamiento de riesgos Revisar y actuar',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 3',
                'evidencias' => 'Exposición estudiantes (Presencial/Video conferencia) Entrega informe Retroalimentación Docente',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Tarea académica',
                'estrategias' => 'Sustenta el primer Avance Trabajo Aplicativo, demostrando conocimiento',
                'evidencias' => 'Aplica la gestión de riesgos en una organización',                        
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de Unidad I',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba presencial / online',
                'semana' => 5
            ],[
                'contenido' => 'Serie Norma ISO 27000 ISO 27001: Beneficios Implementación Certificación',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 5',
                'evidencias' => 'Aplica las recomendaciones de la Norma ISO 27001',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Control de Accesos: Principios Categorías de control de Acceso',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 6',
                'evidencias' => 'Aplica los controles de acceso dentro de una organización',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => 'Control de accesos: Acceso lógico, acceso a la infraestructura',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 7',
                'evidencias' => 'Aplica los controles de acceso dentro de una organización',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'Evaluación de Unidad II',
                'estrategias' => 'Exposición estudiantes (Presencial/Video conferencia) Entrega informe Retroalimentación Docente',
                'evidencias' => 'Sustenta el segundo Avance Trabajo Aplicativo, demostrando conocimiento',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de Unidad II',
                'estrategias' => 'Desarrollo de una prueba de conocimiento',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba presencial / online',
                'semana' => 10,
            ],[
                'contenido' => 'Exposición estudiantes (Presencial/Video conferencia) Entrega informe Retroalimentación Docente',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 9',
                'evidencias' => 'Aplica los controles de Biometría',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'Criptografía Controles criptográficos Tipos Certificado digital Usos y funcionamiento Ventajas y desventajas Firma digital Ventajas y desventajas Técnicas usadas',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 10',
                'evidencias' => 'Aplica controles de criptografía',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => 'Seguridad en Base de Datos Controles de seguridad',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 11',
                'evidencias' => 'Aplica controles de seguridad de base de datos',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Tarea académica',
                'estrategias' => 'Exposición estudiantes (Presencial/Video conferencia) Entrega informe Retroalimentación Docente',
                'evidencias' => 'Sustenta el Trabajo Aplicativo final, demostrando conocimiento',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Evaluación de Unidad III',
                'estrategias' => '',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita y Prueba practica',
                'semana' => 15
            ],
            
            
            #Marketing digital y Medios sociales
            [
                'contenido' => 'Presentación y socialización del sílabo. • El Marketing Digital. • Principales conceptos y tendencias. • Pautas para el proyecto final.',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 1.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'El consumidor digital. Características y comportamientos. • El Plan de Marketing Digital.',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 2.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Los canales de comunicación digital. • El content marketing.',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 3.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'El social media. • La publicidad en redes sociales. Principales herramientas. • KPI',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 4.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Examen parcial I',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 5
            ],[
                'contenido' => 'Los motores de búsqueda. • Indexación y posicionamiento en motores de búsqueda',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 5.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Marketing en motores de búsqueda. • Estrategias SEO y SEM. • Google Ads',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 6.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => 'La analítica digital. • Google Analytics',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 7.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'La reputación online. • Herramientas de monitoreo.',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 8.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Examen parcial II',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 10
            ],[
                'contenido' => 'El eCommerce. • Principales conceptos y tendencias. • Marco Legal del eCommerce en el Perú',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 9.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'La experiencia de usuario: UX, UI y usabilidad. • Customer Journey Map: Mapa de Experiencia del Cliente',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 10.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => 'Las pasarelas de pago. • CMS (Content Manager System).',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 11.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Exposición del proyecto final',
                'estrategias' => '1. Exposición/ Presentación del trabajo aplicativo grupal. (Video conferencia) 2. Debate en foro. 3. Chat de retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Examen parcial III',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 15
            ],
            
            #Ingeniería de software II
            [
                'contenido' => 'Presentación y socialización del sílabo. Metodologías tradicionales vs metodologías ágiles. Por qué necesitamos nuevas formas de gestionar proyectos de innovación. Introducción a las metodologías ágiles. ¿Cuándo aplicar metodologías ágiles?',
                'estrategias' => '1. Socialización del sílabo (Video conferencia). 2. Exposición docente (vídeo conferencia). 3. Lectura de módulo de aprendizaje. 4. Video referente a la tarea. 5. Ejecución y envío de la tarea N˚ 1.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Introducción a Scrum. Historia de Scrum y por qué elegir Scrum. Scrum como marco de trabajo para el desarrollo de proyectos ágiles. Los principios, aspectos, fases y procesos de Scrum. Flujo de trabajo Scrum.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 2.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Roles y artefactos de Scrum. Principales roles de Scrum. Dueño del producto o product owner. Cómo crear historias de usuario. Cómo dividir las historias de usuario en tareas. El rol de scrum master. Errores comunes que comete un scrum master. Stakeholder. Principales artefactos de Scrum. Product backlog. ¿Qué es un sprint? Sprint backlog. Product increment. Tareas de product owner en el sprint.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 3.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Exposición del trabajo de investigación. Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => '1. Exposición / Presentación del trabajo aplicativo grupal. (Video conferencia) 2. Debate en foro. 3. Chat de retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Examen parcial I',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 5
            ],[
                'contenido' => 'Fase de inicio. Creación de la visión del proyecto e identificación del SCRUM master y los socios. Formación del equipo SCRUM y desarrollo de las épicas. Creación de la lista priorizada del pendiente del producto y planificación del lanzamiento.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 4.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Fase de planificación y estimación. Crear historias de usuario, estimar historias de usuario. Comprometer historias de usuario, identificar tareas, estimar tareas, crear el sprint backlog. Comprometer.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 5.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => 'Fase de implementación. Creación de entregables, realizar el daily standup y refinar el backlog priorizado del producto. Demostrar y validar el sprint y retrospectiva del sprint. Fase de lanzamiento. Envío de entregables, retrospectiva del proyecto. Glosario. Taller de Scrum.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 6.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'Exposición del trabajo de investigación. Presentación, sustentación y defensa del trabajo aplicativo grupal',
                'estrategias' => 'Exposición / Presentación del trabajo aplicativo grupal (Video conferencia) Debate en foro Chat de retroalimentación',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Examen parcial II',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 10
            ],[
                'contenido' => 'Pruebas de software. Tipos de pruebas de software. Pruebas de volumen, rendimiento y estrés. Métricas utilizadas en pruebas de carga. Herramientas para aplicar pruebas. Introducción a JMeter. ¿Qué son las pruebas de rendimiento? Introducción a JMeter. Conceptos generales.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 7.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'Configuración de Jmeter Configurando un plan de pruebas Grabación de pruebas Análisis de resultados',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 8.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => 'Tipos de prueba con Jmeter Prueba de rendimiento de una página web Prueba de rendimiento de un servicio web Análisis de resultados',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 9.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Exposición del trabajo de investigación. Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => 'Exposición / Presentación del trabajo aplicativo grupal (Video conferencia) Debate en foro Chat de retroalimentación',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Examen parcial III',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 15
            ],
            
            
            #Inteligencia de negocios
            [
                'contenido' => 'Sistemas de Soporte de Decisiones. Introducción, Tipos de Sistemas. Laboratorio 1: Visión General del Informe de tipos de sistema de información.',
                'estrategias' => '1. Socialización del Sílabo. (video conferencia) 2. Video conferencia con la exposición docente con PPT. 3. Realización y envío de tarea.',
                'evidencias' => 'Informe de tipos de sistema de información',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Data Warehouse, Construcción, Definición del Proceso Metodológico, Conociendo las Bases de Un Sistema Transaccional, Laboratorio Construyendo un DataWarehouse 2.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Información de componentes iniciales de un data warehouse.',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Identificación de Requerimientos Estratégicos, Parte I Laboratorio 5. Práctica Calificada.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Requerimientos estratégicos',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Identificación de Requerimientos Estratégicos, Parte II Laboratorio 5. Práctica Calificada.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Análisis Dimensional Inicial',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Primer Examen Parcial ',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => '',
                'instrumentos' => 'Prueba escrita y Prueba practica',
                'semana' => 5
            ],[
                'contenido' => 'Análisis y Diseño Dimensional. Laboratorio 7 Construyendo un DataWarehouse 5',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Hoja de Gesión Cuadro Medidas y Dimensiones.',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Diseño Dimensional Avanzado Laboratorio 8 Realizando Mapeo del Modelo Transaccional al Modelo Dimensional.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'EL Grano, Implementand o el DataWarehous e..',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => 'Poblando un DataMart (ETL) Validando calidad de Data. Laboratorio 9. Realizando el Poblamiento de una Transaccional a la BD Multidimensional.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Diseño de Integración de Datos',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'Presentación de avance de Proyecto Final',
                'estrategias' => '1. Exposición de proyectos de estudiantes (video conferencia)',
                'evidencias' => 'Informe de avance de proyecto',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Segundo Examen Parcial',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita y Prueba practica',
                'semana' => 10
            ],[
                'contenido' => 'Construcción de Cubos OLAP Laboratorio 10. Construcción de Cubos OLAP',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Prepara Cubos',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'Implementando Aplicaciones BI- 1',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Desarrolla aplicaciones BI- Implementa KPI',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => 'Implementando Aplicaciones BI- 2',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Desarrolla aplicaciones BI. Implementa Visualizadores',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Presentación de Proyecto Final.',
                'estrategias' => '1. Exposición de proyecto por los estudiantes (video conferencia)',
                'evidencias' => 'Informe de proyecto final',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Tercer Examen Parcial',
                'estrategias' => '1. Exposición de proyecto por los estudiantes (video conferencia)',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita y Prueba practica',
                'semana' => 15
            ],


            #Internet de las cosas
            [
                'contenido' => '1. Introducción al internet de las cosas',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '1. Informe digital de trabajo aplicativo.',
                'instrumentos' => '1. Escala Valorativa',
                'semana' => 1
            ],[
                'contenido' => '2. VPS',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '2. Informe digital del tema de investigació n.',
                'instrumentos' => '1. Escala Valorativa',
                'semana' => 2
            ],[
                'contenido' => '3. Dominio y hosting',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '3. Informe digital de trabajo aplicativo',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes',
                'semana' => 3
            ],[
                'contenido' => '4. Taller de servicios en la nube.',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '4. Informe digital del trabajo de investigació n.',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes',
                'semana' => 4
            ],[
                'contenido' => '5. Examen de I Unidad',
                'estrategias' => 'Se retroalimenta y se demuestra lo aprendido haciendo uso de mapas mentales, mapas conceptuales',
                'evidencias' => '5. Prueba.',
                'instrumentos' => '3. Prueba Escrita Objetiva Virtual',
                'semana' => 5
            ],[
                'contenido' => '1. MQQT',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '1. Informe digital de trabajo de investigación',
                'instrumentos' => '1. Escala Valorativa.',
                'semana' => 6
            ],[
                'contenido' => '2. EMQX.',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '2. Informe digital del trabajo de investigació n.',
                'instrumentos' => '1. Escala Valorativa.',
                'semana' => 7
            ],[
                'contenido' => '3. Frameworks',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '3. Informe digital de trabajo aplicativo',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes.',
                'semana' => 8
            ],[
                'contenido' => '4. Firmware IoT y RSU',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '4. Informe digital del trabajo de investigación',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes.',
                'semana' => 9
            ],[
                'contenido' => '5. Examen de II Unidad.',
                'estrategias' => 'Se retroalimenta y se demuestra lo aprendido haciendo uso de mapas mentales, mapas conceptuales',
                'evidencias' => '5. Prueba.',
                'instrumentos' => '3. Prueba Escrita Objetiva Virtual.',
                'semana' => 10
            ],[
                'contenido' => '1. Requerimie ntos de Seguridad IoT',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '1. Informe digital del avance 01.',
                'instrumentos' => '1. Escala Valorativa',
                'semana' => 11
            ],[
                'contenido' => '2. Superficie de Ataque de los dispositivos IoT',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '2. Informe digital del avance 02.',
                'instrumentos' => '1. Escala Valorativa',
                'semana' => 12 
            ],[
                'contenido' => '3. Modelos IoT.',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '3. Informe digital del avance 03.',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes y Exposición.',
                'semana' => 13
            ],[
                'contenido' => '4. Aplicaciones IoT.',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '4. Informe digital total del proyecto real.',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes y Exposición.',
                'semana' => 14
            ],[
                'contenido' => '5. Pre Sustentació n del Proyecto y RSU.',
                'estrategias' => 'Se retroalimenta y se demuestra lo aprendido haciendo uso de mapas mentales, mapas conceptuales',
                'evidencias' => '5. Prueba',
                'instrumentos' => '3. Prueba Escrita Objetiva Virtual.',
                'semana' => 15
            ],

            
            #SEGUNDO AÑO
            #Arquitectura y organizacion de computadoras
            [
                'contenido' => 'Introducción a la Experiencia Curricular. Microprocesador. Arquitectura interna x86. Unidad de Ejecución y Unidad Básica de Interface. Componentes y unidades funcionales principales. Herramientas informáticas y emuladores de simulación de uso de procesador en tiempo real.',
                'estrategias' => 'Socialización del sílabo (Video conferencia). Video de conceptos básicos. Exposición docente Exposición docente de Práctica de laboratorio con PPT. (Video-conferencias). Realización y envío de la Tarea N° 1.',
                'evidencias' => 'Informe en diapositivas de instalación de herramientas y emuladores en su computadora personal.',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Registros Internos del Microprocesador. Registros de Uso general. Registros de Segmento. Registros Punteros e Índices. Proceso de Segmentación de Memoria a bajo nivel. Uso de un debuger para la segmentación de Memoria.',
                'estrategias' => 'Exposición docente (video conferencia). Lectura de artículo bibliográfico: procesadores de arquitectura x86 Exposición docente de Práctica de Laboratorio.  (videoconferencia de Uso de un debuger de segmentación de memoria) Realización y envío de la tarea N° 2.',
                'evidencias' => 'Informe en diapositivas de Práctica de Laboratorio:  Uso de un debuger para la segmentación de Memoria.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Direccionamiento de Memoria. Direccionamiento indirecto por registro Base e índice. Instrucciones básicas del procesador en assembler. Ejecución en tiempo Real de instrucciones del Procesador en Debug.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición docente de Práctica de Laboratorio. (videoconferencia de Uso de un debuger de segmentación de memoria) Realización y envío de la tarea N° 3.',
                'evidencias' => 'Informe en diapositivas de Práctica de Laboratorio Ejecución en tiempo Real de instrucciones del Procesador en Debug .',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 3
            ],[
                'contenido' => 'Compilador macroAsembler. Direccionamiento y Segmentación de memoria en macroAsembler. Direccionamiento inmediato, direccionamiento directo, direccionamiento indirecto, direccionamiento indexado. Uso de interrupciones BIOS y DOS. Uso del compilador MacroAsembler para ejecutar programas de asembler.',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Lectura de artículo bibliográfico: Set de Instrucciones de MacroAsembler. Exposición docente de Práctica de Laboratorio. (videoconferencia de Compilación y ejecución de programas básicos en MacroAsembler) Realización y envío de la tarea N° 4',
                'evidencias' => 'Video de desarrollo de práctica de Laboratorio: Compilación y ejecución de programas básicos en MacroAsembler.',
                'instrumentos' => 'Rúbrica. ',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de la Unidad I. ',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Practica de laboratorio Dirigida para la resolución de problemas de segmentación y direccionamiento de memoria.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta. Trabajo de Laboratorio de desarrollo de Practica Dirigida. (video de captura de pantalla del computador).',
                'instrumentos' => 'Examen objetivo. Selección múltiple con única respuesta. Examen de desarrollo de Laboratorio.',
                'semana' => 5
            ],[
                'contenido' => 'Arquitectura Interna del Computador. Ciclo de Instrucción. Ciclo de Instrucción con Interrupciones. Programación de Interrupciones en MacroAsembler del Computador: INT21h, INT16h, INT10h',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Lectura de artículo bibliográfico: Interrupciones Múltiples en el Computador. Exposición docente de Práctica de Laboratorio. (videoconferencia Programación de INT21h en MacroAsembler) Realización y envío de la tarea Nº4 Planteamiento de Tarea Nº5:  Trabajo de Investigación Monográfico Grupal.',
                'evidencias' => 'Programas Codificados en MacroAsembler. (Tarea Nº4)',
                'instrumentos' => 'Lista de Cotejo del Programa en Macro Asembler',
                'semana' => 6
            ],[
                'contenido' => 'Memoria Principal. Tipos y clasificación. Código Hamming. Memoria Cache L1 y L2 Programación de Interrupciones en MacroAsembler del Computador INT10h, INT',
                'estrategias' => 'Exposición docente (video conferencia). Lectura de artículo bibliográfico: Memoria Cache y correspondencias. Exposición docente de Práctica de Laboratorio. (videoconferencia Programación de INT16h e INT10h en MacroAsembler) Realización la tarea Nº6: Trabajo en Macroasembler. Envío de Evidencias de Trabajo Nº5',
                'evidencias' => 'Video de reunión grupal de coordinación de desarrollo de Trabajo de investigación monográfico. (Tarea Nº5)',
                'instrumentos' => 'Lista de cotejo de Reuniones Virtuales Grupales',
                'semana' => 7
            ],[
                'contenido' => 'Organización de la Memoria Cache L2: Correspondencia Directa y Correspondencia totalmente Asociativa. Microcontroladores. Uso y aplicaciones Presentación de trabajo de Macroassembler.',
                'estrategias' => 'Exposición docente con PPT y exposición de solución de problemas. (video conferencia). Exposición docente de Práctica de Laboratorio. (Microcontroladores y programación en MicrocodeStudio Plus) Envío de la tarea Nº6.',
                'evidencias' => 'Trabajo de Laboratorio: Programa de Utilización de interrupciones en MacroAsembler. (Tarea Nº6)',
                'instrumentos' => 'Rúbrica del Programa en Macro Asembler',
                'semana' => 8
            ],[
                'contenido' => 'Organización de la Memoria Cache L2: Correspondencia Asociativa por Conjuntos. Microcontroladores de alta gama. Simulación de ejecución de programas en microcontroladores usando interrupciones.',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Exposición docente de Práctica de Laboratorio. (Microcontroladores y programación en MicrocodeStudio Plus) Envío de la tarea Nº5',
                'evidencias' => 'Trabajo de Investigación Monográfico Grupal. (Tarea Nº5)',
                'instrumentos' => 'Rúbrica de evaluación del trabajo de Investigación Monográfico.',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de la Unidad II.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Práctica de solución de problemas.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta. Redacción de respuestas a preguntas de desarrollo. (fotografía)',
                'instrumentos' => 'Examen objetivo. Examen de desarrollo de Laboratorio.',
                'semana' => 10
            ],[
                'contenido' => 'Entradas y salidas del microprocesador I/O. Sistemas de interconexión interna. Arquitectura y Jerarquía de buses internos en el Computador. Arbitraje de buses. Buses actuales. Discos Duros y Sistemas RAID. Estructura de discos duros. RAID básicos niveles 1,2,3,4,5 y RAID híbridos 10,100,53.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Aprendizaje basado en problemas para laboratorio. Guía de Desarrollo de caso. (videoconferencia y guía de planteamiento de problema en Word de desarrollo)',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico. Video de exposición Grupal de Trabajo Monográfico. Lab: Programación embebida con microcontroladores. (Tarea N.º 07)',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 11
            ],[
                'contenido' => 'Procesamiento segmentado. Segmentación de instrucción. Conflictos y dependencias. Programación de entradas y salidas E/S del microcontrolador.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico. Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 12
            ],[
                'contenido' => 'Procesamiento súper-escalar. Comparación entre procesamiento segmentado, supersegmentado y superescalar.  Conflictos y dependencias del procesamiento Superescalar.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico. Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 13
            ],[
                'contenido' => 'Procesamiento CISC vs RISC. Procesamiento paralelo. Procesamiento Multi Core. Tendencias actuales en el diseño de computadores y supercomputadores. Programación de E/S, envío y recepción de mensajes entre computadores usando Visual Studio, con el componente SerialPort.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiandil con PPT.(video conferencia). Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia). Lectura de articulo: El top 10 de los supercomputadores, los nuevos gigantes científicos',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico. Video de exposición Grupal de Trabajo Monográfico. Envío de Trabajo Grupal en VisualStudio de solución a problema planteado.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación Rúbrica de Exposición y sustentación del trabajo Monográfico Rúbrica del Programa de Visual Studio.',
                'semana' => 14
            ],[
                'contenido' => 'Evaluación de la Unidad III.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta.',
                'instrumentos' => 'Examen objetivo. Selección múltiple.',
                'semana' => 15
            ],
                

            #Ingenieria de datos I
            [
                'contenido' => 'Sesión 01: Explicación del sílabo. Análisis de requisitos. Modelo del negocio. Proyecto de investigación formativa:',
                'estrategias' => '1. Socialización el sílabo (video conferencia)',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Modelo de Análisis del Negocio. Diagramas de CUN vs ON. Diagrama de Realización. Planteamiento de Foro de Unidad 1',
                'estrategias' => 'Videoconferen cias para tratar sobre los temas de la unidad 3. Videoconferen cia para dar las pautas para el trabajo de investigación asignado.',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Diagramas de Estados y Actividades del MAN.',
                'estrategias' => 'Lectura y análisis de material digital proporcionado en la plataforma virtual. 5. Elaboración y envío de Actividades.',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Modelo de casos de Uso por Paquetes.',
                'estrategias' => 'Elaboración y envío de Actividades.',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Práctica calificada',
                'semana' => 4
            ],[
                'contenido' => 'Sesión 05: Semana de Evaluaciones: Foro: 5%, Exposición de actividad: 35%, Práctica Calificada-en línea: 60%',
                'estrategias' => 'Evaluación de la unidad',
                'evidencias' => 'Evaluación de la unidad.',
                'instrumentos' => 'Exposiciones',
                'semana' => 5
            ],[
                'contenido' => 'El Modelado de Datos. Componentes. Migración hacia la base de datos física. Planteamiento de Foro de Unidad 2',
                'estrategias' => '1. Videoconferen cias para tratar los temas de la unidad. 2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Normalización de datos. Implementación de un modelado de datos en Erwin',
                'estrategias' => 'Elaboración y envío de las Actividades.',
                'evidencias' => 'Informe digital del Foro 2 de la unidad.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 7
            ],[
                'contenido' => 'El lenguaje SQL. Instrucciones DDL, DCL, y DML',
                'estrategias' => 'Distribución de las rúbricas de evaluación de las actividades',
                'evidencias' => 'Informe digital del Foro 2 de la unidad.',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Integridad de datos. Programación de PK, FK, check y default. Vistas: verticales, horizontales y otras variantes.',
                'estrategias' => 'Realización de un foro discusión de temas de interes',
                'evidencias' => 'Informe digital del Foro 2 de la unidad.',
                'instrumentos' => 'Práctica calificada',
                'semana' => 9
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5%, Exposición de actividad: 35%, Práctica Calificada-en línea: 60%',
                'estrategias' => 'Evaluación de la unidad',
                'evidencias' => 'Evaluación de la unidad',
                'instrumentos' => 'Exposiciones',
                'semana' => 10
            ],[
                'contenido' => 'Procedimientos almacenados. Parámetros de E/S. Planteamiento de Foro de Unidad 3',
                'estrategias' => 'Videoconferencias para tratar los temas de la unidad. 2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual de lactividades',
                'instrumentos' => 'Escala valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Funciones escalares en T-SQL. Funciones recursivas. Funciones de tabla de múltiples sentencias.',
                'estrategias' => 'Elaboración y envío de las Actividades.',
                'evidencias' => 'Informe digital del Foro 3 de la unidad',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 12
            ],[
                'contenido' => 'Triggers para la integridad de datos',
                'estrategias' => 'Distribución de las rúbricas de evaluación de las actividades',
                'evidencias' => 'Informe digital del Foro 3 de la unidad',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Informe y sustentación final: Proyecto de investigación formativa.',
                'estrategias' => 'Realización de un foro discusión de temas de interes.',
                'evidencias' => 'Informe digital del Foro 3 de la unidad',
                'instrumentos' => 'Práctica calificada',
                'semana' => 14
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5%, Exposición de actividad: 35%, Práctica Calificada-en línea: 60%',
                'estrategias' => 'Evaluación de la unidad',
                'evidencias' => 'Evaluación de la unidad',
                'instrumentos' => 'Proyecto de Investigación',
                'semana' => 15
            ],


            #Tecnologias web
            [
                'contenido' => 'Introducción a las tecnologías web',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital de trabajo aplicativo.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 1
            ],[
                'contenido' => 'Tecnologías web Frontend y Backend.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del tema de investigación',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 2
            ],[
                'contenido' => 'Pilas tecnológicas',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del trabajo de investigación',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 3
            ],[
                'contenido' => 'Exposición de Proyecto Web',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del trabajo de investigación',
                'instrumentos' => 'Guía de Prueba Ora',
                'semana' => 4
            ],[
                'contenido' => 'Examen I Unidad (Teoría y Laboratorio)',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba Escrita Objetiva Virtual.',
                'semana' => 5
            ],[
                'contenido' => 'Tecnologías de intercambio de datos',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital de trabajo aplicativo.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 6
            ],[
                'contenido' => 'Servicios Web',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del tema de investigación.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 7
            ],[
                'contenido' => 'API Rest',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del trabajo de investigación',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 8
            ],[
                'contenido' => 'GraphQL Exposición de Proyecto Web.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Informe digital del trabajo de investigación',
                'instrumentos' => 'Guía de Prueba Oral',
                'semana' => 9
            ],[
                'contenido' => 'Examen II Unidad (Teoría y Laboratorio)',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba Escrita Objetiva Virtual.',
                'semana' => 10
            ],[
                'contenido' => 'Tecnologías web SPA.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Informe digital de trabajo aplicativo.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 11
            ],[
                'contenido' => 'Progressive web apps',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Informe digital del tema de investigación',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 12
            ],[
                'contenido' => 'Tecnologías cloud.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Informe digital del trabajo de investigación.',
                'instrumentos' => 'Escala Valorativa.',
                'semana' => 13
            ],[
                'contenido' => 'Examen III Unidad (Exposición del Proyecto Real).',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Informe digital del trabajo de investigación.',
                'instrumentos' => 'Guía de Prueba Oral.',
                'semana' => 14
            ],[
                'contenido' => 'Examen de Aplazados.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos reales.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Objetiva Virtual.',
                'semana' => 15
            ],


            #Sistemas de informacion
            [
                'contenido' => 'Los sistemas de información. Elementos de los sistemas de información. Laboratorio  Conociendo el entorno de laravel. Trabajo con Rutas y Controladores.',
                'estrategias' => 'Socialización del Sílabo. (video conferencia) 2. Video conferencia con la exposición docente con PPT. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe de historia de los sistemas de información.',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Tipos y usos de los sistemas de información. Los sistemas de información como soporte a las estrategias de negocio. Laboratorio Migraciones y modelos y View con laravel.',
                'estrategias' => 'Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro con ejemplos de los diferentes tipos de sistemas de información',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Infraestructura Tecnológica de la información y sus componentes. Laboratorio   Sistemas de autenticación, creación usuarios.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un mapa conceptual de la tecnología de la información.',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Las telecomunicacio nes y redes de datos en los negocios Laboratorio Trabajando con Plantillas Blade.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de diferencias de los tipos de redes.',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Primer Examen Parcial',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => '',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 5
            ],[
                'contenido' => 'Comercio Electrónico y sus tendencias en internet. Laboratorio Trabajo con plantilla AdminLte de bootstrap',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe de negocios electrónicos.',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Gestión de la información para la toma de decisiones.  Construcción y administración de sistemas. Laboratorio  Creando CRUD con laravel.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe de la importancia de la gestión de información en la toma de decisiones.',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => ' Fundamentos de Base de Datos y la gestión de la información. Laboratorio  Creando CRUD con laravel.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Diseña un modelo de base de datos.',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'Presentación de avance de Proyecto Final',
                'estrategias' => '1. Exposición de proyectos de estudiantes (video conferencia)',
                'evidencias' => 'Informe de avance proyecto',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Segundo Examen Parcial',
                'estrategias' => '',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 10
            ],[
                'contenido' => 'Planeación de los recursos empresariales (ERP).  Administración de relaciones con clientes (CRM). Laboratorio  Creando CRUD con laravel.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un mapa conceptual de herramientas de gestión.',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'Fundamentos de la Inteligencia de Negocios. Laboratorio  Trabajando tablas necesarias para un documento de venta.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de ejemplos sobre inteligencia de negocios',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => ' Concepción de Sistemas.  Análisis de Sistemas Laboratorio  Trabajando vista de documento de venta.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de de módulo aprendizaje. 3. Realización envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora cuadro un de ejemplos sobre inteligencia de negocios',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Presentación de Proyecto Final.',
                'estrategias' => '1. Exposición y de proyecto por los estudiantes (video conferencia)',
                'evidencias' => 'Informe de proyecto final',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Tercer Examen Parcial',
                'estrategias' => '',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 15
            ],


            #Ingenieria de datos II
            [
                'contenido' => 'Explicación del sílabo. Explicación del Perfil de Proyecto de base de datos. Implementación de Triggers.',
                'estrategias' => '1. Socialización el sílabo (video conferencia).',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Programación avanzada con T-SQL. Consultas agrupadas. Uso de group by, having. Uso de Left join, right join, inner join, cross join, unión. Programación de triggers for insert. Planteamiento de Foro de Unidad 1',
                'estrategias' => '2. Videoconferencias para tratar sobre los temas de la unidad',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Programación de Transacciones. Uso de begin transaction, commit y rollback. Programación de triggers for delete y for update.',
                'estrategias' => '3. Videoconferencia para dar las pautas para el trabajo de investigación asignado.',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Programación de Cursores. Modelos y tipos. Cursores estáticos y dinámicos. Cláusulas declare cursor, fetch, close y deallocate. Programación de autogenerados con T-SQL',
                'estrategias' => '4. Lectura y análisis de material digital proporcionado en la plataforma virtual. 5. Realización de un foro de discusión de temas de interes',
                'evidencias' => 'Informe digital del Foro 1 de la unidad.',
                'instrumentos' => 'Práctica calificada',
                'semana' => 4
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5% Evaluación de Unidad-en línea: 35% Práctica Calificada-en línea: 60%',
                'estrategias' => '6. Evaluación de la unidad.',
                'evidencias' => 'Evaluaciones semanales',
                'instrumentos' => 'Exámenes',
                'semana' => 5
            ],[
                'contenido' => 'Uso de información para la toma de decisiones. Categorías de decisiones. Reportes. Quiebres y consultas agrupadas. Uso de parámetros. Planteamiento de Foro de Unidad 2',
                'estrategias' => '1. Videoconferencias para tratar los temas de la unidad.',
                'evidencias' => 'Informe digital del Foro 2 de la unidad',
                'instrumentos' => 'Escala valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Gráficos con Reporting Service. Uso de vistas, procedimientos almacenados y parámetros de E/S en la obtención de gráficos estadísticos',
                'estrategias' => '2. Lectura y análisis de material digital proporcionado en la plataforma virtual',
                'evidencias' => 'Informe digital del Foro 2 de la unidad',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 7
            ],[
                'contenido' => 'Índices de una base de datos. Estructura. Índices agrupados y no agrupados. Partición de tablas y de índices.',
                'estrategias' => '3. Realización de un foro de discusión de temas de interes.',
                'evidencias' => 'Informe digital del Foro 2 de la unidad',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Gestión de la seguridad de acceso al servidor. Gestión de los usuarios de una base de datos. Administración de los permisos y roles. Tareas planificadas. Configuración de servicios. Jobs. Alertas.',
                'estrategias' => '4. Realización de un foro de discusión de temas de interes.',
                'evidencias' => 'Informe digital del Foro 2 de la unidad',
                'instrumentos' => 'Práctica calificada',
                'semana' => 9
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5% Evaluación de Unidad-en línea: 35% Práctica Calificada-en línea: 60%',
                'estrategias' => '5. Evaluación de la unidad',
                'evidencias' => 'Evaluaciones semanales',
                'instrumentos' => 'Exámenes',
                'semana' => 10
            ],[
                'contenido' => 'Programación por capas. Aplicación en VB NET para el mantenimiento de tablas. Planteamiento de Foro de Unidad 3',
                'estrategias' => '1. Videoconferencias para tratar los temas de la unidad',
                'evidencias' => 'Informe digital del Foro 3 de la unidad.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Análisis Dimensional. Uso de la cláusula Merge para la implementación de la base de datos dimensional.',
                'estrategias' => '2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe digital del Foro 3 de la unidad.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 12
            ],[
                'contenido' => 'Pasos para la implementación de un DataMar',
                'estrategias' => '3. Informe de Proyecto integral',
                'evidencias' => 'Informe digital del Foro 3 de la unidad.',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Informe y sustentación final: Proyecto de investigación formativa.',
                'estrategias' => '4. Realización de un foro de discusión de temas de interes',
                'evidencias' => 'Informe de Proyecto integral.',
                'instrumentos' => 'Práctica calificada',
                'semana' => 14
            ],[
                'contenido' => 'Semana de Evaluaciones: Foro: 5% Evaluación de Unidad-en línea: 35% Práctica Calificada-en línea: 60%',
                'estrategias' => '5. Evaluación de la unidad.',
                'evidencias' => 'Evaluaciones semanales',
                'instrumentos' => 'Exámenes Proyecto de Investigación',
                'semana' => 15
            ],


            #Sistemas operativos
            [
                'contenido' => 'Introducción a la Experiencia Curricular y al desarrollo de la Asignatura.',
                'estrategias' => 'Socialización del sílabo (Video conferencia). Exposición docente de la introducción al desarrollo de la experiencia curricular. Exposición de la metodología del curso. Parte Práctica. Formación de grupos de trabajos de investigación. (Video-conferencias).',
                'evidencias' => 'Formatos del aula Virtual de la Socialización de Sílabus. Formato de formación de grupos del aula Virtual.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 1
            ],[
                'contenido' => 'Estructura y gestión de recursos en un Sistema Operativo',
                'estrategias' => 'Exposición docente (video conferencia). Lectura de artículo bibliográfico: virtualización de sistemas operativos. Exposición docente de Práctica de Laboratorio. Tarea N°01',
                'evidencias' => 'Informe en diapositivas de Práctica de Laboratorio.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Gestión de procesos. Estados y estructuras de control de procesos.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición docente de Práctica de Laboratorio. Tarea N°01 (videoconferencia de instalación de Sistema Operativo.) Trabajo de investigación Monográfico.',
                'evidencias' => 'Envío de la tarea N°01. Informe de práctica de Laboratorio instalación de Sistema Operativo Parte II.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 3
            ],[
                'contenido' => 'Arquitectura de un Sistema Operativo y Modelos de Diseño.',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Lectura de artículo bibliográfico: UEFI frente a Bios. Exposición docente de Práctica de Laboratorio. (Distribución Linux Debian vs Linux Centos) Realización y envío de la tarea N°02',
                'evidencias' => 'Envío de la tarea N°02 Trabajo de descripción de las diferencias y uso de las distribuciones Linux. Centos vs Debian.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de la Unidad I. ',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Examen Trabajo. Tarea Nº03 Laboratorio de informe de instalación de S.O.',
                'evidencias' => 'Examen objetivo',
                'instrumentos' => 'Examen de Selección múltiple. Examen de Laboratorio.',
                'semana' => 5
            ],[
                'contenido' => 'Planificación de memoria. Gestión de la memoria.',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Lectura de artículo bibliográfico: Minix, clon de Unix. Exposición docente de Práctica de Laboratorio. (videoconferencia comandos Linux)',
                'evidencias' => 'Trabajo de Laboratorio de desarrollo de. Tarea Nº03 Practica Dirigida. (video de capturas de pantalla de pc).',
                'instrumentos' => 'Lista de cotejo de Reuniones Virtuales Grupales',
                'semana' => 6
            ],[
                'contenido' => 'Planificación apropiativa y no apropiativa. Métodos . Ejemplos de planificación en sistemas operativos.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición docente de Práctica de Laboratorio. Planteamiento de Tarea Nº04:  Trabajo de Investigación Monográfico Grupal.',
                'evidencias' => 'Video de reunión grupal de coordinación de desarrollo de Trabajo de investigación monográfico. (Tarea Nº04)',
                'instrumentos' => 'Lista de cotejo de Reuniones Virtuales Grupales',
                'semana' => 7
            ],[
                'contenido' => 'Control de Concurrencia en sistemas operativos.',
                'estrategias' => 'Exposición docente con PPT y exposición de solución de problemas. (videoconferencia de instalación de Sistema Operativo 03 en máquina Virtual Box) Enunciado Tarea Nº05. Video de instalación de sistema operativo 03. (Windows Server) Exposición Individual/Grupal estudiandil con PPT. (video conferencia).',
                'evidencias' => 'Presentación del informe del Trabajo de Investigación Monográfico Grupal. (Tarea Nº04) Video de exposición Trabajo Monográfico.',
                'instrumentos' => 'Lista de Cotejo Rúbrica de evaluación del trabajo de Investigación Monográfico',
                'semana' => 8
            ],[
                'contenido' => 'Interbloqueo. Modelado del Interbloqueo Estrategias, Técnicas de detección y recuperación. Técnicas de prevención Dispositivos de E/S y sus controladores.',
                'estrategias' => 'Exposición docente (video conferencia). Exposición Individual/Grupal estudiandil con PPT. (video conferencia).',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico de la Tarea Nº03 Video de exposición Trabajo Monográfico.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de la Unidad II. ',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Examen de Laboratorio. Tarea Nº06',
                'evidencias' => 'Examen objetivo de Selección múltiple. Presentación de Tarea de Laboratorio Nº 06.',
                'instrumentos' => 'Examen objetivo. Examen de desarrollo de Laboratorio.',
                'semana' => 10
            ],[
                'contenido' => 'Memoria Virtual. Paginación de memoria. Criterios de sustitución de páginas.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Laboratorio, Aprendizaje basado en problemas. Guía de Desarrollo de caso. (videoconferencia y guía de planteamiento de problema en Word de desarrollo) Tarea Nº07 Video de virtualización, instalación y ejecución de comandos de S.O.',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 11
            ],[
                'contenido' => 'Administración de Archivos. Gestión del espacio en disco Archivos compartidos Coherencia del sistema de archivos.  Reserva de bloques Concurrencia con archivos',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT. (video conferencia). Laboratorio. Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico. VideoMeet de Debate de Exposiciones.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 12
            ],[
                'contenido' => 'Seguridad y protección del sistema de archivos. Tipos de ataques. Comprobación de la identidad del usuario. Control de acceso',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiandil con PPT. (video conferencia). Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico. Video e Informe de Sustentación de TareaNº7',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico Rubrica TareaNº07',
                'semana' => 13
            ],[
                'contenido' => 'Introducción a la virtualización de sistemas operativos vs la virtualización de componentes.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiandil con PPT. (video conferencia). Laboratorio, Exposición de retroalimentación Docente de los temas tratados por los grupos de estudiantes. (video conferencia).',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico. VideoMeet de Debate de Exposiciones.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 14
            ],[
                'contenido' => 'Evaluación de la Unidad III.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta.',
                'instrumentos' => 'Examenobjetivo.Selecciónmúltiple.',
                'semana' => 15
            ],


            #Ingenieria de requerimientos
            [
                'contenido' => 'Que es la ingeniería de software y la ingeniería de requisitos. Conceptos básicos de RUP. Elementos Fases.',
                'estrategias' => '1. Socialización del Sílabo. (video conferencia) 2. Video conferencia con la exposición docente con PPT. 3. Realización y envío de tarea.',
                'evidencias' => 'Informe de metodologías agiles para el desarrollo de software.',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Modelado del Negocio. Casos de uso de Negocio. Modelo dominio.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe del modelado del negocio con BPMN.',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Modelo de clases. Diagramas de Actividades.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un diagrama para representar las actividades de un proceso seleccionado.',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Que son los requisitos de software. Definición de la Ingeniería de Requerimientos. La importancia de los requerimientos.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de listas de requerimientos funcionales y no funcionales.',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Primer Examen Parcial',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 5
            ],[
                'contenido' => 'Desarrollo y gestión de Requisitos. Actividades en el desarrollo de Requisitos: Captación, Análisis, Especificación y Validación de Requisitos.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico',
                'evidencias' => 'Informe de la importancia de los casos de uso del sistema.',
                'instrumentos' => 'Rubrica.',
                'semana' => 6
            ],[
                'contenido' => 'Captación de Requisitos: Definición de Fuentes de Requisitos, Definición de Técnicas de Requisitos (Entrevistas, Cuestionarios, Prototipos,  etc.), Identificación de la   lista de deseos de Stakeholders.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Informe de relaciones entre casos de usos.',
                'instrumentos' => 'Rubrica.',
                'semana' => 7
            ],[
                'contenido' => 'Análisis de Requisitos: Clasificación, Priorización, y Negociación de Requisitos. Matriz de Trazabilidad. Modelo Conceptual: UML. Actores, Casos de Usos,  Tipos de Casos de Usos, Diagrama de Clases, Relaciones.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Diseña diagramas de casos de uso y clases.',
                'instrumentos' => 'Rubrica.',
                'semana' => 8
            ],[
                'contenido' => 'Presentación de avance de Proyecto Final',
                'estrategias' => '1. Exposición de proyectos de estudiantes (video conferencia)',
                'evidencias' => 'Informe de avance proyecto',
                'instrumentos' => 'Rubrica.',
                'semana' => 9
            ],[
                'contenido' => 'Segundo Examen Parcial',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 10
            ],[
                'contenido' => 'Especificación de Requisitos: Importancia. Diferencias entre la Captación y Especificación de Requisitos. Software Requirements Specification (SRS). Estructura sugerida para un SRS.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un SRS.',
                'instrumentos' => 'Rubrica.',
                'semana' => 11
            ],[
                'contenido' => 'Validación de Requisitos: Técnicas de Validación de Requisitos (Revisión, Prototipos, Casos de Prueba). Revisión de Requisitos, Uso de Checklists para validar las Cualidades de Requisitos.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de checklist para la validación de requisitos.',
                'instrumentos' => 'Rubrica.',
                'semana' => 12
            ],[
                'contenido' => 'Estimación del costo: Estimación con Punto de Casos de Uso (PCU). Medición de un Proyecto con PCU.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Elabora un cuadro de estimación de costos.',
                'instrumentos' => 'Rubrica.',
                'semana' => 13
            ],[
                'contenido' => 'Presentación de Proyecto Final.',
                'estrategias' => '1. Exposición de proyecto por los estudiantes (video conferencia)',
                'evidencias' => 'Informe de proyecto final',
                'instrumentos' => 'Rubrica.',
                'semana' => 14
            ],[
                'contenido' => 'Tercer Examen Parcial',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita Prueba practica',
                'semana' => 15
            ],


            #Sistemas inteligentes
            [
                'contenido' => '1. Introducción a los Sistemas Inteligentes.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 1
            ],[
                'contenido' => '2. Introducción al Procesamiento de Imágenes.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 2
            ],[
                'contenido' => '3. Procesamiento de imágenes: Métodos.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 3
            ],[
                'contenido' => '4. Avance 01 - Proyecto de Curso.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 4
            ],[
                'contenido' => '5. Examen I Unidad (Teoría y Laboratorio).',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de los Sistemas Inteligentes en el Mundo Real. Explica la importancia del Procesamiento de Imágenes en el Mundo Real',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 5
            ],[
                'contenido' => '1. Medición de parámetros en una imagen.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 6
            ],[
                'contenido' => '2. Filtrado de imágenes y detección de bordes.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 7
            ],[
                'contenido' => '3. Homografía para la corrección de perspectiva.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 8
            ],[
                'contenido' => '4. Avance 02 - Proyecto de Curso.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 9
            ],[
                'contenido' => '5. Examen II Unidad (Teoría y Laboratorio).',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia de la Extracción de Características en el Análisis de Imágenes. Explica la importancia del Reconocimiento de Patrones en el Análisis de Imágenes.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 10
            ],[
                'contenido' => '1. Detección de objetos en video.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 11
            ],[
                'contenido' => '2. Introducción al Deep Learning.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 12
            ],[
                'contenido' => '3. Exposición Avance Final 01 del desarrollo del Proyecto de Curso.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 13
            ],[
                'contenido' => '4. Exposición Avance Final 02 del desarrollo del Proyecto de Curso.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 14
            ],[
                'contenido' => '5. Examen III Unidad (Exposición desarrollo culminado del Proyecto de Curso). 6. Examen Aplazados.',
                'estrategias' => 'Método: Expositivo Problematizador Resolución de problemas (individual y grupal). Técnica: Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => 'Explica la importancia del Deep Learning en un Sistema de Visión Artificial. Aplica el proceso de Análisis de Imágenes en un Sistema de Visión Computacional.',
                'instrumentos' => 'Rúbrica de evaluación. Prueba escrita digital. (PDF)',
                'semana' => 15
            ],


            #Ingenieria de software I
            [
                'contenido' => 'Presentación y socialización del sílabo Introducción a la Ingeniería de Software. La crisis del software. Introducción al Rational Unified Process (RUP).',
                'estrategias' => '1. Socialización del sílabo. 2. Exposición docente. 3. Lectura de módulo de aprendizaje. 4. Exposición referente a la tarea. 5. Ejecución y envío de la tarea N° 1.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 1
            ],[
                'contenido' => 'Diagrama de actores del negocio. Diagrama general de casos de uso del negocio. Diagrama de trabajadores del negocio Diagrama de entidades del negocio Diagrama de estados',
                'estrategias' => '1. Exposición docente. 2. Lectura del módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 2.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 2
            ],[
                'contenido' => 'Diagrama de realizaciones del negocio. Diagrama de clases del negocio Diagrama de actividades del negocio. Modelo del dominio',
                'estrategias' => '1. Exposición docente. 2. Lectura de módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 3.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => '1.Exposición / Presentación del trabajo aplicativo grupal 2. Debate. 3. Retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 4
            ],[
                'contenido' => ' Examen parcial I.',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba.',
                'instrumentos' => 'Prueba escrita.',
                'semana' => 5
            ],[
                'contenido' => 'Requerimientos funcionales y no funcionales. Matriz de actividades vs. requisitos. Modelado de requerimientos Diagrama de casos de uso Diagrama de actores Diagrama de casos de uso por proceso de negocio Diagrama de casos de uso general',
                'estrategias' => '1. Exposición docente 2. Debate. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 4',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 6
            ],[
                'contenido' => 'Estimación de tiempo de desarrollo basado en puntos de casos de uso. Estimación de tiempo de desarrollo basado en Método COCOMO II.',
                'estrategias' => '1. Exposición docente. 2. Lectura de módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 5.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 7
            ],[
                'contenido' => 'Estudio de Viabilidad Económica. Priorización de casos de uso. Gestión de Riesgos en Proyectos de Software. Documento del proyecto de software',
                'estrategias' => '1. Exposición docente. 2. Lectura del módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 6.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => '1.Exposición / Presentación del trabajo aplicativo grupal. 2. Debate. 3. Retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 9
            ],[
                'contenido' => 'Examen parcial II.',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba.',
                'instrumentos' => 'Prueba escrita.',
                'semana' => 10
            ],[
                'contenido' => 'Diagrama de clases de análisis. Diagramas de colaboración. Diagrama de paquetes. Diagrama subsistemas.',
                'estrategias' => '1. Exposición docente. 2. Debate. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 7.',
                'evidencias' => 'Informe.',
                'instrumentos' => 'Rúbrica.',
                'semana' => 11
            ],[
                'contenido' => 'Modelo conceptual. Modelo de entidades. Modelo lógico de B.D. Modelo físico de B.D. Diagrama de clases de diseño.',
                'estrategias' => '1. Exposición docente. 2. Lectura de módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 8.',
                'evidencias' => 'Informe.',
                'instrumentos' => 'Rúbrica.',
                'semana' => 12
            ],[
                'contenido' => 'Modelo de desarrollo Especificaciones lenguaje de del desarrollo. Generación de código.',
                'estrategias' => '1. Exposición docente. 2. Lectura de módulo de aprendizaje. 3.  Exposición referente a la tarea. 4. Realización y envío de la tarea N° 9.',
                'evidencias' => 'Informe.',
                'instrumentos' => 'Rúbrica.',
                'semana' => 13
            ],[
                'contenido' => 'Presentación, sustentación y defensa del artículo de revisión grupal.',
                'estrategias' => '1.Exposición / Presentación del artículo de revisión. 2. Debate en foro. 3. Chat de retroalimentación.',
                'evidencias' => 'Informe.',
                'instrumentos' => 'Rúbrica.',
                'semana' => 14
            ],[
                'contenido' => 'Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => '1.Exposición / Presentación del trabajo aplicativo grupal. 2. Debate. 3. Retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rúbrica',
                'semana' => 15
            ],


            #Metodologia de la investigacion
            [
                'contenido' => 'Explicación del sílabo. Análisis del Marco Normativo para la investigación. Estructura del Proyecto de investigación formativa:',
                'estrategias' => '1. Socialización el sílabo (video conferencia) 2. Exposiciones para tratar sobre los temas de la unidad.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Introducción. La ciencia; conceptos, tipos, funciones y objetivos de la ciencia. Metodología de la investigación científica.',
                'estrategias' => '3. Exposiciones para dar las pautas para el trabajo de investigación asignado',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 2
            ],[
                'contenido' => 'El Problema científico. Redacción sistémica de la realidad problemática. Uso de herramientas de apoyo.',
                'estrategias' => '4. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Antecedentes. Pertinencia de las fuentes de información y sus Aplicaciones.',
                'estrategias' => '5. Elaboración y envío de Actividades. 6. Distribución de las rúbricas de evaluación de actividades',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Prueba escrita',
                'semana' => 4
            ],[
                'contenido' => 'Semana de Evaluaciones: Evaluación de Avance 1 : 60% Informe de Avance 1  (30%) Exposición de avance (70%) Examen de Unidad 1: 40%',
                'estrategias' => '7. evaluación de la unidad.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Exposiciones',
                'semana' => 5
            ],[
                'contenido' => 'Tipos y métodos de investigación.',
                'estrategias' => '1. Exposiciones para tratar los temas de la unidad.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Escala valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Bases teóricas. Estrategias para la selección de la teoría que fundamenta el problema de investigación.',
                'estrategias' => '2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 7
            ],[
                'contenido' => 'Lineamientos APA e ISO 690. Estándares para citas textuales.',
                'estrategias' => '3. Elaboración y envío de las Actividades.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Objetivos de la investigación.',
                'estrategias' => '4. Distribución de las rúbricas de evaluación de las actividades.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Prueba escrita',
                'semana' => 9
            ],[
                'contenido' => 'Semana de Evaluaciones: Evaluación de Avance 1 : 60% Informe de Avance 1  (30%) Exposición de avance (70%) Examen de Unidad 1: 40%',
                'estrategias' => '5. evaluación de la unidad.',
                'evidencias' => 'Informe académico individual de actividades.',
                'instrumentos' => 'Exposiciones',
                'semana' => 10
            ],[
                'contenido' => 'Hipótesis. Variables de investigación. Operacionalización de variables.',
                'estrategias' => '1. Exposiciones para tratar los temas de la unidad.',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Escala valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Diseño de la investigación. Población y muestra. Técnicas e instrumentos de recolección de datos.',
                'estrategias' => '2. Lectura y análisis de material digital proporcionado en la plataforma virtual.',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Lista de cotejo',
                'semana' => 12
            ],[
                'contenido' => 'Técnicas para la validación y confiabilidad de los instrumentos de recolección de datos.',
                'estrategias' => '3. Elaboración y envío de las Actividades.',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Semana de Evaluaciones: Evaluación de Avance 1 : 60% Informe de Avance 1  (30%) Exposición de avance (70%) Examen de Unidad 1: 40%',
                'estrategias' => '4. Distribución de las rúbricas de evaluación de las actividades',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Prueba escrita',
                'semana' => 14
            ],[
                'contenido' => 'Examen de Unidad 3',
                'estrategias' => '5. evaluación de la unidad.',
                'evidencias' => 'Informe académico individual del Proyecto de Investigación',
                'instrumentos' => 'Proyecto de Investigación',
                'semana' => 15
            ],


            #Planeamiento estrategico de la informacion
            [
                'contenido' => 'Descripción del sílabo. Formación de grupos de trabajo. Perfil de Proyecto Integral. Fundamentos de la Planificación Estratégica de Negocios y la Planificación Estratégica de TI',
                'estrategias' => 'Clase magistral',
                'evidencias' => 'Informes',
                'instrumentos' => 'Escala valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Métodos de recolección de información. Instrumentos de recolección de datos.',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Informes',
                'instrumentos' => 'Foro 1',
                'semana' => 2
            ],[
                'contenido' => 'Introducción a la Planificación Estratégica de Tecnologías de Información',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Objetivos de la Planificación Estratégica de Tecnologías de Información',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Práctica calificada',
                'semana' => 4
            ],[
                'contenido' => 'Práctica Calificada',
                'estrategias' => 'Aprendizaje colaborativo',
                'evidencias' => 'Exposiciones',
                'instrumentos' => 'Examen',
                'semana' => 5
            ],[
                'contenido' => 'Definición y Organización del PETI',
                'estrategias' => 'Clase magistral',
                'evidencias' => 'Informes',
                'instrumentos' => 'Escala valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Alineamiento del plan de sistemas al plan estratégico',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Informes',
                'instrumentos' => 'Foro 3',
                'semana' => 7
            ],[
                'contenido' => 'Identificación de requerimientos.',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Informes',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Diseño del modelo de sistemas institucional',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Práctica calificada',
                'semana' => 9
            ],[
                'contenido' => 'Práctica calificada',
                'estrategias' => 'Aprendizajecolaborativo',
                'evidencias' => 'Exposiciones',
                'instrumentos' => 'Examen',
                'semana' => 10
            ],[
                'contenido' => 'Modelamiento de la Arquitectura de TI',
                'estrategias' => 'Clase magistral',
                'evidencias' => 'Informes',
                'instrumentos' => 'Escala valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Identificación de las necesidades de la Infraestructura de TI',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Informes',
                'instrumentos' => 'Foro 3',
                'semana' => 12
            ],[
                'contenido' => 'Selección de la Arquitectura de TI Arquitectura de TI para contingencias',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Plan de Acción Cuadro de Mando Integral',
                'estrategias' => 'Aprendizaje basado en casos',
                'evidencias' => 'Prácticas',
                'instrumentos' => 'Práctica calificada',
                'semana' => 14
            ],[
                'contenido' => 'Práctica Calificada',
                'estrategias' => 'Aprendizaje colaborativo',
                'evidencias' => 'Exposiciones',
                'instrumentos' => 'Examen',
                'semana' => 15
            ],


            #Gestion de servicio de TIC
            [
                'contenido' => 'Presentación y socialización del sílabo Introducción a la gestión de servicios de TI. Conceptos relacionados a la Gestión de servicios de TI.',
                'estrategias' => '1. Socialización del sílabo 2. Exposición docente 3. Realización y envío de la tarea N° 1.',
                'evidencias' => 'Identifica los conceptos básicos de la Gestión de servicios de TI.',
                'instrumentos' => 'Rúbrica',
                'semana' => 1
            ],[
                'contenido' => 'Modelo ITIL: Conceptos clave de la gestión de servicios.',
                'estrategias' => '1. Exposición docente 2. Realización y envío de la tarea N° 2.',
                'evidencias' => 'Analiza los marcos de referencia dela Gestión de Servicios.',
                'instrumentos' => 'Rúbrica',
                'semana' => 2
            ],[
                'contenido' => 'Modelo ITIL: Sistema de Valor del Servicio (SVS), Principios Guías de ITIL',
                'estrategias' => '1. Exposición docente 2. Realización y envío de la tarea N° 3.',
                'evidencias' => 'Identifica componentes básicos del Modelo ITIL.en una organización.',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Primer Avance Trabajo Aplicativo: Informe.',
                'estrategias' => '1. Exposición estudiantes 2. Entrega informe 3. Retroalimentación Docente',
                'evidencias' => 'Sustenta el primer Avance Trabajo Aplicativo, demostrando conocimiento.',
                'instrumentos' => 'Rúbrica',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de Unidad I',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba online /presencial',
                'semana' => 5
            ],[
                'contenido' => 'Prácticas de Gestión general. Gestión de la arquitectura, mejora continua, Gestión de seguridad de la información, Gestión del conocimiento medición y reporte.',
                'estrategias' => '1. Exposición docente 2. Realización y envío de la tarea N° 4.',
                'evidencias' => 'Analiza las prácticas de gestión general del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 6
            ],[
                'contenido' => 'Prácticas de Gestión general. Gestión del cambio organizacional, Gestión del portafolio, Gestión de proyectos, Gestión de relaciones, Gestión de riesgos.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 5.',
                'evidencias' => 'Analiza las prácticas de gestión general del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 7
            ],[
                'contenido' => 'Prácticas de Gestión de servicios. Gestión de la disponibilidad Análisis del negocio, Gestión de la capacidad y el desempeño, Control de cambios, Gestión de incidentes.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 6.',
                'evidencias' => 'Analiza las prácticas de gestión de servicios del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Segundo Avance Trabajo Aplicativo: Informe.',
                'estrategias' => '1. Exposición estudiantes 2. Entrega informe 3. Retroalimentación Docente',
                'evidencias' => 'Sustenta el segundo Avance Trabajo Aplicativo, demostrando dominio del tema.',
                'instrumentos' => '',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de Unidad II',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba online /presencial',
                'semana' => 10
            ],[
                'contenido' => 'Prácticas de Gestión de servicios. Gestión de activos de TI. Gestión de eventos y monitoreo, Gestión de problemas, Gestión de liberación,  Gestión de catálogo de servicios, Gestión de configuración del servicio.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 7.',
                'evidencias' => 'Aplica las prácticas de gestión de servicios del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 11
            ],[
                'contenido' => 'Prácticas de Gestión de servicios. Gestión de continuidad del servicio, Diseño del servicio, Service Desk.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 8.',
                'evidencias' => 'Aplica las prácticas de gestión de servicios del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 12
            ],[
                'contenido' => 'Prácticas de Gestión de servicios. Gestión de niveles de servicio, Gestión de solicitudes de servicio,  Validación y pruebas del servicio.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 9.',
                'evidencias' => 'Aplica las prácticas de gestión de servicios del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Prácticas de Gestión Técnica. Gestión de implementación, Gestión de infraestructura y plataformas, Desarrollo y gestión de software.',
                'estrategias' => '1. Exposición docente. 2. Realización y envío de la tarea N° 10.',
                'evidencias' => 'Aplica las prácticas de gestión técnica del Marco ITIL.',
                'instrumentos' => 'Rúbrica',
                'semana' => 14
            ],[
                'contenido' => 'Trabajo Aplicativo Final: Informe.',
                'estrategias' => 'Desarrollo de una prueba de conocimientos.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba online /presencial',
                'semana' => 15
            ],


            #Redes y comunicaciones I
            [
                'contenido' => 'Introducción a la Experiencia Curricular. Conceptos generales de Sistemas de Comunicación. Niveles OSI. Introducción al Proyecto de Responsabilidad Social Universitaria: visita técnica a instituciones de la localidad.',
                'estrategias' => 'Socialización del sílabo Exposición docente Exposición docente de Práctica de laboratorio con PPT.',
                'evidencias' => 'Socialización del sílabo Exposición docente Exposición docente de Práctica de laboratorio con PPT.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 1
            ],[
                'contenido' => 'Capa1. Nivel Físico de las redes. Señales digitales, codificación digital. Modulación digital. Ancho de Banda, tipos de medios de transmisión.',
                'estrategias' => 'Exposición docente Exposición docente de Práctica de Laboratorio. Realización y envío de la tarea N° 1. Desarrollo de laboratorio.',
                'evidencias' => 'Revisión del avance de laboratorio en clases.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 2
            ],[
                'contenido' => 'Capa 1. Nivel Físico, Redes punto a punto. Interfases Interfases y conectores. de comunicaciones RS232. Comunicación asíncrona. Transmisión y Recepción serial de señales codificadas.',
                'estrategias' => 'Exposición docente Lectura de tema bibliográfico: Zigbee y Z-Wave. Nivel Físico. Trabajo Grupal. Realización y envío de la tarea N° 2. Investigación sobre medios de transmisión. Características.',
                'evidencias' => 'Revisión del avance de laboratorio en clases.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 3
            ],[
                'contenido' => 'CAPA 2. Nivel Enlace. Funciones del nivel enlace. Protocolo HDLC. Técnicas de Control de Acceso al medio en Redes multipunto. CSMA/CD, token Ring, anillo doble FDDI, aloha, etc.',
                'estrategias' => 'Exposición docente con PPT Tarea. N° 3. Programación de Transmisión y recepción punto punto, en emulador virtual.',
                'evidencias' => 'Participación de un grupo de alumnos en las actividades del Proyecto de Responsabilidad Social Programación de visita técnica',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de la Unidad I.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta. Sustentación y evaluación del trabajo Grupal de Laboratorio.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta. Trabajo de Laboratorio grupal de 2 personas de transmisión y recepción en Visual C#.',
                'instrumentos' => 'Examen objetivo. Selección múltiple Examen de desarrollo de Laboratorio.',
                'semana' => 5
            ],[
                'contenido' => 'Nivel Enlace. Protocolo HDLC. Protocolos a nivel enlace. Tramado a nivel enlace Control de errores. Topologías de Redes Lan, Man Wan. Lab. Aplicación de comunicación serial con manejo de archivos binarios',
                'estrategias' => 'Exposición docente con PPT (video conferencia). Exposición docente de Práctica de Laboratorio Tarea Nº5. Trabajo Grupal de Aplicación basada en hebras y procesos para el envío y recepción paralela de n archivos binarios',
                'evidencias' => 'Sustentación y evaluación del trabajo Grupal de Laboratorio Revisión del avance de laboratorio en clases.',
                'instrumentos' => 'Lista de Cotejo',
                'semana' => 6
            ],[
                'contenido' => 'Protocolos TCP/IP. Capa Acceso al medio, capa internet, capa Transporte, capa aplicación. Direccionamiento IP. Lab. Trabajo grupal de 2 personas de transmisión y recepción de archivos en procesos paralelos',
                'estrategias' => 'Exposición docente (video conferencia). Lectura de artículo bibliográfico:',
                'evidencias' => 'Presentación y Sustentación de tarea Nº05',
                'instrumentos' => 'Lista de cotejo de Reuniones Virtuales Grupales',
                'semana' => 7
            ],[
                'contenido' => 'Redes de clase A, B, C, D Dirección Ip de red y de subred. SubNeteo, Redes de área local Ethernet.',
                'estrategias' => 'Exposición docente con PPT y exposición de solución de problemas. Tarea Nº6 Uso de Sockets para tx y Rx de tramas.',
                'evidencias' => 'Revisión del avance en el laboratorio,',
                'instrumentos' => 'Rúbrica del Programa en Visual C# de manejo de procesos y hebras para transmisión paralela de tramas.',
                'semana' => 8
            ],[
                'contenido' => 'Ejercicios de Subneteo con direcciones IP. Versión 4.0 Subneteo VLSM.',
                'estrategias' => 'Exposición docente con PPT Exposición docente de Práctica de Laboratorio. Tarea Nº 9 Trabajo Monográfico Grupal de Investigación.',
                'evidencias' => 'Revisión del avance en el laboratorio, Presentación de Tarea nº06 Transmisión y recepción de mensajes de Texto en red. TCP.',
                'instrumentos' => 'Rúbrica de evaluación del trabajo de Investigación Monográfico.',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de la Unidad II.',
                'estrategias' => 'Desarrollo de un examen objetivo. Examen Práctico de solución de problemas.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta de Teoría.',
                'instrumentos' => 'Examen objetivo. Selección múltiple.',
                'semana' => 10
            ],[
                'contenido' => 'Redes Frame Relay. Conmutación de circuitos y conmutación paquetes.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT. Tarea Nº8.',
                'evidencias' => 'Presentación de exposición de Trabajo Monográfico.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación',
                'semana' => 11
            ],[
                'contenido' => 'Técnicas Nat y Pat, para conversión de direcciones IP privadas a públicas. Nivel Red. Datagrama IP. Fragmentación y Reensamblado IP.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT. Tarea Nº7 Cableado de una red. Configuración de la tarjeta de red',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación',
                'semana' => 12
            ],[
                'contenido' => 'Enrutamiento. Protocolos de enrutamiento. Vector distancia, Enrutamiento estático, enrutamiento dinámico. Ospf.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT.',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico. Presentación de la emulación de una red en Packet Tracer (Tarea Nº7)',
                'instrumentos' => 'Rubrica de las Diapositivas de Presentación',
                'semana' => 13
            ],[
                'contenido' => 'WiMax, Redes inalámbricas de banda angosta y banda ancha. Seguridad en Redes Inalámbricas. Voz IP.',
                'estrategias' => 'Exposición docente Exposición Individual/Grupal estudiantil con PPT.',
                'evidencias' => 'Video de exposición Grupal de Trabajo Monográfico.',
                'instrumentos' => 'Rúbrica de Exposición y sustentación del trabajo Monográfico',
                'semana' => 14
            ],[
                'contenido' => 'Evaluación de la Unidad III.',
                'estrategias' => 'Desarrollo de un examen objetivo. Selección múltiple con única respuesta.',
                'evidencias' => 'Examen objetivo de Selección múltiple con única respuesta.',
                'instrumentos' => 'Examen objetivo. Selección múltiple.',
                'semana' => 15
            ],



            #Seguridad de informacion
            [
                'contenido' => 'Presentación Socialización del sílabo Introducción a la seguridad de la información: Conceptos básicos',
                'estrategias' => 'Socialización del sílabo (Presencial/Video conferencia) Exposición docente (Video conferencia) Realización y envío de la tarea N° 1',
                'evidencias' => 'Identifica los elementos y la importancia de la seguridad de la información',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Gestión de la Seguridad de la Información Beneficios Ciclo de Deming Planificar Hacer Alcance',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 2',
                'evidencias' => 'Identifica las ventajas del sistema de Gestión de la Seguridad de la Información',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Gestión de riesgos: Análisis de riesgos Tratamiento de riesgos Revisar y actuar',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 3',
                'evidencias' => 'Exposición estudiantes (Presencial/Video conferencia) Entrega informe Retroalimentación Docente',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Tarea académica',
                'estrategias' => 'Sustenta el primer Avance Trabajo Aplicativo, demostrando conocimiento',
                'evidencias' => 'Aplica la gestión de riesgos en una organización',                        
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Evaluación de Unidad I',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba presencial / online',
                'semana' => 5
            ],[
                'contenido' => 'Serie Norma ISO 27000 ISO 27001: Beneficios Implementación Certificación',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 5',
                'evidencias' => 'Aplica las recomendaciones de la Norma ISO 27001',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Control de Accesos: Principios Categorías de control de Acceso',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 6',
                'evidencias' => 'Aplica los controles de acceso dentro de una organización',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => 'Control de accesos: Acceso lógico, acceso a la infraestructura',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 7',
                'evidencias' => 'Aplica los controles de acceso dentro de una organización',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'Evaluación de Unidad II',
                'estrategias' => 'Exposición estudiantes (Presencial/Video conferencia) Entrega informe Retroalimentación Docente',
                'evidencias' => 'Sustenta el segundo Avance Trabajo Aplicativo, demostrando conocimiento',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Evaluación de Unidad II',
                'estrategias' => 'Desarrollo de una prueba de conocimiento',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba presencial / online',
                'semana' => 10,
            ],[
                'contenido' => 'Exposición estudiantes (Presencial/Video conferencia) Entrega informe Retroalimentación Docente',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 9',
                'evidencias' => 'Aplica los controles de Biometría',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'Criptografía Controles criptográficos Tipos Certificado digital Usos y funcionamiento Ventajas y desventajas Firma digital Ventajas y desventajas Técnicas usadas',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 10',
                'evidencias' => 'Aplica controles de criptografía',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => 'Seguridad en Base de Datos Controles de seguridad',
                'estrategias' => 'Exposición docente (Presencial/Video conferencia) Realización y envío de la tarea N° 11',
                'evidencias' => 'Aplica controles de seguridad de base de datos',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Tarea académica',
                'estrategias' => 'Exposición estudiantes (Presencial/Video conferencia) Entrega informe Retroalimentación Docente',
                'evidencias' => 'Sustenta el Trabajo Aplicativo final, demostrando conocimiento',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Evaluación de Unidad III',
                'estrategias' => '',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita y Prueba practica',
                'semana' => 15
            ],
            
            
            #Marketing digital y Medios sociales
            [
                'contenido' => 'Presentación y socialización del sílabo. • El Marketing Digital. • Principales conceptos y tendencias. • Pautas para el proyecto final.',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 1.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'El consumidor digital. Características y comportamientos. • El Plan de Marketing Digital.',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 2.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Los canales de comunicación digital. • El content marketing.',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 3.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'El social media. • La publicidad en redes sociales. Principales herramientas. • KPI',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 4.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Examen parcial I',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 5
            ],[
                'contenido' => 'Los motores de búsqueda. • Indexación y posicionamiento en motores de búsqueda',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 5.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Marketing en motores de búsqueda. • Estrategias SEO y SEM. • Google Ads',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 6.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => 'La analítica digital. • Google Analytics',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 7.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'La reputación online. • Herramientas de monitoreo.',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 8.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Examen parcial II',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 10
            ],[
                'contenido' => 'El eCommerce. • Principales conceptos y tendencias. • Marco Legal del eCommerce en el Perú',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 9.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'La experiencia de usuario: UX, UI y usabilidad. • Customer Journey Map: Mapa de Experiencia del Cliente',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 10.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => 'Las pasarelas de pago. • CMS (Content Manager System).',
                'estrategias' => '1. Exposición docente (Video conferencia). 2. Lectura del módulo de aprendizaje. 3. Video referente a la tarea. 4. Realización y envío de la tarea N° 11.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Exposición del proyecto final',
                'estrategias' => '1. Exposición/ Presentación del trabajo aplicativo grupal. (Video conferencia) 2. Debate en foro. 3. Chat de retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Examen parcial III',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 15
            ],
            
            #Ingeniería de software II
            [
                'contenido' => 'Presentación y socialización del sílabo. Metodologías tradicionales vs metodologías ágiles. Por qué necesitamos nuevas formas de gestionar proyectos de innovación. Introducción a las metodologías ágiles. ¿Cuándo aplicar metodologías ágiles?',
                'estrategias' => '1. Socialización del sílabo (Video conferencia). 2. Exposición docente (vídeo conferencia). 3. Lectura de módulo de aprendizaje. 4. Video referente a la tarea. 5. Ejecución y envío de la tarea N˚ 1.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Introducción a Scrum. Historia de Scrum y por qué elegir Scrum. Scrum como marco de trabajo para el desarrollo de proyectos ágiles. Los principios, aspectos, fases y procesos de Scrum. Flujo de trabajo Scrum.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 2.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Roles y artefactos de Scrum. Principales roles de Scrum. Dueño del producto o product owner. Cómo crear historias de usuario. Cómo dividir las historias de usuario en tareas. El rol de scrum master. Errores comunes que comete un scrum master. Stakeholder. Principales artefactos de Scrum. Product backlog. ¿Qué es un sprint? Sprint backlog. Product increment. Tareas de product owner en el sprint.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 3.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Exposición del trabajo de investigación. Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => '1. Exposición / Presentación del trabajo aplicativo grupal. (Video conferencia) 2. Debate en foro. 3. Chat de retroalimentación.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Examen parcial I',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 5
            ],[
                'contenido' => 'Fase de inicio. Creación de la visión del proyecto e identificación del SCRUM master y los socios. Formación del equipo SCRUM y desarrollo de las épicas. Creación de la lista priorizada del pendiente del producto y planificación del lanzamiento.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 4.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Fase de planificación y estimación. Crear historias de usuario, estimar historias de usuario. Comprometer historias de usuario, identificar tareas, estimar tareas, crear el sprint backlog. Comprometer.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 5.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => 'Fase de implementación. Creación de entregables, realizar el daily standup y refinar el backlog priorizado del producto. Demostrar y validar el sprint y retrospectiva del sprint. Fase de lanzamiento. Envío de entregables, retrospectiva del proyecto. Glosario. Taller de Scrum.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 6.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'Exposición del trabajo de investigación. Presentación, sustentación y defensa del trabajo aplicativo grupal',
                'estrategias' => 'Exposición / Presentación del trabajo aplicativo grupal (Video conferencia) Debate en foro Chat de retroalimentación',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Examen parcial II',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 10
            ],[
                'contenido' => 'Pruebas de software. Tipos de pruebas de software. Pruebas de volumen, rendimiento y estrés. Métricas utilizadas en pruebas de carga. Herramientas para aplicar pruebas. Introducción a JMeter. ¿Qué son las pruebas de rendimiento? Introducción a JMeter. Conceptos generales.',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 7.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'Configuración de Jmeter Configurando un plan de pruebas Grabación de pruebas Análisis de resultados',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 8.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => 'Tipos de prueba con Jmeter Prueba de rendimiento de una página web Prueba de rendimiento de un servicio web Análisis de resultados',
                'estrategias' => '1. Exposición docente (vídeo conferencia). 2. Lectura de módulo de aprendizaje. 3. Video referente a la tarea. 4. Ejecución y envío de la tarea N˚ 9.',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Exposición del trabajo de investigación. Presentación, sustentación y defensa del trabajo aplicativo grupal.',
                'estrategias' => 'Exposición / Presentación del trabajo aplicativo grupal (Video conferencia) Debate en foro Chat de retroalimentación',
                'evidencias' => 'Informe',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Examen parcial III',
                'estrategias' => 'Desarrollo de una prueba de conocimientos',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita',
                'semana' => 15
            ],
            
            
            #Inteligencia de negocios
            [
                'contenido' => 'Sistemas de Soporte de Decisiones. Introducción, Tipos de Sistemas. Laboratorio 1: Visión General del Informe de tipos de sistema de información.',
                'estrategias' => '1. Socialización del Sílabo. (video conferencia) 2. Video conferencia con la exposición docente con PPT. 3. Realización y envío de tarea.',
                'evidencias' => 'Informe de tipos de sistema de información',
                'instrumentos' => 'Rubrica',
                'semana' => 1
            ],[
                'contenido' => 'Data Warehouse, Construcción, Definición del Proceso Metodológico, Conociendo las Bases de Un Sistema Transaccional, Laboratorio Construyendo un DataWarehouse 2.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Información de componentes iniciales de un data warehouse.',
                'instrumentos' => 'Rubrica',
                'semana' => 2
            ],[
                'contenido' => 'Identificación de Requerimientos Estratégicos, Parte I Laboratorio 5. Práctica Calificada.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Requerimientos estratégicos',
                'instrumentos' => 'Rubrica',
                'semana' => 3
            ],[
                'contenido' => 'Identificación de Requerimientos Estratégicos, Parte II Laboratorio 5. Práctica Calificada.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Análisis Dimensional Inicial',
                'instrumentos' => 'Rubrica',
                'semana' => 4
            ],[
                'contenido' => 'Primer Examen Parcial ',
                'estrategias' => 'Desarrollo de prueba de conocimientos.',
                'evidencias' => '',
                'instrumentos' => 'Prueba escrita y Prueba practica',
                'semana' => 5
            ],[
                'contenido' => 'Análisis y Diseño Dimensional. Laboratorio 7 Construyendo un DataWarehouse 5',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Hoja de Gesión Cuadro Medidas y Dimensiones.',
                'instrumentos' => 'Rubrica',
                'semana' => 6
            ],[
                'contenido' => 'Diseño Dimensional Avanzado Laboratorio 8 Realizando Mapeo del Modelo Transaccional al Modelo Dimensional.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'EL Grano, Implementand o el DataWarehous e..',
                'instrumentos' => 'Rubrica',
                'semana' => 7
            ],[
                'contenido' => 'Poblando un DataMart (ETL) Validando calidad de Data. Laboratorio 9. Realizando el Poblamiento de una Transaccional a la BD Multidimensional.',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Diseño de Integración de Datos',
                'instrumentos' => 'Rubrica',
                'semana' => 8
            ],[
                'contenido' => 'Presentación de avance de Proyecto Final',
                'estrategias' => '1. Exposición de proyectos de estudiantes (video conferencia)',
                'evidencias' => 'Informe de avance de proyecto',
                'instrumentos' => 'Rubrica',
                'semana' => 9
            ],[
                'contenido' => 'Segundo Examen Parcial',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita y Prueba practica',
                'semana' => 10
            ],[
                'contenido' => 'Construcción de Cubos OLAP Laboratorio 10. Construcción de Cubos OLAP',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Prepara Cubos',
                'instrumentos' => 'Rubrica',
                'semana' => 11
            ],[
                'contenido' => 'Implementando Aplicaciones BI- 1',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Desarrolla aplicaciones BI- Implementa KPI',
                'instrumentos' => 'Rubrica',
                'semana' => 12
            ],[
                'contenido' => 'Implementando Aplicaciones BI- 2',
                'estrategias' => '1. Exposición del docente (video conferencia) 2. Lectura de módulo de aprendizaje. 3. Realización y envío de tarea. 4. Resolución de ejercicio práctico.',
                'evidencias' => 'Desarrolla aplicaciones BI. Implementa Visualizadores',
                'instrumentos' => 'Rubrica',
                'semana' => 13
            ],[
                'contenido' => 'Presentación de Proyecto Final.',
                'estrategias' => '1. Exposición de proyecto por los estudiantes (video conferencia)',
                'evidencias' => 'Informe de proyecto final',
                'instrumentos' => 'Rubrica',
                'semana' => 14
            ],[
                'contenido' => 'Tercer Examen Parcial',
                'estrategias' => '1. Exposición de proyecto por los estudiantes (video conferencia)',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Prueba escrita y Prueba practica',
                'semana' => 15
            ],


            #Internet de las cosas
            [
                'contenido' => '1. Introducción al internet de las cosas',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '1. Informe digital de trabajo aplicativo.',
                'instrumentos' => '1. Escala Valorativa',
                'semana' => 1
            ],[
                'contenido' => '2. VPS',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '2. Informe digital del tema de investigació n.',
                'instrumentos' => '1. Escala Valorativa',
                'semana' => 2
            ],[
                'contenido' => '3. Dominio y hosting',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '3. Informe digital de trabajo aplicativo',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes',
                'semana' => 3
            ],[
                'contenido' => '4. Taller de servicios en la nube.',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '4. Informe digital del trabajo de investigació n.',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes',
                'semana' => 4
            ],[
                'contenido' => '5. Examen de I Unidad',
                'estrategias' => 'Se retroalimenta y se demuestra lo aprendido haciendo uso de mapas mentales, mapas conceptuales',
                'evidencias' => '5. Prueba.',
                'instrumentos' => '3. Prueba Escrita Objetiva Virtual',
                'semana' => 5
            ],[
                'contenido' => '1. MQQT',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '1. Informe digital de trabajo de investigación',
                'instrumentos' => '1. Escala Valorativa.',
                'semana' => 6
            ],[
                'contenido' => '2. EMQX.',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '2. Informe digital del trabajo de investigació n.',
                'instrumentos' => '1. Escala Valorativa.',
                'semana' => 7
            ],[
                'contenido' => '3. Frameworks',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '3. Informe digital de trabajo aplicativo',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes.',
                'semana' => 8
            ],[
                'contenido' => '4. Firmware IoT y RSU',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '4. Informe digital del trabajo de investigación',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes.',
                'semana' => 9
            ],[
                'contenido' => '5. Examen de II Unidad.',
                'estrategias' => 'Se retroalimenta y se demuestra lo aprendido haciendo uso de mapas mentales, mapas conceptuales',
                'evidencias' => '5. Prueba.',
                'instrumentos' => '3. Prueba Escrita Objetiva Virtual.',
                'semana' => 10
            ],[
                'contenido' => '1. Requerimie ntos de Seguridad IoT',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '1. Informe digital del avance 01.',
                'instrumentos' => '1. Escala Valorativa',
                'semana' => 11
            ],[
                'contenido' => '2. Superficie de Ataque de los dispositivos IoT',
                'estrategias' => 'Activa la atención estableciendo el propósito para incrementar el interés y la motivación',
                'evidencias' => '2. Informe digital del avance 02.',
                'instrumentos' => '1. Escala Valorativa',
                'semana' => 12 
            ],[
                'contenido' => '3. Modelos IoT.',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '3. Informe digital del avance 03.',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes y Exposición.',
                'semana' => 13
            ],[
                'contenido' => '4. Aplicaciones IoT.',
                'estrategias' => 'Procesa la nueva información con organizadores gráficos, paneles de discusión',
                'evidencias' => '4. Informe digital total del proyecto real.',
                'instrumentos' => '2. Rúbrica de Evaluación de Informes y Exposición.',
                'semana' => 14
            ],[
                'contenido' => '5. Pre Sustentació n del Proyecto y RSU.',
                'estrategias' => 'Se retroalimenta y se demuestra lo aprendido haciendo uso de mapas mentales, mapas conceptuales',
                'evidencias' => '5. Prueba',
                'instrumentos' => '3. Prueba Escrita Objetiva Virtual.',
                'semana' => 15
            ],


            #ELECTIVOS
            #PRIMER AÑO
            #Tranformación digital
            [
                'contenido' => 'El Contexto Mundial',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Innovación Tecnológica',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos, evaluación y guía de aprendizaje) en la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 2
            ],[
                'contenido' => 'Innovación Tecnológica',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Pensamiento de Diseño',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio y envío de la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 4
            ],[
                'contenido' => 'Examen de Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Examen',
                'semana' => 5
            ],[
                'contenido' => 'Agilidad',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Tecnología Digital',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos,',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 7
            ],[
                'contenido' => 'Experiencia Digital',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica ',
                'semana' => 8
            ],[
                'contenido' => 'Modelo de Negocio Digital',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio y envío de la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica ',
                'semana' => 9
            ],[
                'contenido' => 'Examen de Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 10
            ],[
                'contenido' => 'Evolución Digital',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Fundamentos de la Transformación Digital',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos, evaluación y guía de aprendizaje) en la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 12
            ],[
                'contenido' => 'Niveles de Transformación Digital',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Hoja de Ruta de la Transformación Digital',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio y envío de la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 14
            ],[
                'contenido' => 'Examen de Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 15
            ],


            #Negocios electronicos
            [
                'contenido' => 'Fundamentos de los Negocios Electrónicos',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Fundamentos de los Negocios Electrónicos',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos,',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 2
            ],[
                'contenido' => 'Fundamentos de los Negocios Electrónicos',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Fundamentos de los Negocios Electrónicos',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio y envío de la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 4
            ],[
                'contenido' => 'Examen de unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 5
            ],[
                'contenido' => 'Gestión Electrónica de la Cadena de Suministro',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Gestión Electrónica de la Cadena de Suministro',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos, evaluación y guía de aprendizaje) en la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 7
            ],[
                'contenido' => 'Gestión Electrónica de la Relación con el Cliente.',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Gestión Electrónica de la Relación con el Cliente.',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio envío de y la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 9
            ],[
                'contenido' => 'Examen Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 10
            ],[
                'contenido' => 'Plan de Negocios Electrónico',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Plan de Negocios Electrónico',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos, evaluación y guía de aprendizaje) en la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 12
            ],[
                'contenido' => 'Plan de NegociosElectrónico',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Plan de NegociosElectrónico',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio envío de y la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 14
            ],[
                'contenido' => 'Examen de Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 15
            ],


            #Arquitectura basada en microservicios
            [
                'contenido' => '1. Antecedentes y arquitecturas de software',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Explica las bases de la arquitectura de software basada en microservicios',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 1
            ],[
                'contenido' => '2. Arquitectura de software basada en microservicios',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Explica las bases de la arquitectura de software basada en microservicios',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 2
            ],[
                'contenido' => '3. Creación, registro y descubrimiento de microservicios',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Explica la importancia del uso de microservicios',
                'instrumentos' => '2. Rúbrica de evaluación',
                'semana' => 3
            ],[
                'contenido' => '4. Comunicación en microservicios',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Explica la importancia del uso de microservicios',
                'instrumentos' => '3. Guía de observación.',
                'semana' => 4
            ],[
                'contenido' => '5. Exposición de proyecto integrador',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '3. Identifica los elementos de implementación para soluciones basadas en microservicios',
                'instrumentos' => '4. Prueba digital.',
                'semana' => 5
            ],[
                'contenido' => '1. Configuración de microservicios en la nube.',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Hace uso adecuado de la nube para configurar los microservicios.',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 6
            ],[
                'contenido' => '2. Autenticación y autorización.',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Hace uso adecuado de la nube para configurar los microservicios.',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 7
            ],[
                'contenido' => '3. Balanceo y enrutamiento',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Implementa de modo correcto autenticación y autorización en microservicios',
                'instrumentos' => '2. Rúbrica de evaluación.',
                'semana' => 8
            ],[
                'contenido' => '4. Tolerancia a fallos.',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Implementa de modo correcto autenticación y autorización en microservicios',
                'instrumentos' => '3. Guía de observación.',
                'semana' => 9
            ],[
                'contenido' => '5. Exposición de proyecto integrador',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '3. Identifica los elementos de implementación para soluciones basadas en microservicios',
                'instrumentos' => '4. Prueba digital.',
                'semana' => 10
            ],[
                'contenido' => '1. Despliegue de microservicios',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Efectúa el despliegue de microservicios',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 11
            ],[
                'contenido' => '2. Contenedores',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Efectúa el despliegue de microservicios',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 12
            ],[
                'contenido' => '3. Orquestadores',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Hace uso adecuado de contenedores y orquestadores',
                'instrumentos' => '2. Rúbrica de evaluación.',
                'semana' => 13
            ],[
                'contenido' => '4. Pruebas de microservicios',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Hace uso adecuado de contenedores y orquestadores',
                'instrumentos' => '3. Guía de observación.',
                'semana' => 14
            ],[
                'contenido' => '5. Exposición de proyecto integrador',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '3. Identifica los elementos de implementación para soluciones basadas en microservicios',
                'instrumentos' => '4. Prueba digital.',
                'semana' => 15
            ],


            #SEGUNDO AÑO
            #Tranformación digital
            [
                'contenido' => 'El Contexto Mundial',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Innovación Tecnológica',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos, evaluación y guía de aprendizaje) en la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 2
            ],[
                'contenido' => 'Innovación Tecnológica',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Pensamiento de Diseño',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio y envío de la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 4
            ],[
                'contenido' => 'Examen de Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Prueba',
                'instrumentos' => 'Examen',
                'semana' => 5
            ],[
                'contenido' => 'Agilidad',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Tecnología Digital',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos,',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 7
            ],[
                'contenido' => 'Experiencia Digital',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica ',
                'semana' => 8
            ],[
                'contenido' => 'Modelo de Negocio Digital',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio y envío de la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica ',
                'semana' => 9
            ],[
                'contenido' => 'Examen de Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 10
            ],[
                'contenido' => 'Evolución Digital',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Fundamentos de la Transformación Digital',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos, evaluación y guía de aprendizaje) en la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 12
            ],[
                'contenido' => 'Niveles de Transformación Digital',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Hoja de Ruta de la Transformación Digital',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio y envío de la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 14
            ],[
                'contenido' => 'Examen de Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 15
            ],


            #Negocios electronicos
            [
                'contenido' => 'Fundamentos de los Negocios Electrónicos',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 1
            ],[
                'contenido' => 'Fundamentos de los Negocios Electrónicos',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos,',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 2
            ],[
                'contenido' => 'Fundamentos de los Negocios Electrónicos',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 3
            ],[
                'contenido' => 'Fundamentos de los Negocios Electrónicos',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio y envío de la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 4
            ],[
                'contenido' => 'Examen de unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 5
            ],[
                'contenido' => 'Gestión Electrónica de la Cadena de Suministro',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 6
            ],[
                'contenido' => 'Gestión Electrónica de la Cadena de Suministro',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos, evaluación y guía de aprendizaje) en la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 7
            ],[
                'contenido' => 'Gestión Electrónica de la Relación con el Cliente.',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 8
            ],[
                'contenido' => 'Gestión Electrónica de la Relación con el Cliente.',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio envío de y la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 9
            ],[
                'contenido' => 'Examen Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 10
            ],[
                'contenido' => 'Plan de Negocios Electrónico',
                'estrategias' => '1. Videoconferencia para la explicación de la Agenda.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 11
            ],[
                'contenido' => 'Plan de Negocios Electrónico',
                'estrategias' => '2. Revisión de los recursos (materiales, anexos, evaluación y guía de aprendizaje) en la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Escala Valorativa',
                'semana' => 12
            ],[
                'contenido' => 'Plan de NegociosElectrónico',
                'estrategias' => '3. Videoconferencia para la explicación de la Sesión utilizando los materiales (presentación, vídeos) y anexos respectivos.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 13
            ],[
                'contenido' => 'Plan de NegociosElectrónico',
                'estrategias' => '4. Desarrollo de la Guía de Laboratorio envío de y la Práctica Calificada a la plataforma del aula virtual.',
                'evidencias' => 'Foro',
                'instrumentos' => 'Rúbrica',
                'semana' => 14
            ],[
                'contenido' => 'Examen de Unidad',
                'estrategias' => '5. Realización del Foro Académico sobre los temas tratados en clase en la plataforma del aula virtual.',
                'evidencias' => 'Práctica Calificada',
                'instrumentos' => 'Examen',
                'semana' => 15
            ],


            #Arquitectura basada en microservicios
            [
                'contenido' => '1. Antecedentes y arquitecturas de software',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Explica las bases de la arquitectura de software basada en microservicios',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 1
            ],[
                'contenido' => '2. Arquitectura de software basada en microservicios',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Explica las bases de la arquitectura de software basada en microservicios',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 2
            ],[
                'contenido' => '3. Creación, registro y descubrimiento de microservicios',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Explica la importancia del uso de microservicios',
                'instrumentos' => '2. Rúbrica de evaluación',
                'semana' => 3
            ],[
                'contenido' => '4. Comunicación en microservicios',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Explica la importancia del uso de microservicios',
                'instrumentos' => '3. Guía de observación.',
                'semana' => 4
            ],[
                'contenido' => '5. Exposición de proyecto integrador',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '3. Identifica los elementos de implementación para soluciones basadas en microservicios',
                'instrumentos' => '4. Prueba digital.',
                'semana' => 5
            ],[
                'contenido' => '1. Configuración de microservicios en la nube.',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Hace uso adecuado de la nube para configurar los microservicios.',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 6
            ],[
                'contenido' => '2. Autenticación y autorización.',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Hace uso adecuado de la nube para configurar los microservicios.',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 7
            ],[
                'contenido' => '3. Balanceo y enrutamiento',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Implementa de modo correcto autenticación y autorización en microservicios',
                'instrumentos' => '2. Rúbrica de evaluación.',
                'semana' => 8
            ],[
                'contenido' => '4. Tolerancia a fallos.',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Implementa de modo correcto autenticación y autorización en microservicios',
                'instrumentos' => '3. Guía de observación.',
                'semana' => 9
            ],[
                'contenido' => '5. Exposición de proyecto integrador',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '3. Identifica los elementos de implementación para soluciones basadas en microservicios',
                'instrumentos' => '4. Prueba digital.',
                'semana' => 10
            ],[
                'contenido' => '1. Despliegue de microservicios',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Efectúa el despliegue de microservicios',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 11
            ],[
                'contenido' => '2. Contenedores',
                'estrategias' => 'Expositivo Problematizador Resolución de problemas',
                'evidencias' => '1. Efectúa el despliegue de microservicios',
                'instrumentos' => '1. Lista de cotejo',
                'semana' => 12
            ],[
                'contenido' => '3. Orquestadores',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Hace uso adecuado de contenedores y orquestadores',
                'instrumentos' => '2. Rúbrica de evaluación.',
                'semana' => 13
            ],[
                'contenido' => '4. Pruebas de microservicios',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '2. Hace uso adecuado de contenedores y orquestadores',
                'instrumentos' => '3. Guía de observación.',
                'semana' => 14
            ],[
                'contenido' => '5. Exposición de proyecto integrador',
                'estrategias' => 'Conferencia Aprendizaje basado en problemas. Estudio de casos.',
                'evidencias' => '3. Identifica los elementos de implementación para soluciones basadas en microservicios',
                'instrumentos' => '4. Prueba digital.',
                'semana' => 15
            ],
        ];
        Programacion::insert($Programacion);
    }
}
