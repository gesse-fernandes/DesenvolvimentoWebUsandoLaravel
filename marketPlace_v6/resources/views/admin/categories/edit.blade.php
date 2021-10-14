@extends('layouts.app')
@section('content')
<h1>Atualizar Categoria</h1>
<form action="{{route('admin.categories.update',['category'=>$category->id])}}" method="post">
    {{ csrf_field() }}
    @method("PUT")
    <div class="form-group">
    <label for="">Nome do Produto</label>
    <br>
    <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" value="{{$category->name}}" name="name">
    @if ($errors->has('name'))
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>

    @endif
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <br>
    <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" value="{{$category->description}}" name="description">
     @if ($errors->has('description'))
    <div class="invalid-feedback">
        {{$errors->first('description')}}
    </div>

    @endif
</div>
<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Editar Categoria</button>
</div>
</form>

@endsection
