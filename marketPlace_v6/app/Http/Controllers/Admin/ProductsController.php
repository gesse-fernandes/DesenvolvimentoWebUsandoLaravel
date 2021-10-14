<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Traits\UploadTrait;
class ProductsController extends Controller
{
     use UploadTrait;
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userStore = auth()->user()->store;
        $products = $userStore->products()->paginate(10);

        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $stores = \App\Models\Store::all('id','name');
       $categories = \App\Models\Category::all(['id','name']);
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

       $dados = $request->all();
       //$store = \App\Models\Store::find($dados['store']);
        $store = auth()->user()->store;

       $product= $store->products()->create($dados);
        $product->categories()->sync($dados['categories']);
        if($request->hasFile('photos'))
        {
            $images = $this->imageUpload($request->file('photos'),'image');
            //Inserção na base
            $product->photos()->createMany($images);
        }
       flash('Produto Criado com sucesso')->success();
       return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = \App\Models\Category::all(['id', 'name']);
        $product = $this->product->findOrFail($id);
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $dados = $request->all();
        $prod = $this->product->find($id);
        $prod->update($dados);
        $prod->categories()->sync($dados['categories']);
        if ($request->hasFile('photos')) {
            $images = $this->imageUpload($request->file('photos'), 'image');
            //Inserção na base
            $prod->photos()->createMany($images);
        }
        flash('Produto Atualizado com sucesso')->warning();
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = $this->product->find($id);
        $prod->delete();
        flash('Produto Removido com sucesso')->success();
        return redirect()->route('admin.products.index');
    }

    }

