<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Silabo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SilaboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Silabo = [
            #PRIMER AÑO
            #Arquitectura y organizacion de computadoras
            [
                'sumilla' => 'La experiencia curricular de Organización de Computadoras, se orienta a desarrollar las competencias de los dominios de Gestión de Infraestructura y Comunicaciones, e Investigación Científica. Y a las Capacidades terminales CT4.3 y CT4.5 del perfil de egreso. El objetivo del curso es desarrollar en el estudiante de ingeniería la habilidad de analizar, reconocer y administrar la arquitectura y organización lógica de un computador, para el máximo aprovechamiento de sus recursos, como el funcionamiento de sus unidades funcionales, la planificación de la memoria y la gestión de procesos en ejecución, la administración de sus sistemas de almacenamiento fijo e extraíble, la protección de información, el manejo de interrupciones y el control del multiprocesamiento. La teoría y aplicación de las últimas tecnologías de organización y arquitectura de computadoras, procesamiento segmentado, superescalar y multicore; asi como la introducción a la gestión de virtualización de recursos y componentes en un computador-servidor.',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 1,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Ingenieria de datos
            [
                'sumilla' => 'La experiencia curricular de Ingeniería de datos I es de naturaleza teórico-práctico, se orienta a desarrollar las competencias de los dominios de Gestión de Proyectos de TI; contribuye directamente al logro de las Capacidades terminales CT1.2, CT2.1, CT2.2, y CT2.4, CT3.3 del perfil de egreso.',
                'unidad_competencia' => 'Gestiona proyectos de tecnologías de la información y comunicación que promueve el desarrollo del ciclo de vida de los proyectos describiendo sus procesos relacionados y la identificación de los principales elementos del cuerpo de conocimientos en la dirección de proyectos tecnológicos utilizando una guía metodológica estándar de buenas prácticas valorando el uso de un lenguaje común para la discusión, redacción y aplicación de la gestión de proyectos.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 2,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Tecnologias web
            [
                'sumilla' => 'La experiencia curricular de Tecnologías Web es de naturaleza teórico-práctico, se orienta a desarrollar en el estudiante la capacidad de desarrollar aplicaciones web dinámicas, en el manejo de Frameworks o marcos de trabajo que contribuyan a la automatización de procesos y a la solución de problemas cumpliendo normas para la mejora continua de la organización. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.2, CT1.5, CT3.2, CT3.3 y CT3.4 del perfil de egreso. Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Instalación de Laravel, Migraciones, Configuración, Producción de Sistemas Web.',
                'unidad_competencia' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'competencia_general' => 'Desarrollo su pensamiento crítico aplicado en la solución de problemas en un contexto globalizado, haciendo uso de la tecnología de la información.',
                'carrera_id' => 1,
                'curso_id' => 3,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Sistemas de informacion
            [
                'sumilla' => 'La experiencia curricular de Sistemas de Información es de naturaleza teórico-práctico, se orienta a contribuir a que el estudiante conozca las bases técnicas, construcción y beneficios de la implementación y administración de los sistemas de información en las organizaciones. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.1, CT3.2 y CT3.3 Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Fundamentos de Sistemas de Información Gerencial, sus componentes, recursos y actividades; características e importancia de los diferentes sistemas de información gerencial para la toma de decisiones, la planificación, la organización, la dirección y el control. Se presentan sistemas de administración de bases de datos y sistemas de gestión del conocimiento.',
                'unidad_competencia' => 'La experiencia curricular de Sistemas de Información será útil para que el estudiante sea capaz de entender los principios fundamentales de los diferentes tipos de sistemas de información que pueden ser utilizados por las organizaciones en función de las necesidades de sus procesos organizacionales.',
                'competencia_general' => 'El estudiante analiza y comprende los fundamentos teóricos de sistemas de información, adquiriendo las destrezas para poder aplicar en el desarrollo de sistemas en función a las necesidades de las organizaciones.',
                'carrera_id' => 1,
                'curso_id' => 4,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Ingenieria de datos II
            [
                'sumilla' => 'La experiencia curricular de Ingeniería de datos II es de naturaleza teórico-práctico, se orienta a desarrollar las competencias de los dominios de Gestión de Proyectos de TI; contribuye directamente al logro de las Capacidades terminales CT1.2, CT2.1, CT2.2, y CT2.4, CT3.3 del perfil de egreso.',
                'unidad_competencia' => 'Gestiona proyectos de tecnologías de la información y comunicación que promueve el desarrollo del ciclo de vida de los proyectos describiendo sus procesos relacionados y la identificación de los principales elementos del cuerpo de conocimientos en la dirección de proyectos tecnológicos utilizando una guía metodológica estándar de buenas prácticas valorando el uso de un lenguaje común para la discusión, redacción y aplicación de la gestión de proyectos.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 5,
                'periodo_id' => 2,
                'visado' => 1
            ],


            #Sistemas operativos
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico - práctico, que está orientada a proporcionar al estudiante conceptos de administración de recursos básicos de un equipo informático y es de suma importancia que los estudiantes que cursan la carrera profesional de Ingeniería de Sistemas, aprovechen los conocimientos impartidos en este curso, para poder explotar y personalizar al máximo estos recursos básicos (procesador, memoria, archivos y dispositivos de e/s), quienes son controlados específicamente por los sistemas operativos, contribuye al logro de la capacidad CT3.3.',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 6,
                'periodo_id' => 2,
                'visado' => 1
            ],


            #Ingenieria de requerimientos
            [
                'sumilla' => 'La experiencia curricular de Ingeniería de Requerimientos es de naturaleza teórico-práctico, se orienta a desarrollar en el estudiante la capacidad de generar especificaciones correctas que representen y describan con claridad y de manera unívoca el comportamiento del sistema, a partir de las necesidades del negocio, demostrando ética en el uso de normas y estándares. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.1, CT3.2 y CT3.4',
                'unidad_competencia' => 'Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Concepto de requerimientos. El proceso de requerimientos, Despegue del proyecto, Caso de usos manejado por eventos, Requerimientos funcionales, Requerimientos no funcionales, Ajuste de los criterios, Escritura de los requerimientos, Mejora de la funcionalidad del proyecto, Escenarios, Prototipos para los requerimientos. Reutilización de los requerimientos. Revisión de los requerimientos. La experiencia curricular de Ingeniería de Requerimientos será útil para que el estudiante sea capaz de identificar y analizar de forma adecuada los requerimientos de un proyecto de desarrollo de soluciones informáticas en las organizaciones.',
                'competencia_general' => 'El estudiante determina, analiza y especifica los requerimientos a través del estudio de las necesidades de un proyecto de software para cualquier dominio del problema realizando el descubrimiento, documentación y mantenimiento de los requerimientos para un producto determinado, asegurando que los requerimientos del sistema estén completos, sean consistentes, relevantes y abarquen completamente las necesidades requeridas.',
                'carrera_id' => 1,
                'curso_id' => 7,
                'periodo_id' => 2,
                'visado' => 1
            ],


            #Sistemas inteligentes
            [
                'sumilla' => 'La experiencia curricular de Sistemas Inteligentes, se orienta a desarrollar las competencias de los dominios de Desarrollo de Software y Gestión de Proyectos de TI en sus Capacidades terminales CT2.1, CT2.2, CT2.3, CT2.4, CT2.5, CT3.1, CT3.2, CT3.3 respectivamente del perfil de egreso. La experiencia curricular de Sistemas Inteligentes proporciona a los egresados de la carrera la aplicación de técnicas para el desarrollo de software llamado Sistema Inteligente para su posterior implantación en dispositivos a los cuales elevará a la categoría de Agente Inteligente.',
                'unidad_competencia' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'competencia_general' => 'DESARROLLA su pensamiento crítico aplicado en la solución de problemas en un contexto globalizado, haciendo uso de la tecnología de la información.',
                'carrera_id' => 1,
                'curso_id' => 8,
                'periodo_id' => 2,
                'visado' => 1
            ],


            #Ingenieria de software I
            [
                'sumilla' => 'La experiencia curricular de Ingeniería del Software I es de naturaleza teórico-práctico, se orienta a desarrollar en el estudiante la capacidad de aplicar métodos, metodologías, procedimientos en el desarrollo de productos software de calidad. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.2, CT3.2, CT3.3 y CT3.4',
                'unidad_competencia' => 'Gestiona efectivamente la planificación, análisis, diseño, implementación, ejecución, prueba, implantación, administración y control de proyectos de tecnologías y sistemas de información que promueven el aprovechamiento racional de los recursos informáticos de una organización empresarial, la gestión de su gobernabilidad y servicios de tecnologías de información, la gestión del desarrollo de software, la gestión de su infraestructura y comunicaciones y la investigación científica, contribuyendo a creación de valor y la mejora continua de sus procesos clave del negocio y la seguridad de la información valorando la importancia del desarrollo económico, social y ambiental de las nuevas generaciones digitales.',
                'competencia_general' => 'DESARROLLA su pensamiento crítico aplicado en la solución de problemas en un contexto globalizado, haciendo uso de la tecnología de la información.',
                'carrera_id' => 1,
                'curso_id' => 9,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Metodologia de la investigacion
            [
                'sumilla' => 'La experiencia curricular de Metodología de la Investigación Científica es de naturaleza teórico-práctico, se orienta a desarrollar las competencias del dominio de Investigación Científica; contribuye directamente al logro de las capacidades terminales UC5-CT5.1, CT5.2, CT5.3, CT5.4, CT5.5 del perfil de egreso. Esta experiencia curricular promueve en el alumno la capacidad de desarrollar competencias investigativas, que le sirven de base, para desarrollar proyectos de investigación durante su proceso de formación y ejercicio profesional. La experiencia curricular de Metodología de la Investigación Científica, contiene conceptos de investigación científica, tipos y clasificación de investigación, el método científico, ¿Cómo empezar a investigar?, epistemología de la investigación científica, definición del problema, diseño de investigación, técnicas y herramientas para la recolección de datos, estructura formal de un informe de investigación, elaboración del proyecto de investigación.',
                'unidad_competencia' => 'Aplica la investigación para la elaboración y desarrollo de proyectos tecnológicos, de proyección y responsabilidad social utilizando la metodología de la investigación científica que permite la identificación de una realidad problemática de ámbito local, regional o nacional, el establecimiento de una hipótesis, la definición de objetivos, el desarrollo de una solución viable, el análisis y discusión de los resultados obtenidos valorando su importancia como parte del camino profesional antes, durante y después de lograr la profesión.',
                'competencia_general' => 'Comprende y evalúa el impacto de las soluciones a problemas complejos de ingeniería en un contexto global, económico, ambiental y social.',
                'carrera_id' => 1,
                'curso_id' => 10,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Planeamiento estrategico de la informacion
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico - práctico, que está orientada a proporcionar al estudiante el desarrollo de competencias y habilidades que le permita la elaboración exitosa de un plan estratégico de TI desde su definición y organización inicial hasta la formulación de planes de acción. Asimismo, busca consolidar las competencias profesionales en planeación estratégica para el logro de la capacidad CT3.4. aplicando códigos de buenas prácticas para la elaboración de planes estratégicos de tecnologías de información.',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Se desenvuelve eficazmente como individuo, como miembro de un equipo de trabajo, y en entornos multidisciplinarios y reconoce la necesidad del aprendizaje permanente y la capacidad para encararlo en el más amplio contexto de los cambios tecnológicos.',
                'carrera_id' => 1,
                'curso_id' => 11,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Gestion de servicio de TIC
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico - práctico, que está orientada a proporcionar al estudiante los conocimientos necesarios para la gestión de los servicios de tecnologías de información, dominando su ciclo de vida, fases y procesos aplicando el estándar de buenas prácticas de ITIL para lograr entregar servicios de tecnologías de información de gran valor y performance para las organizaciones, contribuye al logro de la capacidad CT1.5. Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Estrategia del servicio de TI, diseño del servicio de TI, transición del servicio de TI, operación del servicio de TI y mejora continua del servicio de TI.',
                'unidad_competencia' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'competencia_general' => 'Gestiona sus habilidades investigativas utilizando el razonamiento lógico y matemático, la habilidad informática, la comunicación efectiva, el saber popular y el conocimiento científico-tecnológico para aportar solución teórica y práctica a los problemas diversos de la región y del país.',
                'carrera_id' => 1,
                'curso_id' => 12,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Redes y comunicaciones I
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico - práctico, que está orientada a proporcionar al estudiante en la investigación de modernas tecnologías, así como de entender que si dos máquinas están interconectadas significa que son capaces de intercambiar información. El modo de intercambiar información puede ser a través de un medio eléctrico, óptico o el aire. El curso está orientado a poder entender conceptualmente los distintos términos utilizados en redes de computadoras y poder enseñarles a los estudiantes a planificar, diseñar, implementar y administrar una red de computadoras, contribuye al logro de la capacidad CT4.1,CT4.2,CT4.5 Y CT4.6.',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 13,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Seguridad de la informacion
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico-práctico, que está orientada a proporcionar al estudiante el poder identificar, determinar y manejar los riesgos y amenazas a la información, entender los procesos y mecanismos existentes para mantener una ventaja competitiva asegurando la integridad, confidencialidad y disponibilidad de la información. Al finalizar el curso el estudiante podrá crear una conciencia de la seguridad de las Comunicaciones/TI de una organización, desarrollar planes y acciones para crear procesos para la protección y seguridad de la información, tener un buen entendimiento de las arquitecturas técnicas y sus limitaciones, manejar un plan de seguridad y administrar las diferentes funciones, entender los estándares internacionales en seguridad de la información, entender los procesos para obtener la certificación de seguridad y, entender las necesidades de seguridad en los diferentes ambientes de negocios, contribuye al logro de la capacidad CT4.6. Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Dominios, objetivos y controles de seguridad de la norma internacional ISO/IEC 27002 vigente',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicados en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 14,
                'periodo_id' => 2,
                'visado' => 1
            ],
            
            
            #Marketing y medios sociales
            [
                'sumilla' => 'La experiencia curricular de Marketing y Medios Sociales es de naturaleza teórico-práctico, se orienta a desarrollar en el estudiante la capacidad liderar un proyecto digital aplicando las principales estrategias del marketing digital de acuerdo con los objetivos de negocio que se buscan alcanzar. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.1 y CT1.2',
                'unidad_competencia' => 'Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: el marketing digital, principales conceptos, el plan de marketing digital, la publicidad online, social media, marketing en buscadores, estrategias SEO y SEM, ecommerce y la analítica digital',
                'competencia_general' => 'Gestiona efectivamente la administración y control de proyectos de tecnologías y sistemas de información que promueven el aprovechamiento racional de los recursos informáticos de una organización empresarial, la gestión de su gobernabilidad y servicios de tecnologías de información, la gestión del desarrollo de software, la gestión de su infraestructura y comunicaciones y la investigación científica, contribuyendo a creación de valor y la mejora continua de sus procesos clave del negocio y la seguridad de la información valorando la importancia del desarrollo económico, social y ambiental de las nuevas generaciones digitales.',
                'carrera_id' => 1,
                'curso_id' => 15,
                'periodo_id' => 2,
                'visado' => 1
            ],
            
            
            #Ingenieria de software II
            [
                'sumilla' => 'Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Ingeniería de software, el proceso de desarrollo del software, modelos de proceso de desarrollo del software, metodologías inherentes al desarrollo de software, Gestión de Proyectos de software, planeación y calendarización del proyecto, medidas, métricas e indicadores, requerimientos del software: funcionales y no funcionales, requerimientos del usuario y del sistema; modelado del análisis, modelado funcional y modelado del flujo de información, diseño de datos, diseño arquitectónico, diseño de la interfaz gráfica del usuario; garantía de calidad del software, técnicas de prueba del software, estrategias de prueba del software, mantenimiento del software y gestión de configuraciones.',
                'unidad_competencia' => 'Gestiona efectivamente la planificación, análisis, diseño, implementación, ejecución, prueba, implantación, administración y control de proyectos de tecnologías y sistemas de información que promueven el aprovechamiento racional de los recursos informáticos de una organización empresarial, la gestión de su gobernabilidad y servicios de tecnologías de información, la gestión del desarrollo de software, la gestión de su infraestructura y comunicaciones y la investigación científica, contribuyendo a creación de valor y la mejora continua de sus procesos clave del negocio y la seguridad de la información valorando la importancia del desarrollo económico, social y ambiental de las nuevas generaciones digitales.',
                'competencia_general' => 'DESARROLLA su pensamiento crítico aplicado en la solución de problemas en un contexto globalizado, haciendo uso de la tecnología de la información.',
                'carrera_id' => 1,
                'curso_id' => 16,
                'periodo_id' => 2,
                'visado' => 1
            ],
            
            
            #Inteligencia de negocios
            [
                'sumilla' => 'La experiencia curricular de Inteligencia de Negocios es de naturaleza teórico-práctico, se orienta a desarrollar las competencias para el desarrollo de soluciones de información para toma de decisiones; contribuye directamente al logro de las Capacidades terminales CT1.2, CT1.6, CT2.1, CT2.2, y CT2.4, del perfil de egreso. Esta experiencia curricular permitirá al estudiante plantear estrategias al interior de las empresas y soportar estratégicamente el proceso de toma de decisiones basado en el desarrollo de un sistema de información. La experiencia curricular de Inteligencia de Negocios, comprende las etapas de definición de requerimientos estratégicos, elaboración de análisis dimensionales, modelamiento y diseño dimensional, Implementación de un DataMart. ETL, Construcción de Aplicaciones y análisis de la información.',
                'unidad_competencia' => 'Además, contribuye al desarrollo de la competencia para comunicarse eficazmente, mediante la comprensión y redacción de informes eficaces y documentación de diseño, la realización de exposiciones eficaces, y la transmisión y recepción de instrucciones claras.',
                'competencia_general' => 'El estudiante determina, analiza y especifica los requerimientos estratégicos a través del estudio de las necesidades de un proyecto de software para cualquier dominio del problema de toma de decisiones basado en información, realizando el descubrimiento, documentación y mantenimiento de los requerimientos para transformarlos en un modelo dimensional, asegurando que los requerimientos del sistema estén completos, sean consistentes, relevantes y abarquen completamente las necesidades estratégicas requeridas.',
                'carrera_id' => 1,
                'curso_id' => 17,
                'periodo_id' => 2,
                'visado' => 1
            ],


            #Internet de las cosas
            [
                'sumilla' => 'La experiencia curricular de internet de las Cosas es de naturaleza Teórica-Práctico de aplicación directa de los conocimientos adquiridos en las asignaturas previas, que permite brindar conocimientos para implementar aplicaciones de interconectividad de diversos dispositivos inteligentes (tablet, smartphone, y pc) y de dispositivos de software embebido (sensores y microcontroladores)  conectados a través de Internet, ,con fines de monitoreo, control y automatización de los diversos procesos domésticos, empresariales y de infraestructura  (ciudades inteligentes, manufactura, etc.). Los Conocimientos y desarrollo práctico de la experiencia curricular contribuyen directamente al logro de las Capacidades Terminales CT2.4, CT4.4, CT4.5 y CT4.6',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Comprende y evalúa el impacto de las soluciones a problemas complejos de ingeniería en un contexto global, económico, ambiental y social (I-h)',
                'carrera_id' => 1,
                'curso_id' => 18,
                'periodo_id' => 2,
                'visado' => 1
            ],


            #SEGUNDO AÑO
            #Arquitectura y organizacion de computadoras
            [
                'sumilla' => 'La experiencia curricular de Organización de Computadoras, se orienta a desarrollar las competencias de los dominios de Gestión de Infraestructura y Comunicaciones, e Investigación Científica. Y a las Capacidades terminales CT4.3 y CT4.5 del perfil de egreso. El objetivo del curso es desarrollar en el estudiante de ingeniería la habilidad de analizar, reconocer y administrar la arquitectura y organización lógica de un computador, para el máximo aprovechamiento de sus recursos, como el funcionamiento de sus unidades funcionales, la planificación de la memoria y la gestión de procesos en ejecución, la administración de sus sistemas de almacenamiento fijo e extraíble, la protección de información, el manejo de interrupciones y el control del multiprocesamiento. La teoría y aplicación de las últimas tecnologías de organización y arquitectura de computadoras, procesamiento segmentado, superescalar y multicore; asi como la introducción a la gestión de virtualización de recursos y componentes en un computador-servidor.',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 1,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Ingenieria de datos
            [
                'sumilla' => 'La experiencia curricular de Ingeniería de datos I es de naturaleza teórico-práctico, se orienta a desarrollar las competencias de los dominios de Gestión de Proyectos de TI; contribuye directamente al logro de las Capacidades terminales CT1.2, CT2.1, CT2.2, y CT2.4, CT3.3 del perfil de egreso.',
                'unidad_competencia' => 'Gestiona proyectos de tecnologías de la información y comunicación que promueve el desarrollo del ciclo de vida de los proyectos describiendo sus procesos relacionados y la identificación de los principales elementos del cuerpo de conocimientos en la dirección de proyectos tecnológicos utilizando una guía metodológica estándar de buenas prácticas valorando el uso de un lenguaje común para la discusión, redacción y aplicación de la gestión de proyectos.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 2,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Tecnologias web
            [
                'sumilla' => 'La experiencia curricular de Tecnologías Web es de naturaleza teórico-práctico, se orienta a desarrollar en el estudiante la capacidad de desarrollar aplicaciones web dinámicas, en el manejo de Frameworks o marcos de trabajo que contribuyan a la automatización de procesos y a la solución de problemas cumpliendo normas para la mejora continua de la organización. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.2, CT1.5, CT3.2, CT3.3 y CT3.4 del perfil de egreso. Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Instalación de Laravel, Migraciones, Configuración, Producción de Sistemas Web.',
                'unidad_competencia' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'competencia_general' => 'Desarrollo su pensamiento crítico aplicado en la solución de problemas en un contexto globalizado, haciendo uso de la tecnología de la información.',
                'carrera_id' => 1,
                'curso_id' => 3,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Sistemas de informacion
            [
                'sumilla' => 'La experiencia curricular de Sistemas de Información es de naturaleza teórico-práctico, se orienta a contribuir a que el estudiante conozca las bases técnicas, construcción y beneficios de la implementación y administración de los sistemas de información en las organizaciones. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.1, CT3.2 y CT3.3 Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Fundamentos de Sistemas de Información Gerencial, sus componentes, recursos y actividades; características e importancia de los diferentes sistemas de información gerencial para la toma de decisiones, la planificación, la organización, la dirección y el control. Se presentan sistemas de administración de bases de datos y sistemas de gestión del conocimiento.',
                'unidad_competencia' => 'La experiencia curricular de Sistemas de Información será útil para que el estudiante sea capaz de entender los principios fundamentales de los diferentes tipos de sistemas de información que pueden ser utilizados por las organizaciones en función de las necesidades de sus procesos organizacionales.',
                'competencia_general' => 'El estudiante analiza y comprende los fundamentos teóricos de sistemas de información, adquiriendo las destrezas para poder aplicar en el desarrollo de sistemas en función a las necesidades de las organizaciones.',
                'carrera_id' => 1,
                'curso_id' => 4,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Ingenieria de datos II
            [
                'sumilla' => 'La experiencia curricular de Ingeniería de datos II es de naturaleza teórico-práctico, se orienta a desarrollar las competencias de los dominios de Gestión de Proyectos de TI; contribuye directamente al logro de las Capacidades terminales CT1.2, CT2.1, CT2.2, y CT2.4, CT3.3 del perfil de egreso.',
                'unidad_competencia' => 'Gestiona proyectos de tecnologías de la información y comunicación que promueve el desarrollo del ciclo de vida de los proyectos describiendo sus procesos relacionados y la identificación de los principales elementos del cuerpo de conocimientos en la dirección de proyectos tecnológicos utilizando una guía metodológica estándar de buenas prácticas valorando el uso de un lenguaje común para la discusión, redacción y aplicación de la gestión de proyectos.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 5,
                'periodo_id' => 5,
                'visado' => 0
            ],


            #Sistemas operativos
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico - práctico, que está orientada a proporcionar al estudiante conceptos de administración de recursos básicos de un equipo informático y es de suma importancia que los estudiantes que cursan la carrera profesional de Ingeniería de Sistemas, aprovechen los conocimientos impartidos en este curso, para poder explotar y personalizar al máximo estos recursos básicos (procesador, memoria, archivos y dispositivos de e/s), quienes son controlados específicamente por los sistemas operativos, contribuye al logro de la capacidad CT3.3.',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 6,
                'periodo_id' => 5,
                'visado' => 0
            ],


            #Ingenieria de requerimientos
            [
                'sumilla' => 'La experiencia curricular de Ingeniería de Requerimientos es de naturaleza teórico-práctico, se orienta a desarrollar en el estudiante la capacidad de generar especificaciones correctas que representen y describan con claridad y de manera unívoca el comportamiento del sistema, a partir de las necesidades del negocio, demostrando ética en el uso de normas y estándares. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.1, CT3.2 y CT3.4',
                'unidad_competencia' => 'Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Concepto de requerimientos. El proceso de requerimientos, Despegue del proyecto, Caso de usos manejado por eventos, Requerimientos funcionales, Requerimientos no funcionales, Ajuste de los criterios, Escritura de los requerimientos, Mejora de la funcionalidad del proyecto, Escenarios, Prototipos para los requerimientos. Reutilización de los requerimientos. Revisión de los requerimientos. La experiencia curricular de Ingeniería de Requerimientos será útil para que el estudiante sea capaz de identificar y analizar de forma adecuada los requerimientos de un proyecto de desarrollo de soluciones informáticas en las organizaciones.',
                'competencia_general' => 'El estudiante determina, analiza y especifica los requerimientos a través del estudio de las necesidades de un proyecto de software para cualquier dominio del problema realizando el descubrimiento, documentación y mantenimiento de los requerimientos para un producto determinado, asegurando que los requerimientos del sistema estén completos, sean consistentes, relevantes y abarquen completamente las necesidades requeridas.',
                'carrera_id' => 1,
                'curso_id' => 7,
                'periodo_id' => 5,
                'visado' => 0
            ],


            #Sistemas inteligentes
            [
                'sumilla' => 'La experiencia curricular de Sistemas Inteligentes, se orienta a desarrollar las competencias de los dominios de Desarrollo de Software y Gestión de Proyectos de TI en sus Capacidades terminales CT2.1, CT2.2, CT2.3, CT2.4, CT2.5, CT3.1, CT3.2, CT3.3 respectivamente del perfil de egreso. La experiencia curricular de Sistemas Inteligentes proporciona a los egresados de la carrera la aplicación de técnicas para el desarrollo de software llamado Sistema Inteligente para su posterior implantación en dispositivos a los cuales elevará a la categoría de Agente Inteligente.',
                'unidad_competencia' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'competencia_general' => 'DESARROLLA su pensamiento crítico aplicado en la solución de problemas en un contexto globalizado, haciendo uso de la tecnología de la información.',
                'carrera_id' => 1,
                'curso_id' => 8,
                'periodo_id' => 5,
                'visado' => 0
            ],


            #Ingenieria de software I
            [
                'sumilla' => 'La experiencia curricular de Ingeniería del Software I es de naturaleza teórico-práctico, se orienta a desarrollar en el estudiante la capacidad de aplicar métodos, metodologías, procedimientos en el desarrollo de productos software de calidad. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.2, CT3.2, CT3.3 y CT3.4',
                'unidad_competencia' => 'Gestiona efectivamente la planificación, análisis, diseño, implementación, ejecución, prueba, implantación, administración y control de proyectos de tecnologías y sistemas de información que promueven el aprovechamiento racional de los recursos informáticos de una organización empresarial, la gestión de su gobernabilidad y servicios de tecnologías de información, la gestión del desarrollo de software, la gestión de su infraestructura y comunicaciones y la investigación científica, contribuyendo a creación de valor y la mejora continua de sus procesos clave del negocio y la seguridad de la información valorando la importancia del desarrollo económico, social y ambiental de las nuevas generaciones digitales.',
                'competencia_general' => 'DESARROLLA su pensamiento crítico aplicado en la solución de problemas en un contexto globalizado, haciendo uso de la tecnología de la información.',
                'carrera_id' => 1,
                'curso_id' => 9,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Metodologia de la investigacion
            [
                'sumilla' => 'La experiencia curricular de Metodología de la Investigación Científica es de naturaleza teórico-práctico, se orienta a desarrollar las competencias del dominio de Investigación Científica; contribuye directamente al logro de las capacidades terminales UC5-CT5.1, CT5.2, CT5.3, CT5.4, CT5.5 del perfil de egreso. Esta experiencia curricular promueve en el alumno la capacidad de desarrollar competencias investigativas, que le sirven de base, para desarrollar proyectos de investigación durante su proceso de formación y ejercicio profesional. La experiencia curricular de Metodología de la Investigación Científica, contiene conceptos de investigación científica, tipos y clasificación de investigación, el método científico, ¿Cómo empezar a investigar?, epistemología de la investigación científica, definición del problema, diseño de investigación, técnicas y herramientas para la recolección de datos, estructura formal de un informe de investigación, elaboración del proyecto de investigación.',
                'unidad_competencia' => 'Aplica la investigación para la elaboración y desarrollo de proyectos tecnológicos, de proyección y responsabilidad social utilizando la metodología de la investigación científica que permite la identificación de una realidad problemática de ámbito local, regional o nacional, el establecimiento de una hipótesis, la definición de objetivos, el desarrollo de una solución viable, el análisis y discusión de los resultados obtenidos valorando su importancia como parte del camino profesional antes, durante y después de lograr la profesión.',
                'competencia_general' => 'Comprende y evalúa el impacto de las soluciones a problemas complejos de ingeniería en un contexto global, económico, ambiental y social.',
                'carrera_id' => 1,
                'curso_id' => 10,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Planeamiento estrategico de la informacion
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico - práctico, que está orientada a proporcionar al estudiante el desarrollo de competencias y habilidades que le permita la elaboración exitosa de un plan estratégico de TI desde su definición y organización inicial hasta la formulación de planes de acción. Asimismo, busca consolidar las competencias profesionales en planeación estratégica para el logro de la capacidad CT3.4. aplicando códigos de buenas prácticas para la elaboración de planes estratégicos de tecnologías de información.',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Se desenvuelve eficazmente como individuo, como miembro de un equipo de trabajo, y en entornos multidisciplinarios y reconoce la necesidad del aprendizaje permanente y la capacidad para encararlo en el más amplio contexto de los cambios tecnológicos.',
                'carrera_id' => 1,
                'curso_id' => 11,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Gestion de servicio de TIC
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico - práctico, que está orientada a proporcionar al estudiante los conocimientos necesarios para la gestión de los servicios de tecnologías de información, dominando su ciclo de vida, fases y procesos aplicando el estándar de buenas prácticas de ITIL para lograr entregar servicios de tecnologías de información de gran valor y performance para las organizaciones, contribuye al logro de la capacidad CT1.5. Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Estrategia del servicio de TI, diseño del servicio de TI, transición del servicio de TI, operación del servicio de TI y mejora continua del servicio de TI.',
                'unidad_competencia' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'competencia_general' => 'Gestiona sus habilidades investigativas utilizando el razonamiento lógico y matemático, la habilidad informática, la comunicación efectiva, el saber popular y el conocimiento científico-tecnológico para aportar solución teórica y práctica a los problemas diversos de la región y del país.',
                'carrera_id' => 1,
                'curso_id' => 12,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Redes y comunicaciones I
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico - práctico, que está orientada a proporcionar al estudiante en la investigación de modernas tecnologías, así como de entender que si dos máquinas están interconectadas significa que son capaces de intercambiar información. El modo de intercambiar información puede ser a través de un medio eléctrico, óptico o el aire. El curso está orientado a poder entender conceptualmente los distintos términos utilizados en redes de computadoras y poder enseñarles a los estudiantes a planificar, diseñar, implementar y administrar una red de computadoras, contribuye al logro de la capacidad CT4.1,CT4.2,CT4.5 Y CT4.6.',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 13,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Seguridad de la informacion
            [
                'sumilla' => 'Es una experiencia curricular de naturaleza teórico-práctico, que está orientada a proporcionar al estudiante el poder identificar, determinar y manejar los riesgos y amenazas a la información, entender los procesos y mecanismos existentes para mantener una ventaja competitiva asegurando la integridad, confidencialidad y disponibilidad de la información. Al finalizar el curso el estudiante podrá crear una conciencia de la seguridad de las Comunicaciones/TI de una organización, desarrollar planes y acciones para crear procesos para la protección y seguridad de la información, tener un buen entendimiento de las arquitecturas técnicas y sus limitaciones, manejar un plan de seguridad y administrar las diferentes funciones, entender los estándares internacionales en seguridad de la información, entender los procesos para obtener la certificación de seguridad y, entender las necesidades de seguridad en los diferentes ambientes de negocios, contribuye al logro de la capacidad CT4.6. Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Dominios, objetivos y controles de seguridad de la norma internacional ISO/IEC 27002 vigente',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicados en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 14,
                'periodo_id' => 5,
                'visado' => 0
            ],
            
            
            #Marketing y medios sociales
            [
                'sumilla' => 'La experiencia curricular de Marketing y Medios Sociales es de naturaleza teórico-práctico, se orienta a desarrollar en el estudiante la capacidad liderar un proyecto digital aplicando las principales estrategias del marketing digital de acuerdo con los objetivos de negocio que se buscan alcanzar. Los Conocimientos y desarrollo práctico del curso contribuyen directamente al logro de las Capacidades Terminales CT1.1 y CT1.2',
                'unidad_competencia' => 'Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: el marketing digital, principales conceptos, el plan de marketing digital, la publicidad online, social media, marketing en buscadores, estrategias SEO y SEM, ecommerce y la analítica digital',
                'competencia_general' => 'Gestiona efectivamente la administración y control de proyectos de tecnologías y sistemas de información que promueven el aprovechamiento racional de los recursos informáticos de una organización empresarial, la gestión de su gobernabilidad y servicios de tecnologías de información, la gestión del desarrollo de software, la gestión de su infraestructura y comunicaciones y la investigación científica, contribuyendo a creación de valor y la mejora continua de sus procesos clave del negocio y la seguridad de la información valorando la importancia del desarrollo económico, social y ambiental de las nuevas generaciones digitales.',
                'carrera_id' => 1,
                'curso_id' => 15,
                'periodo_id' => 5,
                'visado' => 0
            ],
            
            
            #Ingenieria de software II
            [
                'sumilla' => 'Se ha organizado el desarrollo de la experiencia curricular en los siguientes bloques temáticos: Ingeniería de software, el proceso de desarrollo del software, modelos de proceso de desarrollo del software, metodologías inherentes al desarrollo de software, Gestión de Proyectos de software, planeación y calendarización del proyecto, medidas, métricas e indicadores, requerimientos del software: funcionales y no funcionales, requerimientos del usuario y del sistema; modelado del análisis, modelado funcional y modelado del flujo de información, diseño de datos, diseño arquitectónico, diseño de la interfaz gráfica del usuario; garantía de calidad del software, técnicas de prueba del software, estrategias de prueba del software, mantenimiento del software y gestión de configuraciones.',
                'unidad_competencia' => 'Gestiona efectivamente la planificación, análisis, diseño, implementación, ejecución, prueba, implantación, administración y control de proyectos de tecnologías y sistemas de información que promueven el aprovechamiento racional de los recursos informáticos de una organización empresarial, la gestión de su gobernabilidad y servicios de tecnologías de información, la gestión del desarrollo de software, la gestión de su infraestructura y comunicaciones y la investigación científica, contribuyendo a creación de valor y la mejora continua de sus procesos clave del negocio y la seguridad de la información valorando la importancia del desarrollo económico, social y ambiental de las nuevas generaciones digitales.',
                'competencia_general' => 'DESARROLLA su pensamiento crítico aplicado en la solución de problemas en un contexto globalizado, haciendo uso de la tecnología de la información.',
                'carrera_id' => 1,
                'curso_id' => 16,
                'periodo_id' => 5,
                'visado' => 0
            ],
            
            
            #Inteligencia de negocios
            [
                'sumilla' => 'La experiencia curricular de Inteligencia de Negocios es de naturaleza teórico-práctico, se orienta a desarrollar las competencias para el desarrollo de soluciones de información para toma de decisiones; contribuye directamente al logro de las Capacidades terminales CT1.2, CT1.6, CT2.1, CT2.2, y CT2.4, del perfil de egreso. Esta experiencia curricular permitirá al estudiante plantear estrategias al interior de las empresas y soportar estratégicamente el proceso de toma de decisiones basado en el desarrollo de un sistema de información. La experiencia curricular de Inteligencia de Negocios, comprende las etapas de definición de requerimientos estratégicos, elaboración de análisis dimensionales, modelamiento y diseño dimensional, Implementación de un DataMart. ETL, Construcción de Aplicaciones y análisis de la información.',
                'unidad_competencia' => 'Además, contribuye al desarrollo de la competencia para comunicarse eficazmente, mediante la comprensión y redacción de informes eficaces y documentación de diseño, la realización de exposiciones eficaces, y la transmisión y recepción de instrucciones claras.',
                'competencia_general' => 'El estudiante determina, analiza y especifica los requerimientos estratégicos a través del estudio de las necesidades de un proyecto de software para cualquier dominio del problema de toma de decisiones basado en información, realizando el descubrimiento, documentación y mantenimiento de los requerimientos para transformarlos en un modelo dimensional, asegurando que los requerimientos del sistema estén completos, sean consistentes, relevantes y abarquen completamente las necesidades estratégicas requeridas.',
                'carrera_id' => 1,
                'curso_id' => 17,
                'periodo_id' => 5,
                'visado' => 0
            ],


            #Internet de las cosas
            [
                'sumilla' => 'La experiencia curricular de internet de las Cosas es de naturaleza Teórica-Práctico de aplicación directa de los conocimientos adquiridos en las asignaturas previas, que permite brindar conocimientos para implementar aplicaciones de interconectividad de diversos dispositivos inteligentes (tablet, smartphone, y pc) y de dispositivos de software embebido (sensores y microcontroladores)  conectados a través de Internet, ,con fines de monitoreo, control y automatización de los diversos procesos domésticos, empresariales y de infraestructura  (ciudades inteligentes, manufactura, etc.). Los Conocimientos y desarrollo práctico de la experiencia curricular contribuyen directamente al logro de las Capacidades Terminales CT2.4, CT4.4, CT4.5 y CT4.6',
                'unidad_competencia' => 'Gestiona la infraestructura y comunicaciones que promueve el planeamiento, análisis, diseño, implementación, administración y la seguridad de los distintos sistemas de comunicación, los recursos informáticos de los sistemas operativos, las diversas plataformas tecnológicas y los niveles físico-lógico de los las redes informáticas empresariales utilizando una guía metodológica estándar de buenas prácticas valorando la importancia del procesamiento de comunicación en un entorno cliente-servidor y/o distribuido.',
                'competencia_general' => 'Comprende y evalúa el impacto de las soluciones a problemas complejos de ingeniería en un contexto global, económico, ambiental y social (I-h)',
                'carrera_id' => 1,
                'curso_id' => 18,
                'periodo_id' => 5,
                'visado' => 0
            ],


            #ELECTIVOS
            #PRIMER AÑO
            #Transformacion digital
            [
                'sumilla' => 'La experiencia curricular de Transformación Digital es de naturaleza teórico-práctico, se orienta a desarrollar las competencias del dominio de Gestión de Gobierno y Servicios de TI; contribuye directamente al logro de las Capacidades Terminales CT1.1 y CT1.5 del Perfil de Egreso.',
                'unidad_competencia' => 'Esta experiencia curricular permite al estudiante comprender el proceso por el cual las organizaciones reorganizan sus métodos de trabajo y estrategias para obtener más beneficios, gracias a la digitalización de procesos y a la implementación dinámica de nuevas tecnologías.',
                'competencia_general' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'carrera_id' => 1,
                'curso_id' => 19,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Transformacion digital
            [
                'sumilla' => 'La experiencia curricular de Negocios Electrónicos es de naturaleza teórico-práctico, se orienta a desarrollar las competencias del dominio de Gestión de Gobierno y Servicios de TI; contribuye directamente al logro de las Capacidades Terminales CT1.1 y CT1.2 del Perfil de Egreso.',
                'unidad_competencia' => 'Esta experiencia curricular permite al estudiante comprender el proceso por el cual las organizaciones automatizan y hacen eficientes-eficaces sus procesos de negocio internos y externos, de manera que sean competitivas y, se posibilite la realización de negocios vía electrónica con otras organizaciones que, en la actualidad, en su gran mayoría, están inmersas de alguna u otra forma en el mundo virtual.',
                'competencia_general' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'carrera_id' => 1,
                'curso_id' => 20,
                'periodo_id' => 1,
                'visado' => 1
            ],


            #Arquitectura basada en microservicios
            [
                'sumilla' => 'La experiencia curricular de Arquitectura Basade en Microservicios es de naturaleza teórico–práctico, se orienta a desarrollar las competencias del dominio de Gestión de Gobierno y Servicios de TI; contribuye directamente al logro de las Capacidades terminales CT1.1, CT1.2 y CT1.3 del perfil de egreso.',
                'unidad_competencia' => 'Gestiona proyectos de tecnologías de la información y comunicación que promueve el desarrollo del ciclo de vida de los proyectos describiendo sus procesos relacionados y la identificación de los principales elementos del cuerpo de conocimientos en la dirección de proyectos tecnológicos utilizando una guía metodológica estándar de buenas prácticas valorando el uso de un lenguaje común para la discusión, redacción y aplicación de la gestión de proyectos.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicados a un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 21,
                'periodo_id' => 2,
                'visado' => 1
            ],

            
            #SEGUNDO AÑO
            #Transformacion digital
            [
                'sumilla' => 'La experiencia curricular de Transformación Digital es de naturaleza teórico-práctico, se orienta a desarrollar las competencias del dominio de Gestión de Gobierno y Servicios de TI; contribuye directamente al logro de las Capacidades Terminales CT1.1 y CT1.5 del Perfil de Egreso.',
                'unidad_competencia' => 'Esta experiencia curricular permite al estudiante comprender el proceso por el cual las organizaciones reorganizan sus métodos de trabajo y estrategias para obtener más beneficios, gracias a la digitalización de procesos y a la implementación dinámica de nuevas tecnologías.',
                'competencia_general' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'carrera_id' => 1,
                'curso_id' => 19,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Transformacion digital
            [
                'sumilla' => 'La experiencia curricular de Negocios Electrónicos es de naturaleza teórico-práctico, se orienta a desarrollar las competencias del dominio de Gestión de Gobierno y Servicios de TI; contribuye directamente al logro de las Capacidades Terminales CT1.1 y CT1.2 del Perfil de Egreso.',
                'unidad_competencia' => 'Esta experiencia curricular permite al estudiante comprender el proceso por el cual las organizaciones automatizan y hacen eficientes-eficaces sus procesos de negocio internos y externos, de manera que sean competitivas y, se posibilite la realización de negocios vía electrónica con otras organizaciones que, en la actualidad, en su gran mayoría, están inmersas de alguna u otra forma en el mundo virtual.',
                'competencia_general' => 'Gestiona un plan de gobierno y servicios de tecnologías de información que promueve el alineamiento, planeación, organización, construcción, adquisición, implantación, entrega, servicio, soporte, supervisión, evaluación y valoración de la gestión de tecnologías de información, así como la evaluación, dirección y supervisión del gobierno tecnológico utilizando marcos de referencia y/o trabajo y/o buenas prácticas valorando el alineamiento estratégico y la creación de valor en las organizaciones empresariales.',
                'carrera_id' => 1,
                'curso_id' => 20,
                'periodo_id' => 4,
                'visado' => 1
            ],


            #Arquitectura basada en microservicios
            [
                'sumilla' => 'La experiencia curricular de Arquitectura Basade en Microservicios es de naturaleza teórico–práctico, se orienta a desarrollar las competencias del dominio de Gestión de Gobierno y Servicios de TI; contribuye directamente al logro de las Capacidades terminales CT1.1, CT1.2 y CT1.3 del perfil de egreso.',
                'unidad_competencia' => 'Gestiona proyectos de tecnologías de la información y comunicación que promueve el desarrollo del ciclo de vida de los proyectos describiendo sus procesos relacionados y la identificación de los principales elementos del cuerpo de conocimientos en la dirección de proyectos tecnológicos utilizando una guía metodológica estándar de buenas prácticas valorando el uso de un lenguaje común para la discusión, redacción y aplicación de la gestión de proyectos.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicados a un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 21,
                'periodo_id' => 5,
                'visado' => 0
            ],

            #Ingenieria de datos II
            [
                'sumilla' => 'La experiencia curricular de Ingeniería de datos II es de naturaleza teórico-práctico, se orienta a desarrollar las competencias de los dominios de Gestión de Proyectos de TI; contribuye directamente al logro de las Capacidades terminales CT1.2, CT2.1, CT2.2, y CT2.4, CT3.3 del perfil de egreso.',
                'unidad_competencia' => 'Gestiona proyectos de tecnologías de la información y comunicación que promueve el desarrollo del ciclo de vida de los proyectos describiendo sus procesos relacionados y la identificación de los principales elementos del cuerpo de conocimientos en la dirección de proyectos tecnológicos utilizando una guía metodológica estándar de buenas prácticas valorando el uso de un lenguaje común para la discusión, redacción y aplicación de la gestión de proyectos.',
                'competencia_general' => 'Gestiona creativamente procesos orientados a la solución de problemas científicos, tecnológicos y humanísticos, aplicadas en un contexto interdisciplinario a través de la investigación e innovación.',
                'carrera_id' => 1,
                'curso_id' => 5,
                'periodo_id' => 3,
                'visado' => 1
            ],

            
        ];
        Silabo::insert($Silabo);
    }
}
