

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" value="{{isset($produtos->nome)? $produtos->nome:''}}" placeholder="Nome do produto" name="nome" class="form-control" id="nome">

        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input class="form-control" value="{{isset($produtos->descricao)? $produtos->descricao:''}}" name="descricao" id="descricao" rows="3"
                placeholder="Uma descrição do produto">
        </div>
        <div class="form-group">
            <label for="preço">Preço R$</label>
            <input type="number" value="{{isset($produtos->valor)? $produtos->valor:''}}" placeholder="Preço do produto" class="form-control" name="valor" id="preco"
                step="0.20">
        </div>
        <div class="form-group">
            <label for="imagem">Fazer upload de imagem</label>
            <input type="file"  class="form-control-file file-path validate" name="imagem" id="imagem">
            <small class="text-danger">Tamanho máximo: 16MB</small>
        </div>
        @if (isset($produtos->imagem))
    <div class="input-field">
        <img width="150" src="{{ asset($produtos->imagem) }}" />
    </div>
@endif
