<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = Produto::all(); 
        return view('home',compact('produtos'));
        //return view('home');
    }
    public function pesquisar(Request $input)
    {
        $dados = $input->all();
        $resposta = $dados['pesquisar'];
        if($resposta == '')
        {
           $produtos = Produto::all(); 
        return view('home',compact('produtos'));
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

                return view('home', compact('retornado'));
            } else {
                return redirect()->route('site.home');
            }
        }
       
    }
}
