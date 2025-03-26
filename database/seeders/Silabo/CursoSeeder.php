<?php

namespace Database\Seeders\Silabo;

use App\Models\General\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Curso = [
            #PRIMER AÑO
            #CICLO 5
            [
                'nombre' => 'Arquitectura y organizacion de computadoras',
                'ciclo' => '5',
                'codigo' => '2693',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '2',
                'HL' => '2',
                'requisitos' => '2654',
                'tipo' => 'Obligatorio',
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Ingenieria de datos I',
                'ciclo' => '5',
                'codigo' => '2692',
                'creditos' => '4',
                'HT' => '2',
                'HP' => '2',
                'HL' => '4',
                'requisitos' => '2655 - 2653',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Tecnologias web',
                'ciclo' => '5',
                'codigo' => '2690',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '1',
                'HL' => '2',
                'requisitos' => '2651',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Sistemas de informacion',
                'ciclo' => '5',
                'codigo' => '2694',
                'creditos' => '4',
                'HT' => '3',
                'HP' => '4',
                'HL' => '2',
                'requisitos' => '2651 - 2655',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],


            #CICLO 6
            [
                'nombre' => 'Ingenieria de datos II',
                'ciclo' => '6',
                'codigo' => '3128',
                'creditos' => '4',
                'HT' => '3',
                'HP' => '2',
                'HL' => '4',
                'requisitos' => '2692',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Sistemas operativos',
                'ciclo' => '6',
                'codigo' => '3129',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '3',
                'HL' => '3',
                'requisitos' => '2693',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Ingenieria de requerimientos',
                'ciclo' => '6',
                'codigo' => '3130',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '2',
                'HL' => '4',
                'requisitos' => '2692 - 2694',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Sistemas inteligentes',
                'ciclo' => '6',
                'codigo' => '3126',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '1',
                'HL' => '4',
                'requisitos' => '2141 - 2693',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],
            
            
            #CICLO 7
            [
                'nombre' => 'Ingenieria de software I',
                'ciclo' => '7',
                'codigo' => '3449',
                'creditos' => '4',
                'HT' => '2',
                'HP' => '2',
                'HL' => '4',
                'requisitos' => '3130',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Metodologia de la investigacion cientifica',
                'ciclo' => '7',
                'codigo' => '3446',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '2',
                'HL' => '4',
                'requisitos' => '2142',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Planeamiento estrategico de la informacion',
                'ciclo' => '7',
                'codigo' => '3447',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '3',
                'HL' => '2',
                'requisitos' => '3127 - 3128',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Gestion de servicio de TIC',
                'ciclo' => '7',
                'codigo' => '3445',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '2',
                'HL' => '4',
                'requisitos' => '3126 - 3130',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Redes y comunicaciones I',
                'ciclo' => '7',
                'codigo' => '3448',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '1',
                'HL' => '1',
                'requisitos' => '3129',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],
            
            
            #CICLO 8
            [
                'nombre' => 'Seguridad de la infomacion',
                'ciclo' => '8',
                'codigo' => '4483',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '4',
                'HL' => '4',
                'requisitos' => '3445 - 3448',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Marketing digital y Medios sociales',
                'ciclo' => '8',
                'codigo' => '4482',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '1',
                'HL' => '4',
                'requisitos' => '2690 - 3444',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Ingeniería de software II',
                'ciclo' => '8',
                'codigo' => '4487',
                'creditos' => '4',
                'HT' => '2',
                'HP' => '1',
                'HL' => '1',
                'requisitos' => '3449',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Inteligencia de negocios',
                'ciclo' => '8',
                'codigo' => '4485',
                'creditos' => '4',
                'HT' => '3',
                'HP' => '2',
                'HL' => '4',
                'requisitos' => '3447',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Internet de las cosas',
                'ciclo' => '8',
                'codigo' => '4484',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '1',
                'HL' => '1',
                'requisitos' => '3448 - 3449',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],
            
            #ELECTIVOS
            #PRIMER AÑO
            [
                'nombre' => 'Transformacion digital',
                'ciclo' => '5',
                'codigo' => '2696',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '4',
                'HL' => '2',
                'requisitos' => '',
                'tipo' => 'Electivo'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Negocios electronicos',
                'ciclo' => '7',
                'codigo' => '3451',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '3',
                'HL' => '3',
                'requisitos' => '',
                'tipo' => 'Electivo'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Arquitectura basada en microservicios',
                'ciclo' => '8',
                'codigo' => '4489',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '4',
                'HL' => '1',
                'requisitos' => '',
                'tipo' => 'Electivo'
                ,
                 'carrera_id' => '1'
            ],

            #ELECTIVOS
            #PRIMER AÑO
            [
                'nombre' => 'Transformacion digital',
                'ciclo' => '5',
                'codigo' => '2696',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '1',
                'HL' => '1',
                'requisitos' => '',
                'tipo' => 'Electivo'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Negocios electronicos',
                'ciclo' => '7',
                'codigo' => '3451',
                'creditos' => '3',
                'HT' => '4',
                'HP' => '2',
                'HL' => '1',
                'requisitos' => '',
                'tipo' => 'Electivo'
                ,
                 'carrera_id' => '1'
            ],





            [
                'nombre' => 'Introduccion a la ingenieria de sistemas',
                'ciclo' => '1',
                'codigo' => '1939',
                'creditos' => '2',
                'HT' => '4',
                'HP' => '4',
                'HL' => '1',
                'requisitos' => '',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Introduccion a la programacion',
                'ciclo' => '1',
                'codigo' => '2347',
                'creditos' => '3',
                'HT' => '4',
                'HP' => '1',
                'HL' => '5',
                'requisitos' => '',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],

            [
                'nombre' => 'Programacion orientada a objetos',
                'ciclo' => '2',
                'codigo' => '2051',
                'creditos' => '3',
                'HT' => '4',
                'HP' => '3',
                'HL' => '1',
                'requisitos' => '1939',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],

            [
                'nombre' => 'Sistemica',
                'ciclo' => '3',
                'codigo' => '2141',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '1',
                'HL' => '1',
                'requisitos' => '1939',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Programacion Orientada a Objetos',
                'ciclo' => '3',
                'codigo' => '2145',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '4',
                'HL' => '2',
                'requisitos' => '2051',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],

            #CICLO 9
            [
                'nombre' => 'Gestion de proyectos de TIC',
                'ciclo' => '9',
                'codigo' => '4490',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '4',
                'HL' => '1',
                'requisitos' => '4484 - 3445',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Auditoria informatica',
                'ciclo' => '9',
                'codigo' => '4491',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '3',
                'HL' => '1',
                'requisitos' => '4483',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Tesis I',
                'ciclo' => '9',
                'codigo' => '4492',
                'creditos' => '4',
                'HT' => '3',
                'HP' => '4',
                'HL' => '1',
                'requisitos' => '3446 - 170 creditos aprobados',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Analitica de negocios',
                'ciclo' => '9',
                'codigo' => '4493',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '1',
                'HL' => '2',
                'requisitos' => '4482 - 4485',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Computacion en la nube',
                'ciclo' => '9',
                'codigo' => '4494',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '1',
                'HL' => '1',
                'requisitos' => '4486',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Ingenieria web',
                'ciclo' => '9',
                'codigo' => '4495',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '4',
                'HL' => '2',
                'requisitos' => '3448 - 3449',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],


            #CICLO 10
            [
                'nombre' => 'Sistemas de informacion empresarial',
                'ciclo' => '10',
                'codigo' => '4498',
                'creditos' => '4',
                'HT' => '2',
                'HP' => '4',
                'HL' => '3',
                'requisitos' => '4490',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Gobierno de TIC',
                'ciclo' => '10',
                'codigo' => '4499',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '2',
                'HL' => '4',
                'requisitos' => '4490 - 4491',
                'tipo' => 'Obligatorio'
                ,
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Tesis II',
                'ciclo' => '10',
                'codigo' => '4500',
                'creditos' => '4',
                'HT' => '3',
                'HP' => '1',
                'HL' => '1',
                'requisitos' => '4492',
                'tipo' => 'Obligatorio',
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Arquitectura empresarial',
                'ciclo' => '10',
                'codigo' => '4501',
                'creditos' => '3',
                'HT' => '3',
                'HP' => '4',
                'HL' => '3',
                'requisitos' => '4491 - 4494',
                'tipo' => 'Obligatorio',
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Aplicaciones moviles',
                'ciclo' => '10',
                'codigo' => '4503',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '4',
                'HL' => '4',
                'requisitos' => '4495',
                'tipo' => 'Obligatorio',
                 'carrera_id' => '1'
            ],[
                'nombre' => 'Practicas pre profesionales',
                'ciclo' => '10',
                'codigo' => '4504',
                'creditos' => '3',
                'HT' => '2',
                'HP' => '1',
                'HL' => '3',
                'requisitos' => '4492 - 192 creditos aprobados',
                'tipo' => 'Obligatorio',
                 'carrera_id' => '1'
            ],


        ];

        Curso::insert($Curso);
    }
}
