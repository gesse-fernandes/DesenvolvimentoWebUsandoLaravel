@extends('layouts.app')
@section('content')
<h1>Criar Produtos</h1>
<form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="">Nome do Produto</label>
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
<div class="form-group">
    <label for="">Conteúdo</label>
    <br>
    <textarea name="body" class="form-control {{$errors->has('body')?'is-invalid':''}}">{{old('body')}}</textarea>
    @if ($errors->has('body'))
    <div class="invalid-feedback">
        {{$errors->first('body')}}
    </div>

    @endif
</div>
<div class="form-group">
    <label for="">Preço</label>
    <br>
    <input type="text"class="form-control {{$errors->has('price')?'is-invalid':''}}" name="price" value = "{{old('price')}}">
    @if ($errors->has('price'))
    <div class="invalid-feedback">
        {{$errors->first('price')}}
    </div>

    @endif
</div >
<div class="form-group">
    <label for="">Categorias</label>
    <select name="categories[]" class="form-control" multiple>
        @foreach ( $categories  as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>

        @endforeach
    </select>
</div>
<div class="form group">
    <label for="">Fotos Produtos</label>
        <input type="file" name="photos[]" class="form-control  @error('photos') is-invalid @enderror " multiple>
        @error('photos')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Criar Produtos</button>
</div>
</form>

@endsection
