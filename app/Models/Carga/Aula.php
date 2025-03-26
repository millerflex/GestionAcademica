<?php

namespace App\Models\Carga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    
    protected $table = 'aulas';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'piso',
        'referencia',
        'lugar',
        'capacidad',
        'edificio'
    ];

}
