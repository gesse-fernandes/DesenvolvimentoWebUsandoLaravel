@extends('layouts.site')

@section('titulo','produtos')
    @section('conteudo')
    <div class="container">
        <h3 class="text-center">Editar Produto</h3>
        <form action="{{route('admin.produtos.atualizar',$produtos->id)}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
              <input type="hidden" name="_method" value="put">
            @include('admin.produtos.form')
            <br>
            <button class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection