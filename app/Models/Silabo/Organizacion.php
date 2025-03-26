<?php

namespace App\Models\Silabo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Relacion 1 a 1 inverso
    // Promedio - Silabo
    public function silabo()
    {
        return $this->belongsTo(Silabo::class); // Relación 1 a 1 (Profile pertenece a un User)
    }
}
