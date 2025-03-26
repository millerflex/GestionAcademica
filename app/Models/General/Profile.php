<?php

namespace App\Models\General;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'profiles';
    protected $primaryKey = 'id';
    protected $fillable = ['nombres','apellidos','profesion','correo_institucional','user_id', 'carrera_id','url_imagen', 'estado'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}
