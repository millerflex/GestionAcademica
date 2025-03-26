<?php

namespace Database\Seeders\Silabo;

use App\Models\General\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Carrera = [
            [
                'area' => 'Estudios de Especialidad',
                'facultad' => 'Ingeniería.',
                'departamento' => 'Ingeniería de Sistemas',
                'programa' => 'Ingeniería de Sistemas'
            ]
        ];

        Carrera::insert($Carrera);
    }
}
