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
}
