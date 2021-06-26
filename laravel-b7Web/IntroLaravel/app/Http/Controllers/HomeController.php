<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
       //$list = Tarefa::where('resolvido',1)->get();
       //return $list;
       //$task = new Tarefa();
       /*$task->titulo = "testando eloquent orm";
       $task->resolvido = 1;
       $task->save();*/
       //$t = Tarefa::find(6);

    }
}
