<?php

namespace App\Http\Controllers\Admin\Silabo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
use Barryvdh\DomPDF\Facade\Pdf;

class SilaboPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $silabox = Silabo::findOrFail($id);
    //     return response()->json($silabox);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $silabo=Silabo::findOrFail($id);
        $docentes=Profile::where('estado', '1')->get();
        $resultados=Resultado::where('estado', '1')->get();

        return view('admin.silaboPDF.edit', compact('docentes', 'silabo', 'resultados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $silabo=Silabo::findOrFail($id);
        $silabo->sumilla=$request->sumilla;
        $silabo->unidad_competencia=$request->unidad_competencia;
        $silabo->competencia_general=$request->competencia_general;
        if( $silabo->visado == '3' || $silabo->visado == '2' ){
            $silabo->visado = '0';
        }
        $silabo->save();
        $silabo_id = $id;

        // Obtener todos los promedios existentes con el mismo silabo_id
        $promedio = Promedio::where('silabo_id', $silabo->id)->get();
        // Guardar el nuevo promedio
        $promedio = new Promedio();
        $promedio->pu1 = $request->pu1;
        $promedio->pu2 = $request->pu2;
        $promedio->pu3 = $request->pu3;
        $promedio->pp = $request->pp;
        $promedio->silabo_id = $silabo->id;
        $promedio->save();

        $tutoria=new Tutoria();
        $tutoria->dia=$request->dia;
        $tutoria->horario=$request->horario;
        $tutoria->lugar=$request->lugar;
        $tutoria->silabo_id=$silabo_id;
        $tutoria->save();

        $organizacion=new Organizacion();
        $organizacion->hte1u=$request->hte1u;
        $organizacion->hte2u=$request->hte2u;
        $organizacion->hte3u=$request->hte3u;
        $organizacion->hpr1u=$request->hpr1u;
        $organizacion->hpr2u=$request->hpr2u;
        $organizacion->hpr3u=$request->hpr3u;
        $organizacion->hre1u=$request->hre1u;
        $organizacion->hre2u=$request->hre2u;
        $organizacion->hre3u=$request->hre3u;
        $organizacion->silabo_id=$silabo_id;
        $organizacion->save();

        $evaluaciones=$request->evaluacion;
        foreach ($evaluaciones as $itemEvaluacion) {
            $evaluacion=new Evaluacion();
            $evaluacion->evaluacion=$itemEvaluacion;
            $evaluacion->silabo_id=$silabo_id;
            $evaluacion->save();
        }

        $referencias=$request->referencia;
        foreach ($referencias as $itemReferencia) {
            $referencia=new Referencia();
            $referencia->referencia=$itemReferencia;
            $referencia->silabo_id=$silabo_id;
            $referencia->save();
        }

        $resultados=$request->resultados;
        foreach ($resultados as $resultado_id) {
            $resultado=new SilaboResultado();
            $resultado->resultado_id=$resultado_id;
            $resultado->silabo_id=$silabo_id;
            $resultado->save();
        }

        $unidad1=new Unidad();
        $unidad1->unidad="1";
        $unidad1->titulo=$request->titulos[0];
        $unidad1->capacidades=$request->resultadosuni[0];
        $unidad1->resultados=$request->capacidades[0];
        $unidad1->save();
        $unidad1_id=$unidad1->id;

        $programacion1=new Programacion();
        $programacion1->contenido=$request->contenido1[0];
        $programacion1->estrategias=$request->estrategias1[0];
        $programacion1->evidencias=$request->evidencias1[0];
        $programacion1->instrumentos=$request->intrumentos1[0];
        $programacion1->semana="1";
        $programacion1->save();
        $programacion1_id=$programacion1->id;

        $programacion2=new Programacion();
        $programacion2->contenido=$request->contenido1[1];
        $programacion2->estrategias=$request->estrategias1[1];
        $programacion2->evidencias=$request->evidencias1[1];
        $programacion2->instrumentos=$request->intrumentos1[1];
        $programacion2->semana="2";
        $programacion2->save();
        $programacion2_id=$programacion2->id;

        $programacion3=new Programacion();
        $programacion3->contenido=$request->contenido1[2];
        $programacion3->estrategias=$request->estrategias1[2];
        $programacion3->evidencias=$request->evidencias1[2];
        $programacion3->instrumentos=$request->intrumentos1[2];
        $programacion3->semana="3";
        $programacion3->save();
        $programacion3_id=$programacion3->id;

        $programacion4=new Programacion();
        $programacion4->contenido=$request->contenido1[3];
        $programacion4->estrategias=$request->estrategias1[3];
        $programacion4->evidencias=$request->evidencias1[3];
        $programacion4->instrumentos=$request->intrumentos1[3];
        $programacion4->semana="4";
        $programacion4->save();
        $programacion4_id=$programacion4->id;

        $programacion5=new Programacion();
        $programacion5->contenido=$request->contenido1[4];
        $programacion5->estrategias=$request->estrategias1[4];
        $programacion5->evidencias=$request->evidencias1[4];
        $programacion5->instrumentos=$request->intrumentos1[4];
        $programacion5->semana="5";
        $programacion5->save();
        $programacion5_id=$programacion5->id;


        $unidad_programacion1=new UnidadProgramacion();
        $unidad_programacion1->silabo_id=$silabo_id;
        $unidad_programacion1->unidad_id=$unidad1_id;
        $unidad_programacion1->programacion_id=$programacion1_id;
        $unidad_programacion1->save();

        $unidad_programacion2=new UnidadProgramacion();
        $unidad_programacion2->silabo_id=$silabo_id;
        $unidad_programacion2->unidad_id=$unidad1_id;
        $unidad_programacion2->programacion_id=$programacion2_id;
        $unidad_programacion2->save();

        $unidad_programacion3=new UnidadProgramacion();
        $unidad_programacion3->silabo_id=$silabo_id;
        $unidad_programacion3->unidad_id=$unidad1_id;
        $unidad_programacion3->programacion_id=$programacion3_id;
        $unidad_programacion3->save();

        $unidad_programacion4=new UnidadProgramacion();
        $unidad_programacion4->silabo_id=$silabo_id;
        $unidad_programacion4->unidad_id=$unidad1_id;
        $unidad_programacion4->programacion_id=$programacion4_id;
        $unidad_programacion4->save();

        $unidad_programacion5=new UnidadProgramacion();
        $unidad_programacion5->silabo_id=$silabo_id;
        $unidad_programacion5->unidad_id=$unidad1_id;
        $unidad_programacion5->programacion_id=$programacion5_id;
        $unidad_programacion5->save();



        $unidad2=new Unidad();
        $unidad2->unidad="2";
        $unidad2->titulo=$request->titulos[1];
        $unidad2->capacidades=$request->resultadosuni[1];
        $unidad2->resultados=$request->capacidades[1];
        $unidad2->save();
        $unidad2_id=$unidad2->id;

        $programacion6=new Programacion();
        $programacion6->contenido=$request->contenido2[0];
        $programacion6->estrategias=$request->estrategias2[0];
        $programacion6->evidencias=$request->evidencias2[0];
        $programacion6->instrumentos=$request->intrumentos2[0];
        $programacion6->semana="6";
        $programacion6->save();
        $programacion6_id=$programacion6->id;

        $programacion7=new Programacion();
        $programacion7->contenido=$request->contenido2[1];
        $programacion7->estrategias=$request->estrategias2[1];
        $programacion7->evidencias=$request->evidencias2[1];
        $programacion7->instrumentos=$request->intrumentos2[1];
        $programacion7->semana="7";
        $programacion7->save();
        $programacion7_id=$programacion7->id;

        $programacion8=new Programacion();
        $programacion8->contenido=$request->contenido2[2];
        $programacion8->estrategias=$request->estrategias2[2];
        $programacion8->evidencias=$request->evidencias2[2];
        $programacion8->instrumentos=$request->intrumentos2[2];
        $programacion8->semana="8";
        $programacion8->save();
        $programacion8_id=$programacion8->id;

        $programacion9=new Programacion();
        $programacion9->contenido=$request->contenido2[3];
        $programacion9->estrategias=$request->estrategias2[3];
        $programacion9->evidencias=$request->evidencias2[3];
        $programacion9->instrumentos=$request->intrumentos2[3];
        $programacion9->semana="9";
        $programacion9->save();
        $programacion9_id=$programacion9->id;

        $programacion10=new Programacion();
        $programacion10->contenido=$request->contenido2[4];
        $programacion10->estrategias=$request->estrategias2[4];
        $programacion10->evidencias=$request->evidencias2[4];
        $programacion10->instrumentos=$request->intrumentos2[4];
        $programacion10->semana="10";
        $programacion10->save();
        $programacion10_id=$programacion10->id;



        $unidad_programacion6=new UnidadProgramacion();
        $unidad_programacion6->silabo_id=$silabo_id;
        $unidad_programacion6->unidad_id=$unidad2_id;
        $unidad_programacion6->programacion_id=$programacion6_id;
        $unidad_programacion6->save();

        $unidad_programacion7=new UnidadProgramacion();
        $unidad_programacion7->silabo_id=$silabo_id;
        $unidad_programacion7->unidad_id=$unidad2_id;
        $unidad_programacion7->programacion_id=$programacion7_id;
        $unidad_programacion7->save();

        $unidad_programacion8=new UnidadProgramacion();
        $unidad_programacion8->silabo_id=$silabo_id;
        $unidad_programacion8->unidad_id=$unidad2_id;
        $unidad_programacion8->programacion_id=$programacion8_id;
        $unidad_programacion8->save();

        $unidad_programacion9=new UnidadProgramacion();
        $unidad_programacion9->silabo_id=$silabo_id;
        $unidad_programacion9->unidad_id=$unidad2_id;
        $unidad_programacion9->programacion_id=$programacion9_id;
        $unidad_programacion9->save();

        $unidad_programacion10=new UnidadProgramacion();
        $unidad_programacion10->silabo_id=$silabo_id;
        $unidad_programacion10->unidad_id=$unidad2_id;
        $unidad_programacion10->programacion_id=$programacion10_id;
        $unidad_programacion10->save();





        $unidad3=new Unidad();
        $unidad3->unidad="3";
        $unidad3->titulo=$request->titulos[2];
        $unidad3->capacidades=$request->resultadosuni[2];
        $unidad3->resultados=$request->capacidades[2];
        $unidad3->save();
        $unidad3_id=$unidad3->id;

        $programacion11=new Programacion();
        $programacion11->contenido=$request->contenido3[0];
        $programacion11->estrategias=$request->estrategias3[0];
        $programacion11->evidencias=$request->evidencias3[0];
        $programacion11->instrumentos=$request->intrumentos3[0];
        $programacion11->semana="11";
        $programacion11->save();
        $programacion11_id=$programacion11->id;

        $programacion12=new Programacion();
        $programacion12->contenido=$request->contenido3[1];
        $programacion12->estrategias=$request->estrategias3[1];
        $programacion12->evidencias=$request->evidencias3[1];
        $programacion12->instrumentos=$request->intrumentos3[1];
        $programacion12->semana="12";
        $programacion12->save();
        $programacion12_id=$programacion12->id;

        $programacion13=new Programacion();
        $programacion13->contenido=$request->contenido3[2];
        $programacion13->estrategias=$request->estrategias3[2];
        $programacion13->evidencias=$request->evidencias3[2];
        $programacion13->instrumentos=$request->intrumentos3[2];
        $programacion13->semana="13";
        $programacion13->save();
        $programacion13_id=$programacion13->id;

        $programacion14=new Programacion();
        $programacion14->contenido=$request->contenido3[3];
        $programacion14->estrategias=$request->estrategias3[3];
        $programacion14->evidencias=$request->evidencias3[3];
        $programacion14->instrumentos=$request->intrumentos3[3];
        $programacion14->semana="14";
        $programacion14->save();
        $programacion14_id=$programacion14->id;

        $programacion15=new Programacion();
        $programacion15->contenido=$request->contenido3[4];
        $programacion15->estrategias=$request->estrategias3[4];
        $programacion15->evidencias=$request->evidencias3[4];
        $programacion15->instrumentos=$request->intrumentos3[4];
        $programacion15->semana="15";
        $programacion15->save();
        $programacion15_id=$programacion15->id;


        $unidad_programacion11=new UnidadProgramacion();
        $unidad_programacion11->silabo_id=$silabo_id;
        $unidad_programacion11->unidad_id=$unidad3_id;
        $unidad_programacion11->programacion_id=$programacion11_id;
        $unidad_programacion11->save();

        $unidad_programacion12=new UnidadProgramacion();
        $unidad_programacion12->silabo_id=$silabo_id;
        $unidad_programacion12->unidad_id=$unidad3_id;
        $unidad_programacion12->programacion_id=$programacion12_id;
        $unidad_programacion12->save();

        $unidad_programacion13=new UnidadProgramacion();
        $unidad_programacion13->silabo_id=$silabo_id;
        $unidad_programacion13->unidad_id=$unidad3_id;
        $unidad_programacion13->programacion_id=$programacion13_id;
        $unidad_programacion13->save();

        $unidad_programacion14=new UnidadProgramacion();
        $unidad_programacion14->silabo_id=$silabo_id;
        $unidad_programacion14->unidad_id=$unidad3_id;
        $unidad_programacion14->programacion_id=$programacion14_id;
        $unidad_programacion14->save();

        $unidad_programacion15=new UnidadProgramacion();
        $unidad_programacion15->silabo_id=$silabo_id;
        $unidad_programacion15->unidad_id=$unidad3_id;
        $unidad_programacion15->programacion_id=$programacion15_id;
        $unidad_programacion15->save();

        return redirect()->route('admin.silabo.index')->with('datos', 'Silabo Registrado');
    }

    public function silaboPDF(string $id)
    {
        $silabo = Silabo::findOrFail($id);

        $pdf = Pdf::loadView('admin.silaboPDF.silabo', compact('silabo'));
        return $pdf->stream('syllabus-seguridad-informacion-completo.pdf');

        // return view('silabo.silabo', compact('data'));
    }
}
