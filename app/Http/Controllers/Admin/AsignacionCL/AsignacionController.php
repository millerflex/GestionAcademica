<?php

namespace App\Http\Controllers\Admin\AsignacionCL;
use App\Http\Controllers\Controller;
use App\Models\AsignacionCL\CargaHl;
use App\Models\AsignacionCL\DetalleCHL;
use App\Models\General\Periodo;
use App\Models\Silabo\Silabo;
use App\Models\Silabo\SilaboDocente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class AsignacionController extends Controller
{
    public function index()
    {
        $docentes = DB::table('profiles')
                        ->select('profiles.id','profiles.nombres','profiles.apellidos')
                        ->where('profiles.profesion','!=', 'Administrador')
                        ->get();



        $data = DB::table('aperturas_cursos')
                    ->join('periodos','aperturas_cursos.periodo_id','=','periodos.id')
                    ->join('cursos','aperturas_cursos.curso_id','=','cursos.id')
                    ->select('aperturas_cursos.id','cursos.nombre','cursos.ciclo','periodos.año','periodos.semestre','periodos.id as periodo_id')
                    ->get();

        return view('admin.AsignacionCL.index',compact('data','docentes'));
    }
    public function asignar(Request $request)
    {
        $idDocente = $request->input('docente_id');
        $idCurso = $request->input('IdCursoAperturado');
        $idSemestre = $request->input('IdSemestre');

        $carga = new CargaHl();
        $carga->IdProfile=$idDocente;
        $carga->IdSemestre=$idSemestre;
        $carga->save();
        $cargaId=$carga->id;

        $curso = DB::table('cursos')
                ->join('aperturas_cursos','cursos.id','=','aperturas_cursos.curso_id')
                ->where('aperturas_cursos.id', $idCurso)
                ->first();
        $horasSemanales = $curso->HT + $curso->HP + $curso->HL;
        DB::table('detalle_chl')->insert([
            'IdCargaHL' => $cargaId,
            'horasSemanales' => $horasSemanales,
            'IdCursoAperturado' => $idCurso,
        ]);




        // CODIGO PARA SILABO........ NO TOQUEN PORFA :,V

        $conteoRegistros = DB::table('detalle_chl')
        ->where('IdCursoAperturado', $idCurso)
        ->count();

        if ($conteoRegistros == 1) {
            // Si hay exactamente 1 registro, ejecutar la lógica de Coordinador
            $silabo = new Silabo();
            $silabo->carrera_id = auth()->user()->profile->carrera_id;
            $silabo->curso_id = $idCurso;
            $silabo->periodo_id = Periodo::where('activo', '1')->first()->id;
            $silabo->visado = '3';
            $silabo->save();

            $silabo_id = $silabo->id;

            // Crear el docente silabo como 'Coordinador'
            $docente_silabo = new SilaboDocente();
            $docente_silabo->profile_id = $idDocente;
            $docente_silabo->condicion = 'Coordinador';
            $docente_silabo->silabo_id = $silabo_id;
            $docente_silabo->save();
        } elseif ($conteoRegistros > 1) {
            // Si hay más de un registro, ejecutar la lógica de 'Apoyo'
            $silabo_id = DB::table('silabos')
                ->where('curso_id', $idCurso)
                ->latest('id')
                ->first()->id;

            $docente_silabo = new SilaboDocente();
            $docente_silabo->profile_id = $idDocente;
            $docente_silabo->condicion = 'Apoyo';
            $docente_silabo->silabo_id = $silabo_id;
            $docente_silabo->save();
        }


        // $condiciones=$request->docente_condicion;
        // $docentes=$request->docente_id;
        // $cantidadDocentes = count($docentes);

        // for ($i = 0; $i < $cantidadDocentes; $i++) {
        //     // Obtener el ID del docente y su condición
        //     $docenteId = $docentes[$i];
        //     $condicion = $condiciones[$i];
        
        //     // Guardar en el modelo SilaboDocente
            
        // }





        return redirect()->route('admin.Asignacion.index');
    }
    public function observar($idCursoAperturado)
    {
        $docentes= DB::table('aperturas_cursos')
                        ->join('detalle_chl','aperturas_cursos.id','=','detalle_chl.IdCursoAperturado')
                        ->join('carga_hl','detalle_chl.IdCargaHL','=','carga_hl.id')
                        ->join('profiles','carga_hl.IdProfile','=','profiles.id')
                        ->select('profiles.nombres','profiles.apellidos')
                        ->where('aperturas_cursos.id',$idCursoAperturado)
                        ->get();
        $curso = db::table('aperturas_cursos')
                        ->join('cursos','aperturas_cursos.curso_id','=','cursos.id')
                        ->where('aperturas_cursos.id',$idCursoAperturado)
                        ->get();
        //dd($docentes);
        return view('admin.AsignacionCL.observar',compact('curso','docentes'));
    }
    public function reporte(Request $request)
    {
        // Recibimos el ID del semestre desde la solicitud (si está presente)
        $semestreSeleccionado = $request->input('semestre');
    
        // Mapeamos el ID del semestre a su formato correspondiente
        $semestres = [
            1 => ['año' => 2023, 'semestre' => 'I'],
            2 => ['año' => 2023, 'semestre' => 'II'],
            3 => ['año' => 2024, 'semestre' => 'EXT'],
            4 => ['año' => 2024, 'semestre' => 'I'],
            5 => ['año' => 2024, 'semestre' => 'II']
        ];
    
        // Si se seleccionó un semestre, obtener el año y semestre correspondiente
        $anio = null;
        $semestre = null;
        if ($semestreSeleccionado) {
            $anioSemestre = $semestres[$semestreSeleccionado] ?? null;
            if ($anioSemestre) {
                $anio = $anioSemestre['año'];
                $semestre = $anioSemestre['semestre'];
            }
        }
    
        // Creamos la consulta base
        $data = DB::table('aperturas_cursos')
        ->join('periodos', 'aperturas_cursos.periodo_id', '=', 'periodos.id')
        ->join('cursos', 'aperturas_cursos.curso_id', '=', 'cursos.id')
        ->join('detalle_chl', 'aperturas_cursos.id', '=', 'detalle_chl.IdCursoAperturado')
        ->join('carga_hl', 'detalle_chl.IdCargaHL', '=', 'carga_hl.id')
        ->join('profiles', 'carga_hl.IdProfile', '=', 'profiles.id')
        ->select(
            'cursos.nombre as curso_nombre',
            'cursos.ciclo',
            'periodos.año',
            'periodos.semestre',
            DB::raw('GROUP_CONCAT(CONCAT(profiles.nombres, " ", profiles.apellidos) SEPARATOR ", ") as docentes'),
            DB::raw('max(detalle_chl.horasSemanales) as horasSemanales')
        )
        ->where('aperturas_cursos.periodo_id', '=', $semestreSeleccionado) // Filtrar por semestre
        ->groupBy(
            'cursos.nombre',
            'cursos.ciclo',
            'periodos.año',
            'periodos.semestre'
        )
        ->get();

        //dd($data);
        // Agrupamos los datos por curso para obtener las horas semanales totales
        $dataGrouped = $data->groupBy('curso_nombre')->map(function ($item) {
            return $item->sum('horasSemanales');
        });
    
        // Pasamos los datos a la vista
        return view('admin.AsignacionCL.reporte', compact('dataGrouped', 'data', 'semestreSeleccionado'));
    }
    



    public function exportPDF(Request $request)
    {
        // Obtener el semestre seleccionado desde la solicitud (GET)
        $semestreSeleccionado = $request->input('semestre');
    
        // Inicializar las variables de año y semestre
        $anio = null;
        $semestre = null;
    
        // Definir los valores de semestre
        $semestres = [
            1 => ['año' => 2023, 'semestre' => 'I'],
            2 => ['año' => 2023, 'semestre' => 'II'],
            3 => ['año' => 2024, 'semestre' => 'EXT'],
            4 => ['año' => 2024, 'semestre' => 'I'],
            5 => ['año' => 2024, 'semestre' => 'II']
        ];
    
        // Verificar si el semestre está seleccionado y obtener el año y semestre correspondiente
        if ($semestreSeleccionado) {
            $anioSemestre = $semestres[$semestreSeleccionado] ?? null;
            if ($anioSemestre) {
                $anio = $anioSemestre['año'];
                $semestre = $anioSemestre['semestre'];
            }
        }
    
        // Realizar la consulta para obtener los datos filtrados por semestre
        $data = DB::table('aperturas_cursos')
            ->join('periodos', 'aperturas_cursos.periodo_id', '=', 'periodos.id')
            ->join('cursos', 'aperturas_cursos.curso_id', '=', 'cursos.id')
            ->join('detalle_chl', 'aperturas_cursos.id', '=', 'detalle_chl.IdCursoAperturado')
            ->join('carga_hl', 'detalle_chl.IdCargaHL', '=', 'carga_hl.id')
            ->join('profiles', 'carga_hl.IdProfile', '=', 'profiles.id')
            ->select(
                'cursos.nombre as curso_nombre',
                'cursos.ciclo',
                'periodos.año',
                'periodos.semestre',
                DB::raw('GROUP_CONCAT(CONCAT(profiles.nombres, " ", profiles.apellidos) SEPARATOR ", ") as docentes'),
                DB::raw('max(detalle_chl.horasSemanales) as horasSemanales')
            )
            ->where('aperturas_cursos.periodo_id','=',$semestreSeleccionado)
            ->groupBy(
                'cursos.nombre',
                'cursos.ciclo',
                'periodos.año',
                'periodos.semestre'
            )
            ->get();
        
        // Obtener el nombre de la imagen guardada en sesión (si existe)
        $chartImage = session('chart_image');
    
        // Generar el PDF con los datos y el gráfico
        //$pdf = PDF::loadView('admin.AsignacionCL.reportePDF', compact('data', 'chartImage', 'semestreSeleccionado'));
        $pdf = PDF::loadView('admin.AsignacionCL.reportePDF', compact('data', 'chartImage','semestreSeleccionado'))
        ->setOption('isRemoteEnabled', true); // Habilita rutas remotas

    
        // Descargar el PDF
        return $pdf->download('reporte_asignacion.pdf');
    }
    

public function saveChartImage(Request $request)
{
    $image = $request->image; // La imagen base64

    // Limpiar la cabecera base64
    $imageData = explode(',', $image)[1];

    // Eliminar la imagen anterior (si existe)
    $oldImage = session('chart_image');
    if ($oldImage && Storage::disk('public')->exists($oldImage)) {
        // Eliminar la imagen anterior del almacenamiento
        Storage::disk('public')->delete($oldImage);
    }

    // Generar un nombre único para la nueva imagen
    $imageName = 'chart_' . time() . '.png';

    // Guardar la nueva imagen en el almacenamiento público
    Storage::disk('public')->put($imageName, base64_decode($imageData));

    // Guardar el nombre de la nueva imagen en la sesión
    session(['chart_image' => $imageName]);
    dd(session('chart_image'));
    return response()->json(['success' => true]);
}


}
