<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller{

    public function alta_usuarios(){
        $tipo = TUsuarios::all();
        return view("registrar.registrar_usuarios")
    
}
}

    public function store(Request $request)
    {
        // Creación del nuevo usuario
        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ubicacion' => $request->ubicacion,
            'tipo' => $request->tipo,
        ]);

        // Redirigir a una página de éxito o login
        return redirect()->route('login')->with('success', 'Usuario registrado exitosamente.');
    }

}
