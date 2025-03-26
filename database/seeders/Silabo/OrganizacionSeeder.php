<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Organizacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Organizacion = [
            #PRIMER AÑO
            #Arquitectura y organizacion de computadoras
            [
                'hte1u' => '4',
                'hte2u' => '4',
                'hte3u' => '4',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '16',
                'hre1u' => '5',
                'hre2u' => '5',
                'hre3u' => '5',
                'silabo_id' => 1
            ],


            #Ingenieria de datos I
            [
                'hte1u' => '15',
                'hte2u' => '15',
                'hte3u' => '21',
                'hpr1u' => '14',
                'hpr2u' => '14',
                'hpr3u' => '14',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 2
            ],


            #Tecnologias web
            [
                'hte1u' => '8',
                'hte2u' => '8',
                'hte3u' => '8',
                'hpr1u' => '12',
                'hpr2u' => '12',
                'hpr3u' => '12',
                'hre1u' => '5',
                'hre2u' => '5',
                'hre3u' => '10',
                'silabo_id' => 3
            ],


            #Sistemas de informacion
            [
                'hte1u' => '10',
                'hte2u' => '10',
                'hte3u' => '10',
                'hpr1u' => '20',
                'hpr2u' => '20',
                'hpr3u' => '20',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 4
            ],


            #Ingenieria de datos II
            [
                'hte1u' => '15',
                'hte2u' => '15',
                'hte3u' => '21',
                'hpr1u' => '14',
                'hpr2u' => '14',
                'hpr3u' => '14',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 5
            ],
            

            #Sistemas operativos
            [
                'hte1u' => '4',
                'hte2u' => '4',
                'hte3u' => '4',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '16',
                'hre1u' => '5',
                'hre2u' => '5',
                'hre3u' => '5',
                'silabo_id' => 6
            ],


            #Ingenieria de requerimientos
            [
                'hte1u' => '15',
                'hte2u' => '15',
                'hte3u' => '15',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '10',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '1',
                'silabo_id' => 7
            ],


            #Sistemas inteligentes
            [
                'hte1u' => '14',
                'hte2u' => '14',
                'hte3u' => '17',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '12',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 8
            ],


            #Ingenieria de software I
            [
                'hte1u' => '10',
                'hte2u' => '10',
                'hte3u' => '12',
                'hpr1u' => '20',
                'hpr2u' => '20',
                'hpr3u' => '22',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '2',
                'silabo_id' => 9
            ],


            #Metodologia de la investigacion cientifica
            [
                'hte1u' => '10',
                'hte2u' => '10',
                'hte3u' => '10',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '10',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '2',
                'silabo_id' => 10
            ],


            #Planeamiento estrategico de la informacion
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '6',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '12',
                'hre1u' => '10',
                'hre2u' => '10',
                'hre3u' => '12',
                'silabo_id' => 11
            ],


            #Gestion de servicio de TIC
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '6',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '20',
                'hre1u' => '4',
                'hre2u' => '4',
                'hre3u' => '9',
                'silabo_id' => 12
            ],  


            #Redes y comunicaciones I
            [
                'hte1u' => '4',
                'hte2u' => '4',
                'hte3u' => '4',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '16',
                'hre1u' => '5',
                'hre2u' => '5',
                'hre3u' => '5',
                'silabo_id' => 13
            ],


            #Seguridad de la informacion
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '5',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '16',
                'hre1u' => '4',
                'hre2u' => '4',
                'hre3u' => '9',
                'silabo_id' => 14
            ],
            

            #Marketing digital y Medios sociales
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '5',
                'hpr1u' => '20',
                'hpr2u' => '20',
                'hpr3u' => '20',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '2',
                'silabo_id' => 15
            ],
            
            
            #Ingeniería de software II
            [
                'hte1u' => '8',
                'hte2u' => '8',
                'hte3u' => '10',
                'hpr1u' => '20',
                'hpr2u' => '20',
                'hpr3u' => '24',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '2',
                'silabo_id' => 16
            ],
            
            
            #Inteligencia de negocios
            [
                'hte1u' => '15',
                'hte2u' => '15',
                'hte3u' => '15',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '10',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '1',
                'silabo_id' => 17
            ],


            #Internet de las cosas
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '5',
                'hpr1u' => '5',
                'hpr2u' => '5',
                'hpr3u' => '5',
                'hre1u' => '15',
                'hre2u' => '15',
                'hre3u' => '15',
                'silabo_id' => 18
            ],


            #SEGUNDO AÑO
            #Arquitectura y organizacion de computadoras
            [
                'hte1u' => '4',
                'hte2u' => '4',
                'hte3u' => '4',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '16',
                'hre1u' => '5',
                'hre2u' => '5',
                'hre3u' => '5',
                'silabo_id' => 19
            ],


            #Ingenieria de datos I
            [
                'hte1u' => '15',
                'hte2u' => '15',
                'hte3u' => '21',
                'hpr1u' => '14',
                'hpr2u' => '14',
                'hpr3u' => '14',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 20
            ],


            #Tecnologias web
            [
                'hte1u' => '8',
                'hte2u' => '8',
                'hte3u' => '8',
                'hpr1u' => '12',
                'hpr2u' => '12',
                'hpr3u' => '12',
                'hre1u' => '5',
                'hre2u' => '5',
                'hre3u' => '10',
                'silabo_id' => 21
            ],


            #Sistemas de informacion
            [
                'hte1u' => '10',
                'hte2u' => '10',
                'hte3u' => '10',
                'hpr1u' => '20',
                'hpr2u' => '20',
                'hpr3u' => '20',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 22
            ],


            #Ingenieria de datos II
            [
                'hte1u' => '15',
                'hte2u' => '15',
                'hte3u' => '21',
                'hpr1u' => '14',
                'hpr2u' => '14',
                'hpr3u' => '14',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 23
            ],
            

            #Sistemas operativos
            [
                'hte1u' => '4',
                'hte2u' => '4',
                'hte3u' => '4',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '16',
                'hre1u' => '5',
                'hre2u' => '5',
                'hre3u' => '5',
                'silabo_id' => 24
            ],


            #Ingenieria de requerimientos
            [
                'hte1u' => '15',
                'hte2u' => '15',
                'hte3u' => '15',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '10',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '1',
                'silabo_id' => 25
            ],


            #Sistemas inteligentes
            [
                'hte1u' => '14',
                'hte2u' => '14',
                'hte3u' => '17',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '12',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 26
            ],


            #Ingenieria de software I
            [
                'hte1u' => '10',
                'hte2u' => '10',
                'hte3u' => '12',
                'hpr1u' => '20',
                'hpr2u' => '20',
                'hpr3u' => '22',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '2',
                'silabo_id' => 27
            ],


            #Metodologia de la investigacion cientifica
            [
                'hte1u' => '10',
                'hte2u' => '10',
                'hte3u' => '10',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '10',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '2',
                'silabo_id' => 28
            ],


            #Planeamiento estrategico de la informacion
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '6',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '12',
                'hre1u' => '10',
                'hre2u' => '10',
                'hre3u' => '12',
                'silabo_id' => 29
            ],


            #Gestion de servicio de TIC
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '6',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '20',
                'hre1u' => '4',
                'hre2u' => '4',
                'hre3u' => '9',
                'silabo_id' => 30
            ],  


            #Redes y comunicaciones I
            [
                'hte1u' => '4',
                'hte2u' => '4',
                'hte3u' => '4',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '16',
                'hre1u' => '5',
                'hre2u' => '5',
                'hre3u' => '5',
                'silabo_id' => 31
            ],


            #Seguridad de la informacion
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '5',
                'hpr1u' => '16',
                'hpr2u' => '16',
                'hpr3u' => '16',
                'hre1u' => '4',
                'hre2u' => '4',
                'hre3u' => '9',
                'silabo_id' => 32
            ],
            

            #Marketing digital y Medios sociales
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '5',
                'hpr1u' => '20',
                'hpr2u' => '20',
                'hpr3u' => '20',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '2',
                'silabo_id' => 33
            ],
            
            
            #Ingeniería de software II
            [
                'hte1u' => '8',
                'hte2u' => '8',
                'hte3u' => '10',
                'hpr1u' => '20',
                'hpr2u' => '20',
                'hpr3u' => '24',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '2',
                'silabo_id' => 34
            ],
            
            
            #Inteligencia de negocios
            [
                'hte1u' => '15',
                'hte2u' => '15',
                'hte3u' => '15',
                'hpr1u' => '10',
                'hpr2u' => '10',
                'hpr3u' => '10',
                'hre1u' => '2',
                'hre2u' => '2',
                'hre3u' => '1',
                'silabo_id' => 35
            ],


            #Internet de las cosas
            [
                'hte1u' => '5',
                'hte2u' => '5',
                'hte3u' => '5',
                'hpr1u' => '5',
                'hpr2u' => '5',
                'hpr3u' => '5',
                'hre1u' => '15',
                'hre2u' => '15',
                'hre3u' => '15',
                'silabo_id' => 36
            ],

            
            #ELECTIVOS
            #PRIMER AÑO
            #Tranformacion digital
            [
                'hte1u' => '12',
                'hte2u' => '10',
                'hte3u' => '8',
                'hpr1u' => '12',
                'hpr2u' => '10',
                'hpr3u' => '8',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 37
            ],


            #Negocios electronicos
            [
                'hte1u' => '12',
                'hte2u' => '10',
                'hte3u' => '8',
                'hpr1u' => '12',
                'hpr2u' => '10',
                'hpr3u' => '8',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 38
            ],


            #Arquitectura basada en microservicios
            [
                'hte1u' => '8',
                'hte2u' => '8',
                'hte3u' => '8',
                'hpr1u' => '8',
                'hpr2u' => '8',
                'hpr3u' => '8',
                'hre1u' => '4',
                'hre2u' => '4',
                'hre3u' => '8',
                'silabo_id' => 39
            ],


            #SEGUNDO AÑO
            #Tranformacion digital
            [
                'hte1u' => '12',
                'hte2u' => '10',
                'hte3u' => '8',
                'hpr1u' => '12',
                'hpr2u' => '10',
                'hpr3u' => '8',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 40
            ],


            #Negocios electronicos
            [
                'hte1u' => '12',
                'hte2u' => '10',
                'hte3u' => '8',
                'hpr1u' => '12',
                'hpr2u' => '10',
                'hpr3u' => '8',
                'hre1u' => '1',
                'hre2u' => '1',
                'hre3u' => '1',
                'silabo_id' => 41
            ],


            #Arquitectura basada en microservicios
            [
                'hte1u' => '8',
                'hte2u' => '8',
                'hte3u' => '8',
                'hpr1u' => '8',
                'hpr2u' => '8',
                'hpr3u' => '8',
                'hre1u' => '4',
                'hre2u' => '4',
                'hre3u' => '8',
                'silabo_id' => 42
            ],
        ];
        Organizacion::insert($Organizacion);
    }
}
