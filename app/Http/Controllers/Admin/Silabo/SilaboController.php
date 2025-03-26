<?php

namespace App\Http\Controllers\Admin\Silabo;

use App\Http\Controllers\Controller;
use App\Models\General\Carrera;
use App\Models\General\Curso;
use App\Models\General\Periodo;
use App\Models\General\Profile;
use App\Models\Silabo\Evaluacion;
use App\Models\Silabo\Organizacion;
use App\Models\Silabo\Programacion;
use App\Models\Silabo\Promedio;
use App\Models\Silabo\Referencia;
use App\Models\Silabo\Resultado;
use App\Models\Silabo\Silabo;
use App\Models\Silabo\SilaboDocente;
use App\Models\Silabo\SilaboResultado;
use App\Models\Silabo\Tutoria;
use App\Models\Silabo\Unidad;
use App\Models\Silabo\UnidadProgramacion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class SilaboController extends Controller
{
    const PAGINACION = 10;

    public function index(Request $request)
    {
        $periodos = Periodo::orderBy('id', 'desc')->get();

        if ($request->has('buscarpor') && $request->buscarpor) {
            $periodo = $periodos->where('id', $request->buscarpor)->first();
        } else {
            $periodo = $periodos->where('activo', '1')->first();
        }
        
        $docenteId = auth()->id();

        // Base de la consulta
        $query = DB::table('silabos')
            ->join('silabo_docentes', 'silabos.id', '=', 'silabo_docentes.silabo_id')
            ->join('cursos', 'silabos.curso_id', '=', 'cursos.id')
            ->where('silabos.periodo_id', $periodo->id)
            ->where('silabos.estado', '1')
            ->select(
                'silabos.id as id',
                'silabos.visado as visado',
                'silabo_docentes.condicion as condicion',
                'cursos.nombre as curso',
                'cursos.ciclo as ciclo',
                'silabos.comentario as comentario',
            )
            ->orderBy('silabos.id', 'ASC');

        // Agregar condición de docente si no es el administrador (ID 1)
        if ($docenteId != 1) {
            $query->where('silabo_docentes.profile_id', $docenteId);
        }

        // Ejecutar la consulta paginada
        $silabos = $query->paginate($this::PAGINACION);

        return view('admin.silabo.index', compact('silabos', 'periodos', 'periodo'));
    }

    // public function llenar(String $id)
    // {
    //     $silabo = Silabo::findOrFail($id);

    //     $summilla = $silabo->sumilla;
    //     $unidad_competencia = $silabo->unidad_competencia;
    //     $competencia_general = $silabo->competencia_general;

    //     $tut

    //     $hte1u = $silabo->organizacion->hte1u;
    //     $hte2u = $silabo->organizacion->hte2u;
    //     $hte3u = $silabo->organizacion->hte3u;
    //     $hpr1u = $silabo->organizacion->hpr1u;
    //     $hpr2u = $silabo->organizacion->hpr2u;
    //     $hpr3u = $silabo->organizacion->hpr3u;
    //     $hre1u = $silabo->organizacion->hre1u;
    //     $hre2u = $silabo->organizacion->hre2u;
    //     $hre3u = $silabo->organizacion->hre3u;

    //     $resultados = $silabo->resultados;
    // }

    public function llenar(String $id)
    {
        // Encuentra el silabo actual y carga sus relaciones
        $silabo = Silabo::findOrFail($id);
        $cursoId = $silabo->curso_id;

        // Encuentra el penúltimo silabo
        $penultimoSilabo = Silabo::with(['promedio', 'tutoria', 'organizacion', 'evaluacions', 'referencias', 'resultados', 'unidades', 'programaciones'])->where('curso_id', $cursoId)
            ->where('id', '<', $silabo->id) // Asegúrate de que sea anterior al actual
            ->orderBy('id', 'desc') // Ordena por id descendente
            ->first(); // Obtiene el primer resultado (el más reciente menor al actual)

        return response()->json([
            'silabo' => $penultimoSilabo,
        ]);
    }


}
