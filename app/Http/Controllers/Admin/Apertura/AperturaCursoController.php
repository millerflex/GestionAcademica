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
class AperturaCursoController extends Controller
{
    /**
     * Listar todas las aperturas de cursos con sus relaciones.
     */
    public function getCiclos(Request $request)
    {
        $periodoId = $request->input('periodo');
        $periodo = Periodo::find($periodoId);
    
        if (!$periodo) {
            return response()->json(['error' => 'El período seleccionado no existe.'], 404);
        }
    
        $ciclos = Curso::select('cursos.ciclo')
            ->distinct()
            ->join('aperturas_cursos', 'cursos.id', '=', 'aperturas_cursos.Curso_id')
            ->where('aperturas_cursos.periodo_id', $periodoId) // Filtrar por período seleccionado
            ->where('aperturas_cursos.estado', '=', '1') // Solo aperturas activas
            ->get();
    
        return response()->json(['ciclos' => $ciclos]);
    }
    
     // Método para filtrar las aperturas según los filtros seleccionados
  

     public function filtrarAperturas(Request $request)
     {
         $periodoId = $request->input('periodo');
         $cicloId = $request->input('ciclo');
     
         $aperturas = AperturaCurso::where('periodo_id', $periodoId)
                              ->where('ciclo', $cicloId)
                              ->get();
     
         return response()->json(['aperturas' => $aperturas]);
     }

     public function index(Request $request)
     {
         $periodoId = $request->input('periodo');
         $cicloId = $request->input('ciclo');
         $aperturas = collect();
         $ciclos = collect();
     
         if ($periodoId) {
             $periodoSeleccionado = Periodo::find($periodoId);
             $semestre = ($periodoSeleccionado->semestre === 'I') ? 1 : 2;
     
             $esImpar = $semestre % 2 !== 0;
     
             $aperturas = AperturaCurso::select(
                 'cursos.nombre as curso',
                 'cursos.ciclo as ciclo',
                 DB::raw("CONCAT(periodos.Año, ' - ', periodos.semestre) as periodo")
             )
             ->join('cursos', 'aperturas_cursos.Curso_id', '=', 'cursos.id')
             ->join('periodos', 'aperturas_cursos.Periodo_id', '=', 'periodos.id')
             ->where('aperturas_cursos.estado', 1) // Filtrar por estado = 1
             ->when($periodoId, fn($query) => $query->where('aperturas_cursos.Periodo_id', $periodoId))
             ->when($cicloId, fn($query) => $query->where('cursos.ciclo', $cicloId))
             ->get();
     
             $ciclos = Curso::select('cursos.ciclo')
                 ->distinct()
                 ->join('aperturas_cursos', 'cursos.id', '=', 'aperturas_cursos.Curso_id')
                 ->where('aperturas_cursos.estado', 1) // Filtrar por estado = 1
                 ->get();
         }
     
         $periodos = Periodo::select('periodos.id', DB::raw("CONCAT(periodos.Año, ' - ', periodos.semestre) as periodo"))
             ->distinct()
             ->join('aperturas_cursos', 'periodos.id', '=', 'aperturas_cursos.Periodo_id')
             ->where('aperturas_cursos.estado', 1) // Filtrar por estado = 1
             ->get();
     
         if ($request->ajax()) {
             return response()->json([
                 'aperturas' => $aperturas,
                 'ciclos' => $ciclos,
             ]);
         }
     
         return view('admin.Apertura.index', compact('aperturas', 'periodos', 'ciclos', 'periodoId', 'cicloId'));
     }
     
     public function generarPdf(Request $request)
     {
         $periodoId = $request->input('periodo');
         $cicloId = $request->input('ciclo');
     
         if (!$periodoId || !$cicloId) {
             return redirect()->back()->with('error', 'Debe seleccionar un período y un ciclo para generar el informe.');
         }
     
         // Obtener el periodo
         $per = Periodo::select(DB::raw("CONCAT(periodos.Año, ' - ', periodos.semestre) as periodo"))
             ->where('id', $periodoId)
             ->first();
     
         // Obtener los datos de cursos aperturados
         $aperturas = AperturaCurso::select(
             'cursos.nombre as curso',
             'cursos.Codigo',
             'cursos.Creditos',
             'cursos.Ciclo',
             DB::raw("CONCAT(periodos.Año, ' - ', periodos.semestre) as periodo")
         )
         ->join('cursos', 'aperturas_cursos.Curso_id', '=', 'cursos.id')
         ->join('periodos', 'aperturas_cursos.Periodo_id', '=', 'periodos.id')
         ->where('aperturas_cursos.Periodo_id', $periodoId)
         ->where('cursos.ciclo', $cicloId)
         ->get();
     
         if ($aperturas->isEmpty()) {
             return redirect()->back()->with('error', 'No hay datos para generar el PDF.');
         }
     
         // Agrupar y contar cursos por ciclo y período
         $datosGrafico = $aperturas->groupBy('Ciclo')->map(function ($items, $ciclo) {
             return [
                 'ciclo' => $ciclo,
                 'data' => $items->groupBy('periodo')->map(function ($grouped) {
                     return count($grouped);
                 })
             ];
         });
     
         // Generar el gráfico de barras
         $imagenBase64 = $this->generarGraficoDeBarras($datosGrafico);
     
         // Cargar PDF con datos
         $pdf = PDF::loadView('admin.reportes.cursos_aperturados_pdf', [
             'aperturas' => $aperturas,
             'per' => $per,
             'cicloId' => $cicloId,
             'imagenBase64' => $imagenBase64
         ]);
     
         return $pdf->download('reporte_cursos_aperturados.pdf');
     }
     
