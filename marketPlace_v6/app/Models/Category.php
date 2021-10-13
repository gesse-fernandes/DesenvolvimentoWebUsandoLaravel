<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description','slug'
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public static $rules = [
        'name'=>'required',
    ];

    public static $messages = [
        'name.required'=>'Nome da categoria Obrigatorio',

    ];
}
