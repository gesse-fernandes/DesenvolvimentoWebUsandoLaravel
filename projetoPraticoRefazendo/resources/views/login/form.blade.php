 <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" id="nome" name="nome" aria-describedby="email"  value="{{isset($usuario->name)?$usuario->name:''}}" placeholder="nome..">
                    @if ($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                        
                    @endif
                </div>
                <div class="form-group">
                    <label for="login">Nome do login</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{isset($usuario->email)? $usuario->email:''}}" name="email" id="t" placeholder="email do login">
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" value="{{isset($usuario->password)? $usuario->password:''}}" class="form-control {{ $errors->has('senha') ? ' is-invalid' : '' }}" name="senha" id="senha" placeholder="Sua senha">
                      @if ($errors->has('senha'))
                        <div class="invalid-feedback">
                            {{$errors->first('senha')}}
                        </div>
                    @endif
                </div>
                 <div class="d-flex justify-content-end">
                     <a href="/" class="btn btn-danger">Cancelar</a>
                </div>
                <br>
                