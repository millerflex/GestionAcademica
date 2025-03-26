<?php

namespace Database\Seeders\Debiles;

use App\Models\AperturaCurso\AperturaCurso;
use App\Models\AsignacionCL\DetalleCHL;
use App\Models\Carga\Aula;
use App\Models\Carga\CargaHNL;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carga\TipoCHNL;
use App\Models\Carga\DetalleCHNL;
use Carbon\Carbon;
use App\Models\Carga\Documento;
use League\CommonMark\Node\Block\Document;

class DetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detalles = [
            [
                'IdCargaHL' => 45,
                'IdCursoAperturado' => 1,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 46,
                'IdCursoAperturado' => 2,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 47,
                'IdCursoAperturado' => 3,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 48,
                'IdCursoAperturado' => 4,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 49,
                'IdCursoAperturado' => 5,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 50,
                'IdCursoAperturado' => 6,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 51,
                'IdCursoAperturado' => 7,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 52,
                'IdCursoAperturado' => 8,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 53,
                'IdCursoAperturado' => 9,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 54,
                'IdCursoAperturado' => 10,
                'horasSemanales' => 4,
            ],
            [
                'IdCargaHL' => 55,
                'IdCursoAperturado' => 11,
                'horasSemanales' => 4,
            ]
        ];

        DetalleCHL::insert($detalles);
    }
}
