
<h3>Você esta na view Index</h3>
@foreach($contatos as $contato)
<p> {{$contato->nome}}</p>
<p>{{$contato->telefone}}</p>
   
@endforeach