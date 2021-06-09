@extends('layouts.app')
@section('content')
<a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success">Criar Loja</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stores as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a href="{{route('admin.stores.edit',['store'=>$item->id])}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{route('admin.stores.destroy',['store'=>$item->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('deseja excluir sua loja?')">Deletar</a>
                    </td>
                </tr>
        @endforeach
    </tbody>
</table>

@endsection