     // Función para generar un gráfico de barras con QuickChart
     private function generarGraficoDeBarras($datosGrafico)
     {
         $labels = [];
         $datasets = [];
         $backgroundColors = ['#FF5733', '#33FF57', '#3357FF', '#FFC300', '#DAF7A6'];
     
         foreach ($datosGrafico as $ciclo => $data) {
             $labels = array_merge($labels, array_keys($data['data']->toArray()));
             $datasets[] = [
                 'label' => "Ciclo $ciclo",
                 'data' => array_values($data['data']->toArray()),
                 'backgroundColor' => $backgroundColors[$ciclo % count($backgroundColors)]
             ];
         }
     
         $labels = array_unique($labels);
     
         $url = 'https://quickchart.io/chart?c=' . urlencode(json_encode([
             'type' => 'bar',
             'data' => [
                 'labels' => $labels,
                 'datasets' => $datasets
             ],
             'options' => [
                 'responsive' => true,
                 'plugins' => [
                     'legend' => [
                         'position' => 'top'
                     ]
                 ]
             ]
         ]));
     
         // Guardar la imagen generada
         $imgPath = public_path('images2/grafico_barras.png');
         file_put_contents($imgPath, file_get_contents($url));
     
         return $imgPath;
     }
     

public function generarPdf2(Request $request)
{
   $periodoId = $request->input('periodo');
   $cicloId = $request->input('ciclo');

   if (!$periodoId || !$cicloId) {
       return redirect()->back()->with('error', 'Debe seleccionar un período y un ciclo para generar el informe.');
   }

   $per = Periodo::select(DB::raw("CONCAT(periodos.Año, ' - ', periodos.semestre) as periodo"))
       ->where('id', $periodoId)
       ->first();

   $aperturas = AperturaCurso::select(
       'cursos.nombre as curso',
       'cursos.Codigo',
       'cursos.Creditos',
       'cursos.Ciclo',
       'periodos.Año',
       'periodos.semestre',
       DB::raw("CONCAT(periodos.Año, ' - ', periodos.semestre) as periodo")
   )
   ->join('cursos', 'aperturas_cursos.Curso_id', '=', 'cursos.id')
   ->join('periodos', 'aperturas_cursos.Periodo_id', '=', 'periodos.id')
   ->where('aperturas_cursos.Periodo_id', $periodoId)
   ->where('cursos.ciclo', $cicloId)
   ->get();

   if ($aperturas->isEmpty()) {
       return redirect()->back()->with('error', 'No hay datos para generar el PDF.');
   }

   // Generar gráfico circular
 

   $pdf = PDF::loadView('admin.reportes.cursos_aperturados_pdf', compact('aperturas', 'per', 'cicloId', ));

   return $pdf->download('reporte_cursos_aperturados.pdf');
}







public function generarGrafico($datosGrafico)
{
// Dimensiones del gráfico
$width = 600;
$height = 400;

// Crear la imagen
$image = imagecreate($width, $height);

// Colores
$backgroundColor = imagecolorallocate($image, 255, 255, 255); // Blanco
$borderColor = imagecolorallocate($image, 0, 0, 0); // Negro
$barColor = imagecolorallocate($image, 75, 192, 192); // Azul claro
$textColor = imagecolorallocate($image, 0, 0, 0); // Negro

// Dibujar fondo
imagefilledrectangle($image, 0, 0, $width, $height, $backgroundColor);

// Bordes
imagerectangle($image, 0, 0, $width - 1, $height - 1, $borderColor);

// Calcular barras
$margin = 50;
$barWidth = 40;
$maxHeight = $height - 2 * $margin;
$maxValue = max($datosGrafico->pluck('total_cursos')->toArray());

$x = $margin;
foreach ($datosGrafico as $dato) {
   // Altura proporcional de la barra
   $barHeight = ($dato->total_cursos / $maxValue) * $maxHeight;

   // Dibujar barra
   imagefilledrectangle($image, $x, $height - $margin - $barHeight, $x + $barWidth, $height - $margin, $barColor);

   // Etiquetas
   imagestring($image, 3, $x, $height - $margin + 5, $dato->periodo, $textColor);
   imagestring($image, 3, $x, $height - $margin - $barHeight - 15, $dato->total_cursos, $textColor);

   $x += $barWidth + 20; // Espaciado
}

// Convertir imagen a Base64
ob_start();
imagepng($image);
$base64 = base64_encode(ob_get_clean());

// Limpiar recursos
imagedestroy($image);

return $base64;
}


public function generarReporteEstadistico(Request $request)
{
   // Obtener estadísticas y datos para el gráfico
   $estadisticas = AperturaCurso::select(
       DB::raw("CONCAT(periodos.Año, ' - ', periodos.semestre) as periodo"),
       'cursos.ciclo',
       DB::raw('COUNT(aperturas_cursos.id) as total_cursos'),
       DB::raw('sum(cursos.creditos) as promedio_creditos')
   )
   ->join('cursos', 'aperturas_cursos.Curso_id', '=', 'cursos.id')
   ->join('periodos', 'aperturas_cursos.Periodo_id', '=', 'periodos.id')
   ->groupBy('periodo', 'cursos.ciclo')
   ->orderBy('periodo')
   ->orderBy('cursos.ciclo')
   ->get();

   $datosGrafico = AperturaCurso::select(
       DB::raw("CONCAT(periodos.Año, ' - ', periodos.semestre) as periodo"),
       DB::raw('COUNT(aperturas_cursos.id) as total_cursos')
   )
   ->join('periodos', 'aperturas_cursos.Periodo_id', '=', 'periodos.id')
   ->groupBy('periodo')
   ->orderBy('periodo')
   ->get();

   // Recibir la imagen del gráfico en base64
    // Generar gráfico en Base64
$chartImage = $this->generarGrafico($datosGrafico);
   $isPdf = true; // Indica que estás generando un PDF

   // Generar el PDF
    $pdf = PDF::loadView('admin.reportes.estadistico', compact('estadisticas', 'datosGrafico', 'chartImage', 'isPdf'));
   return $pdf->download('reporte_estadistico.pdf');
}





public function getCursosPorCiclo(Request $request)
{
    if ($request->ajax()) {
        $ciclo = $request->input('ciclo');
        
        // Obtener los cursos correspondientes al ciclo
        $cursos = Curso::where('ciclo', $ciclo)->get(); 

        return response()->json(['cursos' => $cursos]);
    }
}

