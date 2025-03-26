<?php

namespace App\Http\Controllers\Admin\Visacion;

use App\Http\Controllers\Controller;
use App\Mail\ComentadoMailable;
use App\Models\General\Carrera;
use App\Models\General\Curso;
use App\Models\General\Periodo;
use App\Models\General\Profile;
use App\Models\Silabo\Silabo;
use App\Models\Silabo\SilaboDocente;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Mail\SilaboMailable;
use App\Mail\VisacionMailable;
use Illuminate\Support\Facades\Mail;

class VisacionController extends Controller
{
    const PAGINACION=15;

    public function index(Request $request)
    {
        $periodos = Periodo::orderBy('id', 'desc')->get();

        if ($request->has('buscarpor') && $request->buscarpor) {
            $periodo = $periodos->where('id', $request->buscarpor)->first();
        } else {
            $periodo = $periodos->where('activo', '1')->first();
        }

        $silabos = Silabo::where('periodo_id', $periodo->id)
            ->orderBy('silabos.id', 'DESC')
            ->where('estado', '1')
            ->paginate($this::PAGINACION)
            ->appends(['buscarpor' => $request->buscarpor]);

        return view('admin.visacion.index', compact('silabos', 'periodos', 'periodo'));
    }


    public function create()
    {
        $periodo = Periodo::where('activo', '1')->first();


        
        // $cursos = Curso::all();
        $i = $periodo->semestre;

        if($i == 'I'){
            $cursos = Curso::whereRaw('ciclo % 2 != 0')->get();
        }
        if($i == 'II'){
            $cursos = Curso::whereRaw('ciclo % 2 = 0')->get();
        }
        if($i == 'EXT'){
            $cursos = Curso::all();
        }



        $carrera = Carrera::findOrFail('1');
        $docentes = Profile::where('id', '!=', 1)->get();

        return view('admin.visacion.create', compact('periodo', 'cursos', 'carrera', 'docentes'));
    }

    public function store(Request $request)
    {
        $silabo = new Silabo();
        $silabo->carrera_id = $request->carrera_id;
        $silabo->curso_id = $request->curso_id;
        $silabo->periodo_id = Periodo::where('activo', '1')->first()->id;
        $silabo->visado = '3';
        $silabo->save();

        $silabo_id = $silabo->id;

        $condiciones=$request->docente_condicion;
        $docentes=$request->docente_id;
        $cantidadDocentes = count($docentes);

        for ($i = 0; $i < $cantidadDocentes; $i++) {
            // Obtener el ID del docente y su condición
            $docenteId = $docentes[$i];
            $condicion = $condiciones[$i];
        
            // Guardar en el modelo SilaboDocente
            $docente_silabo=new SilaboDocente();
            $docente_silabo->profile_id=$docenteId;
            $docente_silabo->condicion=$condicion;
            $docente_silabo->silabo_id=$silabo_id;
            $docente_silabo->save(); // Guardar en la base de datos
        }

        return redirect()->route('admin.visacion.index')->with('datos', 'Nuevo registro creado');
    }

    public function edit(string $id)
    {
        $silabo=Silabo::findOrFail($id);

        $periodo = Periodo::where('activo', '1')->first();
        $cursos = Curso::all();
        $carrera = Carrera::findOrFail('1');
        $docentes = Profile::all();

        return view('admin.visacion.edit', compact('periodo', 'cursos', 'carrera', 'docentes', 'silabo'));
    }

    public function visar($id)
    {
        $silabo = Silabo::findOrFail($id);
        $silabo->visado = 1;
        $silabo->save();

        $docentes = $silabo->docentes; // Esto devuelve la colección de docentes asociados al silabo

        foreach ($docentes as $docente) {
            Mail::to($docente->correo_institucional)->send(new VisacionMailable($docente->nombres.' '.$docente->apellidos, $silabo->curso->nombre));
        }

        return redirect()->route('admin.visacion.index')->with('datos', 'Sílabo visado con éxito');
    }

    public function comentar(Request $request, $id)
    {
        $silabo = Silabo::findOrFail($id);
        $silabo->comentario = $request->comentario;
        $silabo->visado = 2;
        $silabo->save();

        $docentes = $silabo->docentes; // Esto devuelve la colección de docentes asociados al silabo

        foreach ($docentes as $docente) {
            Mail::to($docente->correo_institucional)->send(new ComentadoMailable($request->comentario, $docente->nombres.' '.$docente->apellidos, $silabo->curso->nombre));
        }


        return redirect()->route('admin.visacion.index')->with('datos', 'Sílabo comentado con éxito');
    }

    // public function reporte_silabo()
    //  {
    //     //  $silabo = Silabo::findOrFail($id);

    //     $periodo = Periodo::where('activo', '1')->first();
    
