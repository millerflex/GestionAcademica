<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\General\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::where('id', auth()->user()->profile->id)->first();
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'profesion' => 'required',
            'correo_institucional' => 'required|email',
        ]);

        // Encuentra el usuario existente
        $profile = Profile::findOrFail($id);
        $profile->nombres = $request->nombres;
        $profile->apellidos = $request->apellidos;
        $profile->profesion = $request->profesion;
        $profile->correo_institucional = $request->correo_institucional;
        $profile->save();

        return redirect()->route('admin.profile.edit')->with('datos', 'Elemento actualizado con éxito.');
    }
    
    public function update_img(Request $request, $id)
    {
        // Validar que la URL esté presente en la solicitud
        $request->validate([
            'profile_image' => 'required',
        ]);

        // Obtener la URL del archivo
        $fileUrl = $request->profile_image;

        // Obtener el contenido del archivo desde la URL
        $fileContents = file_get_contents($fileUrl);

        // Determinar la extensión del archivo y la ruta de destino
        $fileExtension = 'jpg';
        $filePath = 'image/img_profiles/';
        $fileName = 'User' . $id . '.' . $fileExtension; // Asignar un nombre único usando el ID del usuario
        $fullPath = public_path($filePath . $fileName);

        // Crear el directorio si no existe
        if (!file_exists(public_path($filePath))) {
            mkdir(public_path($filePath), 0755, true);
        }

        // Guardar el contenido del archivo en la ruta deseada
        file_put_contents($fullPath, $fileContents);

        // Obtener el perfil y actualizar la URL del archivo copiado
        $profile = Profile::findOrFail($id);
        $profile->url_imagen = '/' . $filePath . $fileName;
        $profile->save();

        return redirect()->back()->with('success', 'Archivo copiado y guardado exitosamente.');
    }

}
