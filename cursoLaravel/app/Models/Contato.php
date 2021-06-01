<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Object_;

class Contato extends Model
{
    public function lista()
    {
        return (object) [
            'nome'=>'gessé',
            'telefone'=>'88994255312',
        ];
    }
}
