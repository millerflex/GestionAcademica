<?php

use App\Http\Controllers\Admin\Administracion\PeriodoController;
use App\Http\Controllers\Admin\Administracion\UsuarioController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Silabo\SilaboController;
use App\Http\Controllers\Admin\Silabo\SilaboPdfController;
use App\Http\Controllers\Admin\Visacion\VisacionController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Admin\Apertura\AperturaCursoController;
use App\Http\Controllers\Admin\Apertura\DirectorEscuelaController;
use App\Http\Controllers\Admin\AsignacionCL\AsignacionController;
use App\Http\Controllers\Admin\Carga\CargaHLController;
use App\Http\Controllers\Admin\Carga\CargaHNLController;
use App\Http\Controllers\Admin\Declaraciones\DocumentoController;
use App\Mail\SilaboMailable;
use Illuminate\Support\Facades\Mail;





Route::get('', [HomeController::class, 'index']) -> name('admin.index');

// SILABO PDF
Route::get('silaboPDF/create-PDF/{id}', [SilaboPdfController::class, 'silaboPDF'])->name('admin.silaboPDF.pdf');
Route::resource('silaboPDF', SilaboPdfController::class)->only(['edit', 'update'])->names('admin.silaboPDF');

//SILABO
Route::get('silabo/llenar/{id}', [SilaboController::class, 'llenar'])->name('admin.silabo.llenar');
Route::resource('silabo', SilaboController::class)->only(['index'])->names('admin.silabo');

// USUARIO
Route::resource('usuario', UsuarioController::class)->only(['index', 'store', 'show', 'update', 'destroy']);

// PROFILE
Route::get('profile/edit', [ProfileController::class, 'edit']) -> name('admin.profile.edit');
Route::put('profile/update/{id}', [ProfileController::class, 'update']) -> name('admin.profile.update');
Route::put('profile/update/imagen/{id}', [ProfileController::class, 'update_img']) -> name('admin.profile.image.update');

// PERIODO FALTAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
Route::get('periodo/index', [PeriodoController::class, 'index']) -> name('admin.periodo.index');

// VISACION
Route::resource('visacion', VisacionController::class)->only(['index', 'create', 'store', 'edit'])->names('admin.visacion');
Route::put('visacion/visar/{id}', [VisacionController::class, 'visar']) -> name('admin.visacion.visar');
Route::post('visacion/comentar/{id}', [VisacionController::class, 'comentar']) -> name('admin.visacion.comentar');

Route::get('reporte/silabo', [VisacionController::class, 'reporte_silabo']) -> name('admin.reporte.silabo');
Route::get('reporte/cursos-silabo', [VisacionController::class, 'reporte_curso_silabo']) -> name('admin.reporte.curso_silabo');
Route::get('reporte/cumplimiento', [VisacionController::class, 'reporte_cumplimiento']) -> name('admin.reporte.cumplimiento');

//MANUALES DE AYUDA
Route::get('/download-chm', function () {
    $file = public_path('manual/manual.chm');
    return Response::download($file);
})->name('download.chm');
Route::get('/download-pdf', function () {
    $file = public_path('manual/manual.pdf');
    return Response::download($file);
})->name('download.pdf');

Route::get('/apertura', [AperturaCursoController::class, 'index'])
    ->name('admin.Apertura.index');

// apertura

Route::get('generarPDF', [AperturaCursoController::class, 'generarPDF'])->name('admin.Apertura.generarPDF');
Route::get('create', [AperturaCursoController::class, 'create'])->name('admin.Apertura.create');
Route::post('store', [AperturaCursoController::class, 'store'])->name('admin.Apertura.store');
Route::delete('destroy/{id}', [AperturaCursoController::class, 'destroy'])->name('admin.Apertura.destroy');
Route::get('get-cursos-por-ciclo', [AperturaCursoController::class, 'getCursosPorCiclo'])->name('admin.Apertura.getCursosPorCiclo');

Route::get('/apertura/ciclos', [AperturaCursoController::class, 'getCiclos'])->name('admin.Apertura.ciclos');
Route::get('/apertura/filtrar', [AperturaCursoController::class, 'filtrarAperturas'])->name('admin.Apertura.filtrar');
Route::get('/reporte-estadistico', [AperturaCursoController::class, 'generarReporteEstadistico'])->name('admin.reportes.estadistico');



