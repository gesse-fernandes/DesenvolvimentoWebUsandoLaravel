@extends('layouts.app')
@section('content')
<h1>Criar Produtos</h1>
<form action="{{route('admin.products.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="">Nome do Produto</label>
    <br>
    <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <br>
    <input type="text" class="form-control" name="description">
</div>
<div class="form-group">
    <label for="">Conteúdo</label>
    <br>
    <textarea name="body" class="form-control"></textarea>
</div>
<div class="form-group">
    <label for="">Preço</label>
    <br>
    <input type="text"class="form-control" name="price">
</div >
<div class="form-group">
    <label for="">Slug</label>
    <br>
    <input type="text" name="slug" class="form-control">
</div>
<div class="form-group">
    <label>Usuario</label>
    <br>
    <select name="store" class="form-control"  >
        @foreach ($stores as $store)
            <option value="{{$store->id}}">{{$store->name}}</option>
        @endforeach
    </select>
</div>
<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Criar Produtos</button>
</div>
</form>
    
@endsection