    /**
     * Crear una nueva apertura de curso.
     */

     public function create(Request $request)
     {
         // Obtener los filtros enviados desde el request
         $cursoId = $request->input('curso');
         $periodoId = $request->input('periodo');
         $carreraId = $request->input('carrera');
         $cicloId = $request->input('ciclo');
         
         // Obtener la lista de ciclos disponibles
         $ciclos = Curso::select('ciclo')->distinct()->get();
         
         // Cargar datos para los filtros
         $cursos = Curso::all(); // Todos los cursos disponibles
         $periodos = Periodo::all(); // Todos los periodos disponibles
         $carreras = Carrera::all(); // Todas las carreras disponibles
         $tiposApertura = ['Regular', 'Repetidores']; // Opciones para el tipo de apertura
         
         // Pasar todos los datos a la vista
         return view('admin.apertura.create', compact('cursos', 'periodos', 'carreras', 'ciclos', 'tiposApertura'));
     }
     
     
   
    
    /**
     * Guardar una nueva apertura de curso.
     */


     public function store(Request $request)
     {
         // Validar los datos
         $request->validate([
             'periodo_id' => 'required|exists:periodos,id',
             'curso_id' => 'required|exists:cursos,id',
             'tipo_apertura' => 'required|in:Regular,Repetidores', // Validar el tipo de apertura
         ]);
     
         // Insertar directamente en la base de datos
         DB::table('aperturas_cursos')->insert([
             'periodo_id' => $request->periodo_id,
             'curso_id' => $request->curso_id,
             'tipo_apertura' => $request->tipo_apertura, // Guardar el tipo de apertura
             'usuario_id' => Auth::id(), // ID del usuario autenticado
             'estado' => 0,
             'created_at' => now(), // Si la tabla tiene timestamps
             'updated_at' => now(),
         ]);
     
         return redirect()->route('admin.Apertura.index')->with('success', 'Apertura creada exitosamente.');
     }
     
    
}
