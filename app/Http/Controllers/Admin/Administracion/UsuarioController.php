<?php

namespace App\Http\Controllers\Admin\Administracion;

use App\Http\Controllers\Controller;
use App\Models\General\Carrera;
use App\Models\General\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    const PAGINACION=10;

    public function index(){

        $users = User::where('estado', '1')->paginate($this::PAGINACION);
        $carreras = Carrera::all();
        return view('admin.administracion.usuarios.index', compact('users', 'carreras'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'profesion' => 'required',
            'correo_institucional' => 'required',
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->correo_institucional;
        $user->password = Hash::make($request->password);
        $user->save();

        $profile = new Profile();
        $profile->user_id = $user->id; // Asocia el perfil al usuario recién creado
        $profile->nombres = $request->nombres;
        $profile->apellidos = $request->apellidos;
        $profile->profesion = $request->profesion;
        $profile->correo_institucional = $request->correo_institucional;
        $profile->carrera_id = $request->carrera_id; // Asocia la carrera seleccionada
        $profile->save();

        return redirect()->route('usuario.index')->with('datos', 'Elemento creado con éxito.');
    }
    
    public function show($id)
    {
        $user = User::with('profile.carrera')->findOrFail($id);
        return response()->json($user);
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'profesion' => 'required',
            'correo_institucional' => 'required|email',
            'name' => 'required',
            // Contraseña no obligatoria en la validación
        ]);

        // Encuentra el usuario existente
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->correo_institucional;

        // Actualiza la contraseña solo si se proporciona una nueva
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        // Actualiza o crea el perfil del usuario
        $profile = $user->profile ?? new Profile();
        $profile->user_id = $user->id;
        $profile->nombres = $request->nombres;
        $profile->apellidos = $request->apellidos;
        $profile->profesion = $request->profesion;
        $profile->correo_institucional = $request->correo_institucional;
        $profile->carrera_id = $request->carrera_id;
        $profile->save();

        return redirect()->route('usuario.index')->with('datos', 'Elemento actualizado con éxito.');
    }


    public function destroy($id)
    {
        $profile=Profile::findOrFail($id);
        $profile->estado='0';
        $profile->save();

        $usuario=User::findOrFail($id);
        $usuario->estado='0';
        $usuario->save();
        return redirect()->route('usuario.index')->with('datos','Registro Eliminado...!');
    }
}
