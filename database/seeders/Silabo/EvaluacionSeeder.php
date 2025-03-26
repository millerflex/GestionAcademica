<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Evaluacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Evaluacion = [
            #PRIMER AÑO
            #Arquitectura y organizacion de computadoras
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 1
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros);',
                'silabo_id' => 1
            ],[
                'evaluacion' => 'Al valorar los resultados y/o productos se debe de tener en cuenta una ponderación específica por unidad',
                'silabo_id' => 1
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PT=Promedio simple de laboratorios, EO=Examen objetivo, ST=Sustentación de trabajo, EXPO=Exposición grupal e Informe Monográfico.',
                'silabo_id' => 1
            ],


            #Ingenieria de datos I
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 2
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros);',
                'silabo_id' => 2
            ],[
                'evaluacion' => 'Al valorar los resultados y/o productos se debe de tener en cuenta una ponderación específica según los instrumentos de evaluación empleados. Los promedios de unidad quedarán a criterio del docente, quién debe utilizar como mínimo tres instrumentos de evaluación.',
                'silabo_id' => 2
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TE=Trabajo de exposición, EP=Examen practico',
                'silabo_id' => 2
            ],


            #Tecnologias web
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 3
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva',
                'silabo_id' => 3
            ],[
                'evaluacion' => 'Al valorar los resultados y/o productos se debe de tener en cuenta una ponderación específica según los instrumentos de evaluación empleados. Los promedios de unidad quedarán a criterio del docente, quién debe utilizar como mínimo tres instrumentos de evaluación.',
                'silabo_id' => 3
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Promedio de participación en foros digitales, TAD=Trabajo de aplicación digital, ELD=Examen de laboratorio digital.',
                'silabo_id' => 3
            ],


            #Sistemas de informacion
            [
                'evaluacion' => 'La evaluación a los estudiantes puede ser de inicio o diagnóstica, de proceso o formativa y de resultado o sumativa. Para la MODALIDAD NO PRESENCIAL, se recomienda dar mayor valoración a la evaluación de proceso, consistente en evaluar las tareas, así como la participación a través de los foros, chats, etc., también tener en cuenta las actividades de responsabilidad social e investigación formativa, con su instrumento de evaluación pertinente. Se puede usar adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 4
            ],[
                'evaluacion' => 'Al valorar los productos académicos virtuales se debe tener en cuenta una ponderación específica según los instrumentos de evaluación empleados. Se deben utilizar instrumentos de evaluación por unidad. La fórmula siguiente permite calcular el promedio promocional donde: PU= Promedio de unidad EL = Examen de Laboratorio ET = Examen Teórico PT= Notas de Trabajos',
                'silabo_id' => 4
            ],


            #Ingenieria de datos II
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias',
                'silabo_id' => 5
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 5
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TE=Trabajo de exposición, EP=Examen practico',
                'silabo_id' => 5
            ],


            #Sistemas operativos
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 6
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 6
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PT=Promedio simple de laboratorios, EO=Examen objetivo, ST=Sustentación de trabajo, EXPO=Exposición grupal e Informe Monográfico.',
                'silabo_id' => 6
            ],


            #Ingenieria de requerimientos
            [
                'evaluacion' => 'La evaluación a los estudiantes puede ser de inicio o diagnóstica, de proceso o formativa y de resultado o sumativa. Para la MODALIDAD NO PRESENCIAL, se recomienda dar mayor valoración a la evaluación de proceso, consistente en evaluar las tareas, así como la participación a través de los foros, chats, etc., también tener en cuenta las actividades de responsabilidad social e investigación formativa, con su instrumento de evaluación pertinente. Se puede usar adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 7
            ],[
                'evaluacion' => 'Al valorar los productos académicos virtuales se debe tener en cuenta una ponderación específica según los instrumentos de evaluación empleados. Se deben utilizar instrumentos de evaluación por unidad. La fórmula siguiente permite calcular el promedio promocional donde: PU= Promedio de unidad EL = Examen de Laboratorio ET = Examen Teórico PT= Notas de Trabajos',
                'silabo_id' => 7
            ],


            #Sistemas inteligentes
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 8
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 8
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de 00.',
                'silabo_id' => 8
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TI=Trabajo de investigación digital, EE=Examen escrito digital, EL=Examen de laboratorio digital, PR=Proyecto real digital, AV=Promedio de notas de avances digitales.',
                'silabo_id' => 8
            ],


            #Ingenieria de software I
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias',
                'silabo_id' => 9
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 9
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de cero (00)',
                'silabo_id' => 9
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TID=Trabajo de investigación (elaboración de un artículo de revisión), EE=Examen escrito.',
                'silabo_id' => 9
            ],


            #Metodologia de la investigacion cientifica
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 10
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 10
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TID=Trabajo de investigación, EE=Examen escrito.',
                'silabo_id' => 10
            ],


            #Planeamiento estrategico de la informacion
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 11
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 11
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TID=Trabajo de investigación, EE=Examen escrito.',
                'silabo_id' => 11
            ],


            #Gestion de servicio de TIC
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 12
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 12
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de 00.',
                'silabo_id' => 12
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TAD=Trabajo de aplicación digital, ELD=Examen de laboratorio digital.',
                'silabo_id' => 12
            ],

            
            #Redes y comunicaciones I
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 13
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 13
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PT=Promedio simple de laboratorios, EO=Examen objetivo, ST=Sustentación de trabajo, EXPO=Exposición grupal e Informe Monográfico.',
                'silabo_id' => 13
            ],



            #Seguridad de la informacion
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 14
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 14
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de 00.',
                'silabo_id' => 14
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TAD=Trabajo de aplicación digital, ELD=Examen de laboratorio digital.',
                'silabo_id' => 14
            ],
            
            
            #Marketing digital y Medios sociales
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias',
                'silabo_id' => 15
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 15
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de cero (00).',
                'silabo_id' => 15
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TID=Trabajo de investigación, EE=Examen escrito.',
                'silabo_id' => 15
            ],
            
            
            #Ingeniería de software II
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias',
                'silabo_id' => 16
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 16
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de cero (00).',
                'silabo_id' => 16
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TI=Trabajo de investigación, EE=Examen escrito,',
                'silabo_id' => 16
            ],
            
            
            #Inteligencia de negocios
            [
                'evaluacion' => 'La evaluación a los estudiantes puede ser de inicio o diagnóstica, de proceso o formativa y de resultado o sumativa. Para la MODALIDAD NO PRESENCIAL, se recomienda dar mayor valoración a la evaluación de proceso, consistente en evaluar las tareas, así como la participación a través de los foros, chats, etc., también tener en cuenta las actividades de responsabilidad social e investigación formativa, con su instrumento de evaluación pertinente.',
                'silabo_id' => 17
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TAD=Trabajo de aplicación digital, ELD=Examen de laboratorio digital.',
                'silabo_id' => 17
            ],


            #Internet de las cosas
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 18
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 18
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de 00.',
                'silabo_id' => 18
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: INF=Informe digital, EP= Exposición del Proyecto, PS=Practicas Semanales.',
                'silabo_id' => 18
            ],


            #SEGUNDO AÑO
            #Arquitectura y organizacion de computadoras
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 19
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros);',
                'silabo_id' => 19
            ],[
                'evaluacion' => 'Al valorar los resultados y/o productos se debe de tener en cuenta una ponderación específica por unidad',
                'silabo_id' => 19
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TI=Trabajo de investigación, EE=Examen escrito, EP=Examen practico',
                'silabo_id' => 19
            ],


            #Ingenieria de datos I
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 20
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros);',
                'silabo_id' => 20
            ],[
                'evaluacion' => 'Al valorar los resultados y/o productos se debe de tener en cuenta una ponderación específica según los instrumentos de evaluación empleados. Los promedios de unidad quedarán a criterio del docente, quién debe utilizar como mínimo tres instrumentos de evaluación.',
                'silabo_id' => 20
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TE=Trabajo de exposición, EP=Examen practico',
                'silabo_id' => 20
            ],


            #Tecnologias web
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 21
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva',
                'silabo_id' => 21
            ],[
                'evaluacion' => 'Al valorar los resultados y/o productos se debe de tener en cuenta una ponderación específica según los instrumentos de evaluación empleados. Los promedios de unidad quedarán a criterio del docente, quién debe utilizar como mínimo tres instrumentos de evaluación.',
                'silabo_id' => 21
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Promedio de participación en foros digitales, TAD=Trabajo de aplicación digital, ELD=Examen de laboratorio digital.',
                'silabo_id' => 21
            ],


            #Sistemas de informacion
            [
                'evaluacion' => 'La evaluación a los estudiantes puede ser de inicio o diagnóstica, de proceso o formativa y de resultado o sumativa. Para la MODALIDAD NO PRESENCIAL, se recomienda dar mayor valoración a la evaluación de proceso, consistente en evaluar las tareas, así como la participación a través de los foros, chats, etc., también tener en cuenta las actividades de responsabilidad social e investigación formativa, con su instrumento de evaluación pertinente. Se puede usar adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 22
            ],[
                'evaluacion' => 'Al valorar los productos académicos virtuales se debe tener en cuenta una ponderación específica según los instrumentos de evaluación empleados. Se deben utilizar instrumentos de evaluación por unidad. La fórmula siguiente permite calcular el promedio promocional donde: PU= Promedio de unidad EL = Examen de Laboratorio ET = Examen Teórico PT= Notas de Trabajos',
                'silabo_id' => 22
            ],


            #Ingenieria de datos II
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias',
                'silabo_id' => 23
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 23
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TE=Trabajo de exposición, EP=Examen practico',
                'silabo_id' => 23
            ],


            #Sistemas operativos
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 24
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 24
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TI=Trabajo de investigación, EE=Examen escrito, EP=Examen practico.',
                'silabo_id' => 24
            ],


            #Ingenieria de requerimientos
            [
                'evaluacion' => 'La evaluación a los estudiantes puede ser de inicio o diagnóstica, de proceso o formativa y de resultado o sumativa. Para la MODALIDAD NO PRESENCIAL, se recomienda dar mayor valoración a la evaluación de proceso, consistente en evaluar las tareas, así como la participación a través de los foros, chats, etc., también tener en cuenta las actividades de responsabilidad social e investigación formativa, con su instrumento de evaluación pertinente. Se puede usar adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 25
            ],[
                'evaluacion' => 'Al valorar los productos académicos virtuales se debe tener en cuenta una ponderación específica según los instrumentos de evaluación empleados. Se deben utilizar instrumentos de evaluación por unidad. La fórmula siguiente permite calcular el promedio promocional donde: PU= Promedio de unidad EL = Examen de Laboratorio ET = Examen Teórico PT= Notas de Trabajos',
                'silabo_id' => 25
            ],


            #Sistemas inteligentes
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 26
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 26
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de 00.',
                'silabo_id' => 26
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TI=Trabajo de investigación digital, EE=Examen escrito digital, EL=Examen de laboratorio digital, PR=Proyecto real digital, AV=Promedio de notas de avances digitales.',
                'silabo_id' => 26
            ],


            #Ingenieria de software I
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias',
                'silabo_id' => 27
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 27
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de cero (00)',
                'silabo_id' => 27
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TID=Trabajo de investigación (elaboración de un artículo de revisión), EE=Examen escrito.',
                'silabo_id' => 27
            ],


            #Metodologia de la investigacion cientifica
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 28
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 28
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TID=Trabajo de investigación, EE=Examen escrito.',
                'silabo_id' => 28
            ],


            #Planeamiento estrategico de la informacion
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 29
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 29
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TID=Trabajo de investigación, EE=Examen escrito.',
                'silabo_id' => 29
            ],


            #Gestion de servicio de TIC
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 30
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 30
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de 00.',
                'silabo_id' => 30
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TAD=Trabajo de aplicación digital, ELD=Examen de laboratorio digital.',
                'silabo_id' => 30
            ],

            
            #Redes y comunicaciones I
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias.',
                'silabo_id' => 31
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 31
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TI=Trabajo de investigación, EE=Examen escrito, EP=Examen practico.',
                'silabo_id' => 31
            ],



            #Seguridad de la informacion
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 32
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 32
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de 00.',
                'silabo_id' => 32
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TAD=Trabajo de aplicación digital, ELD=Examen de laboratorio digital.',
                'silabo_id' => 32
            ],
            
            
            #Marketing digital y Medios sociales
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias',
                'silabo_id' => 33
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 33
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de cero (00).',
                'silabo_id' => 33
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TID=Trabajo de investigación, EE=Examen escrito.',
                'silabo_id' => 33
            ],
            
            
            #Ingeniería de software II
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias',
                'silabo_id' => 34
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones orales, presentación de trabajos escritos, ensayos, exposiciones, mapas conceptuales, infografías, maquetas, entre otros); y sirve para recoger información, tomar decisiones oportunas e informar a los estudiantes y autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 34
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de cero (00).',
                'silabo_id' => 34
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TA=Tareas académicas, TI=Trabajo de investigación, EE=Examen escrito,',
                'silabo_id' => 34
            ],
            
            
            #Inteligencia de negocios
            [
                'evaluacion' => 'La evaluación a los estudiantes puede ser de inicio o diagnóstica, de proceso o formativa y de resultado o sumativa. Para la MODALIDAD NO PRESENCIAL, se recomienda dar mayor valoración a la evaluación de proceso, consistente en evaluar las tareas, así como la participación a través de los foros, chats, etc., también tener en cuenta las actividades de responsabilidad social e investigación formativa, con su instrumento de evaluación pertinente.',
                'silabo_id' => 35
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TAD=Trabajo de aplicación digital, ELD=Examen de laboratorio digital.',
                'silabo_id' => 35
            ],


            #Internet de las cosas
            [
                'evaluacion' => 'La evaluación por competencias se caracteriza por ser progresiva, formativa y auténtica; por lo que es de procesos e integral, y se orienta a asegurar el logro de los aprendizajes esperados, capacidades y competencias respectivas.',
                'silabo_id' => 36
            ],[
                'evaluacion' => 'Se evalúan las evidencias concretas a través de las cuales los estudiantes demuestran haber logrado aprendizajes (exposiciones examen escrito digital y examen de laboratorio digital); y sirven para recoger información, tomar decisiones oportunas e informar a los propios estudiantes y a las autoridades para las acciones de mejora respectiva.',
                'silabo_id' => 36
            ],[
                'evaluacion' => 'Si el estudiante no se presenta a la exposición de algún trabajo de investigación o del proyecto real, tarea de teoría, práctica o laboratorio, examen de teoría, examen de laboratorio o presentación de avance del proyecto real, se hará acreedor a la nota de 00.',
                'silabo_id' => 36
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: INF=Informe digital, EP= Exposición del Proyecto, PS=Practicas Semanales.',
                'silabo_id' => 36
            ],


            #ELECTIVOS
            #PRIMER AÑO
            #Transformacion digital
            [
                'evaluacion' => 'Para la modalidad no presencial, se dará mayor valoración a la evaluación de proceso consistente en evaluar las tareas, así como la participación a través de foros, chats, etc.',
                'silabo_id' => 37
            ],[
                'evaluacion' => 'Se tendrá en cuenta las actividades de investigación formativa, con su instrumento de valuación pertinente.',
                'silabo_id' => 37
            ],[
                'evaluacion' => 'Se usará adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 37
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TI=Trabajo de investigacion, ELD=Examen de laboratorio digital.',
                'silabo_id' => 37
            ],


            #Negocios electronicos
            [
                'evaluacion' => 'Para la modalidad no presencial, se dará mayor valoración a la evaluación de proceso consistente en evaluar las tareas, así como la participación a través de foros, chats, etc.',
                'silabo_id' => 38
            ],[
                'evaluacion' => 'Se tendrá en cuenta las actividades de investigación formativa, con su instrumento de valuación pertinente.',
                'silabo_id' => 38
            ],[
                'evaluacion' => 'Se usará adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 38
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TI=Trabajo de investigacion, ELD=Examen de laboratorio digital.',
                'silabo_id' => 38
            ],


            #Arquitectura basada en microservicios
            [
                'evaluacion' => 'Para la modalidad no presencial, se dará mayor valoración a la evaluación de proceso consistente en evaluar las tareas, así como la participación a través de foros, chats, etc.',
                'silabo_id' => 39
            ],[
                'evaluacion' => 'Se tendrá en cuenta las actividades de investigación formativa, con su instrumento de valuación pertinente.',
                'silabo_id' => 39
            ],[
                'evaluacion' => 'Se usará adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 39
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TE= Trabajo de Exposición (Proyecto integrador), PC=Práctica calificada, EP=Examen parcial.',
                'silabo_id' => 39
            ],


            #SEGUNDO AÑO
            #Transformacion digital
            [
                'evaluacion' => 'Para la modalidad no presencial, se dará mayor valoración a la evaluación de proceso consistente en evaluar las tareas, así como la participación a través de foros, chats, etc.',
                'silabo_id' => 40
            ],[
                'evaluacion' => 'Se tendrá en cuenta las actividades de investigación formativa, con su instrumento de valuación pertinente.',
                'silabo_id' => 40
            ],[
                'evaluacion' => 'Se usará adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 40
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TI=Trabajo de investigacion, ELD=Examen de laboratorio digital.',
                'silabo_id' => 40
            ],


            #Negocios electronicos
            [
                'evaluacion' => 'Para la modalidad no presencial, se dará mayor valoración a la evaluación de proceso consistente en evaluar las tareas, así como la participación a través de foros, chats, etc.',
                'silabo_id' => 41
            ],[
                'evaluacion' => 'Se tendrá en cuenta las actividades de investigación formativa, con su instrumento de valuación pertinente.',
                'silabo_id' => 41
            ],[
                'evaluacion' => 'Se usará adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 41
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: PFD=Examen de unidad y participación en foros digitales, TI=Trabajo de investigacion, ELD=Examen de laboratorio digital.',
                'silabo_id' => 41
            ],


            #Arquitectura basada en microservicios
            [
                'evaluacion' => 'Para la modalidad no presencial, se dará mayor valoración a la evaluación de proceso consistente en evaluar las tareas, así como la participación a través de foros, chats, etc.',
                'silabo_id' => 42
            ],[
                'evaluacion' => 'Se tendrá en cuenta las actividades de investigación formativa, con su instrumento de valuación pertinente.',
                'silabo_id' => 42
            ],[
                'evaluacion' => 'Se usará adicionalmente la autoevaluación (se evalúa el propio estudiante), la coevaluación (entre pares) y la heteroevaluación (por parte del docente).',
                'silabo_id' => 42
            ],[
                'evaluacion' => 'Se considerará las siguientes evidencias de evaluación: TE= Trabajo de Exposición (Proyecto integrador), PC=Práctica calificada, EP=Examen parcial.',
                'silabo_id' => 42
            ],
        ];
        Evaluacion::insert($Evaluacion);
    }
}
