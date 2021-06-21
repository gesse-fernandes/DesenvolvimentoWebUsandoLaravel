<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return view('config');
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
