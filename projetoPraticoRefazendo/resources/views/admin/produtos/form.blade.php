

        <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" id="nome" name="nome" aria-describedby="email"  value="{{isset($produtos->nome)?$produtos->nome:''}}" placeholder="nome..">
                    @if ($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                    @endif
                </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}" value="{{isset($produtos->descricao)? $produtos->descricao:''}}" name="descricao"
                placeholder="Uma descrição do produto">
                @if ($errors->has('descricao'))
                    <div class="invalid-feedback">
                        {{$errors->first('descricao')}}
                    </div>
                    
                @endif
        </div>
        <div class="form-group">
            <label for="preço">Preço R$</label>
            <input type="number" value="{{isset($produtos->valor)? $produtos->valor:''}}" placeholder="Preço do produto" class="form-control {{ $errors->has('valor') ? ' is-invalid' : '' }}" name="valor" id="preco"
                step="0.20">
                @if ($errors->has('valor'))
                   <div class="invalid-feedback">
                       {{$errors->first('valor')}}
                   </div>
                    
                @endif
        </div>
        <div class="form-group">
            <label for="imagem">Fazer upload de imagem</label>
            <input type="file"  class="form-control-file file-path validate {{ $errors->has('imagem') ? ' is-invalid' : '' }}" name="imagem" id="imagem">
            <small class="text-danger">Tamanho máximo: 16MB</small>
            @if ($errors->has('imagem'))
            <div class="invalid-feedback">
                {{$errors->first('imagem')}}
            </div>
                
            @endif
        </div>
        @if (isset($produtos->imagem))
    <div class="input-field">
        <img width="150" src="{{ asset($produtos->imagem) }}" />
    </div>
@endif
