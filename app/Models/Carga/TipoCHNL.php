<?php

namespace App\Models\Carga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCHNL extends Model
{
    use HasFactory;
    
    protected $table = 'tipo_cargahnl';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function cargas()
    {
        return $this->hasMany(CargaHNL::class, 'tipo_id','id');
    }

}
