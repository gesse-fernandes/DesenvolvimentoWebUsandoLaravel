@extends('layouts.site')

@section('titulo','Usuario')
    @section('conteudo')
    <div class="container">
        <h3 class="text-center">Editar Usuario</h3>
        <form action="{{route('login.usuario.atualizar',$usuario->id)}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
              <input type="hidden" name="_method" value="put">
            @include('login.form')
            <br>
            <button class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection