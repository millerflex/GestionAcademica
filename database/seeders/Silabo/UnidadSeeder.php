<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Unidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Unidad = [
            #Arquitectura y organizacion de computadoras
            [
                'unidad' => 1,
                'titulo' => 'EL MICROPROCESADOR Y LA RAM',
                'capacidades' => 'CT 4.2 Identifica y organiza los componentes de la arquitectura de un ordenador utilizando una guía de buenas prácticas',
                'resultados' => 'Explica y conoce las partes de un microprocesador y su iteración para el control del procesamiento. Describe y realiza el procesamiento y acceso a la memoria del microprocesador con la ejecución de instrucciones a bajo nivel usando assembler en un computador.',
            ],[
                'unidad' => 2,
                'titulo' => 'EL COMPUTADOR',
                'capacidades' => 'CT 4.3 Administra los recursos de un ordenador utilizando un sistema operativo libre y/o propietario.',
                'resultados' => 'Explica modelos de diseño de arquitectura de computadoras con la aplicación de procedimientos de planificación de recursos del computador. Diseña y desarrolla programas de bajo nivel de control de periféricos aplicando programación de asembler basada en interrupciones.',
            ],[
                'unidad' => 3,
                'titulo' => 'ENTRADAS Y SALIDAS DEL MICROPROCESADOR',
                'capacidades' => 'CT. 4.4 Diseña e implementa diversas plataformas tecnológicas libres y/o propietarias.',
                'resultados' => 'Diseña Sistemas Digitales con programación embebida en microcontrolador interactuando con su memoria y sus periféricos en un entorno básico de arquitectura de ordenador.',
            ],


            #Ingenieria de datos I
            [
                'unidad' => 1,
                'titulo' => 'MODELADO DEL NEGOCIO',
                'capacidades' => 'CT1:Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Aplica la metodología orientada a objetos al análisis y diseño de soluciones informáticas. Desarrolla el modelado de artefactos de un sistema. Utiliza herramientas de la metodología RUP, para el desarrollo del modelado de sistemas.',
            ],[
                'unidad' => 2,
                'titulo' => 'MODELADO DE DATOS',
                'capacidades' => 'CT1:Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Diseña e implementa base de datos a partir del modelado de datos. Analiza y diseña base de datos con énfasis en la integridad de datos.',
            ],[
                'unidad' => 3,
                'titulo' => 'PROCEDIMIENTOS EN SQL SERVER',
                'capacidades' => 'CT2: Diseña, implementa y administra la estructura y funcionalidad de los sistemas de bases de datos utilizando diversos asistentes y/o gestores informáticos.',
                'resultados' => 'Desarrolla operaciones con bases de datos utilizando script y el lenguaje T-SQL. Implementa funciones escalares y de tablas de múltiples sentencias.',
            ],


            #Tecnologias web
            [
                'unidad' => 1,
                'titulo' => 'TECNOLOGIAS WEB',
                'capacidades' => 'CT1.1 Alinea, planifica y organiza la gestión de tecnologías de la información y comunicació n de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => '1.Comprende el uso de las tecnologías web. 2.Hace uso de Laravel para la creación de páginas web.',
            ],[
                'unidad' => 2,
                'titulo' => 'MODELOS WEB',
                'capacidades' => 'CT1.2 Construye, adquiere e implanta la gestión de tecnologías de la información y comunicació n de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => '1. Comprende el uso de las tecnologías web backend. 2. Hace uso de Laravel para la creación de páginas web.',
            ],[
                'unidad' => 3,
                'titulo' => 'TECNOLOGIAS EN LA NUBE',
                'capacidades' => 'CT1.3 Entrega, da servicio y soporte a la gestión de tecnologías de la información y comunicació n de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => '1.Explica el uso de tecnologías web SPA 2. Hace uso de Angular para la creación de páginas web.',
            ],


            #Sistemas de informacion
            [
                'unidad' => 1,
                'titulo' => 'ROL DE LOS SISTEMAS DE INFORMACIÓN EN LAS ORGANIZACIONES ',
                'capacidades' => 'Explica el concepto de sistemas de información y conoce las diferentes plataformas modernas de tecnologías de información y como estas ayudan a gestionar y mejorar la toma de decisiones en las organizaciones.',
                'resultados' => 'Diferencia los diferentes tipos y usos de sistemas de información. Explica los diferentes componentes de infraestructuras tecnológicas que existen en las organizaciones.',
            ],[
                'unidad' => 2,
                'titulo' => 'SOLUCIONES Y APLICACIONES MODERNAS PARA EMPRESAS',
                'capacidades' => 'Reconoce cómo se utilizan los sistemas de información para respaldar las operaciones de la organización, respaldar las decisiones gerenciales y la obtención de una ventaja estratégica.',
                'resultados' => 'Analiza herramientas de gestión con el uso de sistemas de información, para el apoyo de toma de decisiones en las organizaciones. Reconoce la importancia de la información en las organizaciones.',
            ],[
                'unidad' => 3,
                'titulo' => 'IMPLEMENTACIÓN DE SISTEMA',
                'capacidades' => 'El estudiante plantea soluciones empresariales para las organizaciones.',
                'resultados' => 'Al finalizar la unidad, el estudiante será capaz de describir las etapas de implementación de sistemas.',
            ],


            #Igenieria de datos II
            [
                'unidad' => 1,
                'titulo' => 'PROCEDIMIENTOS TRIGGERS',
                'capacidades' => 'CT1: Gestiona los procesos de la integración y alcance de la dirección de proyectos de tecnologías de la información y comunicación utilizando una guía estandar de buenas prácticas.',
                'resultados' => 'Implementa y desarrolla diversas operaciones a través de script con la base de datos.',
            ],[
                'unidad' => 2,
                'titulo' => 'PROGRAMACION AVANZADA EN T-SQL',
                'capacidades' => 'CT2: Analiza, diseña, construye y mantiene aplicaciones informáticas con criterios de seguridad, calidad y eficiencia.',
                'resultados' => 'Analiza requerimientos de información y los transforma en informes orientados a fortalecer la toma de decisiones. Gestiona y administra una base de datos.',
            ],[
                'unidad' => 3,
                'titulo' => 'IMPLEMENTACIÓN DE VISUAL BASIC',
                'capacidades' => 'CT3: Diseña, implementa y administra la estructura y funcionalidad de los sistemas de bases de datos utilizando diversos asistentes y/o gestores informáticos.',
                'resultados' => 'Aplica la metodología orientada a objetos al análisis y diseño de soluciones informáticas. Desarrolla el análisis dimensional de un sistema de inteligencia de negocios.',
            ],
            

            #Sistemas operativos
            [
                'unidad' => 1,
                'titulo' => 'COMPONENTES DE UN SISTEMAS OPERATIVOS',
                'capacidades' => 'CT 4.3 Administra los recursos de un ordenador utilizando un sistema operativo libre y/o propietario.',
                'resultados' => 'Explica y conoce los Conceptos básicos, estructura, componentes del sistema operativo, para realizar correctamente la activación del sistema operativo y el uso de servicios de llamada al S.O.',
            ],[
                'unidad' => 2,
                'titulo' => 'PLANIFICACION DE RECURSOS.',
                'capacidades' => 'CT 4.3 Administra los recursos de un ordenador utilizando un sistema operativo libre y/o propietario',
                'resultados' => 'Conoce y describe las técnicas de planificación de procesos y manejo de concurrencias e interbloqueo en un sistema operativo, para administrar correctamente los procesos de ejecución. Instala y administra un sistema operativo de servidor, a través de los comandos Linux, en una distribución libre sobre una maquina Virtual.',
            ],[
                'unidad' => 3,
                'titulo' => 'GESTION DE MEMORIA, E/S Y SEGURIDAD.',
                'capacidades' => 'CT. 4.4 Diseña e implementa diversas plataformas tecnológicas libres y/o propietarias.',
                'resultados' => 'Conoce y aplica los conceptos de Virtualización para gestionar diversos sistemas operativos sobre un computador. Gestiona los diferentes sistemas de archivos para administrar la capacidad de almacenamiento y el manejo de la seguridad en un sistema operativo.',
            ],


            #Ingenieria de requerimientos
            [
                'unidad' => 1,
                'titulo' => 'INTRODUCCIÓN A LA INGENIERÍA DE REQUERIMIENTOS.',
                'capacidades' => 'Explica los conceptos fundamentales de ingeniería de software e ingeniería de requisitos.',
                'resultados' => 'Explica el proceso de desarrollo de software y los diferentes tipos de desarrollo. Analiza el funcionamiento del negocio y reconoce cada uno de los elementos para la elaboración de un modelo.',
            ],[
                'unidad' => 2,
                'titulo' => 'OBTENCIÓN DE LOS REQUERIMIENTOS.',
                'capacidades' => 'Explica al detalle cada una de las actividades en el desarrollo de requisitos.',
                'resultados' => 'Reconoce la importancia de los requerimientos en el inicio del desarrollo de software. Explica de forma general las diferentes actividades del desarrollo de requisitos.',
            ],[
                'unidad' => 3,
                'titulo' => 'PROCESO VALIDACIÓN DE LOS REQUERMIENTOS.',
                'capacidades' => 'Explica las actividades realizadas en los requisitos y las valida y estima los costos para el desarrollo de un proyecto de software.',
                'resultados' => 'Reconoce la importancia de la estimación de costos en la elaboración de un proyecto de software.',
            ],


            #Sistemas inteligentes
            [
                'unidad' => 1,
                'titulo' => 'TECNOLOGIAS DE INFORMACION.',
                'capacidades' => 'CT2.1 Gestiona los procesos de la integración y alcance de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. CT2.2 Gestiona los procesos de tiempos y costos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas.',
                'resultados' => 'Gestiona los procesos de la integración y alcance de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. Gestiona los procesos de tiempos y costos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas.',
            ],[
                'unidad' => 2,
                'titulo' => 'DETECCION DE IMAGENES.',
                'capacidades' => 'CT2.3 Gestiona los procesos de calidad y recursos humanos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. CT2.4 Gestiona los procesos de comunicaciones y riesgos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. CT2.5 Gestiona los procesos de adquisiciones e interesados de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas.',
                'resultados' => 'Gestiona los procesos de calidad y recursos humanos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. Gestiona los procesos de comunicaciones y riesgos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. Gestiona los procesos de adquisiciones e interesados de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas.',
            ],[
                'unidad' => 3,
                'titulo' => 'APLICACIONES INFORMATICAS.',
                'capacidades' => 'CT3.1 Conoce y aplica procedimientos algorítmicos utilizando tipos y estructuras de datos adecuadas en la solución de problemas computacionales. CT3.2 Analiza, diseña, construye y mantiene aplicaciones informáticas con criterios de seguridad, calidad y eficiencia. CT3.3 Diseña, implementa y administra la estructura y funcionalidad de los sistemas de bases de datos utilizando diversos asistentes y/o gestores informáticos.',
                'resultados' => 'Conoce y aplica procedimientos algorítmicos utilizando tipos y estructuras de datos adecuadas en la solución de problemas computacionales. Analiza, diseña, construye y mantiene aplicaciones informáticas con criterios de seguridad, calidad y eficiencia. Diseña, implementa y administra la estructura y funcionalidad de los sistemas de bases de datos utilizando diversos asistentes y/o gestores informáticos',
            ],


            #Ingenieria de software I
            [
                'unidad' => 1,
                'titulo' => 'RATIONAL UNIFIED PROCESS (RUP) Y MODELO DEL NEGOCIO',
                'capacidades' => 'Reconoce los pasos de la metodología RUP en el desarrollo de software y diagramas del modelo del negocio.',
                'resultados' => 'Reconoce los pasos de la metodología RUP en el desarrollo de software y diagramas del modelo del negocio.',
            ],[
                'unidad' => 2,
                'titulo' => 'MODELO DE REQUERIMIENTOS',
                'capacidades' => 'Identifica y documenta los requerimientos de software, estima el tiempo de desarrollo, calcula la viabilidad económica e identifica riesgos, utilizando modelos, estándares y técnicas vigentes de la ingeniería del software.',
                'resultados' => 'Describe el modelo de requerimientos mostrando conocimiento. Analiza e interpreta la estimación del tiempo de desarrollo de software mostrando coherencia.',
            ],[
                'unidad' => 3,
                'titulo' => 'MODELO DE ANALISIS, DISEÑO, DESARROLLO, PRUEBAS E IMPLEMENTACION',
                'capacidades' => 'Analiza, diseña, construye, prueba, implementa y mantiene aplicaciones informáticas con criterios de seguridad, calidad y eficiencia.',
                'resultados' => 'Describe el modelo de análisis con fundamento. Analiza e interpreta el modelo de diseño',
            ],


            #Metodologia de la investigacion
            [
                'unidad' => 1,
                'titulo' => 'PLAN ESTRATEGICO DE INVESTIGACION',
                'capacidades' => 'CT5.1 Realiza investigaciones individuales o interdisciplinaria s con fondos concursables públicos o privados para proporcionar nuevos métodos, materiales o herramientas en el desarrollo de proyectos tecnológicos',
                'resultados' => '1. Describe los conceptos básicos de la investigación. 2. Identificación de problemas de investigación. 3. Explica los tipos de investigación 4. Explica los antecedentes que sustentan la investigación.',
            ],[
                'unidad' => 2,
                'titulo' => 'PROTOCOLOS DE INVESTIGACION',
                'capacidades' => 'CT5.1 Realiza investigaciones individuales o interdisciplinaria s con fondos concursables públicos o privados para proporcionar nuevos métodos, materiales o herramientas en el desarrollo de proyectos tecnológicos',
                'resultados' => '1. Explica el fundamento teórico relacionado al tema de investigación. 2. Reconoce e identifica las herramientas de control de plagio.',
            ],[
                'unidad' => 3,
                'titulo' => 'ANALISIS DE DATOS',
                'capacidades' => 'CT5.4 Conduce estudios de problemas complejos usando conocimientos basados en los métodos y componentes de la investigación científica',
                'resultados' => 'Desarrolla operaciones con bases de datos utilizando script y el lenguaje T-SQL. Implementa funciones escalares y de tablas de múltiples sentencias.',
            ],
            #30

            #Planeamiento estrategico de la informacion
            [
                'unidad' => 1,
                'titulo' => 'PLAN DE RESPONSABILIDAD SOCIAL',
                'capacidades' => 'Describe las fases de la metodología para la elaboración de un Plan Estratégico de la Información',
                'resultados' => 'Propuesta de un plan de trabajo para el desarrollo de un PEI',
            ],[
                'unidad' => 2,
                'titulo' => 'PLAN ESTRATEGICO',
                'capacidades' => 'Identifica las necesidades de información en una organización',
                'resultados' => 'Definición de requerimientos de información. Identificación y propuesta de los S.I.',
            ],[
                'unidad' => 3,
                'titulo' => 'ARQUITECTURA DE TI',
                'capacidades' => 'Propone un modelo de arquitectura tecnológica como soporte a los SI',
                'resultados' => 'Propuesta de arquitectura tecnológica.  Propuesta de Planes de contingencia. Propuesta de Cuadro de Mando.',
            ],


            #Gestion de servicio de TIC
            [
                'unidad' => 1,
                'titulo' => 'INTRODUCCIÓN A LA GESTIÓN DE SERVICIOS DE TIC.',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Identifica los componentes básicos de la Gestión de Servicios de TIC.',
            ],[
                'unidad' => 2,
                'titulo' => 'PRACTICAS DE GESTION GENERAL DE SERVICIOS',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Elabora un Plan de prácticas de gestión de servicios en una organización.',
            ],[
                'unidad' => 3,
                'titulo' => 'PRACTICAS TECNICAS Y DE GESTION DE SERVICIOS',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Aplica las  prácticas de servicios del Marco ITIL en una organización.',
            ],


            #Redes y comunicaciones I
            [
                'unidad' => 1,
                'titulo' => 'SISTEMAS DE COMUNICACIONES',
                'capacidades' => 'CT 4.1 Analiza y diseña los distintos sistemas de comunicación utilizando componentes electrónicos digitales',
                'resultados' => 'Explica y conoce las técnicas de digitalización, codificación y modulación de las señales digitales a ser transmitidas en las redes de comunicación.',
            ],[
                'unidad' => 2,
                'titulo' => 'PROTOCOLOS TCP/IP Y DIRECCIONAMIENTO',
                'capacidades' => 'CT 4.5 Planifica, analiza, diseña, implementa y administra los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar.',
                'resultados' => 'Diseña la arquitectura lógica de direccionamiento de una red, utilizando el protocolo TCP/IP. Gestiona las direcciones IP de subredes en una red de clase A,B,C y VLSM bajo el direccionamiento IP 4.0.',
            ],[
                'unidad' => 3,
                'titulo' => 'REDES FRAME RELAY',
                'capacidades' => 'CT 4.5 Planifica, analiza, diseña, implementa y administra los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar.',
                'resultados' => 'Diseña e implementa un esquema de enrutamiento entre redes de comunicaciones, usando los protocolos de la capa transporte del protocolo TCP/IP.',
            ],

            
            #Seguridad de la informacion
            [
                'unidad' => 1,
                'titulo' => 'INTRODUCCIÓN A LA SEGURIDAD DE LA INFORMACIÓN',
                'capacidades' => 'CT 4.6 Planifica la seguridad de la información presente en los sistemas y tecnologías de información utilizando las políticas y controles de seguridad presente en los estándares o normas internacionales.',
                'resultados' => 'Realiza la evaluación de riesgos en una organización',
            ],[
                'unidad' => 2,
                'titulo' => 'CONTROL DE ACCESOS',
                'capacidades' => 'CT 4.6 Planifica la seguridad de la infroacmión presento en los sistemas y tecnologías de información utilizando las políticas y controles de seguridad presente en los estándares o normas internacionales.',
                'resultados' => 'Recomienda controles de acceso en una organización',
            ],[
                'unidad' => 3,
                'titulo' => 'MECANISMOS DE SEGURIDAD Y BASES DE DATOS',
                'capacidades' => 'CT 4.6 Planifica la seguridad de la infroacmión presento en los sistemas y tecnologías de información utilizando las políticas y controles de seguridad presente en los estándares o normas internacionales.',
                'resultados' => 'Propone los mecanismos de seguridad que se pueden implementar en una empresa',
            ],
            
            
            #Marketing y medios sociales
            [
                'unidad' => 1,
                'titulo' => 'LOS MEDIOS DIGITALES',
                'capacidades' => 'Alinea, planifica y organiza la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas',
                'resultados' => 'Compre los principales conceptos del marketing digital, las diferencias con el marketing tradicional y su importancia en el contexto actual',
            ],[
                'unidad' => 2,
                'titulo' => 'IMPLEMENTACION DEL GOOGLE MY BUSINESS',
                'capacidades' => 'Alinea, planifica y organiza la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas',
                'resultados' => 'Optimiza el posicionamiento de la maca en los principales motores de búsqueda',
            ],[
                'unidad' => 3,
                'titulo' => 'MARKETING DIGITAL',
                'capacidades' => 'Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresacial utilizando un marco de referencia y/o trabajo y/o buenas practicas',
                'resultados' => 'Diseñar campañas digitales para audiencias segmentadas en las redes sociales',
            ],
            
            
            #Ingenieria de software II
            [
                'unidad' => 1,
                'titulo' => 'METODOLOGIA SCRUM',
                'capacidades' => 'Describe las etapas del ciclo de vida y marcos de trabajo utilizando modelos, estándares y técnicas vigentes de la ingeniería del software.',
                'resultados' => 'Describe las metodologías ágiles con pertinencia. Detalla la metodología Scrum mostrando congruencia. Explica los roles y artefactos de Scrum con coherencia.',
            ],[
                'unidad' => 2,
                'titulo' => 'DOCUMENTACION SCRUM',
                'capacidades' => 'Planifica analiza, diseña, implementa prueba o estabiliza despliega o implanta. así como documenta la creación de productos software(desktop, web y móviles) utilizando modelos, estándate y técnicas vigentes de la ingernieria de software.',
                'resultados' => 'Describe la fase de inicio de la metodología Scrum mostrando conocimiento. Analiza e interpreta la fase de planificación y estimación de la metodología Scrum mostrando coherencia. Explica la fase de implementación y la fase de lanzamiento de metodología Scrum con pertinencia',
            ],[
                'unidad' => 3,
                'titulo' => 'PRUEBAS CON JMETER',
                'capacidades' => 'Analiza, construye y mantiene aplicaciones informativas con criterios de ciberseguridad, calidad y eficiencia',
                'resultados' => 'Explica las pruebas de software y conoce el uso de Jmeter con fundamento. Realiza la configuración de Jmeter mostrando congruencia',
            ],
            

            #Inteligencia de negocios
            [
                'unidad' => 1,
                'titulo' => 'PLANIFICACION, REQUERIMIENTOS Y ANALISIS DE UN SISTEMA DE TOMA DE DECISIONES ',
                'capacidades' => 'Identifica, y define los requerimientos estratégicos y del conocimiento de los indicadores de gestión en forma acertada valorando la importancia de los conceptos de modelamiento dimensional.',
                'resultados' => 'Identifica los requerimientos de información estratégicos que como soporte a su gestión, bajo el concepto de modelamiento dimensional. Analiza el funcionamiento del negocio y reconoce cada uno de los elementos para la elaboración de un modelo.',
            ],[
                'unidad' => 2,
                'titulo' => 'ANALIZANDO Y DISEÑANDO BAJO EL MODELADO DIMENSIONAL',
                'capacidades' => 'Selecciona y aplica las técnicas y estrategias de modelamiento de base de datos multidimensional adecuadas a fin de conseguir un entender e beneficio de cómo se encuentra estructurada la información y de una manera más óptima valorando la importancia de la información en el proceso de toma de decisiones.',
                'resultados' => 'Identifica, analiza y diseña los requisitos necesarios para el doblamiento de una Base de Datos Multidimensional mediante  el conocimiento y dominio. Incluye los Key Performance Indicators (KPI) como base para el seguimiento de la gestión de una empresa..',
            ],[
                'unidad' => 3,
                'titulo' => 'IMPLEMENTANDO SOLUCION INTELIGENCIA DE NEGOCIOS ',
                'capacidades' => 'Organiza y utiliza los requerimientos estratégicos y la forma como el negocio evalúa la gestión de sus áreas operativas y utilizando un software como herramienta para la implementación del Sistema de Soporte de Decisiones.',
                'resultados' => 'Construye su Cubo OLAP como herramienta tecnológica para aprovechar al máximo el Modelo Multidimensional. Selecciona y utiliza adecuadamente las herramientas computacionales que ofrece el mercado actualmente mediante el análisis de las características técnicas y costos de los DBMS, Servicios OLAP y herramientas de explotación de datos que ofrece el mercado actualmente.',
            ],

            
            #Internet de las cosas
            [
                'unidad' => 1,
                'titulo' => 'INTRODUCCIÓN A INTERNET DE LAS COSAS',
                'capacidades' => 'CT2.4 Gestiona los procesos de comunicaci ones y riesgos de la dirección de proyectos de tecnologías de la información y comunicaci ón utilizando una guía estándar de buenas prácticas.',
                'resultados' => '1. Describe los conceptos básicos del Internet de las cosas. 2. Describe la estructura y fundamentos del VPS 3. Identifica características de dominios y hosting 4. Implementa servicios de nube.',
            ],[
                'unidad' => 2,
                'titulo' => 'MQTT - EMQX',
                'capacidades' => 'CT4.5 Planifica, analiza, diseña, implementa y administra los niveles físico-lógico de los las redes informática s empresarial es utilizando una guía',
                'resultados' => '1. Explica el fundamento teórico de MQTT 2. Explica el fundamento teórico de EMQX. 3. Aplica en el trabajo de investigación de frameworks.',
            ],[
                'unidad' => 3,
                'titulo' => 'IMPLEMENTACIÓN DE APLICACIONES DE IOT',
                'capacidades' => 'CT4.6 Planifica la seguridad de la información presente en los sistemas y tecnologías de información utilizando las políticas y controles de seguridad presente en los estándares o normas internacion ales',
                'resultados' => '1. Implementa servicios bajo Firmware. 2. Explica el avance 01 del Proyecto Real. 3. Explica el avance 02 del Proyecto Real. 4. Explica el avance 03 del Proyecto Real. 5. Explica el desarrollo total del Proyecto Real.',
            ],


            #SEGUNDO AÑO
            [
                'unidad' => 1,
                'titulo' => 'EL MICROPROCESADOR Y LA RAM',
                'capacidades' => 'CT 4.2 Identifica y organiza los componentes de la arquitectura de un ordenador utilizando una guía de buenas prácticas',
                'resultados' => 'Explica y conoce las partes de un microprocesador y su iteración para el control del procesamiento. Describe y realiza el procesamiento y acceso a la memoria del microprocesador con la ejecución de instrucciones a bajo nivel usando assembler en un computador.',
            ],[
                'unidad' => 2,
                'titulo' => 'EL COMPUTADOR',
                'capacidades' => 'CT 4.3 Administra los recursos de un ordenador utilizando un sistema operativo libre y/o propietario.',
                'resultados' => 'Explica modelos de diseño de arquitectura de computadoras con la aplicación de procedimientos de planificación de recursos del computador. Diseña y desarrolla programas de bajo nivel de control de periféricos aplicando programación de asembler basada en interrupciones.',
            ],[
                'unidad' => 3,
                'titulo' => 'ENTRADAS Y SALIDAS DEL MICROPROCESADOR',
                'capacidades' => 'CT. 4.4 Diseña e implementa diversas plataformas tecnológicas libres y/o propietarias.',
                'resultados' => 'Diseña Sistemas Digitales con programación embebida en microcontrolador interactuando con su memoria y sus periféricos en un entorno básico de arquitectura de ordenador.',
            ],


            #Ingenieria de datos I
            [
                'unidad' => 1,
                'titulo' => 'MODELADO DEL NEGOCIO',
                'capacidades' => 'CT1:Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Aplica la metodología orientada a objetos al análisis y diseño de soluciones informáticas. Desarrolla el modelado de artefactos de un sistema. Utiliza herramientas de la metodología RUP, para el desarrollo del modelado de sistemas.',
            ],[
                'unidad' => 2,
                'titulo' => 'MODELADO DE DATOS',
                'capacidades' => 'CT1:Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Diseña e implementa base de datos a partir del modelado de datos. Analiza y diseña base de datos con énfasis en la integridad de datos.',
            ],[
                'unidad' => 3,
                'titulo' => 'PROCEDIMIENTOS EN SQL SERVER',
                'capacidades' => 'CT2: Diseña, implementa y administra la estructura y funcionalidad de los sistemas de bases de datos utilizando diversos asistentes y/o gestores informáticos.',
                'resultados' => 'Desarrolla operaciones con bases de datos utilizando script y el lenguaje T-SQL. Implementa funciones escalares y de tablas de múltiples sentencias.',
            ],


            #Tecnologias web
            [
                'unidad' => 1,
                'titulo' => 'TECNOLOGIAS WEB',
                'capacidades' => 'CT1.1 Alinea, planifica y organiza la gestión de tecnologías de la información y comunicació n de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => '1.Comprende el uso de las tecnologías web. 2.Hace uso de Laravel para la creación de páginas web.',
            ],[
                'unidad' => 2,
                'titulo' => 'MODELOS WEB',
                'capacidades' => 'CT1.2 Construye, adquiere e implanta la gestión de tecnologías de la información y comunicació n de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => '1. Comprende el uso de las tecnologías web backend. 2. Hace uso de Laravel para la creación de páginas web.',
            ],[
                'unidad' => 3,
                'titulo' => 'TECNOLOGIAS EN LA NUBE',
                'capacidades' => 'CT1.3 Entrega, da servicio y soporte a la gestión de tecnologías de la información y comunicació n de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => '1.Explica el uso de tecnologías web SPA 2. Hace uso de Angular para la creación de páginas web.',
            ],


            #Sistemas de informacion
            [
                'unidad' => 1,
                'titulo' => 'ROL DE LOS SISTEMAS DE INFORMACIÓN EN LAS ORGANIZACIONES ',
                'capacidades' => 'Explica el concepto de sistemas de información y conoce las diferentes plataformas modernas de tecnologías de información y como estas ayudan a gestionar y mejorar la toma de decisiones en las organizaciones.',
                'resultados' => 'Diferencia los diferentes tipos y usos de sistemas de información. Explica los diferentes componentes de infraestructuras tecnológicas que existen en las organizaciones.',
            ],[
                'unidad' => 2,
                'titulo' => 'SOLUCIONES Y APLICACIONES MODERNAS PARA EMPRESAS',
                'capacidades' => 'Reconoce cómo se utilizan los sistemas de información para respaldar las operaciones de la organización, respaldar las decisiones gerenciales y la obtención de una ventaja estratégica.',
                'resultados' => 'Analiza herramientas de gestión con el uso de sistemas de información, para el apoyo de toma de decisiones en las organizaciones. Reconoce la importancia de la información en las organizaciones.',
            ],[
                'unidad' => 3,
                'titulo' => 'IMPLEMENTACIÓN DE SISTEMA',
                'capacidades' => 'El estudiante plantea soluciones empresariales para las organizaciones.',
                'resultados' => 'Al finalizar la unidad, el estudiante será capaz de describir las etapas de implementación de sistemas.',
            ],


            #Igenieria de datos II
            [
                'unidad' => 1,
                'titulo' => 'PROCEDIMIENTOS TRIGGERS',
                'capacidades' => 'CT1: Gestiona los procesos de la integración y alcance de la dirección de proyectos de tecnologías de la información y comunicación utilizando una guía estandar de buenas prácticas.',
                'resultados' => 'Implementa y desarrolla diversas operaciones a través de script con la base de datos.',
            ],[
                'unidad' => 2,
                'titulo' => 'PROGRAMACION AVANZADA EN T-SQL',
                'capacidades' => 'CT2: Analiza, diseña, construye y mantiene aplicaciones informáticas con criterios de seguridad, calidad y eficiencia.',
                'resultados' => 'Analiza requerimientos de información y los transforma en informes orientados a fortalecer la toma de decisiones. Gestiona y administra una base de datos.',
            ],[
                'unidad' => 3,
                'titulo' => 'IMPLEMENTACIÓN DE VISUAL BASIC',
                'capacidades' => 'CT3: Diseña, implementa y administra la estructura y funcionalidad de los sistemas de bases de datos utilizando diversos asistentes y/o gestores informáticos.',
                'resultados' => 'Aplica la metodología orientada a objetos al análisis y diseño de soluciones informáticas. Desarrolla el análisis dimensional de un sistema de inteligencia de negocios.',
            ],
            

            #Sistemas operativos
            [
                'unidad' => 1,
                'titulo' => 'COMPONENTES DE UN SISTEMAS OPERATIVOS',
                'capacidades' => 'CT 4.3 Administra los recursos de un ordenador utilizando un sistema operativo libre y/o propietario.',
                'resultados' => 'Explica y conoce los Conceptos básicos, estructura, componentes del sistema operativo, para realizar correctamente la activación del sistema operativo y el uso de servicios de llamada al S.O.',
            ],[
                'unidad' => 2,
                'titulo' => 'PLANIFICACION DE RECURSOS.',
                'capacidades' => 'CT 4.3 Administra los recursos de un ordenador utilizando un sistema operativo libre y/o propietario',
                'resultados' => 'Conoce y describe las técnicas de planificación de procesos y manejo de concurrencias e interbloqueo en un sistema operativo, para administrar correctamente los procesos de ejecución. Instala y administra un sistema operativo de servidor, a través de los comandos Linux, en una distribución libre sobre una maquina Virtual.',
            ],[
                'unidad' => 3,
                'titulo' => 'GESTION DE MEMORIA, E/S Y SEGURIDAD.',
                'capacidades' => 'CT. 4.4 Diseña e implementa diversas plataformas tecnológicas libres y/o propietarias.',
                'resultados' => 'Conoce y aplica los conceptos de Virtualización para gestionar diversos sistemas operativos sobre un computador. Gestiona los diferentes sistemas de archivos para administrar la capacidad de almacenamiento y el manejo de la seguridad en un sistema operativo.',
            ],


            #Ingenieria de requerimientos
            [
                'unidad' => 1,
                'titulo' => 'INTRODUCCIÓN A LA INGENIERÍA DE REQUERIMIENTOS.',
                'capacidades' => 'Explica los conceptos fundamentales de ingeniería de software e ingeniería de requisitos.',
                'resultados' => 'Explica el proceso de desarrollo de software y los diferentes tipos de desarrollo. Analiza el funcionamiento del negocio y reconoce cada uno de los elementos para la elaboración de un modelo.',
            ],[
                'unidad' => 2,
                'titulo' => 'OBTENCIÓN DE LOS REQUERIMIENTOS.',
                'capacidades' => 'Explica al detalle cada una de las actividades en el desarrollo de requisitos.',
                'resultados' => 'Reconoce la importancia de los requerimientos en el inicio del desarrollo de software. Explica de forma general las diferentes actividades del desarrollo de requisitos.',
            ],[
                'unidad' => 3,
                'titulo' => 'PROCESO VALIDACIÓN DE LOS REQUERMIENTOS.',
                'capacidades' => 'Explica las actividades realizadas en los requisitos y las valida y estima los costos para el desarrollo de un proyecto de software.',
                'resultados' => 'Reconoce la importancia de la estimación de costos en la elaboración de un proyecto de software.',
            ],


            #Sistemas inteligentes
            [
                'unidad' => 1,
                'titulo' => 'TECNOLOGIAS DE INFORMACION.',
                'capacidades' => 'CT2.1 Gestiona los procesos de la integración y alcance de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. CT2.2 Gestiona los procesos de tiempos y costos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas.',
                'resultados' => 'Gestiona los procesos de la integración y alcance de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. Gestiona los procesos de tiempos y costos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas.',
            ],[
                'unidad' => 2,
                'titulo' => 'DETECCION DE IMAGENES.',
                'capacidades' => 'CT2.3 Gestiona los procesos de calidad y recursos humanos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. CT2.4 Gestiona los procesos de comunicaciones y riesgos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. CT2.5 Gestiona los procesos de adquisiciones e interesados de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas.',
                'resultados' => 'Gestiona los procesos de calidad y recursos humanos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. Gestiona los procesos de comunicaciones y riesgos de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas. Gestiona los procesos de adquisiciones e interesados de la dirección de proyectos de tecnologías de información utilizando una guía estándar de buenas prácticas.',
            ],[
                'unidad' => 3,
                'titulo' => 'APLICACIONES INFORMATICAS.',
                'capacidades' => 'CT3.1 Conoce y aplica procedimientos algorítmicos utilizando tipos y estructuras de datos adecuadas en la solución de problemas computacionales. CT3.2 Analiza, diseña, construye y mantiene aplicaciones informáticas con criterios de seguridad, calidad y eficiencia. CT3.3 Diseña, implementa y administra la estructura y funcionalidad de los sistemas de bases de datos utilizando diversos asistentes y/o gestores informáticos.',
                'resultados' => 'Conoce y aplica procedimientos algorítmicos utilizando tipos y estructuras de datos adecuadas en la solución de problemas computacionales. Analiza, diseña, construye y mantiene aplicaciones informáticas con criterios de seguridad, calidad y eficiencia. Diseña, implementa y administra la estructura y funcionalidad de los sistemas de bases de datos utilizando diversos asistentes y/o gestores informáticos',
            ],


            #Ingenieria de software I
            [
                'unidad' => 1,
                'titulo' => 'RATIONAL UNIFIED PROCESS (RUP) Y MODELO DEL NEGOCIO',
                'capacidades' => 'Reconoce los pasos de la metodología RUP en el desarrollo de software y diagramas del modelo del negocio.',
                'resultados' => 'Reconoce los pasos de la metodología RUP en el desarrollo de software y diagramas del modelo del negocio.',
            ],[
                'unidad' => 2,
                'titulo' => 'MODELO DE REQUERIMIENTOS',
                'capacidades' => 'Identifica y documenta los requerimientos de software, estima el tiempo de desarrollo, calcula la viabilidad económica e identifica riesgos, utilizando modelos, estándares y técnicas vigentes de la ingeniería del software.',
                'resultados' => 'Describe el modelo de requerimientos mostrando conocimiento. Analiza e interpreta la estimación del tiempo de desarrollo de software mostrando coherencia.',
            ],[
                'unidad' => 3,
                'titulo' => 'MODELO DE ANALISIS, DISEÑO, DESARROLLO, PRUEBAS E IMPLEMENTACION',
                'capacidades' => 'Analiza, diseña, construye, prueba, implementa y mantiene aplicaciones informáticas con criterios de seguridad, calidad y eficiencia.',
                'resultados' => 'Describe el modelo de análisis con fundamento. Analiza e interpreta el modelo de diseño',
            ],


            #Metodologia de la investigacion
            [
                'unidad' => 1,
                'titulo' => 'PLAN ESTRATEGICO DE INVESTIGACION',
                'capacidades' => 'CT5.1 Realiza investigaciones individuales o interdisciplinaria s con fondos concursables públicos o privados para proporcionar nuevos métodos, materiales o herramientas en el desarrollo de proyectos tecnológicos',
                'resultados' => '1. Describe los conceptos básicos de la investigación. 2. Identificación de problemas de investigación. 3. Explica los tipos de investigación 4. Explica los antecedentes que sustentan la investigación.',
            ],[
                'unidad' => 2,
                'titulo' => 'PROTOCOLOS DE INVESTIGACION',
                'capacidades' => 'CT5.1 Realiza investigaciones individuales o interdisciplinaria s con fondos concursables públicos o privados para proporcionar nuevos métodos, materiales o herramientas en el desarrollo de proyectos tecnológicos',
                'resultados' => '1. Explica el fundamento teórico relacionado al tema de investigación. 2. Reconoce e identifica las herramientas de control de plagio.',
            ],[
                'unidad' => 3,
                'titulo' => 'ANALISIS DE DATOS',
                'capacidades' => 'CT5.4 Conduce estudios de problemas complejos usando conocimientos basados en los métodos y componentes de la investigación científica',
                'resultados' => 'Desarrolla operaciones con bases de datos utilizando script y el lenguaje T-SQL. Implementa funciones escalares y de tablas de múltiples sentencias.',
            ],
            #30

            #Planeamiento estrategico de la informacion
            [
                'unidad' => 1,
                'titulo' => 'PLAN DE RESPONSABILIDAD SOCIAL',
                'capacidades' => 'Describe las fases de la metodología para la elaboración de un Plan Estratégico de la Información',
                'resultados' => 'Propuesta de un plan de trabajo para el desarrollo de un PEI',
            ],[
                'unidad' => 2,
                'titulo' => 'PLAN ESTRATEGICO',
                'capacidades' => 'Identifica las necesidades de información en una organización',
                'resultados' => 'Definición de requerimientos de información. Identificación y propuesta de los S.I.',
            ],[
                'unidad' => 3,
                'titulo' => 'ARQUITECTURA DE TI',
                'capacidades' => 'Propone un modelo de arquitectura tecnológica como soporte a los SI',
                'resultados' => 'Propuesta de arquitectura tecnológica.  Propuesta de Planes de contingencia. Propuesta de Cuadro de Mando.',
            ],


            #Gestion de servicio de TIC
            [
                'unidad' => 1,
                'titulo' => 'INTRODUCCIÓN A LA GESTIÓN DE SERVICIOS DE TIC.',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Identifica los componentes básicos de la Gestión de Servicios de TIC.',
            ],[
                'unidad' => 2,
                'titulo' => 'PRACTICAS DE GESTION GENERAL DE SERVICIOS',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Elabora un Plan de prácticas de gestión de servicios en una organización.',
            ],[
                'unidad' => 3,
                'titulo' => 'PRACTICAS TECNICAS Y DE GESTION DE SERVICIOS',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Aplica las  prácticas de servicios del Marco ITIL en una organización.',
            ],


            #Redes y comunicaciones I
            [
                'unidad' => 1,
                'titulo' => 'SISTEMAS DE COMUNICACIONES',
                'capacidades' => 'CT 4.1 Analiza y diseña los distintos sistemas de comunicación utilizando componentes electrónicos digitales',
                'resultados' => 'Explica y conoce las técnicas de digitalización, codificación y modulación de las señales digitales a ser transmitidas en las redes de comunicación.',
            ],[
                'unidad' => 2,
                'titulo' => 'PROTOCOLOS TCP/IP Y DIRECCIONAMIENTO',
                'capacidades' => 'CT 4.5 Planifica, analiza, diseña, implementa y administra los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar.',
                'resultados' => 'Diseña la arquitectura lógica de direccionamiento de una red, utilizando el protocolo TCP/IP. Gestiona las direcciones IP de subredes en una red de clase A,B,C y VLSM bajo el direccionamiento IP 4.0.',
            ],[
                'unidad' => 3,
                'titulo' => 'REDES FRAME RELAY',
                'capacidades' => 'CT 4.5 Planifica, analiza, diseña, implementa y administra los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar.',
                'resultados' => 'Diseña e implementa un esquema de enrutamiento entre redes de comunicaciones, usando los protocolos de la capa transporte del protocolo TCP/IP.',
            ],

            
            #Seguridad de la informacion
            [
                'unidad' => 1,
                'titulo' => 'INTRODUCCIÓN A LA SEGURIDAD DE LA INFORMACIÓN',
                'capacidades' => 'CT 4.6 Planifica la seguridad de la información presente en los sistemas y tecnologías de información utilizando las políticas y controles de seguridad presente en los estándares o normas internacionales.',
                'resultados' => 'Realiza la evaluación de riesgos en una organización',
            ],[
                'unidad' => 2,
                'titulo' => 'CONTROL DE ACCESOS',
                'capacidades' => 'CT 4.6 Planifica la seguridad de la infroacmión presento en los sistemas y tecnologías de información utilizando las políticas y controles de seguridad presente en los estándares o normas internacionales.',
                'resultados' => 'Recomienda controles de acceso en una organización',
            ],[
                'unidad' => 3,
                'titulo' => 'MECANISMOS DE SEGURIDAD Y BASES DE DATOS',
                'capacidades' => 'CT 4.6 Planifica la seguridad de la infroacmión presento en los sistemas y tecnologías de información utilizando las políticas y controles de seguridad presente en los estándares o normas internacionales.',
                'resultados' => 'Propone los mecanismos de seguridad que se pueden implementar en una empresa',
            ],
            
            
            #Marketing y medios sociales
            [
                'unidad' => 1,
                'titulo' => 'LOS MEDIOS DIGITALES',
                'capacidades' => 'Alinea, planifica y organiza la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas',
                'resultados' => 'Compre los principales conceptos del marketing digital, las diferencias con el marketing tradicional y su importancia en el contexto actual',
            ],[
                'unidad' => 2,
                'titulo' => 'IMPLEMENTACION DEL GOOGLE MY BUSINESS',
                'capacidades' => 'Alinea, planifica y organiza la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas',
                'resultados' => 'Optimiza el posicionamiento de la maca en los principales motores de búsqueda',
            ],[
                'unidad' => 3,
                'titulo' => 'MARKETING DIGITAL',
                'capacidades' => 'Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresacial utilizando un marco de referencia y/o trabajo y/o buenas practicas',
                'resultados' => 'Diseñar campañas digitales para audiencias segmentadas en las redes sociales',
            ],
            
            
            #Ingenieria de software II
            [
                'unidad' => 1,
                'titulo' => 'METODOLOGIA SCRUM',
                'capacidades' => 'Describe las etapas del ciclo de vida y marcos de trabajo utilizando modelos, estándares y técnicas vigentes de la ingeniería del software.',
                'resultados' => 'Describe las metodologías ágiles con pertinencia. Detalla la metodología Scrum mostrando congruencia. Explica los roles y artefactos de Scrum con coherencia.',
            ],[
                'unidad' => 2,
                'titulo' => 'DOCUMENTACION SCRUM',
                'capacidades' => 'Planifica analiza, diseña, implementa prueba o estabiliza despliega o implanta. así como documenta la creación de productos software(desktop, web y móviles) utilizando modelos, estándate y técnicas vigentes de la ingernieria de software.',
                'resultados' => 'Describe la fase de inicio de la metodología Scrum mostrando conocimiento. Analiza e interpreta la fase de planificación y estimación de la metodología Scrum mostrando coherencia. Explica la fase de implementación y la fase de lanzamiento de metodología Scrum con pertinencia',
            ],[
                'unidad' => 3,
                'titulo' => 'PRUEBAS CON JMETER',
                'capacidades' => 'Analiza, construye y mantiene aplicaciones informativas con criterios de ciberseguridad, calidad y eficiencia',
                'resultados' => 'Explica las pruebas de software y conoce el uso de Jmeter con fundamento. Realiza la configuración de Jmeter mostrando congruencia',
            ],
            

            #Inteligencia de negocios
            [
                'unidad' => 1,
                'titulo' => 'PLANIFICACION, REQUERIMIENTOS Y ANALISIS DE UN SISTEMA DE TOMA DE DECISIONES ',
                'capacidades' => 'Identifica, y define los requerimientos estratégicos y del conocimiento de los indicadores de gestión en forma acertada valorando la importancia de los conceptos de modelamiento dimensional.',
                'resultados' => 'Identifica los requerimientos de información estratégicos que como soporte a su gestión, bajo el concepto de modelamiento dimensional. Analiza el funcionamiento del negocio y reconoce cada uno de los elementos para la elaboración de un modelo.',
            ],[
                'unidad' => 2,
                'titulo' => 'ANALIZANDO Y DISEÑANDO BAJO EL MODELADO DIMENSIONAL',
                'capacidades' => 'Selecciona y aplica las técnicas y estrategias de modelamiento de base de datos multidimensional adecuadas a fin de conseguir un entender e beneficio de cómo se encuentra estructurada la información y de una manera más óptima valorando la importancia de la información en el proceso de toma de decisiones.',
                'resultados' => 'Identifica, analiza y diseña los requisitos necesarios para el doblamiento de una Base de Datos Multidimensional mediante  el conocimiento y dominio. Incluye los Key Performance Indicators (KPI) como base para el seguimiento de la gestión de una empresa..',
            ],[
                'unidad' => 3,
                'titulo' => 'IMPLEMENTANDO SOLUCION INTELIGENCIA DE NEGOCIOS ',
                'capacidades' => 'Organiza y utiliza los requerimientos estratégicos y la forma como el negocio evalúa la gestión de sus áreas operativas y utilizando un software como herramienta para la implementación del Sistema de Soporte de Decisiones.',
                'resultados' => 'Construye su Cubo OLAP como herramienta tecnológica para aprovechar al máximo el Modelo Multidimensional. Selecciona y utiliza adecuadamente las herramientas computacionales que ofrece el mercado actualmente mediante el análisis de las características técnicas y costos de los DBMS, Servicios OLAP y herramientas de explotación de datos que ofrece el mercado actualmente.',
            ],

            
            #Internet de las cosas
            [
                'unidad' => 1,
                'titulo' => 'INTRODUCCIÓN A INTERNET DE LAS COSAS',
                'capacidades' => 'CT2.4 Gestiona los procesos de comunicaci ones y riesgos de la dirección de proyectos de tecnologías de la información y comunicaci ón utilizando una guía estándar de buenas prácticas.',
                'resultados' => '1. Describe los conceptos básicos del Internet de las cosas. 2. Describe la estructura y fundamentos del VPS 3. Identifica características de dominios y hosting 4. Implementa servicios de nube.',
            ],[
                'unidad' => 2,
                'titulo' => 'MQTT - EMQX',
                'capacidades' => 'CT4.5 Planifica, analiza, diseña, implementa y administra los niveles físico-lógico de los las redes informática s empresarial es utilizando una guía',
                'resultados' => '1. Explica el fundamento teórico de MQTT 2. Explica el fundamento teórico de EMQX. 3. Aplica en el trabajo de investigación de frameworks.',
            ],[
                'unidad' => 3,
                'titulo' => 'IMPLEMENTACIÓN DE APLICACIONES DE IOT',
                'capacidades' => 'CT4.6 Planifica la seguridad de la información presente en los sistemas y tecnologías de información utilizando las políticas y controles de seguridad presente en los estándares o normas internacion ales',
                'resultados' => '1. Implementa servicios bajo Firmware. 2. Explica el avance 01 del Proyecto Real. 3. Explica el avance 02 del Proyecto Real. 4. Explica el avance 03 del Proyecto Real. 5. Explica el desarrollo total del Proyecto Real.',
            ],


            #ELECTIVO
            #PRIMER AÑO
            #Transformacion digital
            [
                'unidad' => 1,
                'titulo' => 'TENDENCIAS EN LA ERA DIGITAL',
                'capacidades' => 'CT 1.1 Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Describe el contexto mundial en un contexto real. Explica las nuevas tecnologías de la información y comunicación en un contexto real.',
            ],[
                'unidad' => 2,
                'titulo' => 'DISRUPCION DIGITAL',
                'capacidades' => 'CT 1.1 Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas',
                'resultados' => 'Explica la tecnología digital en un contexto real. Explica la experiencia digital en un contexto real.',
            ],[
                'unidad' => 3,
                'titulo' => 'GESTION DE LA TRANFORMACION DIGITAL',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Conoce los fundamentos de la transformación digital en un contexto real. Explica los niveles de la transformación digital en un contexto real.',
            ],


            #Negocios electronicos
            [
                'unidad' => 1,
                'titulo' => 'FUNDAMENTOS DE LOS NEGOCIOS ELECTRONICOS',
                'capacidades' => 'CT 1.1 Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Analiza los conceptos de e-Business, e Commerce y los modelos comerciales digitales.',
            ],[
                'unidad' => 2,
                'titulo' => 'TECNOLOGIAS DE INFORMACION PARA NEGOCIOS ELECTRONICOS',
                'capacidades' => 'Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco referencia trabajo buenas prácticas.',
                'resultados' => 'RDA 2: Describe la gestión de la cadena de abastecimient o para los negocios electrónicos. Describe gestión relación los para clientes negocios electrónicos.',
            ],[
                'unidad' => 3,
                'titulo' => 'PLAN DE NEGOCIOS ELECTRONICOS',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Elabora el plan de negocios electrónico. Sustenta el plan de negocios electrónico.',
            ],


            #Arquitectura basada en microservicios
            [
                'unidad' => 1,
                'titulo' => 'ARQUITECTURAS DE SOFTWARE',
                'capacidades' => 'CT 1.1 Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Alinea, planifica y organiza de manera sistémica la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
            ],[
                'unidad' => 2,
                'titulo' => 'MICROSERVICIOS EN LA NUBE',
                'capacidades' => 'CT1.2 Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
            ],[
                'unidad' => 3,
                'titulo' => 'MICROSERVICIOS EMPRESARIAL',
                'capacidades' => 'CT1.3 Entrega, da servicio y soporte a la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Entrega, da servicio y soporte a la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
            ],


            #SEGUNDO AÑO
            #Transformacion digital
            [
                'unidad' => 1,
                'titulo' => 'TENDENCIAS EN LA ERA DIGITAL',
                'capacidades' => 'CT 1.1 Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Describe el contexto mundial en un contexto real. Explica las nuevas tecnologías de la información y comunicación en un contexto real.',
            ],[
                'unidad' => 2,
                'titulo' => 'DISRUPCION DIGITAL',
                'capacidades' => 'CT 1.1 Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas',
                'resultados' => 'Explica la tecnología digital en un contexto real. Explica la experiencia digital en un contexto real.',
            ],[
                'unidad' => 3,
                'titulo' => 'GESTION DE LA TRANFORMACION DIGITAL',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Conoce los fundamentos de la transformación digital en un contexto real. Explica los niveles de la transformación digital en un contexto real.',
            ],


            #Negocios electronicos
            [
                'unidad' => 1,
                'titulo' => 'FUNDAMENTOS DE LOS NEGOCIOS ELECTRONICOS',
                'capacidades' => 'CT 1.1 Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Analiza los conceptos de e-Business, e Commerce y los modelos comerciales digitales.',
            ],[
                'unidad' => 2,
                'titulo' => 'TECNOLOGIAS DE INFORMACION PARA NEGOCIOS ELECTRONICOS',
                'capacidades' => 'Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco referencia trabajo buenas prácticas.',
                'resultados' => 'RDA 2: Describe la gestión de la cadena de abastecimient o para los negocios electrónicos. Describe gestión relación los para clientes negocios electrónicos.',
            ],[
                'unidad' => 3,
                'titulo' => 'PLAN DE NEGOCIOS ELECTRONICOS',
                'capacidades' => 'CT 1.5 Gestiona servicios de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Elabora el plan de negocios electrónico. Sustenta el plan de negocios electrónico.',
            ],


            #Arquitectura basada en microservicios
            [
                'unidad' => 1,
                'titulo' => 'ARQUITECTURAS DE SOFTWARE',
                'capacidades' => 'CT 1.1 Alinea, planifica y organiza la gestión de tecnologías de información de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Alinea, planifica y organiza de manera sistémica la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
            ],[
                'unidad' => 2,
                'titulo' => 'MICROSERVICIOS EN LA NUBE',
                'capacidades' => 'CT1.2 Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Construye, adquiere e implanta la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
            ],[
                'unidad' => 3,
                'titulo' => 'MICROSERVICIOS EMPRESARIAL',
                'capacidades' => 'CT1.3 Entrega, da servicio y soporte a la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
                'resultados' => 'Entrega, da servicio y soporte a la gestión de tecnologías de la información y comunicación de una organización empresarial utilizando un marco de referencia y/o trabajo y/o buenas prácticas.',
            ],
        ];
        Unidad::insert($Unidad);
    }
}