    //     $asignados = Silabo::where('periodo_id', $periodo->id)->where('visado', 3)->count();
    //     $comentados = Silabo::where('periodo_id', $periodo->id)->where('visado', 2)->count();
    //     $visados = Silabo::where('periodo_id', $periodo->id)->where('visado', 1)->count();
    //     $enviados = Silabo::where('periodo_id', $periodo->id)->where('visado', 0)->count();

    //     // $silabos = Silabo::where('periodo_id', $periodo->id);

    //     $semestre = $periodo->semestre;

    //     if($semestre  == 'I'){
    //         $cursos = Curso::whereRaw('ciclo % 2 != 0')->get();
    //     }
    //     if($semestre  == 'II'){
    //         $cursos = Curso::whereRaw('ciclo % 2 = 0')->get();
    //     }
    //     if($semestre  == 'EXT'){
    //         $cursos = Curso::all();
    //     }

    //     $resultados = DB::select("
    //         SELECT 
    //             cursos.nombre AS curso,
    //             silabos.visado AS estado_silabo,
    //             CONCAT(profiles.nombres, ' ', profiles.apellidos) AS docente
    //         FROM 
    //             cursos
    //         LEFT JOIN silabos ON cursos.id = silabos.curso_id AND silabos.periodo_id = ?
    //         LEFT JOIN silabo_docentes ON silabos.id = silabo_docentes.silabo_id
    //         LEFT JOIN profiles ON silabo_docentes.profile_id = profiles.id
    //         WHERE 
    //             (
    //                 ? = 'I' AND MOD(cursos.ciclo, 2) != 0 OR
    //                 ? = 'II' AND MOD(cursos.ciclo, 2) = 0 OR
    //                 ? = 'EXT'
    //             )
    //     ", [$periodo->id, $semestre, $semestre, $semestre]);




    //      $pdf = Pdf::loadView('admin.reportes.silabo_general', compact('asignados', 'comentados', 'visados', 'enviados', 'periodo', 'cursos', 'resultados'));
    //      return $pdf->stream('syllabus-seguridad-informacion-completo.pdf');
 
    //      // return view('silabo.silabo', compact('data'));
    //  }

