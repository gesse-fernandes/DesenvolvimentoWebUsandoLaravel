@extends('layouts.app')
@section('content')
<h1>Criar Categoria</h1>
<form action="{{route('admin.categories.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="">Nome da Categoria</label>
    <br>
    <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" value="{{old('name')}}">
    @if ($errors->has('name'))
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>

    @endif
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <br>
    <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" value="{{old('description')}}" name="description">
    @if ($errors->has('description'))
    <div class="invalid-feedback">
        {{$errors->first('description')}}
    </div>

    @endif
</div>


<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Criar Categoria</button>
</div>
</form>

@endsection
