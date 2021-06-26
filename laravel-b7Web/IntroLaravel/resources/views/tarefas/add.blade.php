@extends('layouts.admin')
@section('title','Adicionar de tarefas')

@section('content')
 <h1>Ação Cadastrar</h1>
@if ($errors->any())
    @foreach ($errors->all() as $error )
        {{$error}}</br>
    @endforeach
@endif
 <form  method="post">
     @csrf
    <label for="">
        Titulo:<br>
        <input type="text" name="titulo" id="">

    </label>
     <input type="submit" value="Adicionar">
 </form>
@endsection
