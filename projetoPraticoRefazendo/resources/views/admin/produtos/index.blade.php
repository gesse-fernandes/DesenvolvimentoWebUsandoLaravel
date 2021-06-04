@extends('layouts.site')


@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container ">

        @if ($produtos->count() == 0)
            <h1 class="text-center">Nenhuma informação a ser exibida pois não existe nenhum cadastro cadastre um produto!!
            </h1>

        @else

            <h3 class="text-center">Lista dos produtos</h3>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ação</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td><img height="60" src="{{asset($produto->imagem)}}" alt="{{ $produto->nome }}" /></td>
                                <td>{{ $produto->valor }}</td>
                                <td>
                                    <a href="{{route('admin.produtos.editar',$produto->id)}}" class="btn btn-success">Editar</a>
                                    <a href="" class="btn btn-danger">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <a href="{{route('admin.produtos.adicionar')}}" class="btn btn-dark">Adicionar</a>
            </div>
        @endif


    </div>

@endsection
