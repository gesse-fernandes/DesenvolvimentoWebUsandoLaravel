@extends('layouts.app')
@section('content')
<h1>Criar Loja</h1>
<form action="{{route('admin.stores.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="">Nome da Loja</label>
    <br>
    <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" value = "{{old('name')}}">

        @if ($errors->has('name'))
        <div class="invalid-feedback">
            {{$errors->first('name')}}
         </div>
        @endif

</div>
<div class="form-group">
    <label for="">Descrição</label>
    <br>
    <input type="text" class="form-control {{$errors->has('description')? 'is-invalid':''}}" name="description" value = "{{old('description')}}">
    @if ($errors->has('description'))
        <div class="invalid-feedback">
            {{$errors->first('description')}}
         </div>
        @endif
</div>
<div class="form-group">
    <label for="">Telefone</label>
    <br>
    <input type="text"class="form-control {{$errors->has('phone')? 'is-invalid':''}}" name="phone" value = "{{old('phone')}}">
     @if ($errors->has('phone'))
        <div class="invalid-feedback">
            {{$errors->first('phone')}}
         </div>
        @endif
</div >
<div class="form-group">
    <label for="">Celular/Whatzap</label>
    <br>
    <input type="text" name="mobile_phone" class="form-control {{$errors->has('mobile_phone')? 'is-invalid':''}}" value = "{{old('mobile_phone')}}">
     @if ($errors->has('mobile_phone'))
        <div class="invalid-feedback">
            {{$errors->first('mobile_phone')}}
         </div>
        @endif
</div>
<div class="form group">
    <label for="">Foto da Loja</label>
        <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" >
            @error('logo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
<div class="form-group">
    <label for="">Slug</label>
    <br>
    <input type="text" name="slug" class="form-control" value = "{{old('slug')}}" >
</div>
<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
</div>
</form>

@endsection
