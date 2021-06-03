<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
        $dados['senha'] =  bcrypt($dados['senha']);
        if(Usuario::where('login', '=', $dados['login'])->count())
        {
            $usuario =Usuario::where('login', '=',$dados['login'], $dados['login']->first());
            $usuario->update();
        }else{
            Usuario::create($dados);
        }
        return redirect()->route('site.login');

        //dd($dados);
    }
}
