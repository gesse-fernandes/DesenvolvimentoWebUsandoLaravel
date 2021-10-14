<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Store extends Model
{
    use HasFactory;
    use HasSlug;
    protected $fillable = [
        'name','description','phone','mobile_phone','slug','logo',
    ];
     public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
                          ->generateSlugsFrom('name')
                          ->saveSlugsTo('slug');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public static $rules =[
        'name' => 'required',
        'description'=> 'required|min:10',
        'phone' => 'required',
        'mobile_phone' => 'required',
        'logo'=>'image',
    ];

    public static $messages =[
        'name.required'=>'Campo Nome da Loja Obrigatório',
        'description.required'=>'Campo Descrição obrigatório',
        'description.min'=>'Tamanho maximo 10',
        'phone.required'=>'Telefone Obrigatório',
        'mobile_phone.required'=>'Celular Whattzap Obrigatório',
        'image' => 'o Arquivo não é uma imagem valida'
    ];
}
