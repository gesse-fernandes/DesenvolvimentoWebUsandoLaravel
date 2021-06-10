@extends('layouts.app')
@section('content')
<a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produtos</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Loja</th>
             <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>R$ {{number_format($item->price,2,',','.')}}</td>
                      <td>{{$item->store->name}}</td>
                    <td>
                        <div class="btn-group">
                               <a href="{{route('admin.products.edit',['product'=>$item->id])}}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{route('admin.products.destroy',['product'=>$item->id])}}" method="post">
                            {{ csrf_field() }}
                            @method("DELETE")
                            <button type="submit" onclick="return confirm('deseja deletar?')" class="btn btn-sm btn-danger">Deletar</button>
                        </form>
                        </div>
                    </td>
                </tr>
        @endforeach
    </tbody>
</table>
{{$products->links()}}
@endsection
