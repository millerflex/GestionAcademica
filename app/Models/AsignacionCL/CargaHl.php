<?php

namespace App\Models\AsignacionCL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\General\Periodo;
use App\Models\General\Profile;
use App\Models\AsignacionCL\DetalleCHL;

class CargaHl extends Model
{
    use HasFactory;
    protected $table = 'carga_hl';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IdSemestre',
        'IdProfile'
    ];
    public $timestamps = false;
    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'IdSemestre', 'id');
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'IdProfile', 'id');
    }
    public function detalle()    
    {
        return $this->hasMany(DetalleCHL::class, 'IdCargaHL', 'id');
    }
}
