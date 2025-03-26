<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'cursos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'ciclo', 'codigo', 'creditos', 'HT', 'HP', 'HL', 'requisitos', 'tipo', 'estado','carrera_id'];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class); // Usa la clave foránea correcta
    }
}
