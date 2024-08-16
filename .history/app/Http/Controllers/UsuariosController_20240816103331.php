<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller{

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
            'ubicacion' => 'nullable|string|max:255',
            'tipo' => 'required|in:voluntario,organizacion',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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
