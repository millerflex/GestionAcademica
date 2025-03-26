<?php

namespace App\Models\AperturaCurso;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Importación correcta
use Illuminate\Database\Eloquent\Model;
use App\Models\General\Curso;
use App\Models\General\Periodo;
use App\Models\AsignacionCL\DetalleCHL;

class AperturaCurso extends Model
{
    use HasFactory; // Uso correcto del trait

    public $timestamps = false;
    protected $table = 'aperturas_cursos'; 

    // Si la clave primaria no es 'id', especifícala
    protected $primaryKey = 'id';
    protected $fillable = ['periodo_id', 'curso_id', 'usuario_id', 'TipoApertura','estado'];
    // Relación con el modelo 'Curso'
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id','id');
    }

    // Relación con el modelo 'Periodo'
    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'IdPeriodo');
    }
    public function detalle()    
    {
        return $this->hasMany(DetalleCHL::class, 'IdCursoAperturado');
    }
    
}
