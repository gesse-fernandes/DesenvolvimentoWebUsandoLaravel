@extends('layouts.admin')
@section('title','Cadastrar')

@section('content')
 @if ($errors->any())
 <ul>
    @foreach ( $errors->all() as $erro )
        <li>{{$erro}}</li>
    @endforeach
    </ul>
 @endif
    <form method="post">
        @csrf
        <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}" id="">
        <br>
        <input type="email" name="email" id="" value="{{old('email')}}" placeholder="digite o email">
        <br>
        <input type="password" name="password" placeholder="digite uma senha"></br>
         <input type="password" name="password_confirmation" placeholder="Confirme sua senha"></br>
        <input type="submit" value="Cadastrar">
    </form>
@endsection
