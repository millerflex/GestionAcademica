<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\General\Curso;
use App\Models\General\Periodo;
use App\Models\Silabo\Silabo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $periodo = Periodo::where('activo', '1')->first();
    
        $asignados = 0;
        $comentados = 0;
        $visados = 0;
        $enviados = 0;
    
        // Verifica si el usuario tiene los roles requeridos
        $asignados = Silabo::where('periodo_id', $periodo->id)->where('visado', 3)->count();
        $comentados = Silabo::where('periodo_id', $periodo->id)->where('visado', 2)->count();
        $visados = Silabo::where('periodo_id', $periodo->id)->where('visado', 1)->count();
        $enviados = Silabo::where('periodo_id', $periodo->id)->where('visado', 0)->count();
    
        return view('admin.index', compact('asignados', 'comentados', 'visados', 'enviados', 'periodo'));
    }
    
}
