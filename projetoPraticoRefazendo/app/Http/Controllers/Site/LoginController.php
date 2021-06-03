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
        if(Auth::attempt(['login' => $dados['login'], 'password' => $dados['senha']])){
            return redirect()->route('');
        }
        return redirect()->route('site.login');

    }
}
