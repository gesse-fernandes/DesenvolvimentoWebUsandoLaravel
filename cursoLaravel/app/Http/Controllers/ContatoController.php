<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
           (Object) ['nome'=> 'gessex','telefone'=>'88994255312'],
            (object) ['nome'=> 'dayane','telefone'=>'88994255312'],
            (object)['nome' => 'day', 'telefone' => '88994255312'],
            (object)  ['nome'=> 'gesse','telefone'=>'88994255312'],
        ];
        return view('contato.index',compact('contatos'));

    }

    public function criar(Request $req)
    {
        for ($i = 0; $i < 10; $i++) {
            echo "</br>$i</br> metodo criar";
        }
        //return dd($req['nome']);
        return dd($req->all());
    }

    public function editar(Request $input)
    {
        for ($i = 0; $i < 10; $i++) {
            echo "</br>$i</br>  metodo editar";
        }
    }

    
}
