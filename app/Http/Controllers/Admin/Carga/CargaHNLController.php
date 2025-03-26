<?php

namespace App\Http\Controllers\Admin\Carga;

use App\Http\Controllers\Controller;
use App\Models\Carga\CargaHNL;
use App\Models\General\Periodo;
use App\Models\Carga\DetalleCHNL;
use App\Models\Carga\Aula;
use App\Models\Carga\HorarioCHNL;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Profile;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class CargaHNLController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        $periodo = Periodo::where('activo', 1)->first();
        $profiles = Profile::all();
        $cargaComplementaria = CargaHNL::where('profile_id', $usuario->id)->where('tipo_id', '1')->where('periodo_id',$periodo->id)->first();

        if (!$cargaComplementaria) {
            $cargaComplementaria = new CargaHNL();
            $cargaComplementaria->periodo_id = $periodo->id;
            $cargaComplementaria->profile_id = $usuario->id;
            $cargaComplementaria->tipo_id = 1;
            $cargaComplementaria->horasSemanales = 0;
            $cargaComplementaria->save();
        }

        $cargaAdministrativa = CargaHNL::where('profile_id', $usuario->id)->where('tipo_id', '2')->where('periodo_id',$periodo->id)->first();

        if (!$cargaAdministrativa) {
            $cargaAdministrativa = new CargaHNL();
            $cargaAdministrativa->periodo_id = $periodo->id;
            $cargaAdministrativa->profile_id = $usuario->id;
            $cargaAdministrativa->tipo_id = 2;
            $cargaAdministrativa->horasSemanales = 0;
            $cargaAdministrativa->save();
        }

        $datos = [
            'COMPLEMENTARIA' => [
                'PREPARACIÓN Y EVALUACIÓN',
                'TUTORÍA Y CONSEJERÍA',
                'INVESTIGACIÓN',
                'RESPONSABILIDAD SOCIAL UNIVERSITARIA',
                'ASESORÍA DE TESIS Y EXÁMENES PROFESIONALES',
                'FORMACIÓN ACADÉMICA Y CAPACITACIÓN',
                'AUTOEVALUACIÓN Y/O ACREDITACIÓN DE LA ESCUELA PROFESIONAL'
            ],
            'ADMINISTRATIVA' => [
                'COMITÉS O COMISIONES ESPECIALES',
                'ACTIVIDADES DE GOBIERNO O DE AUTORIDAD',
                'ACTIVIDADES DE GESTIÓN INSTITUCIONAL'
            ]
            ];

        return view('admin.carga.hnl.index', compact('cargaAdministrativa', 'cargaComplementaria','datos','periodo','profiles'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'tipo' => 'required|in:ADMINISTRATIVA,COMPLEMENTARIA',
            'horasSemanales' => 'required|numeric|min:1|max:10',
        ]);

        $idCargaCorrecta = 'X';
        if($request->input('tipo')=='ADMINISTRATIVA') {
            $idCargaCorrecta = $request->input('idA');
        } else {
            $idCargaCorrecta = $request->input('idC');
        }

        DetalleCHNL::create([
            'carga_hnl_id' => $idCargaCorrecta,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'horasSemanales' => $request->horasSemanales,
        ]);

        return redirect()->route('admin.carga.hnl.index')
            ->with('success', 'Detalle agregado correctamente.');
    }

    public function vistaAsignar($id)
    {
        $detalle = DetalleCHNL::find($id);
        $aulas = Aula::all();
        return view('admin.carga.hnl.asignar', compact('detalle', 'aulas'));
    }

    public function asignarHorarios(Request $request, $id)
    {
        $request->validate([
            'hora_inicio' => 'required|date_format:H:i|after_or_equal:08:00',
            'hora_fin' => 'required|date_format:H:i|before_or_equal:22:00|after:hora_inicio',
        ]);

        $detalle = DetalleCHNL::findOrFail($id);

        // Verificar conflictos
        $conflicto = HorarioCHNL::where('dia', $request->dia)
            ->where('aula_id', $request->aula_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('hora_inicio', [$request->hora_inicio, $request->hora_fin])
                    ->orWhereBetween('hora_fin', [$request->hora_inicio, $request->hora_fin]);
            })->exists();

        if ($conflicto) {
            return redirect()->back()->withErrors(["Conflicto de horario detectado."]);
        }

        HorarioCHNL::create([
            'detalle_chnl_id' => $detalle->id,
            'dia' => $request->dia,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
            'aula_id' => $request->aula_id,
            ]);
        // Calcular y actualizar las horas semanales
        $totalHoras = HorarioCHNL::where('detalle_chnl_id', $detalle->id)
            ->get()
            ->sum(function ($horario) {
                $horaInicio = Carbon::parse($horario->hora_inicio);
                $horaFin = Carbon::parse($horario->hora_fin);
                return $horaFin->diffInMinutes($horaInicio) / 60;
            });

        // Actualizar el detalle
        $detalle->update(['horasSemanales' => $totalHoras]);

        $carga = CargaHNL::findOrFail($detalle->carga_hnl_id);

        $totalHoras = DetalleCHNL::where('carga_hnl_id', $carga->id)
        ->with('horarios')
        ->get()
        ->sum(function ($detalle) {
            $horasDetalle = $detalle->horarios->sum(function ($horario) {
                $horaInicio = Carbon::parse($horario->hora_inicio);
                $horaFin = Carbon::parse($horario->hora_fin);
                return $horaFin->diffInMinutes($horaInicio) / 60;
            });

            // Actualizar el detalle
            $detalle->update(['horas_semanales' => $horasDetalle]);

            return $horasDetalle;
        });

        // Actualizar la carga con el total de horas
        $carga->horasSemanales = $totalHoras;
        $carga->save();

        return redirect()->route('admin.carga.hnl.asignar', $detalle->id)
            ->with('success', 'Horario asignado correctamente.');
    }

    public function eliminarHorario($id)
    {
        $horario = HorarioCHNL::findOrFail($id);
        $detalle = DetalleCHNL::findOrFail($horario->detalle_chnl_id);
        // Eliminar el registro
        $horario->delete();
    
        // Calcular y actualizar las horas semanales
        $totalHoras = HorarioCHNL::where('detalle_chnl_id', $detalle->id)
        ->get()
        ->sum(function ($horario) {
            $horaInicio = Carbon::parse($horario->hora_inicio);
            $horaFin = Carbon::parse($horario->hora_fin);
            return $horaFin->diffInMinutes($horaInicio) / 60;
        });

        // Actualizar el detalle
        $detalle->update(['horasSemanales' => $totalHoras]);

        $carga = CargaHNL::findOrFail($detalle->carga_hnl_id);

        $totalHoras = DetalleCHNL::where('carga_hnl_id', $carga->id)
        ->with('horarios')
        ->get()
        ->sum(function ($detalle) {
            $horasDetalle = $detalle->horarios->sum(function ($horario) {
                $horaInicio = Carbon::parse($horario->hora_inicio);
                $horaFin = Carbon::parse($horario->hora_fin);
                return $horaFin->diffInMinutes($horaInicio) / 60;
            });

            // Actualizar el detalle
            $detalle->update(['horas_semanales' => $horasDetalle]);

            return $horasDetalle;
        });

        // Actualizar la carga con el total de horas
        $carga->horasSemanales = $totalHoras;
        $carga->save();

        return redirect()->back()->with('success', 'Horario eliminado correctamente.');
    }

    public function agregarAula(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'piso' => 'required|integer',
            'referencia' => 'required|string|max:255',
            'lugar' => 'required|string|max:255',
            'capacidad' => 'required|integer',
            'edificio' => 'required|string|max:255',
        ]);
    
        // Crear una nueva aula con los datos recibidos
        Aula::create([
            'nombre' => $request->nombre,
            'piso' => $request->piso,
            'referencia' => $request->referencia,
            'lugar' => $request->lugar,
            'capacidad' => $request->capacidad,
            'edificio' => $request->edificio,
        ]);
    
        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', 'Aula registrada correctamente');
    }

    public function generateChart($grafico_data) {
        // Preparar los datos para el gráfico
        $totalC = $grafico_data['totalC'];
        $totalA = $grafico_data['totalA'];
    
        // Crear una imagen en blanco (de 500px x 300px)
        $image = imagecreatetruecolor(500, 300);
    
        // Colores
        $backgroundColor = imagecolorallocate($image, 255, 255, 255); // Blanco
        $complementariasColor = imagecolorallocate($image, 255, 87, 34); // Naranja
        $administrativasColor = imagecolorallocate($image, 33, 150, 83); // Verde
    
        // Rellenar el fondo con color blanco
        imagefill($image, 0, 0, $backgroundColor);
    
        // Crear el gráfico circular
        $centerX = 250; // Centro del gráfico
        $centerY = 150;
        $radius = 120;
    
        // Ángulos para el gráfico
        $angleStart = 0;
        $angleEnd = ($totalC / ($totalC + $totalA)) * 360; // Ángulo de las horas complementarias
    
        // Dibuja las horas complementarias
        imagefilledarc($image, $centerX, $centerY, $radius * 2, $radius * 2, $angleStart, $angleEnd, $complementariasColor, IMG_ARC_PIE);
    
        // Dibuja las horas administrativas
        $angleStart = $angleEnd;
        $angleEnd = 360; // Completar el círculo
        imagefilledarc($image, $centerX, $centerY, $radius * 2, $radius * 2, $angleStart, $angleEnd, $administrativasColor, IMG_ARC_PIE);
    
        // Guardar la imagen en el directorio public/images
        $imagePath = public_path('images/grafico.png');
        imagepng($image, $imagePath); // Guardar la imagen como PNG
    
        // Liberar memoria
        imagedestroy($image);
    
        return $imagePath; // Retornar la ruta de la imagen
    }
    
    

    public function reportes() { 
        // Obtener el periodo activo
        $periodo = Periodo::where('activo', 1)->first();
    
        // Obtener las cargas para el periodo activo
        $cargas = CargaHNL::where('periodo_id', $periodo->id)->get();
        
        // Sumar las horas
        $totalHorasSemanales = 0;
        foreach ($cargas as $carga) {
            foreach ($carga->detalles as $detalle) {
                $totalHorasSemanales += $detalle->horasSemanales; // Asegúrate de que `horasSemanales` exista en `detalle_chnl`
            }
            $carga->horasSemanales = $totalHorasSemanales;
            $carga->save();
            $totalHorasSemanales = 0;
        }
    
        $totalC = 0;
        $totalA = 0;
        foreach ($cargas as $carga) {
            if($carga->tipo->id === 1) {
                $totalC += $carga->horasSemanales;
            } else {
                $totalA += $carga->horasSemanales;
            }
        }
    
        // Datos de ejemplo para el gráfico
        $grafico_data = [
            'cargas' => $cargas->count(),
            'docentes' => Profile::count(),
            'horas' => $cargas->sum('horasSemanales'),
            'totalA' => $totalA,
            'totalC' => $totalC,
        ];
    
        // Generar el gráfico y obtener la ruta de la imagen
        $graficoImagePath = $this->generateChart($grafico_data);
    
        // Pasar los datos a la vista
        $pdf = PDF::loadView('admin.carga.hnl.reportes', compact('cargas', 'grafico_data', 'graficoImagePath', 'periodo'));
    
        // Descargar el PDF generado
        return $pdf->download('reporte_cargas.pdf');
    }
    
    
    
 /*    public function guardarProyecto(Request $request)
    {
        $request->validate([
            'tipo_proyecto' => 'required|in:RSU,Investigacion', // Tipo de Proyecto
            'descripcion' => 'required|string|max:255', // Descripción
            'horasSemanales' => 'required|numeric|min:1|max:10', // Horas Semanales
            'docentes' => 'required|array|min:1', // Docentes seleccionados
            'docentes.*' => 'exists:profiles,id', // Validar que los IDs de docentes sean válidos
        ]);
    
        // Obtener los datos del proyecto
        if( $request->tipo_proyecto == 'RSU' ){
            $tipoProyecto = 'RESPONSABILIDAD SOCIAL UNIVERSITARIA';
        } else {
            $tipoProyecto = 'INVESTIGACIÓN';
        }
        
        $descripcion = $request->descripcion;
        $horasSemanales = $request->horasSemanales;
        $docentesSeleccionados = $request->docentes;
        $periodoActual = Periodo::where('activo', 1)->first();

        // Crear los registros de detalle_chnl para cada docente
        foreach ($docentesSeleccionados as $docenteId) {
            $carga = CargaHNL::where('profile_id', $docenteId)
                ->where('tipo_id', 1)
                ->where('periodo_id', $periodoActual->id)
                ->first();
            if (!$carga) {
                $carga = new CargaHNL();
                $carga->periodo_id = $periodoActual->id;
                $carga->profile_id = $docenteId->id;
                $carga->tipo_id = 1;
                $carga->horasSemanales = 0;
                $carga->save();
            }
            DetalleCHNL::create([
                'carga_hnl_id' => $carga->id, // Si no hay una tabla de carga_hnl, puedes dejarlo null o agregar la relación
                'nombre' => $tipoProyecto,  // RSU o Investigación
                'descripcion' => $descripcion,
                'horasSemanales' => $horasSemanales,
            ]);
        }
    
        return redirect()->route('admin.carga.hnl.index')
            ->with('success', 'Proyecto agregado correctamente.');
    }
 */
}
