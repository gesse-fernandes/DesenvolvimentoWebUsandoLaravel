<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
