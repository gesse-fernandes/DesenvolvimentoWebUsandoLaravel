<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $input)
    {
        $dados = $input->all();
        //dd($dados);
        $messages =[
            'login.required'=>'Campo Login Obrigatorio Email',
            'senha.required'=>'Campo Senha Obrigatorio',
        ];
        $this->validate($input,[
            'login'=>'required',
            'senha'=>'required',
        ],$messages);
        if (Auth::attempt(['email' => $dados['login'], 'password' => $dados['senha']])) {
            return redirect()->route('admin.produtos');
        }
        return redirect()->route('site.login');

    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
