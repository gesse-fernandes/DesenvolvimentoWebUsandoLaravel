<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $re)
    {
        $url = $re->url();
        //echo $url;
        $method = $re->method();
        //echo $method;
        $data = $re->all();
        $dados = [
            'nome'=> 'Gesse ',
            'idade'=>'90'
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
