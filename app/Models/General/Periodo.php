<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    // Nombre de la tabla en MySQL.
    protected $table = 'periodos';
    protected $primaryKey = 'id';
    protected $fillable = ['año','semestre', 'inicio','termino', 'activo'];

    // Desactivar timestamps si la tabla no tiene las columnas created_at y updated_at
    public $timestamps = false;

    /**
     * Relación con otros modelos (opcional).
     * Agrega aquí relaciones si `Periodo` está relacionado con otras tablas.
     */
}
