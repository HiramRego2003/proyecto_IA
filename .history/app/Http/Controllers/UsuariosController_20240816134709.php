<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller{

    public function registrar_usuarios(validar $request){
        Usuarios::create(array(
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'ap' => $request->input('ap'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
            'ub'
        ));
        return redirect()->route('login');
    }

}
