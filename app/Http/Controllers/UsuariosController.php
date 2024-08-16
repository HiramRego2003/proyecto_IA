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
            'ubicacion' => $request->input('ubicacion'),
            'tipo' => $request->input('tipo'),
        ));
        return redirect()->route('login');
    }

    public function buscarUsuarios(Request $request) {
        $search = $request->input('search');

        $usuarios = DB::table('usuario')
            ->where('nombre', 'LIKE', '%'.$search.'%')
            ->orWhere('app', 'LIKE', '%'.$search.'%')
            ->orWhere('email', 'LIKE', '%'.$search.'%')
            ->orderBy('id_usuario')
            ->get();

        return view('lista_usuarios', ['usuarios' => $usuarios]);
    }

}
