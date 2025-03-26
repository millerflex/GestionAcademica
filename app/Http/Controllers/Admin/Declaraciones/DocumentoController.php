<?php

namespace App\Http\Controllers\Admin\Declaraciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Periodo;
use App\Models\Carga\Documento;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\AsignacionCL\CargaHl;
use App\Models\Carga\CargaHNL;
use Carbon\Carbon;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Auth::user();
        $profile = $usuario->profile;
        $periodo = Periodo::where('activo',1)->first();

        $documento1 = Documento::where('tipo','F01-CAD')->where('profile_id',$profile->id)->where('periodo_id',$periodo->id)->first();

        if(!$documento1) {
            $documento1 = new Documento();
            $documento1->periodo_id = $periodo->id;
            $documento1->profile_id = $profile->id;
            $documento1->tipo = 'F01-CAD';
            $documento1->fecha_generacion = now();
            $documento1->estado = 0;
            $documento1->save();
        }

        $documento2 = Documento::where('tipo','F02-CAD')->where('profile_id',$profile->id)->where('periodo_id',$periodo->id)->first();

        if(!$documento2) {
            $documento2 = new Documento();
            $documento2->periodo_id = $periodo->id;
            $documento2->profile_id = $profile->id;
            $documento2->fecha_generacion = now();
            $documento2->tipo = 'F02-CAD';
            $documento2->estado = 0;
            $documento2->save();
        }

        $documento3 = Documento::where('tipo','F03-CAD')->where('profile_id',$profile->id)->where('periodo_id',$periodo->id)->first();

        if(!$documento3) {
            $documento3 = new Documento();
            $documento3->periodo_id = $periodo->id;
            $documento3->profile_id = $profile->id;
            $documento3->tipo = 'F03-CAD';
            $documento3->fecha_generacion = now();
            $documento3->estado = 0;
            $documento3->save();
        }

        return view('admin.declaraciones.index',compact('documento1','documento2','documento3','profile','periodo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function generar($id)
    {
        // Recuperar el documento por su ID
        $usuario = Auth::user();
        $periodo = Periodo::where('activo', 1)->first();
        $profile = $usuario->profile;
    
        // Obtener las cargas correspondientes
        $cargaHL = CargaHL::where('IdProfile', $profile->id)->where('IdSemestre', $periodo->id)->first();
        $cargaHNLC = CargaHNL::where('periodo_id', $periodo->id)->where('profile_id', $profile->id)->where('tipo_id', 1)->first();
        $cargaHNLA = CargaHNL::where('profile_id', $profile->id)->where('periodo_id', $periodo->id)->where('tipo_id', 2)->first();
        
        $documento = Documento::findOrFail($id);
    
        if (!$cargaHL || !$cargaHL->detalle || !$cargaHNLC || !$cargaHNLC->detalles || !$cargaHNLA || !$cargaHNLA->detalles || !$profile) {
            return redirect()->route('admin.declaraciones')->with('error', 'No se encontró la info suficiente.');
        }
    
        // Calcular el total de horas de carga lectiva (CHL)
        $totalHorasCHL = $cargaHL->detalle->sum(function($detalle) {
            return $detalle->horasSemanales;
        });
    
        // Calcular el total de horas de carga no lectiva complementaria (CHNL-C)
        $totalHorasCHNLC = $cargaHNLC->detalles->sum(function($detalle) {
            return $detalle->horasSemanales;
        });
    
        // Calcular el total de horas de carga no lectiva administrativa (CHNL-A)
        $totalHorasCHNLA = $cargaHNLA->detalles->sum(function($detalle) {
            return $detalle->horasSemanales;
        });
    
        // Total de horas de carga no lectiva
        $totalHorasCHNL = $totalHorasCHNLC + $totalHorasCHNLA;
    
        // Datos para el PDF
        if ($documento->tipo === "F01-CAD") {
            $datos = [
                'DOCENTE' => $profile,
                'PERIODO' => $periodo,
                'DETALLE_CHL' => $cargaHL->detalle,
                'DETALLE_CHNLC' => $cargaHNLC->detalles,
                'DETALLE_CHNLA' => $cargaHNLA->detalles,
                'TOTAL_HORAS_CHL' => $totalHorasCHL,
                'TOTAL_HORAS_CHNL' => $totalHorasCHNL,
            ];
            $pdf = PDF::loadView('admin.declaraciones.1', $datos);
            return $pdf->download("F01-CAD-{$profile->nombres}-{$periodo->año}-{$periodo->semestre}.pdf");
        }
    
        if ($documento->tipo == "F02-CAD") {
            $datos = [
                'DNI' => '18013017',
                'NOMBRE_COMPLETO' => $profile->nombres . ' ' . $profile->apellidos,
                'FACULTAD' => $profile->carrera->facultad,
                'CONDICION' => 'ORDINARIO',
                'DEPARTAMENTO' => $profile->carrera->departamento,
                'MODALIDAD' => 'DE',
                'CATEGORIA' => 'PRINCIPAL',
            ];
            $pdf = PDF::loadView('admin.declaraciones.2', $datos);
            return $pdf->download("F02-CAD-{$profile->nombres}-{$periodo->año}-{$periodo->semestre}.pdf");
        }
    
        if ($documento->tipo == "F03-CAD") {
            $datos = [
                'DOCENTE' => $profile,
                'PERIODO' => $periodo,
                'CARGA_HL' => $cargaHL,
                'CARGA_HNLA' => $cargaHNLA,
                'CARGA_HNLC' => $cargaHNLC,
                'TOTAL_HORAS_CHL' => $totalHorasCHL,
                'TOTAL_HORAS_CHNL' => $totalHorasCHNL,
            ];
    
            // Renderizar el PDF usando una vista específica para F03-CAD
            $pdf = PDF::loadView('admin.declaraciones.3', $datos);
    
            // Descargar el archivo
            return $pdf->download("F03-CAD-{$profile->nombres}-{$periodo->año}-{$periodo->semestre}.pdf");
        }
    }
    

   /*  public function generarDocumentos($id)
    {
        $usuario = Auth::user();
        $periodo = Periodo::where('activo',1)->first();
        $profile = $usuario->profile;
        $cargaHL = CargaHL::where('IdProfile',$profile->id)->where('IdSemestre',$periodo->id)->first();
        $cargaHNLC = CargaHNL::where('profile_id',$profile)->where('periodo_id',$periodo->id)->where('tipo_id',1)->first();
        $cargaHNLA = CargaHNL::where('profile_id',$profile)->where('periodo_id',$periodo->id)->where('tipo_id',2)->first();
        $documento = Documento::findOrFail($id);

        if (!$cargaHL || !$cargaHL->detalle || !$cargaHNLC || !$cargaHNLC->detalles || !$cargaHNLA || !$cargaHNLA->detalles) {
            // Si faltan cargas o detalles, manejar el error, por ejemplo, redirigir con un mensaje
            return redirect()->route('admin.declaraciones')->with('error', 'No hay suficiente información para generar el documento.');
        }

        if($documento->tipo === "F01-CAD") {
            $datos = [
                'DOCENTE' => $profile,
                'PERIODO' => $periodo,
                'DETALLE_CHL' => $cargaHL->detalle,
                'DETALLE_CHNLC' => $cargaHNLC->detalle,
                'DETALLE_CHNLA' => $cargaHNLA->detalle,
            ];
            $pdf = PDF::loadView('admin.declaraciones.1', $datos);
            return $pdf->download("F01-CAD-{$profile->nombres}-{$periodo->año}-{$periodo->semestre}.pdf");
        }

        if($tipo->Codigo == "F02-CAD") {
            $datos = [
                'DNI' => $docente->persona->DNI,
                'NOMBRE_COMPLETO' => $docente->persona->Nombres . ' ' . $docente->persona->Apellidos,
                'FACULTAD' => $docente->departamento->programaAcademico->facultad->Nombre,
                'CONDICION' => $docente->condicion->tipoCondicion,
                'DEPARTAMENTO' => $docente ->departamento->Nombre,
                'MODALIDAD' => $docente->modalidad->tipoModalidad,
                'CATEGORIA' => $docente->categoria->tipoCategoria,
            ];
            $pdf = PDF::loadView('documentos.2', $datos);
            return $pdf->download("F02-CAD-{$docente->persona->DNI}-{$semestre->Año}-{$semestre->Periodo}.pdf");
        } 

        if ($tipo->Codigo == "F03-CAD") {
            $datos = [
                'DOCENTE' => $docente,
                'SEMESTRE' => $semestre,
                'CARGA_HL' => $cargaHL,
                'CARGA_HNLA' => $cargaHNLA,
                'CARGA_HNLC' => $cargaHNLC,
            ];
        
            // Renderizar el PDF usando una vista específica para F03-CAD
            $pdf = PDF::loadView('documentos.3', $datos);
        
            // Descarga del archivo
            return $pdf->download("F03-CAD-{$docente->persona->DNI}-{$semestre->Año}{$semestre->Periodo}.pdf");
        }               

    }
 */
    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function reporte()
    {
        // Obtener los documentos de un periodo específico (puedes modificar según tus necesidades)
        $documentos = Documento::where('periodo_id', 5)->get();

        // Contar los documentos por estado
        $observados = $documentos->where('estado', 'O')->count();
        $aceptados = $documentos->where('estado', 'A')->count();
        $pendientes = $documentos->where('estado', 'P')->count();
        $periodo = Periodo::where('activo',1)->first();
        // Crear el gráfico y obtener su imagen
        $graficoImagePath = $this->generateChart($observados, $aceptados, $pendientes);

        // Pasar los datos a la vista y generar el PDF
        $pdf = Pdf::loadView('admin.declaraciones.reportes', compact('documentos', 'graficoImagePath','periodo','observados','aceptados','pendientes'));

        // Descargar el PDF generado
        return $pdf->download('reporte_declaraciones.pdf');
    }

    // Función para generar el gráfico y guardarlo como imagen
    private function generateChart($observados, $aceptados, $pendientes)
    {
        // Crear el gráfico con Google Charts en formato PNG
        $imgPath = public_path('images/grafico1.png');

        // Generar el gráfico como imagen usando un servicio externo o librería (ejemplo: QuickChart.io)
        $url = 'https://quickchart.io/chart?c=' . urlencode('{
            type: "pie",
            data: {
                labels: ["Observados", "Aceptados", "Pendientes"],
                datasets: [{
                    label: "Documentos",
                    data: [' . $observados . ', ' . $aceptados . ', ' . $pendientes . '],
                    backgroundColor: ["#FF5733", "#33FF57", "#3357FF"]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: "top"
                    }
                }
            }
        }');

        // Guardar la imagen en el servidor
        file_put_contents($imgPath, file_get_contents($url));

        return $imgPath;
    }

    public function reporte2()
    {
        // Obtener el periodo activo
        $periodo = Periodo::where('activo', 1)->first();
        
        // Obtener los documentos de un periodo específico
        $documentos = Documento::where('periodo_id', $periodo->id)->get();
        
        // Definir las fechas de inicio y fin del periodo
        $inicioPeriodo = Carbon::createFromFormat('Y-m-d', '2024-12-11'); // Ejemplo: Inicio del periodo 1 diciembre 2024
        $finPeriodo = Carbon::createFromFormat('Y-m-d', '2024-12-20');  // Ejemplo: Fin del periodo 31 diciembre 2024
        
        // Contar los documentos presentados a tiempo y los que no
        $presentados_a_tiempo = 0;
        $no_presentados_a_tiempo = 0;
        
        foreach ($documentos as $documento) {
            $fechaGeneracion = Carbon::parse($documento->fecha_generacion);
            if ($fechaGeneracion->between($inicioPeriodo, $finPeriodo)) {
                $presentados_a_tiempo++;
            } else {
                $no_presentados_a_tiempo++;
            }
        }

        // Generar el gráfico y obtener su imagen
        $graficoImagePath = $this->generateChart2($presentados_a_tiempo, $no_presentados_a_tiempo);

        // Pasar los datos a la vista y generar el PDF
        $pdf = Pdf::loadView('admin.declaraciones.reportes2', compact('documentos', 'graficoImagePath', 'presentados_a_tiempo', 'no_presentados_a_tiempo', 'periodo'));

        // Descargar el PDF generado
        return $pdf->download('reporte_documentos.pdf');
    }

    // Función para generar el gráfico y guardarlo como imagen
    private function generateChart2($presentados_a_tiempo, $no_presentados_a_tiempo)
    {
        // Ruta donde se guardará la imagen generada
        $imgPath = public_path('images/grafico_barras.png');

        // Generar el gráfico de barras utilizando QuickChart.io
        $url = 'https://quickchart.io/chart?c=' . urlencode('{
            type: "bar",
            data: {
                labels: ["Presentados a Tiempo", "No Presentados a Tiempo"],
                datasets: [{
                    label: "Documentos",
                    data: [' . $presentados_a_tiempo . ', ' . $no_presentados_a_tiempo . '],
                    backgroundColor: ["#33FF57", "#FF5733"]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: "top"
                    }
                }
            }
        }');

        // Guardar la imagen generada en el servidor
        file_put_contents($imgPath, file_get_contents($url));

        return $imgPath;
    }

}
