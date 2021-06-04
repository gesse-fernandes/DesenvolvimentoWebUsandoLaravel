<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

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

    public function atualizar(Request $input,$id)
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

        Produto::find($id)->update($dados);
        return redirect()->route('admin.produtos');
    }
    public function deletar($id)
    {
        Produto::find($id)->delete();
        return redirect()->route('admin.produtos');
    }

    public function pesquisar(Request $input)
    {
        $dados = $input->all();
        $resposta = $dados['pesquisar'];
        if($resposta == '')
        {
            return redirect()->route('admin.produtos');

        }else{
            $pesquisado = Produto::query()
            ->where('nome', 'LIKE', "%{$resposta}%")
            ->get();
            if ($pesquisado->count() > 0) {
                $retorno = $pesquisado[0]->attributes;

                $retornado = [
                    (object) [
                        'nome' => $retorno['nome'],
                        'descricao' => $retorno['descricao'],
                        'imagem' => $retorno['imagem'],
                        'valor' => $retorno['valor'],
                        'id' => $retorno['id'],
                    ]
                ];

                return view('admin.produtos.index', compact('retornado'));
            } else {
                return redirect()->route('admin.produtos');
            }
        }
        

    }

}
