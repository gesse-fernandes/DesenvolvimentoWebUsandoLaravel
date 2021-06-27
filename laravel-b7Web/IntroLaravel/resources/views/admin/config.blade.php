@extends('layouts.admin')
@section('title','Configuracoes')

@section('content')
<h1>Configurações</h1>
Meu nome é {{$nome}}
</br>
<a href="/config/info">info</a>
<a href="/logout">Sair</a>

@if ($showform)



<form action="" method="post">
    @csrf
    Nome:<br>
    <input type="text" name="name" id=""></br>
    Idade:</br>
    <input type="text" name="age" id=""></br>
    <input type="submit" value="Enviar!">
</form>
@endif
@endsection

