<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function admin(){
        return view('admin');
    }

    public function index_usuario(){
        return view('index');
    }
    public function index(){
        return view('index');
    }

    public function validar(validarLogin $request){
        $email = $request->input('email');
        $pass = $request->input('pass');


        $consulta = Usuarios::where('email', '=', $email)
                ->where('pass', '=', $pass)
                ->get();

                if(count($consulta)==0){
                    return view('login');
                }
                else {
                    /* Creacion de  la sesion */
                    $request-> session()->put('session_id', $consulta[0]->id_usuario);
                    $request-> session()->put('session_name', $consulta[0]->nombre);
                    $request-> session()->put('session_tipo', $consulta[0]->id_tipo);
                    $request-> session()->put('session_foto', $consulta[0]->foto);

                    /* Consulta */
                    $session_id =$request->session()->get('session_id');
                    $session_name =$request->session()->get('session_name');
                   
                }
            }



    public function logout(Request $request){
        $request-> session()->forget('session_id');
        $request-> session()->forget('session_name');

            return view('login');
    }

    
}
