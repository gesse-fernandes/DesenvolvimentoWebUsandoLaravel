<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    /*
    protected $table = 'tarefas';
    protected $primaryKey = 'id';
    protected $incrementing = false;
    protected $keyType = 'string';*/
    protected $fillable = [
        'titulo'
    ];
    public $timestamps = false;

}
