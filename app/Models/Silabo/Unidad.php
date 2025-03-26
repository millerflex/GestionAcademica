<?php

namespace App\Models\Silabo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    public $timestamps = false;









    

    public function programaciones()
    {
        return $this->belongsToMany(Programacion::class, 'unidad_programacions');
    }
}
