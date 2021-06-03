@extends('layouts.site')

@section('titulo','Home')

@section('conteudo')
  <div class="container">
    <h1 class="text-center">Lista de Produtos</h1>
    
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-image">
                <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="">
                    </div>
            <div class="card-body">
                <h4>teste</h4>
                <p>descrição</p>
                <p>preço</p>
            </div>
             </div>

        </div>
    </div>


  </div>




@endsection
