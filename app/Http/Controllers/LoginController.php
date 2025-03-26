<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ], [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            // 'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'password.required' => 'El campo de contraseña es obligatorio.',
            // 'password.string' => 'La contraseña debe ser una cadena de texto.',
        ]);
        

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Verificar si el email existe
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email no válido'])->withInput($request->only('email'));
        }

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            
            $request -> session() -> regenerate();

            return redirect() -> route('admin.index');
            
        } else {
            return back()->withErrors(['password' => 'Contraseña no válida'])->withInput($request->only('password'));
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect() -> route('login');
    }
}
