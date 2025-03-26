<?php

namespace App\Models\Carga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioCHNL extends Model
{
    use HasFactory;
    
    protected $table = 'horario_chnl';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_fin',
        'detalle_chnl_id',
        'aula_id'
    ];
    
    public function detalle()
    {
        return $this->belongsTo(DetalleCHNL::class, 'detalle_chnl_id','id');
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'aula_id','id');
    }
}
