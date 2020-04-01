<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class AppController extends Controller
{
    function tela_login(){
        return view('tela_login');
    }

    function login(Request $req){
        //comparar usuario e senha
        $login = $req->input('login');
        $senha = $req->input('senha');

        $usuario = Usuario::where('login', '=' , $login)->first();
        // $usuario terá null ou dados encontrados

        if($usuario and $usuario->senha == $senha){
            //se não é null, entra aqui
            //login e senha estão certos
            return redirect()->route('listar');
        }else{
            return view('resultado', ["mensagem" => "usuário ou senha inválidos"]);
        }
    }
}
