<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body, .max-tam{
            height: 100vh;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid max-tam">
        <div class="row max-tam">
            <div class="col-md-4"></div>

            <div class="col-md-4 align-self-center">
                <h1 class="text-center">Login</h1>

                <form method="post" action="{{ route('logar') }}">
                    @csrf
                    <div class="form-group">
                        <label>Login: </label>
                        <input class="form-control" type="text" name="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label>Senha: </label>
                        <input class="form-control" type="password" name="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Acessar</button>
                    <a href="{{ route('cadastro') }}">Cadastre-se</a>
                </form>

            </div>

            <div class="col-md-4"></div>
        </div>
    </div>
    
</body>
</html>