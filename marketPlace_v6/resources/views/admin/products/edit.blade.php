@extends('layouts.app')
@section('content')
<h1>Atualizar Produtos</h1>
<form action="{{route('admin.products.update',['product'=>$product->id])}}" method="post">
    {{ csrf_field() }}
    @method("PUT")
    <div class="form-group">
    <label for="">Nome do Produto</label>
    <br>
    <input type="text" class="form-control" value="{{$product->name}}" name="name">
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <br>
    <input type="text" class="form-control" value="{{$product->description}}" name="description">
</div>
<div class="form-group">
    <label for="">Conteúdo</label>
    <br>
    <textarea name="body" class="form-control">{{$product->body}}</textarea>
</div>
<div class="form-group">
    <label for="">Preço</label>
    <br>
    <input type="text" value="{{$product->price}}"class="form-control" name="price">
</div >
<div class="form-group">
    <label for="">Slug</label>
    <br>
    <input type="text" value="{{$product->slug}}" name="slug" class="form-control">
</div>

<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Editar Produtos</button>
</div>
</form>

@endsection