Route::get('/director/escuela/oficios', [DirectorEscuelaController::class, 'index'])->name('director.escuela.oficios');
Route::post('/director/escuela/oficio/generar', [DirectorEscuelaController::class, 'generarOficio'])->name('director.escuela.oficio.generar');

Route::get('/escuela/oficios', [DirectorEscuelaController::class, 'index'])->name('director.escuela.index');

Route::patch('/director/escuela/solicitudes/{id}/aprobar', [DirectorEscuelaController::class, 'aprobarSolicitud'])->name('director.escuela.aprobarSolicitud');
Route::get('director/solicitud/{id}/pdf', [DirectorEscuelaController::class, 'generarSolicitudPDF'])->name('director.escuela.solicitud.pdf');
Route::patch('/director/rechazar/{id}', [DirectorEscuelaController::class, 'rechazarSolicitud'])->name('director.rechazar');


Route::get('/reportes/solicitudes_pdf', [DirectorEscuelaController::class, 'generateReport'])->name('report.solicitudes_pdf');
Route::get('/reporte-departamentos', [DirectorEscuelaController::class, 'reporteDepartamentos'])->name('reporte.departamentos');


//asignacion

Route::get('asignacion/index',[AsignacionController::class,'index'])->name('admin.Asignacion.index');
Route::post('asignacion/asignar',[AsignacionController::class,'asignar'])->name('admin.Asignacion.asignar');
Route::get('/curso/{IdCursoAperturado}/observar', [AsignacionController::class, 'observar'])->name('admin.Asignacion.observar');
Route::get('/reporteCL', [AsignacionController::class, 'reporte'])->name('admin.Asignacion.reporte');
Route::get('/reporteCL/pdf', [AsignacionController::class, 'exportPDF'])->name('admin.Asignacion.exportPDF');
Route::post('/admin/asignacion/save-chart-image', [AsignacionController::class, 'saveChartImage'])->name('admin.Asignacion.saveChartImage');
// Carga Lectiva
Route::get('/cargahl/index', [CargaHLController::class, 'index'])->name('admin.carga.hl.index');
Route::get('/cargahl/show/{id}', [CargaHLController::class, 'show'])->name('admin.carga.hl.detalle'); // id es del detalle
Route::get('/cargahl/asignar/vercursos', [CargaHLController::class, 'verCursos'])->name('admin.carga.hl.verCursos');
Route::get('/cargahl/asignar/horarios/{id}', [CargaHLController::class, 'vistaAsignar'])->name('admin.carga.hl.horarios.ver'); // id es del detalle
Route::post('/cargahl/asignar/horarios/{id}', [CargaHLController::class, 'asignarHorarios'])->name('admin.carga.hl.horarios.asignar'); // id es del detalle

// Carga No Lectiva
Route::get('/cargahnl/index', [CargaHNLController::class, 'index'])->name('admin.carga.hnl.index');
Route::post('/cargahnl/guardar', [CargaHNLController::class, 'guardar'])->name('admin.carga.hnl.guardar');
Route::get('/cargahnl/asignar/{id}', [CargaHNLController::class, 'vistaAsignar'])->name('admin.carga.hnl.asignar');
Route::post('/cargahnl/asignar/{id}', [CargaHNLController::class, 'asignarHorarios'])->name('admin.carga.hnl.asignar.horario');
Route::delete('/cargahnl/eliminar-horario/{id}', [CargaHNLController::class, 'eliminarHorario'])->name('admin.carga.hnl.eliminar.horario');
Route::post('/aula', [CargaHNLController::class, 'agregarAula'])->name('admin.carga.hnl.asignar.agregarAula');
Route::post('/cargahnl/agregarProyecto', [CargaHNLController::class, 'guardarProyecto'])->name('admin.proyecto.guardar');
Route::get('/cargahnl/reportes', [CargaHNLController::class, 'reportes'])->name('admin.carga.hnl.reportes');

// Declaraciones
Route::get('/declaraciones', [DocumentoController::class, 'index'])->name('admin.declaraciones');
Route::get('/declaraciones/ver/{id}', [DocumentoController::class, 'generar'])->name('admin.declaraciones.generar');

// emails
// Route::get('email/silabo', function() {
//     Mail::to('t1513300121@unitru.edu.pe')->send(new SilaboMailable);
// })->name('email.silabo');

Route::get('declaraciones/reporte', [DocumentoController::class, 'reporte'])->name('admin.declaraciones.reporte');
Route::get('declaraciones/reporte2', [DocumentoController::class, 'reporte2'])->name('admin.declaraciones.reporte2');