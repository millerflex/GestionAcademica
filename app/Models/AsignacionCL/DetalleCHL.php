<?php

namespace App\Models\AsignacionCL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AperturaCurso\AperturaCurso;
use App\Models\AsignacionCL\CargaHl;
use App\Models\Carga\HorarioCHL;

class DetalleCHL extends Model
{
    use HasFactory;
    protected $table = 'detalle_chl';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IdCargaHL',
        'IdCursoAperturado',
        'HorasSemanales'
    ];
    public $timestamps = false;
    public function carga()
    {
        return $this->belongsTo(CargaHl::class, 'IdCargaHL', 'id');
    }
    public function apertura()
    {
        return $this->belongsTo(AperturaCurso::class, 'IdCursoAperturado', 'id');
    }

    public function horarios()
    {
        return $this->hasMany(HorarioCHL::class, 'detalle_chl_id', 'id'); // Cambia a la columna correcta
    }
    
    

}
