 <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="email" value="{{isset($usuario->nome)}}" placeholder="nome..">

                </div>
                <div class="form-group">
                    <label for="login">Nome do login</label>
                    <input type="text" class="form-control" value="{{isset($usuario->email)}}" name="email" id="t" placeholder="email do login">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" value="{{isset($usuario->senha)}}" class="form-control" name="senha" id="senha" placeholder="Sua senha">
                </div>
                 <div class="d-flex justify-content-end">
                     <a href="/" class="btn btn-danger">Cancelar</a>
                </div>
                <br>
                <div class="d-flex justify-content-end">
                    <input type="submit" name="acao" class="btn btn-success" value="Cadastrar">
                </div>