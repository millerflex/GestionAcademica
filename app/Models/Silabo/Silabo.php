<?php

namespace App\Models\Silabo;

use App\Models\General\Carrera;
use App\Models\General\Curso;
use App\Models\General\Periodo;
use App\Models\General\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silabo extends Model
{
    use HasFactory;
    public $timestamps = false;


    // Relacion 1 a 1
    // Silabo - Promedio
    public function promedio()
    {
        return $this->hasOne(Promedio::class);
    }
    // Silabo - Tutoria
    public function tutoria()
    {
        return $this->hasOne(Tutoria::class);
    }
    // Silabo - Organizacion
    public function organizacion()
    {
        return $this->hasOne(Organizacion::class);
    }

    // uno a muchos 
    // Silabo - Evaluaciones
    public function evaluacions()
    {
        return $this->hasMany(Evaluacion::class);
    }
    // Silabo - Referencias
    public function referencias()
    {
        return $this->hasMany(Referencia::class);
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class); // Relación inversa: un Comment pertenece a un Post
    }
    public function carrera()
    {
        return $this->belongsTo(Carrera::class); // Relación inversa: un Comment pertenece a un Post
    }
    public function curso()
    {
        return $this->belongsTo(Curso::class); // Relación inversa: un Comment pertenece a un Post
    }
    // Muchos a Muchos
    public function resultados()
    {
        return $this->belongsToMany(Resultado::class, 'silabo_resultados'); // Relación muchos a muchos
    }
    public function docentes()
    {
        return $this->belongsToMany(Profile::class, 'silabo_docentes')->withPivot('condicion');
    }

    public function unidades()
    {
        return $this->belongsToMany(Unidad::class, 'unidad_programacions');
    }

    public function programaciones()
    {
        return $this->belongsToMany(Programacion::class, 'unidad_programacions');
    }
}
