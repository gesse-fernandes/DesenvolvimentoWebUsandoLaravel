@extends('layouts.app')
@section('content')
<h1>Editar Loja</h1>
<form action="{{route('admin.stores.update',['store'=>$store->id])}}" method="post">
    {{ csrf_field() }}
    @method("PUT");
    <div class="form-group">
    <label for="">Nome da Loja</label>
    <br>
    <input type="text" class="form-control" value="{{$store->name}}" name="name">
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <br>
    <input type="text" class="form-control" value="{{$store->description}} "name="description">
</div>
<div class="form-group">
    <label for="">Telefone</label>
    <br>
    <input type="text"class="form-control" value="{{$store->phone}} "name="phone">
</div >
<div class="form-group">
    <label for="">Celular/Whatzap</label>
    <br>
    <input type="text" name="mobile_phone" value="{{$store->mobile_phone}} "class="form-control">
</div>
<div class="form-group">
    <label for="">Slug</label>
    <br>
    <input type="text" name="slug" value="{{$store->slug}}" class="form-control">
</div>

<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Atualizar Produto</button>
</div>
</form>

@endsection
