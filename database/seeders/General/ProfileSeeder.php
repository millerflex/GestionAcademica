<?php

namespace Database\Seeders\General;

use App\Models\General\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        $docentes = [
            [
                'nombres' => 'Administrador',
                'apellidos' => 'Administrador',
                'profesion' => 'Administrador',
                'correo_institucional' => 'Administrador@unitru.edu.pe',
                'user_id' => '1',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User1.jpg',
            ],[
                'nombres' => 'Alberto Carlos',
                'apellidos' => 'Mendoza de los Santos',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'amendozad@unitru.edu.pe',
                'user_id' => '2',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User2.jpg',
            ],[
                'nombres' => 'Oscar Romel',
                'apellidos' => 'Alcántara Moreno',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'oalcantara@unitru.edu.pe',
                'user_id' => '3',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User3.jpg',
            ],[
                'nombres' => 'Juan Pedro',
                'apellidos' => 'Santos Fernández',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'jsantos@unitru.edu.pe',
                'user_id' => '4',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User4.jpg',
            ],[
                'nombres' => 'Ricardo Dario',
                'apellidos' => 'Mendoza Rivera',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'rmendoza@unitru.edu.pe',
                'user_id' => '5',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User5.jpg',
            ],[
                'nombres' => 'Luis Enrique',
                'apellidos' => 'Boy Chavil',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'lboy@unitru.edu.pe',
                'user_id' => '6',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User6.jpg',
            ],[
                'nombres' => 'Robert Jerry',
                'apellidos' => 'Sanchez Ticona',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'rsanchez@unitru.edu.pe',
                'user_id' => '7',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User7.jpg',
            ],[
                'nombres' => 'Cesar',
                'apellidos' => 'Arellano Salazar',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'carellano@unitru.edu.pe',
                'user_id' => '8',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User8.jpg',
            ],[
                'nombres' => 'Jose Alberto',
                'apellidos' => 'Gomez Avila',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'jgomez@unitru.edu.pe',
                'user_id' => '9',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User9.jpg',
            ],[
                'nombres' => 'Marcelino',
                'apellidos' => 'Torres Villanueva',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'mtorres@unitru.edu.pe',
                'user_id' => '10',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User10.jpg',
            ],[
                'nombres' => 'Juan Carlos',
                'apellidos' => 'Obando Roldan',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'jobando@unitru.edu.pe',
                'user_id' => '11',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User11.jpg',
            ],[
                'nombres' => 'David Emerson',
                'apellidos' => 'Agreda Gamboa',
                'profesion' => 'Ingeniero de Sistemas',
                'correo_institucional' => 'dagreda@unitru.edu.pe',
                'user_id' => '12',
                'carrera_id' => '1',
                'url_imagen' => '\image\img_profiles\User12.jpg',
            ],
        ];

        Profile::insert($docentes);
    }
}
