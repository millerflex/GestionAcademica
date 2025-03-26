<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Promedio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromedioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Promedio = [
            #PRIMER AÑO
            #Arquitectura y organizacion de computadoras
            [
                'pu1' => '0.3 PT + 0.3 EO + 0.4 EL',
                'pu2' => '0.3 PT + 0.2 EO + 0.2 EL +0.3 IM',
                'pu3' => '0.3 PT + 0.3 EO + 0.4 EXPO',
                'pp' => '0.3 PU1 + 0.3 PU2 + 0.4 PU3',
                'silabo_id' => 1
            ],


            #Ingenieria de datos I
            [
                'pu1' => '(PFD + TAD + ELD*2)/4',
                'pu2' => '(PFD + TAD*2 + ELD)/4',
                'pu3' => '(PFD + TAD*2 + ELD)/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 2
            ],


            #Tecnologias web
            [
                'pu1' => '(PFD + TAD + ELD*2)/4',
                'pu2' => '(PFD + TAD + ELD*2)/4',
                'pu3' => '(PFD + TAD + ELD*2)/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 3
            ],


            #Sistemas de informacion
            [
                'pu1' => '(2*EL + ET + 2*PT) / 5 ',
                'pu2' => '(2*EL + ET + 2*PT) / 5',
                'pu3' => '(2*EL + ET + 2*PT) / 5',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 4
            ],


            #Ingenieria de Datos II
            [
                'pu1' => '(PFD + TAD + ELD*2)/4',
                'pu2' => '(PFD + TAD*2 + ELD)/4',
                'pu3' => '(PFD + TAD*2 + ELD)/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 5
            ],


            #Sistemas operativos
            [
                'pu1' => '0.3 PT + 0.3 EO + 0.4 EL',
                'pu2' => '0.3 PT + 0.2 EO + 0.2 EL +0.3 IM',
                'pu3' => '0.3 PT + 0.3 EO + 0.4 EXPO',
                'pp' => '0.3 PU1 + 0.3 PU2 + 0.4 PU3',
                'silabo_id' => 6
            ],


            #Ingenieria de requerimientos
            [
                'pu1' => '(2*EL + ET + 2*PT) / 5',
                'pu2' => '(2*EL + ET + 2*PT) / 5',
                'pu3' => '(2*EL + ET + 2*PT) / 5',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 7
            ],


            #Sistemas inteligentes
            [
                'pu1' => '[TID + EED + ELD]/3',
                'pu2' => '[TID + EED + ELD]/3',
                'pu3' => '[AVD + PRD + PRD]/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 8
            ],


            #Ingenieria de software I
            [
                'pu1' => '(TA*1 + TI*2 + EE*3)/6',
                'pu2' => '(TA*1 + TI*2 + EE*3)/6',
                'pu3' => '(TA*1 + TI*2 + EE*3)/6',
                'pp' => 'pu1*0.3 + pu2*0.3 + pu3*0.4',
                'silabo_id' => 9
            ],


            #Metodologia de la investigacion
            [
                'pu1' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu2' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu3' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 10
            ],

            #Planeamiento estrategico de la informacion
            [
                'pu1' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu2' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu3' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 11
            ],

            
            #Gestion de servicio de TIC
            [
                'pu1' => '[PFD + TAD + ELD*2]/4 ',
                'pu2' => '[PFD + TAD + ELD*2]/4 ',
                'pu3' => '[PFD + TAD + ELD*2]/4 ',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 12
            ],


            #Redes y comunicaciones I
            [
                'pu1' => '0.3 PT + 0.3 EO + 0.4 EL',
                'pu2' => '0.3 PT + 0.2 EO + 0.2 EL +0.3 IM',
                'pu3' => '0.3 PT + 0.3 EO + 0.4 EXPO',
                'pp' => '0.3 PU1 + 0.3 PU2 + 0.4 PU3',
                'silabo_id' => 13
            ],


            #Seguridad de informacion
            [
                'pu1' => '(PFD + TAD + ELD*2)/4',
                'pu2' => '(PFD + TAD*2 + ELD)/4',
                'pu3' => '(PFD + TAD*2 + ELD)/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 14
            ],
            
            
            #Marketing digital y Medios sociales
            [
                'pu1' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu2' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu3' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 15
            ],
            
            
            #Ingenieria de software II
            [
                'pu1' => '(TA*1 + TI*2 + EE*3)/6',
                'pu2' => '(TA*1 + TI*2 + EE*3)/6',
                'pu3' => '(TA*1 + TI*2 + EE*3)/6',
                'pp' => 'pu1*0.3 + pu2*0.3 + pu3*0.4',
                'silabo_id' => 16
            ],
            
            #Inteligencia de negocios
            [
                'pu1' => '(PFD + TAD + ELD)/3',
                'pu2' => '(PFD + TAD + ELD)/3',
                'pu3' => '(PFD + TAD + ELD)/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 17
            ],


            #Internet de las cosas
            [
                'pu1' => '[INF + EP + PS]/3',
                'pu2' => '[INF + EP + PS]/3',
                'pu3' => '[INF + EP + PS]/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 18
            ],


            #SEGUNDO AÑO
            #Arquitectura y organizacion de computadoras
            [
                'pu1' => '0.3 PT + 0.3 EO + 0.4 EL',
                'pu2' => '0.3 PT + 0.2 EO + 0.2 EL +0.3 IM',
                'pu3' => '0.3 PT + 0.3 EO + 0.4 EXPO',
                'pp' => '0.3 PU1 + 0.3 PU2 + 0.4 PU3',
                'silabo_id' => 19
            ],


            #Ingenieria de datos I
            [
                'pu1' => '(PFD + TAD + ELD*2)/4',
                'pu2' => '(PFD + TAD*2 + ELD)/4',
                'pu3' => '(PFD + TAD*2 + ELD)/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 20
            ],


            #Tecnologias web
            [
                'pu1' => '(PFD + TAD + ELD*2)/4',
                'pu2' => '(PFD + TAD + ELD*2)/4',
                'pu3' => '(PFD + TAD + ELD*2)/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 21
            ],


            #Sistemas de informacion
            [
                'pu1' => '(2*EL + ET + 2*PT) / 5 ',
                'pu2' => '(2*EL + ET + 2*PT) / 5',
                'pu3' => '(2*EL + ET + 2*PT) / 5',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 22
            ],


            #Ingenieria de Datos II
            [
                'pu1' => '(PFD + TAD + ELD*2)/4',
                'pu2' => '(PFD + TAD*2 + ELD)/4',
                'pu3' => '(PFD + TAD*2 + ELD)/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 23
            ],


            #Sistemas operativos
            [
                'pu1' => '0.3 PT + 0.3 EO + 0.4 EL',
                'pu2' => '0.3 PT + 0.2 EO + 0.2 EL +0.3 IM',
                'pu3' => '0.3 PT + 0.3 EO + 0.4 EXPO',
                'pp' => '0.3 PU1 + 0.3 PU2 + 0.4 PU3',
                'silabo_id' => 24
            ],


            #Ingenieria de requerimientos
            [
                'pu1' => '(2*EL + ET + 2*PT) / 5',
                'pu2' => '(2*EL + ET + 2*PT) / 5',
                'pu3' => '(2*EL + ET + 2*PT) / 5',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 25
            ],


            #Sistemas inteligentes
            [
                'pu1' => '[TID + EED + ELD]/3',
                'pu2' => '[TID + EED + ELD]/3',
                'pu3' => '[AVD + PRD + PRD]/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 26
            ],


            #Ingenieria de software I
            [
                'pu1' => '(TA*1 + TI*2 + EE*3)/6',
                'pu2' => '(TA*1 + TI*2 + EE*3)/6',
                'pu3' => '(TA*1 + TI*2 + EE*3)/6',
                'pp' => 'pu1*0.3 + pu2*0.3 + pu3*0.4',
                'silabo_id' => 27
            ],


            #Metodologia de la investigacion
            [
                'pu1' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu2' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu3' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 28
            ],

            #Planeamiento estrategico de la informacion
            [
                'pu1' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu2' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu3' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 29
            ],

            
            #Gestion de servicio de TIC
            [
                'pu1' => '[PFD + TAD + ELD*2]/4 ',
                'pu2' => '[PFD + TAD + ELD*2]/4 ',
                'pu3' => '[PFD + TAD + ELD*2]/4 ',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 30
            ],


            #Redes y comunicaciones I
            [
                'pu1' => '0.3 PT + 0.3 EO + 0.4 EL',
                'pu2' => '0.3 PT + 0.2 EO + 0.2 EL +0.3 IM',
                'pu3' => '0.3 PT + 0.3 EO + 0.4 EXPO',
                'pp' => '0.3 PU1 + 0.3 PU2 + 0.4 PU3',
                'silabo_id' => 31
            ],


            #Seguridad de informacion
            [
                'pu1' => '(PFD + TAD + ELD*2)/4',
                'pu2' => '(PFD + TAD*2 + ELD)/4',
                'pu3' => '(PFD + TAD*2 + ELD)/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 32
            ],
            
            
            #Marketing digital y Medios sociales
            [
                'pu1' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu2' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pu3' => '[(TID*0.3 + EI*0.7) * 0.4] + EE*0.4 + TA*0.2',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 33
            ],
            
            
            #Ingenieria de software II
            [
                'pu1' => '(TA*1 + TI*2 + EE*3)/6',
                'pu2' => '(TA*1 + TI*2 + EE*3)/6',
                'pu3' => '(TA*1 + TI*2 + EE*3)/6',
                'pp' => 'pu1*0.3 + pu2*0.3 + pu3*0.4',
                'silabo_id' => 34
            ],
            
            #Inteligencia de negocios
            [
                'pu1' => '(PFD + TAD + ELD)/3',
                'pu2' => '(PFD + TAD + ELD)/3',
                'pu3' => '(PFD + TAD + ELD)/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 35
            ],


            #Internet de las cosas
            [
                'pu1' => '[INF + EP + PS]/3',
                'pu2' => '[INF + EP + PS]/3',
                'pu3' => '[INF + EP + PS]/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 36
            ],


            #ELECTIVOS
            #PRIMER AÑO
            #Transformacion digital
            [
                'pu1' => '(PFD + TI + ELD)/3',
                'pu2' => '(PFD + TI + ELD)/3',
                'pu3' => '(PFD + TI + ELD)/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 37
            ],

            
            #Negocios electronicos
            [
                'pu1' => '(PFD + TI + ELD)/3',
                'pu2' => '(PFD + TI + ELD)/3',
                'pu3' => '(PFD + TI + ELD)/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 38
            ],


            #Arquitectura basada en microservicios
            [
                'pu1' => '[TE1 + PC1 + EP1*2]/4',
                'pu2' => '[TE1 + PC1 + EP1*2]/4',
                'pu3' => '[TE1 + PC1 + EP1*2]/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 39
            ],


            #SEGUNDO AÑO
            #Transformacion digital
            [
                'pu1' => '(PFD + TI + ELD)/3',
                'pu2' => '(PFD + TI + ELD)/3',
                'pu3' => '(PFD + TI + ELD)/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 40
            ],

            
            #Negocios electronicos
            [
                'pu1' => '(PFD + TI + ELD)/3',
                'pu2' => '(PFD + TI + ELD)/3',
                'pu3' => '(PFD + TI + ELD)/3',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 41
            ],


            #Arquitectura basada en microservicios
            [
                'pu1' => '[TE1 + PC1 + EP1*2]/4',
                'pu2' => '[TE1 + PC1 + EP1*2]/4',
                'pu3' => '[TE1 + PC1 + EP1*2]/4',
                'pp' => '(pu1 + pu2 + pu3)/n',
                'silabo_id' => 42
            ],
        ];
        Promedio::insert($Promedio);
    }
}
