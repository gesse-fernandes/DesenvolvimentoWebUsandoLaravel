<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $fillable = [
        'nome','login','senha'
    ];

    public static $rules =[
        'nome' => 'required',
        'login' => 'required',
        'senha' => 'required',
    ];
}
