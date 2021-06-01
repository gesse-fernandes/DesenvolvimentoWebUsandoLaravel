<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index',compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $input)
    {
        $dados = $input->all();
      
        if(isset($dados['publicado']))
        {
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }
        if($input->hasFile('imagem'))
        {
            $imagem = $input->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImg = "imagem_".$num . "." .$ex;
            $imagem->move($dir, $nomeImg);
            $dados['imagem'] = $dir . '/'. $nomeImg;

        }
    
        Curso::create($dados);

        return redirect()->route('admin.cursos');
    }
}
