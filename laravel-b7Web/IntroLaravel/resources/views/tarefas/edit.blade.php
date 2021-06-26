@extends('layouts.admin')
@section('title','Editar de tarefas')

@section('content')
 <h1>Ação Editar</h1>
@if ($errors->any())
    @foreach ($errors->all() as $error )
        {{$error}}</br>
    @endforeach
@endif
 <form  method="post">
     @csrf
    <label for="">
        Titulo:<br>
        <input type="text" name="titulo" id="" value="{{$data->titulo}}">

    </label>
     <input type="submit" value="salvar">
 </form>
@endsection

