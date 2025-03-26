<?php

namespace App\Http\Controllers\Admin\Apertura;

use App\Http\Controllers\Controller; // Importar la clase Controller de Laravel
use App\Models\AperturaCurso\AperturaCurso;
use App\Models\General\Curso;
use App\Models\General\Carrera;
use App\Models\General\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Para obtener al usuario autenticado
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class DirectorEscuelaController extends Controller
{
    public function generarSolicitudPDF($id)
{
    // Obtener los detalles de la solicitud
    $solicitud = DB::table('aperturas_cursos')
        ->join('cursos', 'aperturas_cursos.curso_id', '=', 'cursos.id')
        ->join('periodos', 'aperturas_cursos.periodo_id', '=', 'periodos.id')
        ->join('carreras', 'cursos.carrera_id', '=', 'carreras.id')
        ->join('users', 'aperturas_cursos.usuario_id', '=', 'users.id')
        ->join('profiles', 'profiles.user_id', '=', 'users.id')
        ->where('aperturas_cursos.id', $id)
        ->select(
            'cursos.nombre as curso',
            'carreras.programa as programa',
            DB::raw("CONCAT(periodos.año, ' - ', periodos.semestre) as periodo"),
            DB::raw("CONCAT(profiles.nombres, ' ', profiles.apellidos) as enviado_por"),
            'aperturas_cursos.created_at as fecha_solicitud'
        )
        ->first();

    if (!$solicitud) {
        return redirect()->back()->with('error', 'Solicitud no encontrada.');
    }

    // Generar el PDF
    $pdf = Pdf::loadView('admin.apertura.director.solicitud_pdf', compact('solicitud'));

    // Descargar o visualizar el PDF
    return $pdf->stream("solicitud_{$solicitud->curso}.pdf");
}


    public function index(Request $request)
    {
         
        // Obtener el departamento asociado al usuario autenticado desde profiles
        $departamentoId = DB::table('profiles')
            ->where('user_id', Auth::id())
            ->value('carrera_id');
    
        // Obtener el período seleccionado desde la solicitud (si existe)
        $periodoId = $request->input('periodo');
        session(['periodoId' => $periodoId]); 
        // Consultar las solicitudes recibidas
        $solicitudesRecibidas = DB::table('aperturas_cursos')
        ->join('cursos', 'aperturas_cursos.curso_id', '=', 'cursos.id')
        ->join('periodos', 'aperturas_cursos.periodo_id', '=', 'periodos.id')
        ->join('carreras', 'cursos.carrera_id', '=', 'carreras.id')
        ->join('users', 'aperturas_cursos.usuario_id', '=', 'users.id')
        ->join('profiles', 'profiles.user_id', '=', 'users.id')
        ->where('carreras.id', $departamentoId)
        ->when($periodoId, function ($query) use ($periodoId) {
            $query->where('aperturas_cursos.periodo_id', $periodoId);
        })
        ->select(
            'cursos.nombre as curso',
            'carreras.programa as programa',
            DB::raw("CONCAT(periodos.año, ' - ', periodos.semestre) as periodo"),
            'aperturas_cursos.id as solicitud_id',
            'aperturas_cursos.estado',
            DB::raw("CONCAT(profiles.nombres, ' ', profiles.apellidos) as enviado_por")
        )
        ->get();
    
    
        // Obtener todos los períodos para mostrar en el filtro
        $periodos = DB::table('periodos')
            ->select('id', DB::raw("CONCAT(año, ' - ', semestre) as nombre"))
            ->get();
    
        return view('admin.Apertura.director.index', compact('solicitudesRecibidas', 'periodos', 'periodoId'));
    }
    
    public function rechazarSolicitud(Request $request, $id)
{
    // Validar el comentario de rechazo, si es necesario
    $request->validate([
        'comentario' => 'nullable|string|max:255',
    ]);

    // Actualizar el estado de la solicitud a "rechazada" y guardar el comentario
    DB::table('aperturas_cursos')
        ->where('id', $id)
        ->update([
            'estado' => 2
        ]);

    return redirect()->back()->with('success', 'La solicitud ha sido rechazada.');
}


    public function aprobarSolicitud($id)
{
    DB::table('aperturas_cursos')
    ->where('id', $id)
    ->update([
        'estado' => 1
    ]);

    return redirect()->back()->with('success', 'Solicitud aprobada correctamente.');
}



    // Mostrar la vista de oficios
    public function generarOficioVista()
{
    $periodos = Periodo::all(); // Obtener todos los periodos
    $departamentos = Carrera::select('id', 'departamento')->distinct()->get(); // Obtener departamentos únicos

    return view('admin.Apertura.director.oficios', compact('periodos', 'departamentos'));
}

    // Generar el oficio en PDF
   
    public function generarOficio(Request $request)
    {
        $request->validate([
            'periodo_id' => 'required|exists:periodos,id',
            'departamento_id' => 'required|exists:carreras,id',
        ]);
    
        // Obtener el periodo
        $periodo = Periodo::find($request->periodo_id);
    
        // Obtener el departamento
        $departamento = Carrera::find($request->departamento_id);
    
        // Obtener los cursos relacionados al departamento y periodo
        $cursos = Curso::join('aperturas_cursos', 'cursos.id', '=', 'aperturas_cursos.curso_id')
        ->where('cursos.carrera_id', $departamento->id)
        ->where('aperturas_cursos.periodo_id', $periodo->id)
        ->select('cursos.*') // Selecciona columnas específicas de `cursos`
        ->get();

        
        if ($cursos->isEmpty()) {
            return redirect()->back()->with('error', 'No hay cursos asignados para este departamento en el periodo seleccionado.');
        }
    
        // Generar el PDF
        $pdf = Pdf::loadView('admin.Apertura.director.oficio_pdf', compact('periodo', 'departamento', 'cursos'));
    
        return $pdf->download('oficio_' . $departamento->departamento . '.pdf');
    }

    public function reporteDepartamentos()
    {
        // Consulta para obtener el reporte de departamentos
        $periodoId = session('periodoId');
        $reporteDepartamentos = DB::table('aperturas_cursos')
            ->join('profiles', 'profiles.user_id', '=', 'aperturas_cursos.usuario_id')
            ->join('carreras', 'profiles.carrera_id', '=', 'carreras.id')
            ->join('periodos', 'aperturas_cursos.periodo_id', '=', 'periodos.id')
            ->where('aperturas_cursos.periodo_id', $periodoId)
            ->select(
                'carreras.departamento as departamento_solicitante',
                'periodos.año',
                'periodos.semestre',
                DB::raw('COUNT(aperturas_cursos.id) as total_solicitudes'),
                DB::raw('SUM(CASE WHEN aperturas_cursos.estado = 0 THEN 1 ELSE 0 END) as pendientes'),
                DB::raw('SUM(CASE WHEN aperturas_cursos.estado = 1 THEN 1 ELSE 0 END) as aprobadas'),
                DB::raw('SUM(CASE WHEN aperturas_cursos.estado = 2 THEN 1 ELSE 0 END) as rechazadas')
            )
            ->groupBy('carreras.departamento','periodos.año',
                'periodos.semestre')
            ->get();
             // Preparar los datos para el gráfico circular
    $labels = $reporteDepartamentos->pluck('departamento_solicitante')->toArray();
    $values = $reporteDepartamentos->pluck('total_solicitudes')->toArray();

    // Generar el gráfico circular
    $graficoCircularPath = $this->generatePieChart($labels, $values);

    // Generar el PDF con los datos del reporte y el gráfico
    $pdf = Pdf::loadView('admin.Apertura.director.ReporteDepartamentos_pdf', [

        'reporteDepartamentos' => $reporteDepartamentos,
        'graficoCircularPath' => $graficoCircularPath
    ]);

    return $pdf->download('ReporteDepartamentos_pdf.pdf');
    }

    private function generatePieChart($labels, $values)
{
    // Crear la ruta donde se guardará el gráfico
    $imgPath = public_path('images2/grafico_departamentos.png');

    // Convertir etiquetas y valores a formato JSON
    $labelsJson = json_encode($labels);
    $valuesJson = json_encode($values);

    // Generar el gráfico con QuickChart.io
    $url = 'https://quickchart.io/chart?c=' . urlencode('{
        type: "pie",
        data: {
            labels: ' . $labelsJson . ',
            datasets: [{
                label: "Solicitudes por Departamento",
                data: ' . $valuesJson . ',
                backgroundColor: ["#FF5733", "#33FF57", "#3357FF", "#FFC300", "#581845"]
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
    try {
        $chartData = file_get_contents($url);
        if ($chartData === false) {
            throw new Exception("No se pudo generar el gráfico desde QuickChart.");
        }
        file_put_contents($imgPath, $chartData);
    } catch (Exception $e) {
        \Log::error("Error al generar el gráfico circular: " . $e->getMessage());
        return null;
    }

    return $imgPath;
}

    public function generateReport(Request $request)
{
    // Obtener el id del periodo de la solicitud desde la sesión
    $periodoId = session('periodoId');

    // Realizar la consulta con el filtro por periodo
    $query = DB::table('aperturas_cursos')
        ->join('profiles', 'profiles.user_id', '=', 'aperturas_cursos.usuario_id')
        ->join('cursos', 'aperturas_cursos.curso_id', '=', 'cursos.id')
        ->join('carreras', 'profiles.carrera_id', '=', 'carreras.id')
        ->select(
            'carreras.programa',
            'cursos.nombre',
            DB::raw("CASE 
                        WHEN aperturas_cursos.estado = 0 THEN 'Pendiente'
                        WHEN aperturas_cursos.estado = 1 THEN 'Aprobada'
                        WHEN aperturas_cursos.estado = 2 THEN 'Rechazada'
                     END as estado"),
            DB::raw("CONCAT(profiles.nombres, ' ', profiles.apellidos) as enviado_por")
        );

    // Si un periodo fue seleccionado, agregar el filtro
    if ($periodoId) {
        $query->where('aperturas_cursos.periodo_id', $periodoId);
    }

    // Obtener las solicitudes
    $solicitudes = $query->get();

    // Contar las solicitudes por estado
    $pendientes = $solicitudes->where('estado', 'Pendiente')->count();
    $aprobadas = $solicitudes->where('estado', 'Aprobada')->count();
    $rechazadas = $solicitudes->where('estado', 'Rechazada')->count();

    // Agrupar solicitudes por programa y contar
    $solicitudesPorPrograma = DB::table('aperturas_cursos')
        ->join('profiles', 'profiles.user_id', '=', 'aperturas_cursos.usuario_id')
        ->join('carreras', 'profiles.carrera_id', '=', 'carreras.id')
        ->select('carreras.programa', DB::raw('COUNT(*) as total'))
        ->groupBy('carreras.programa');

    if ($periodoId) {
        $solicitudesPorPrograma->where('aperturas_cursos.periodo_id', $periodoId);
    }

    $solicitudesPorPrograma = $solicitudesPorPrograma->get();

    // Preparar datos para el gráfico de barras
    $programas = $solicitudesPorPrograma->pluck('programa')->toArray();
    $totales = $solicitudesPorPrograma->pluck('total')->toArray();

    // Generar los gráficos
    $graficoBarrasPath = $this->generateBarChart($programas, $totales);
    

    // Obtener el usuario actual para mostrar en el reporte
    $usuarioActual = auth()->user();
    $periodo = Periodo::find($periodoId);

    // Generar el PDF utilizando la vista Blade
    $pdf = \PDF::loadView('admin.Apertura.director.Reporte_Solicitudes_pdf', [
        'solicitudes' => $solicitudes,
        'usuarioActual' => $usuarioActual,
        'periodo' => $periodo,
        
        'graficoBarrasPath' => $graficoBarrasPath,
        'pendientes' => $pendientes,
        'aprobadas' => $aprobadas,
        'rechazadas' => $rechazadas,
        'solicitudesPorPrograma' => $solicitudesPorPrograma
    ]);

    // Descargar el PDF
    return $pdf->download('reporte_solicitudes.pdf');
}

    // Función para generar el gráfico y guardarlo como imagen
    private function generateBarChart($labels, $values)
{
    // Crear la ruta donde se guardará el gráfico
    $imgPath = public_path('images2/grafico_barras_solicitudes.png');

    // Convertir las etiquetas y valores a formato JSON
    $labelsJson = json_encode($labels);
    $valuesJson = json_encode($values);

    // Generar el gráfico de barras con QuickChart.io
    $url = 'https://quickchart.io/chart?c=' . urlencode('{
        type: "bar",
        data: {
            labels: ' . $labelsJson . ',
            datasets: [{
                label: "Solicitudes por Programa",
                data: ' . $valuesJson . ',
                backgroundColor: ["#FF5733", "#33FF57", "#3357FF", "#FFC300", "#581845"]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    }');

    // Guardar la imagen generada en el servidor
    try {
        $chartData = file_get_contents($url);
        if ($chartData === false) {
            throw new Exception("No se pudo generar el gráfico desde QuickChart.");
        }
        file_put_contents($imgPath, $chartData);
    } catch (Exception $e) {
        \Log::error("Error al generar el gráfico de barras: " . $e->getMessage());
        return null;
    }

    return $imgPath;
}

    
    
}