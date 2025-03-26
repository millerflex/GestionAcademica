<?php

namespace App\Models\Carga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AsignacionCL\DetalleCHL;

class HorarioCHL extends Model
{
    use HasFactory;
    
    protected $table = 'horario_chl';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'dia',
        'tipo',
        'hora_inicio',
        'hora_fin',
        'detalle_chl_id',
        'aula_id'
    ];
    
    public function detalle()
    {
        return $this->belongsTo(DetalleCHL::class, 'detalle_chl_id','id');
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'aula_id','id');
    }

}
