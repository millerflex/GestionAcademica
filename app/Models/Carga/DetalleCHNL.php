<?php

namespace App\Models\Carga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\General\Periodo;
use app\Models\Carga\TipoCHNL;
use app\Models\General\Profile;

class DetalleCHNL extends Model
{
    use HasFactory;
    
    protected $table = 'detalle_chnl';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'carga_hnl_id',
        'nombre',
        'descripcion',
        'horasSemanales'
    ];
    
    public function carga()
    {
        return $this->belongsTo(CargaHNL::class, 'carga_hnl_id','id');
    }

    public function horarios()
    {
        return $this->hasMany(HorarioCHNL::class, 'detalle_chnl_id','id');
    }

}
