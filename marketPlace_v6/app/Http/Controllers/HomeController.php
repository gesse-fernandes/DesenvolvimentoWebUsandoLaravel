<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $product;

    public function __construct(Product $products)
    {
        $this->product = $products;
    }

    public function index()
    {
        $products = $this->product->limit(8)->orderBy('id','DESC')->get();

        return view('welcome',compact('products'));
    }
}
