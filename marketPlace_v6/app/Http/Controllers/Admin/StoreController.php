<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
class StoreController extends Controller
{
    public function index()
    {
        $store = auth()->user()->store;
        //dd();
        return view('admin.stores.index',compact('store'));
    }
    public function create(/*Request $input*/)
    {
        if( $store = auth()->user()->store()->count())
        {
            flash('Você ja possui uma loja')->warning();
            return redirect()->route('admin.stores.index');
        }
        $users = \App\Models\User::all(['id','name']);
        return view('admin.stores.create',compact('users'));
    }

    public function store(StoreRequest $input)
    {
        
        $dados = $input->all();
        auth()->user();
        $user =auth()->user();
        $stores=$user->store()->create($dados);
        flash('Loja Criada com sucesso')->success();
        return redirect()->route('admin.stores.index');

    }

    public function edit($store)
    {
        $store = \App\Models\Store::find($store);
        return view('admin.stores.edit',compact('store'));
    }
    public function update(StoreRequest $input,$store)
    {
       // dd($input->all());
       $dados = $input->all();
       $store = \App\Models\Store::find($store);
       $store->update($dados);
       flash('Loja Atualizada com sucesso')->warning();
       return redirect()->route('admin.stores.index');
    }
    public function destroy($store)
    {
        $store = \App\Models\Store::find($store);
        $store->delete();
        flash('Loja Deletada com sucesso')->success();
        return redirect()->route('admin.stores.index');
    }


}
