<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Product extends Model
{
    use HasFactory;
    
    use HasSlug;
    protected $fillable = [
        'name','description','body','price','slug'
    ];
    /*  protected $casts =
    [
      'price'=> 'integer'
    ];*/
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
                          ->generateSlugsFrom('name')
                          ->saveSlugsTo('slug');
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public static $rules =
    [
        'name' => 'required',
        'description' => 'required',
        'body' => 'required',
        'price' => 'required',
        'photos.*'=>'image'
    ];

    public static $messages =
    [
        'name.required'=>'Nome do produto Obrigatório',
        'description.required'=>'Descrição Obrigatório',
        'body.required'=>'Campo Obrigatório',
        'price.required'=>'Preço Obrigatório',
        'image'=>'o Arquivo não é uma imagem valida'
    ];

    public function photos()
    {
        return $this->hasMany(ProductImage::class);
    }
}
