<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        #login{
    max-width: 500px;
    width: 100%;
    height: 700px;
    margin: 0 auto;
    display: flex;
    align-items: center;
}
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <section id="login">
        <div class="jumbotron">
            <h1 class="display-4">Login Sistema de Produtos</h1>
            <form class="mt-5" method="POST" action="{{ route('site.login.entrar') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="usuario">Login</label>
                    <input name="login" type="text" class="form-control" id="usuario" placeholder="login">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Sua senha">
                </div>
                <div class="">
                    <span> <a class="btn btn-primary" href="{{ route('site.login.cadastrar') }}">Não possui conta? Cadastre-se</a></span>
                </div>
                <br>
                 <div class="">
                    <span><a class="btn btn-danger"  href="/">Voltar aqui</a></span>
                </div>
                <br>
                <div class="d-flex justify-content-end">
                    <input type="submit" name="acao" class="btn btn-success" value="Entrar">
                </div>
            </form>
        </div>
    </section>
</body>

</html>