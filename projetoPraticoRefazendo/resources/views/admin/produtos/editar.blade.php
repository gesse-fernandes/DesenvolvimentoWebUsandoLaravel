@extends('layouts.site')

@section('titulo','produtos')
    @section('conteudo')
    <div class="container">
        <h3 class="text-center">Editar Produto</h3>
        <form action="" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            @include('admin.produtos.form')
            <button class="btn btn-primary">Editar</button>
        </form>
    </div>
@endsection