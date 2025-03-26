<?php

namespace App\Models\Carga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\General\Periodo;
use app\Models\Carga\TipoCHNL;
use app\Models\General\Profile;

class Documento extends Model
{
    use HasFactory;
    
    protected $table = 'documentos';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'periodo_id',
        'profile_id',
        'tipo',
        'estado'
    ];
    
    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'periodo_id','id');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id','id');
    }

}
