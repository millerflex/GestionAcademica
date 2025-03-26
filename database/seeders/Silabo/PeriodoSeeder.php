<?php

namespace Database\Seeders\Silabo;

use App\Models\General\Periodo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Temporada = [
            [
                'año' => '2023',
                'semestre' => 'I',
                'inicio' => '2023-04-17',
                'termino' => '2023-08-11',
                'activo' => '0'
            ],[
                'año' => '2023',
                'semestre' => 'II',
                'inicio' => '2023-09-04',
                'termino' => '2023-12-29',
                'activo' => '0'
            ],[
                'año' => '2024',
                'semestre' => 'EXT',
                'inicio' => '2024-05-06',
                'termino' => '2024-08-30',
                'activo' => '0'
            ],[
                'año' => '2024',
                'semestre' => 'I',
                'inicio' => '2024-05-06',
                'termino' => '2024-08-30',
                'activo' => '0'
            ],[
                'año' => '2024',
                'semestre' => 'II',
                'inicio' => '2024-09-09',
                'termino' => '2024-12-27',
                'activo' => '1'
            ]
        ];

        Periodo::insert($Temporada);
    }
}
