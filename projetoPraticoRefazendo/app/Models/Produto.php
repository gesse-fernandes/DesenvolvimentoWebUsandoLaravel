<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $fillable = [
        'nome','descricao','imagem','valor'
    ];
    public $attributes =[

    ];

    public static $rules =[
           'nome'=>'required',
           'descricao'=>'required',
           'imagem'=>'required',
           'valor'=>'required',
    ];
    public static $messages =
    [
        'nome.required'=>'Nome Obrigatório',
        'descricao.required'=>'Campo Descrição Obrigatório'
    ];
}
