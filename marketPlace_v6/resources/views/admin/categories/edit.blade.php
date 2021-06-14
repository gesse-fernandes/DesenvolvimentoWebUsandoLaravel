@extends('layouts.app')
@section('content')
<h1>Atualizar Categoria</h1>
<form action="{{route('admin.categories.update',['category'=>$category->id])}}" method="post">
    {{ csrf_field() }}
    @method("PUT")
    <div class="form-group">
    <label for="">Nome do Produto</label>
    <br>
    <input type="text" class="form-control" value="{{$category->name}}" name="name">
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <br>
    <input type="text" class="form-control" value="{{$category->description}}" name="description">
</div>
<div class="form-group">
    <label for="">Slug</label>
    <br>
    <input type="text" value="{{$category->slug}}" name="slug" class="form-control">
</div>

<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Editar Categoria</button>
</div>
</form>

@endsection
