<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.produtos.index',compact('produtos'));
    }

    public function adicionar()
    {
        return view('admin.produtos.adicionar');
    }

    public function salvar(Request $input)
    {
        $dados = $input->all();

        if ($input->hasFile('imagem')) {
            $imagem = $input->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/produtos/";
            $ex = $imagem->guessClientExtension();
            $nomeImg = "imagem_" . $num . "." . $ex;
            $imagem->move($dir, $nomeImg);
            $dados['imagem'] = $dir . '/' . $nomeImg;
        }
       
        Produto::create($dados);
        return redirect()->route('admin.produtos');
    }

    public function editar($id)
    {
        $produtos = Produto::find($id);
        return view('admin.produtos.editar', compact('produtos'));
    }


}