    public function reporte_silabo()
    {
        $periodo = Periodo::where('activo', '1')->first();

        $asignados = Silabo::where('periodo_id', $periodo->id)->where('visado', 3)->count();
        $comentados = Silabo::where('periodo_id', $periodo->id)->where('visado', 2)->count();
        $visados = Silabo::where('periodo_id', $periodo->id)->where('visado', 1)->count();
        $enviados = Silabo::where('periodo_id', $periodo->id)->where('visado', 0)->count();

        $semestre = $periodo->semestre;

        if ($semestre == 'I') {
            $cursos = Curso::whereRaw('ciclo % 2 != 0')->get();
        } elseif ($semestre == 'II') {
            $cursos = Curso::whereRaw('ciclo % 2 = 0')->get();
        } elseif ($semestre == 'EXT') {
            $cursos = Curso::all();
        }

        $resultados = DB::select("
            SELECT 
                cursos.nombre AS curso,
                silabos.visado AS estado_silabo,
                CONCAT(profiles.nombres, ' ', profiles.apellidos) AS docente
            FROM 
                cursos
            LEFT JOIN silabos ON cursos.id = silabos.curso_id AND silabos.periodo_id = ?
            LEFT JOIN silabo_docentes ON silabos.id = silabo_docentes.silabo_id
            LEFT JOIN profiles ON silabo_docentes.profile_id = profiles.id
            WHERE 
                (
                    ? = 'I' AND MOD(cursos.ciclo, 2) != 0 OR
                    ? = 'II' AND MOD(cursos.ciclo, 2) = 0 OR
                    ? = 'EXT'
                )
        ", [$periodo->id, $semestre, $semestre, $semestre]);

        // Contar los casos sin estado
        // "Sin estado" definido como aquellos sin docente y sin estado_silabo
        $sinEstado = collect($resultados)->filter(function($r) {
            return is_null($r->docente) && is_null($r->estado_silabo);
        })->count();

        // Datos para el gráfico: ahora agregamos el "Sin estado"
        $labels = ['Asignados', 'Comentados', 'Visados', 'Enviados', 'Sin estado'];
        $values = [$asignados, $comentados, $visados, $enviados, $sinEstado];
        $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#CCCCCC'];

        // Configuración del gráfico
        $chartConfig = [
            'type' => 'pie',
            'data' => [
                'labels' => $labels,
                'datasets' => [[
                    'data' => $values,
                    'backgroundColor' => $colors
                ]]
            ],
            'options' => [
                'title' => [
                    'display' => true,
                    'text' => 'Estado de Sílabo'
                ]
            ]
        ];

        // Generar la URL para QuickChart
        $chartUrl = 'https://quickchart.io/chart?' . http_build_query(['c' => json_encode($chartConfig)]);

        // Obtener la imagen desde QuickChart
        $response = Http::get($chartUrl);

        // Convertir a base64
        $chartImageBase64 = base64_encode($response->body());
        $chartImageBase64 = 'data:image/png;base64,' . $chartImageBase64;

        // Cargar la vista con los datos e incluir la imagen base64
        $pdf = Pdf::loadView('admin.reportes.silabo_general', compact(
            'asignados', 'comentados', 'visados', 'enviados', 'sinEstado', 'periodo', 'cursos', 'resultados', 'chartImageBase64'
        ));

        return $pdf->stream('syllabus-seguridad-informacion-completo.pdf');
    }

     public function reporte_curso_silabo()
     {
        //  $silabo = Silabo::findOrFail($id);

        $periodo = Periodo::where('activo', '1')->first();
    
        $asignados = Silabo::where('periodo_id', $periodo->id)->where('visado', 3)->count();
        $comentados = Silabo::where('periodo_id', $periodo->id)->where('visado', 2)->count();
        $visados = Silabo::where('periodo_id', $periodo->id)->where('visado', 1)->count();
        $enviados = Silabo::where('periodo_id', $periodo->id)->where('visado', 0)->count();

        // $silabos = Silabo::where('periodo_id', $periodo->id);

        $semestre = $periodo->semestre;

        if($semestre  == 'I'){
            $cursos = Curso::whereRaw('ciclo % 2 != 0')->get();
        }
        if($semestre  == 'II'){
            $cursos = Curso::whereRaw('ciclo % 2 = 0')->get();
        }
        if($semestre  == 'EXT'){
            $cursos = Curso::all();
        }

        $resultados = DB::select("
            SELECT 
                cursos.nombre AS curso,
                silabos.visado AS estado_silabo,
                CONCAT(profiles.nombres, ' ', profiles.apellidos) AS docente
            FROM 
                cursos
            LEFT JOIN silabos ON cursos.id = silabos.curso_id AND silabos.periodo_id = ?
            LEFT JOIN silabo_docentes ON silabos.id = silabo_docentes.silabo_id
            LEFT JOIN profiles ON silabo_docentes.profile_id = profiles.id
            WHERE 
                (
                    ? = 'I' AND MOD(cursos.ciclo, 2) != 0 OR
                    ? = 'II' AND MOD(cursos.ciclo, 2) = 0 OR
                    ? = 'EXT'
                )
        ", [$periodo->id, $semestre, $semestre, $semestre]);




         $pdf = Pdf::loadView('admin.reportes.cursos_silabo', compact('asignados', 'comentados', 'visados', 'enviados', 'periodo', 'cursos', 'resultados'));
         return $pdf->stream('syllabus-seguridad-informacion-completo.pdf');
 
         // return view('silabo.silabo', compact('data'));
     }

     public function reporte_cumplimiento()
     {
        //  $silabo = Silabo::findOrFail($id);

        $periodo = Periodo::where('activo', '0') // Filtra los registros donde activo = 0
                    ->orderBy('id', 'desc')    // Ordena por id descendente (para obtener el más reciente)
                    ->first();                // Obtiene el primer registro del resultado ordenado

    
        $asignados = Silabo::where('periodo_id', $periodo->id)->where('visado', 3)->count();
        $comentados = Silabo::where('periodo_id', $periodo->id)->where('visado', 2)->count();
        $visados = Silabo::where('periodo_id', $periodo->id)->where('visado', 1)->count();
        $enviados = Silabo::where('periodo_id', $periodo->id)->where('visado', 0)->count();

        // $silabos = Silabo::where('periodo_id', $periodo->id);

        $semestre = $periodo->semestre;

        if($semestre  == 'I'){
            $cursos = Curso::whereRaw('ciclo % 2 != 0')->get();
        }
        if($semestre  == 'II'){
            $cursos = Curso::whereRaw('ciclo % 2 = 0')->get();
        }
        if($semestre  == 'EXT'){
            $cursos = Curso::all();
        }

        $resultados = DB::select("
            SELECT 
                cursos.nombre AS curso,
                silabos.visado AS estado_silabo,
                CONCAT(profiles.nombres, ' ', profiles.apellidos) AS docente
            FROM 
                cursos
            LEFT JOIN silabos ON cursos.id = silabos.curso_id AND silabos.periodo_id = ?
            LEFT JOIN silabo_docentes ON silabos.id = silabo_docentes.silabo_id
            LEFT JOIN profiles ON silabo_docentes.profile_id = profiles.id
            WHERE 
                (
                    ? = 'I' AND MOD(cursos.ciclo, 2) != 0 OR
                    ? = 'II' AND MOD(cursos.ciclo, 2) = 0 OR
                    ? = 'EXT'
                )
        ", [$periodo->id, $semestre, $semestre, $semestre]);




         $pdf = Pdf::loadView('admin.reportes.silabo_cumplimiento', compact('asignados', 'comentados', 'visados', 'enviados', 'periodo', 'cursos', 'resultados'));
         return $pdf->stream('syllabus-seguridad-informacion-completo.pdf');
 
         // return view('silabo.silabo', compact('data'));
     }

     
}
