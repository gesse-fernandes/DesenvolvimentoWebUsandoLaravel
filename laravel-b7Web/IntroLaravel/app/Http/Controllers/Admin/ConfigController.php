<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $re)
    {
        $user = Auth::user();
        $nome = $user->name;
      
        $url = $re->url();
        //echo $url;
        $method = $re->method();
        //echo $method;
        $data = $re->all();
        $dados = [
            'nome'=> $nome,
            'idade'=>'90',
            'showform'=> Gate::allows('see-form'),
        ];

        return view('admin.config',$dados);
    }

    public function info()
    {
        echo "Configuracoes info 3";
    }
    public function permissoes()
    {
        echo "Configuracoes Permissoes 3";
    }
}
