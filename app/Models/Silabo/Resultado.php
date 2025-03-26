<?php

namespace App\Models\Silabo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Muchos a Muchos
    public function silabos()
    {
        return $this->belongsToMany(Silabo::class, 'silabo_resultados'); // Relación muchos a muchos
    }
}
