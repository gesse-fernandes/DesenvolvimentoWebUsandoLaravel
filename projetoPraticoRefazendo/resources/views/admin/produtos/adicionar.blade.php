@extends('layouts.site')

@section('titulo','produtos')
    @section('conteudo')
    <div class="container">
        <h3 class="text-center">Adicionar Produto</h3>
        <form action="{{route('admin.produtos.salvar')}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            @include('admin.produtos.form')
            <button class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection