@extends('layouts.site')

@section('titulo','Home')

@section('conteudo')
  <div class="container">
    @if (isset($retornado))
        @if (empty($retornado) != 0)
         <h1 class="text-center">Nenhuma informação a ser exibida pois não existe nenhum cadastro cadastre um produto!!
            </h1>
    @else
        <h1 class="text-center">Lista de Produtos</h1>
    
    <div class="row">
      @foreach ($retornado as $produto)
            <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-image">
                <img src="{{asset($produto->imagem)}}" width="150" height="150">
                    </div>
            <div class="card-body">
                <h4>{{$produto->nome}}</h4>
                <p>{{$produto->descricao}}</p>
                <p>{{$produto->valor}}</p>
            </div>
             </div>

        </div>
      @endforeach
      
    </div> 
    @endif
    @endif
    @if (isset($produtos))
        
    
    @if ($produtos->count() == 0)
         <h1 class="text-center">Nenhuma informação a ser exibida pois não existe nenhum cadastro cadastre um produto!!
            </h1>
    @else
        <h1 class="text-center">Lista de Produtos</h1>
    
    <div class="row">
      @foreach ($produtos as $produto)
            <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-image">
                <img src="{{asset($produto->imagem)}}" width="150" height="150">
                    </div>
            <div class="card-body">
                <h4>{{$produto->nome}}</h4>
                <p>{{$produto->descricao}}</p>
                <p>{{$produto->valor}}</p>
            </div>
             </div>

        </div>
      @endforeach
      
    </div> 
    @endif
    @endif
   


  </div>




@endsection
