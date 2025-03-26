<?php

namespace App\Http\Controllers\Admin\Carga;

use App\Http\Controllers\Controller;
use App\Models\AsignacionCL\CargaHl;
use App\Models\General\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AsignacionCL\DetalleCHL; 
use App\Models\Carga\HorarioCHL;
use App\Models\Carga\Aula;

class CargaHLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Auth::user();
        $periodoSeleccionado = Periodo::where('activo', 1)->first();
        $profile = $usuario->profile;

        if ($usuario->hasRole('Docente')) {
            $carga = CargaHl::where('IdProfile', $profile->id)->where('IdSemestre', $periodoSeleccionado->id)->first();
            
            if (!$carga) {
                $carga = new CargaHl();
                $carga->IdSemestre = $periodoSeleccionado->id;
                $carga->IdProfile = $profile->id;
                $carga->horasSemanales = 0;
                $carga->save();
            }
            

            $cargota = CargaHl::where('IdProfile', $profile->id)->where('IdSemestre', $periodoSeleccionado->id)->first();

            return view('admin.carga.hl.index', compact('cargota','periodoSeleccionado'));
        }

        if ($usuario->hasRole('Admin')) {
            $cargota = CargaHl::with('detalle.apertura.curso')
                ->where('IdSemestre', $periodoSeleccionado->id)
                ->get();

            return view('admin.carga.hl.index', compact('cargota', 'periodoSeleccionado'));
        }

        return view('admin.carga.hl.index', compact('periodos', 'periodoSeleccionado'));
    }


    public function verCursos() {
        $periodo = Periodo::where('activo', 1)->first();

        $detalles = DetalleCHL::whereHas('carga', function($query) use ($periodo) {
                $query->where('IdSemestre', $periodo->id);
            })->get();

        return view('admin.carga.hl.vercursos', compact('detalles'));
    }

    public function vistaAsignar($id)
    {
        $detalle = DetalleCHL::with('apertura.curso', 'horarios')->findOrFail($id);
        $aulas = Aula::all();
        return view('admin.carga.hl.asignar', compact('detalle','aulas'));
    }

    public function asignarHorarios(Request $request, $id)
    {
        $request->validate([
            'dia' => 'required|string',
            'hora_inicio' => 'required|date_format:H:i|after_or_equal:08:00',
            'hora_fin' => 'required|date_format:H:i|before_or_equal:22:00|after:hora_inicio',
            'tipo' => 'required|in:Teórico,Práctico',
            'aula_id' => 'required|exists:aulas,id',
        ]);
    
        $detalle = DetalleCHL::findOrFail($id);

        // Verificar existencia de Teórico
        if ($request->tipo === 'Teórico' && HorarioCHL::where('detalle_chl_id', $detalle->id)->where('tipo', 'Teórico')->exists()) {
            return redirect()->back()->withErrors(['error' => 'Solo se puede asignar un horario teórico por curso.']);
        }
    
        $conflicto = HorarioCHL::where('dia', $request->dia)
            ->where('aula_id', $request->aula_id)
            ->where('detalle_chl_id', '!=', $detalle->id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('hora_inicio', [$request->hora_inicio, $request->hora_fin])
                      ->orWhereBetween('hora_fin', [$request->hora_inicio, $request->hora_fin])
                      ->orWhere(function ($query) use ($request) {
                          $query->where('hora_inicio', '<=', $request->hora_inicio)
                                ->where('hora_fin', '>=', $request->hora_fin);
                      });
            })->exists();
    
        if ($conflicto) {
            return redirect()->back()->withErrors(["Conflicto de horario detectado para el día {$request->dia} en el aula seleccionada."]);
        }
    
        HorarioCHL::create([
            'detalle_chl_id' => $detalle->id,
            'dia' => $request->dia,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
            'aula_id' => $request->aula_id,
            'tipo' => $request->tipo,
        ]);

        // Actualizar total de horas sin accesor
        $horasTotales = HorarioCHL::where('detalle_chl_id', $detalle->id)->sum(
            \DB::raw('TIMESTAMPDIFF(HOUR, hora_inicio, hora_fin)')
        );
        $detalle->update(['HorasSemanales' => $horasTotales]);
    
        return redirect()->route('admin.carga.hl.horarios.ver', $detalle->id)
            ->with('success', 'Horario asignado correctamente.');
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detalleCurso = DetalleCHL::with([
            'apertura.curso',
            'horarios.aula'
        ])->find($id);

        if (!$detalleCurso) {
            return redirect()->route('admin.carga.hl.index')
                ->with('error', 'El curso solicitado no existe.');
        }

        return view('admin.carga.hl.show', compact('detalleCurso'));
    }



    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
