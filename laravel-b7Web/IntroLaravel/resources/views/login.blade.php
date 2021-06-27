@extends('layouts.admin')
@section('title','Login')

@section('content')
@if (session('warning'))
   {{session('warning')}}
@endif
    <form method="post">
        @csrf
        <input type="email" name="email" id="" placeholder="digite o email">
        <br>
        <input type="password" name="password" placeholder="digite uma senha"></br>
        <input type="submit" value="Entrar">
        <button>
        <a href="{{route('register')}}" style="text-decoration: none; color:  #000">Registrar</a>
        </button>
    </form>
@endsection
