<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        for($i =0; $i < 10; $i++)
        {
           echo "</br>$i</br> metodo index";
        }

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
