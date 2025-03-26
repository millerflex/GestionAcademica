<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Tutoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Tutoria = [
            #PRIMER AÑO
            #Arquitectura y organizacion de computadoras
            [
                'dia' => 'Lunes',
                'horario' => '11:00 a 13:00',
                'lugar' => 'Aula virtual mediante chat',
                'silabo_id' => 1
            ],


            #Ingenieria de datos I
            [
                'dia' => 'Jueves',
                'horario' => '15:00 a 18:00',
                'lugar' => 'Vía correo electrónico: lboy@unitru.edu.pe',
                'silabo_id' => 2
            ],


            #Tecnologias web
            [
                'dia' => 'Viernes',
                'horario' => '9:00 a 11:00',
                'lugar' => 'Video conferencia.',
                'silabo_id' => 3
            ],


            #Sistemas de informacion
            [
                'dia' => 'Jueves',
                'horario' => '9:00 a 11:00',
                'lugar' => 'Video conferencia.',
                'silabo_id' => 4
            ],


            #Ingenieria de datos II
            [
                'dia' => 'Viernes',
                'horario' => '17:00 a 20:00',
                'lugar' => 'Vía correo electrónico: lboy@unitru.edu.pe',
                'silabo_id' => 5
            ],


            #Sistemas operativos
            [
                'dia' => 'Lunes',
                'horario' => '13:00 a 14:00',
                'lugar' => 'Aula virtual mediante chat.',
                'silabo_id' => 6
            ],


            #Ingenieria de requerimientos
            [
                'dia' => 'Jueves',
                'horario' => '17:00 a 18:00',
                'lugar' => 'Virtual rsanchezt@unitru.edu.pe',
                'silabo_id' => 7
            ],


            #Sistemas inteligentes
            [
                'dia' => 'Viernes',
                'horario' => '20:00 a 21:00',
                'lugar' => 'Virtual mtorres@unitru.edu.pe',
                'silabo_id' => 8
            ],


            #Ingenieria de software I
            [
                'dia' => 'Viernes',
                'horario' => '18:00 a 19:00',
                'lugar' => 'Cubiculo',
                'silabo_id' => 9
            ],


            #Metodologia de la investigacion
            [
                'dia' => 'Lunes',
                'horario' => '15:00 a 18:00',
                'lugar' => 'Plataforma virtual',
                'silabo_id' => 10
            ],


            #Planeamiento estrategico de la informacion
            [
                'dia' => 'Martes',
                'horario' => '15:00 a 18:00',
                'lugar' => 'Cubículo del docente ',
                'silabo_id' => 11
            ],


            #Gestion de servicio de TIC
            [
                'dia' => 'Martes',
                'horario' => '15:00 a 18:00',
                'lugar' => 'Cubículo del docente ',
                'silabo_id' => 12
            ],


            #Redes y comunicaciones I
            [
                'dia' => 'Martes',
                'horario' => '14:00 a 15:00',
                'lugar' => 'Laboratorio de Computo. Cubículo Docente. Plataforma Virtual Google Meet',
                'silabo_id' => 13
            ],


            #Seguridad de informacion
            [
                'dia' => 'Jueves',
                'horario' => '12:00 a 13:00',
                'lugar' => 'Vía correo electrónico: amendozad@unitru.edu.pe / WhatsApp / Google meet / Zoom/ Cubículo docente. ',
                'silabo_id' => 14
            ],
            

            #Marketing y medios sociales
            [
                'dia' => 'Miercoles',
                'horario' => '18:00 a 20:00',
                'lugar' => 'Cubiculo',
                'silabo_id' => 15
            ],
            
            
            #Ingenieria de software II
            [
                'dia' => 'Viernes',
                'horario' => '8:00 a 10:00',
                'lugar' => 'Cubiculo',
                'silabo_id' => 16
            ],
            
            
            #Inteligencia de negocios
            [
                'dia' => 'Jueves',
                'horario' => '14:00 a 17:00',
                'lugar' => 'Virtual - rmendoza@unitru.edu.pe ',
                'silabo_id' => 17
            ],


            #Internet de las cosas
            [
                'dia' => 'Jueves',
                'horario' => '7:00 a 10:00',
                'lugar' => 'Campus virtual',
                'silabo_id' => 18
            ],


            #SEGUNDO AÑO
            #Arquitectura y organizacion de computadoras
            [
                'dia' => 'Lunes',
                'horario' => '11:00 a 13:00',
                'lugar' => 'Aula virtual mediante chat',
                'silabo_id' => 19
            ],


            #Ingenieria de datos I
            [
                'dia' => 'Jueves',
                'horario' => '15:00 a 18:00',
                'lugar' => 'Vía correo electrónico: lboy@unitru.edu.pe',
                'silabo_id' => 20
            ],


            #Tecnologias web
            [
                'dia' => 'Viernes',
                'horario' => '9:00 a 11:00',
                'lugar' => 'Video conferencia.',
                'silabo_id' => 21
            ],


            #Sistemas de informacion
            [
                'dia' => 'Jueves',
                'horario' => '9:00 a 11:00',
                'lugar' => 'Video conferencia.',
                'silabo_id' => 22
            ],


            #Ingenieria de datos II
            [
                'dia' => 'Viernes',
                'horario' => '17:00 a 20:00',
                'lugar' => 'Vía correo electrónico: lboy@unitru.edu.pe',
                'silabo_id' => 23
            ],


            #Sistemas operativos
            [
                'dia' => 'Lunes',
                'horario' => '13:00 a 14:00',
                'lugar' => 'Aula virtual mediante chat.',
                'silabo_id' => 24
            ],


            #Ingenieria de requerimientos
            [
                'dia' => 'Jueves',
                'horario' => '17:00 a 18:00',
                'lugar' => 'Virtual rsanchezt@unitru.edu.pe',
                'silabo_id' => 25
            ],


            #Sistemas inteligentes
            [
                'dia' => 'Viernes',
                'horario' => '20:00 a 21:00',
                'lugar' => 'Virtual mtorres@unitru.edu.pe',
                'silabo_id' => 26
            ],


            #Ingenieria de software I
            [
                'dia' => 'Viernes',
                'horario' => '18:00 a 19:00',
                'lugar' => 'Cubiculo',
                'silabo_id' => 27
            ],


            #Metodologia de la investigacion
            [
                'dia' => 'Lunes',
                'horario' => '15:00 a 18:00',
                'lugar' => 'Plataforma virtual',
                'silabo_id' => 28
            ],


            #Planeamiento estrategico de la informacion
            [
                'dia' => 'Martes',
                'horario' => '15:00 a 18:00',
                'lugar' => 'Cubículo del docente ',
                'silabo_id' => 29
            ],


            #Gestion de servicio de TIC
            [
                'dia' => 'Martes',
                'horario' => '15:00 a 18:00',
                'lugar' => 'Cubículo del docente ',
                'silabo_id' => 30
            ],


            #Redes y comunicaciones I
            [
                'dia' => 'Martes',
                'horario' => '14:00 a 15:00',
                'lugar' => 'Laboratorio de Computo. Cubículo Docente. Plataforma Virtual Google Meet',
                'silabo_id' => 31
            ],


            #Seguridad de informacion
            [
                'dia' => 'Jueves',
                'horario' => '12:00 a 13:00',
                'lugar' => 'Vía correo electrónico: amendozad@unitru.edu.pe / WhatsApp / Google meet / Zoom/ Cubículo docente. ',
                'silabo_id' => 32
            ],
            

            #Marketing y medios sociales
            [
                'dia' => 'Miercoles',
                'horario' => '18:00 a 20:00',
                'lugar' => 'Cubiculo',
                'silabo_id' => 33
            ],
            
            
            #Ingenieria de software II
            [
                'dia' => 'Viernes',
                'horario' => '8:00 a 10:00',
                'lugar' => 'Cubiculo',
                'silabo_id' => 34
            ],
            
            
            #Inteligencia de negocios
            [
                'dia' => 'Jueves',
                'horario' => '14:00 a 17:00',
                'lugar' => 'Virtual - rmendoza@unitru.edu.pe ',
                'silabo_id' => 35
            ],


            #Internet de las cosas
            [
                'dia' => 'Jueves',
                'horario' => '7:00 a 10:00',
                'lugar' => 'Campus virtual',
                'silabo_id' => 36
            ],


            #ELECTIVOS
            #PRIMER AÑO
            #Transformacion digital
            [
                'dia' => 'Viernes',
                'horario' => '13:00 a 14:00',
                'lugar' => 'Aula virtual, Correo electrónico/Chat/Foro/WhatsApp ',
                'silabo_id' => 37
            ],


            #Transformacion digital
            [
                'dia' => 'Miercoles',
                'horario' => '20:00 a 21:00',
                'lugar' => 'Aula virtual, Correo electrónico/Chat/Foro/WhatsApp ',
                'silabo_id' => 38
            ],


            #Arquitectura basada en microservicios
            [
                'dia' => 'Viernes',
                'horario' => '10:00 a 12:00',
                'lugar' => 'Correo electrónico jobando@unitru.edu.pe',
                'silabo_id' => 39
            ],


            #SEGUNDO AÑO
            #Transformacion digital
            [
                'dia' => 'Viernes',
                'horario' => '13:00 a 14:00',
                'lugar' => 'Aula virtual, Correo electrónico/Chat/Foro/WhatsApp ',
                'silabo_id' => 40
            ],


            #Transformacion digital
            [
                'dia' => 'Miercoles',
                'horario' => '20:00 a 21:00',
                'lugar' => 'Aula virtual, Correo electrónico/Chat/Foro/WhatsApp ',
                'silabo_id' => 41
            ],


            #Arquitectura basada en microservicios
            [
                'dia' => 'Viernes',
                'horario' => '10:00 a 12:00',
                'lugar' => 'Correo electrónico jobando@unitru.edu.pe',
                'silabo_id' => 42
            ],
        ];
        Tutoria::insert($Tutoria);
    }
}
