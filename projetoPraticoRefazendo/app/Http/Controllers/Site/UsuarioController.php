<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('login.cadastrar');
    }

    public function adicionar(Request $input)
    {
        $dados = $input->all();
        /*$dados['senha'] =  bcrypt($dados['senha']);
        if(User::where('email', '=', $dados['email'])->count())
        {
            $usuario =User::where('email', '=',$dados['email'], $dados['email']->first());
            $usuario->update();
        }else{
            User::create($dados);
        }
        return redirect()->route('site.login');*/
        $usuario = [
            'name'=>$dados['nome'],
            'email'=>$dados['email'],
            'password'=>bcrypt($dados['senha']),
        ];
        User::create($usuario);
        return redirect()->route('site.login');
        //dd($dados);
    }
}
