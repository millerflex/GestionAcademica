<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\General\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function adminlte_image()
    {
        return $this->profile->url_imagen;
    }

    public function adminlte_desc()
    {
        // Obtiene los roles del usuario y los convierte en una cadena separada por comas
        return implode(', ', auth()->user()->getRoleNames()->toArray());
    }

    public function contarRoles()
    {
        $usuario = Auth::user(); // Obtener usuario autenticado
        
        // Contar roles
        $numeroRoles = $usuario->getRoleNames()->count();
    
        // Mostrar resultado
        return $numeroRoles;
    }

    public function adminlte_profile_url()
    {
        // Obtiene los roles del usuario y los convierte en una cadena separada por comas
        return 'admin/profile/edit';
    }

}
