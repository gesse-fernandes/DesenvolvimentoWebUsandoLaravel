@extends('layouts.app')
@section('content')
<a href="{{route('admin.categories.create')}}" class="btn btn-lg btn-success">Criar Categorias</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
             <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <div class="btn-group">
                               <a href="{{route('admin.categories.edit',['category'=>$item->id])}}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{route('admin.categories.destroy',['category'=>$item->id])}}" method="post">
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
@endsection

