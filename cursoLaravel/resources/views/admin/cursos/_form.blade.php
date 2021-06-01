<div class="input-field">
    <input type="text" name="nome" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    <label for="">Título</label>
</div>
<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
    <label for="">Descrição</label>
</div>
<div class="input-field">
    <input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
    <label for="">Valor</label>
</div>
<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input type="text" class="file-path validate">
    </div>
    @if(isset($registro->imagem))
    <div class="input-field">
        <img src="{{asset($registro->imagem)}}" width="150" alt="">
    </div>
    @endif
   <div class="input-field">
       <p>
      <label>
        <input type="checkbox" id="test5" {{isset($registro->publicado)&& $registro->publicado == 'sim'? 'checked':''}} name = 'publicado' value="true" />
        <span>Publicar?</span>
      </label>
    </p>
    <br><br>
   </div>
</div>
