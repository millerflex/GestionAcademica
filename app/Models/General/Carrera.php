<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'carreras';
    protected $primaryKey = 'id';
    protected $fillable = ['area', 'facultad', 'departamento', 'programa', 'estado'];

    public function profiles()
    {
        return $this->hasMany(Profile::class,'id','carrera_id');
    }

}
