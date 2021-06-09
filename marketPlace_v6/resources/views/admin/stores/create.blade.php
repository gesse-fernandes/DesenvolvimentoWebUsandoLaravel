@extends('layouts.app')
@section('content')
<h1>Criar Loja</h1>
<form action="{{route('admin.stores.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="">Nome da Loja</label>
    <br>
    <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <br>
    <input type="text" class="form-control" name="description">
</div>
<div class="form-group">
    <label for="">Telefone</label>
    <br>
    <input type="text"class="form-control" name="phone">
</div >
<div class="form-group">
    <label for="">Celular/Whatzap</label>
    <br>
    <input type="text" name="mobile_phone" class="form-control">
</div>
<div class="form-group">
    <label for="">Slug</label>
    <br>
    <input type="text" name="slug" class="form-control">
</div>
<div class="form-group">
    <label>Usuario</label>
    <br>
    <select name="user" class="form-control"  >
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
</div>
<br>
<div>
    <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
</div>
</form>
    
@endsection