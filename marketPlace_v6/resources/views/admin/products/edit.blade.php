@extends('layouts.app')
@section('content')
<h1>Atualizar Produtos</h1>
<form action="{{route('admin.products.update',['product'=>$product->id])}}" method="post" enctype="multipart/form-data">
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
    <label for="">Categorias</label>
    <select name="categories[]" class="form-control" multiple>
        @foreach ( $categories  as $item)
        <option value="{{$item->id}}"  @if ($product->categories->contains($item))selected @endif>{{$item->name}}

        </option>

        @endforeach
    </select>
</div>
<div class="form group">
    <label for="">Fotos Produtos</label>
        <input type="file" name="photos[]" class="form-control @error('photos') is-invalid @enderror " multiple>
         @error('photos')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
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
<hr>

<div class="row">
    @foreach ($product->photos as $photo )
        <div class="col-4">
            <img src="{{ asset('storage/'.$photo->image) }}" alt="" class="img-fluid">
            <form method="POST" action="{{ route('admin.photo.remove') }}">
                <input type="hidden" name="photoName" value="{{$photo->image}}">
                @csrf
                <button class="btn btn-lg btn-danger" type="submit">Remover</button>
            </form>
        </div>
    @endforeach
</div>

@endsection
