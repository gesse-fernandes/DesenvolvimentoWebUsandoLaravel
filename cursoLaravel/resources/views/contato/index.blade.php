@extends('layout.site')
@section('titulo','contatos')
    
@section('conteudo')
<h3>Essa é a view do index</h3>
@foreach($contatos as $contato)
<p> {{$contato->nome}}</p>
<p>{{$contato->telefone}}</p>   
@endforeach
@endsection

