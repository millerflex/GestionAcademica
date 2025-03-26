<?php

namespace Database\Seeders\Debiles;

use App\Models\AperturaCurso\AperturaCurso;
use App\Models\Carga\Aula;
use App\Models\Carga\CargaHNL;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carga\TipoCHNL;
use App\Models\Carga\DetalleCHNL;
use Carbon\Carbon;
use App\Models\Carga\Documento;
use League\CommonMark\Node\Block\Document;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Tipos1 = [
            [
                'nombre'=> 'COMPLEMENTARIA',
                'descripcion'=> 'XD'
            ],[
                'nombre'=> 'ADMINISTRATIVA',
                'descripcion'=> 'XD'
            ]

        ];

        $aulas = [
            [
                'nombre' => 'Aula 101',
                'piso' => 1,
                'referencia' => 'Cerca del pasillo principal',
                'lugar' => 'Edificio A',
                'capacidad' => 30,
                'edificio' => 'Edificio A'
            ],
            [
                'nombre' => 'Aula 202',
                'piso' => 2,
                'referencia' => 'Cerca de la escalera central',
                'lugar' => 'Edificio B',
                'capacidad' => 40,
                'edificio' => 'Edificio B'
            ],
            [
                'nombre' => 'Aula 303',
                'piso' => 3,
                'referencia' => 'Frente al ascensor',
                'lugar' => 'Edificio C',
                'capacidad' => 50,
                'edificio' => 'Edificio C'
            ],
        ];
        
        $Cargas = [
            [
                'periodo_id' => 5,
                'profile_id' => 2,
                'tipo_id' => 1,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 2,
                'tipo_id' => 2,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 3,
                'tipo_id' => 1,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 3,
                'tipo_id' => 2,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 4,
                'tipo_id' => 1,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 4,
                'tipo_id' => 2,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 5,
                'tipo_id' => 1,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 5,
                'tipo_id' => 2,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 6,
                'tipo_id' => 1,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 6,
                'tipo_id' => 2,
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 7,
                'tipo_id' => 1,  
                'horasSemanales' => 0,
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 7,
                'tipo_id' => 2, 
                'horasSemanales' => 0, 
            ]
            ];

        $detalle_chnl = [
            // Carga 1: COMPLEMENTARIA
            [
                'carga_hnl_id' => 1,
                'nombre' => 'PREPARACIÓN Y EVALUACIÓN',
                'descripcion' => 'Actividades relacionadas con la preparación y evaluación de procesos académicos.',
                'horasSemanales' => 5
            ],
            [
                'carga_hnl_id' => 1,
                'nombre' => 'ASESORÍA DE TESIS Y EXÁMENES PROFESIONALES',
                'descripcion' => 'Asesoría y orientación a los estudiantes en la realización de sus tesis y exámenes profesionales.',
                'horasSemanales' => 2
            ],
            [
                'carga_hnl_id' => 1,
                'nombre' => 'FORMACIÓN ACADÉMICA Y CAPACITACIÓN',
                'descripcion' => 'Capacitación y formación académica continua para estudiantes y docentes.',
                'horasSemanales' => 4
            ],
        
            // Carga 3: COMPLEMENTARIA
            [
                'carga_hnl_id' => 3,
                'nombre' => 'INVESTIGACIÓN',
                'descripcion' => 'Desarrollo y ejecución de proyectos de investigación científica.',
                'horasSemanales' => 6
            ],
            [
                'carga_hnl_id' => 3,
                'nombre' => 'RESPONSABILIDAD SOCIAL UNIVERSITARIA',
                'descripcion' => 'Actividades de impacto social en comunidades externas a la universidad.',
                'horasSemanales' => 3
            ],
        
            // Carga 5: COMPLEMENTARIA
            [
                'carga_hnl_id' => 5,
                'nombre' => 'PREPARACIÓN Y EVALUACIÓN',
                'descripcion' => 'Actividades relacionadas con la preparación y evaluación de procesos académicos.',
                'horasSemanales' => 5
            ],
            [
                'carga_hnl_id' => 5,
                'nombre' => 'FORMACIÓN ACADÉMICA Y CAPACITACIÓN',
                'descripcion' => 'Capacitación y formación académica continua para estudiantes y docentes.',
                'horasSemanales' => 4
            ],
            [
                'carga_hnl_id' => 5,
                'nombre' => 'AUTOEVALUACIÓN Y/O ACREDITACIÓN DE LA ESCUELA PROFESIONAL',
                'descripcion' => 'Actividades relacionadas con la autoevaluación y los procesos de acreditación de programas académicos.',
                'horasSemanales' => 3
            ],
        
            // Carga 7: COMPLEMENTARIA
            [
                'carga_hnl_id' => 7,
                'nombre' => 'INVESTIGACIÓN',
                'descripcion' => 'Desarrollo y ejecución de proyectos de investigación científica.',
                'horasSemanales' => 6
            ],
            [
                'carga_hnl_id' => 7,
                'nombre' => 'RESPONSABILIDAD SOCIAL UNIVERSITARIA',
                'descripcion' => 'Actividades de impacto social en comunidades externas a la universidad.',
                'horasSemanales' => 3
            ],
            [
                'carga_hnl_id' => 7,
                'nombre' => 'ASESORÍA DE TESIS Y EXÁMENES PROFESIONALES',
                'descripcion' => 'Asesoría y orientación a los estudiantes en la realización de sus tesis y exámenes profesionales.',
                'horasSemanales' => 2
            ],
        
            // Carga 2: ADMINISTRATIVA
            [
                'carga_hnl_id' => 2,
                'nombre' => 'COMITÉS O COMISIONES ESPECIALES',
                'descripcion' => 'Actividades relacionadas con la participación en comités y comisiones especiales.',
                'horasSemanales' => 3
            ],
        
            // Carga 4: ADMINISTRATIVA
            [
                'carga_hnl_id' => 4,
                'nombre' => 'COMITÉS O COMISIONES ESPECIALES',
                'descripcion' => 'Actividades relacionadas con la participación en comités y comisiones especiales.',
                'horasSemanales' => 3
            ],
        
            // Carga 6: ADMINISTRATIVA
            [
                'carga_hnl_id' => 6,
                'nombre' => 'COMITÉS O COMISIONES ESPECIALES',
                'descripcion' => 'Actividades relacionadas con la participación en comités y comisiones especiales.',
                'horasSemanales' => 3
            ],
            [
                'carga_hnl_id' => 6,
                'nombre' => 'ACTIVIDADES DE GOBIERNO O DE AUTORIDAD',
                'descripcion' => 'Desarrollo de actividades relacionadas con el gobierno o autoridad dentro de la institución.',
                'horasSemanales' => 2
            ],
            [
                'carga_hnl_id' => 6,
                'nombre' => 'ACTIVIDADES DE GESTIÓN INSTITUCIONAL',
                'descripcion' => 'Tareas vinculadas con la gestión y administración institucional.',
                'horasSemanales' => 4
            ],
        ];
        
        // Definir los posibles estados
        $estados = ['O', 'A', 'P'];

        // Definir los documentos como un array con corchetes
        $documentos = [
            [
                'periodo_id' => 5,
                'profile_id' => 2,
                'tipo' => 'F01-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 2,
                'tipo' => 'F02-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 2,
                'tipo' => 'F03-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 3,
                'tipo' => 'F01-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 3,
                'tipo' => 'F02-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 3,
                'tipo' => 'F03-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 4,
                'tipo' => 'F01-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 4,
                'tipo' => 'F02-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 4,
                'tipo' => 'F03-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 5,
                'tipo' => 'F01-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 5,
                'tipo' => 'F02-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 5,
                'tipo' => 'F03-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 6,
                'tipo' => 'F01-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 6,
                'tipo' => 'F02-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ],
            [
                'periodo_id' => 5,
                'profile_id' => 6,
                'tipo' => 'F03-CAD',
                'estado' => $estados[array_rand($estados)], // Estado aleatorio
                'fecha_generacion' => Carbon::create(2024, 12, rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59)) // Fecha aleatoria en diciembre 2024
            ]
        ];
    
        $aperturas = [
            [
                'curso_id' => 2,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 3,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 4,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 5,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 6,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 7,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 8,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 9,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 10,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 11,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 12,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
            [
                'curso_id' => 13,
                'periodo_id' => 5,
                'usuario_id' => 1,
            ],
        ];



        TipoCHNL::insert($Tipos1);
        CargaHNL::insert($Cargas);
        DetalleCHNL::insert($detalle_chnl);
        Aula::insert($aulas);
        AperturaCurso::insert($aperturas);
        Documento::insert($documentos);
    }
}
