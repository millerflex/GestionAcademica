<?php

namespace App\Models\Carga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\General\Periodo;
use app\Models\General\Profile;

class CargaHNL extends Model
{
    use HasFactory;
    
    protected $table = 'carga_hnl';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'periodo_id',
        'tipo_id',
        'profile_id',
        'horasSemanales'
    ];
    
    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'periodo_id','id');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoCHNL::class, 'tipo_id','id');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id','id');
    }

    public function detalles()
    {
        return $this->hasMany(DetalleCHNL::class, 'carga_hnl_id', 'id');
    }

}
