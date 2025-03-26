<?php

namespace App\Http\Controllers\Admin\Administracion;

use App\Http\Controllers\Controller;
use App\Models\General\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    const PAGINACION=10;

    public function index()
    {
        $periodos = Periodo::paginate($this::PAGINACION);
        $periodo = Periodo::where('activo', '1')->first();

        $semestres = [
            'I' => ['semestre' => 'II', 'año_incremento' => 0],
            'II' => ['semestre' => 'EXT', 'año_incremento' => 1],
            'EXT' => ['semestre' => 'I', 'año_incremento' => 0],
        ];

        $semestre = $semestres[$periodo->semestre]['semestre'];
        $año = $periodo->año + $semestres[$periodo->semestre]['año_incremento'];

        return view('admin.administracion.periodos.index', compact('periodos', 'semestre', 'año'));
    }


    public function store()
    {
        
    }
}
