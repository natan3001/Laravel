<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
                <h1 class="text-center">Cadastro de usuário</h1>

                <form method="post" action="{{ route('usuario_add') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control nome" type="text" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label>email:</label>
                        <input class="form-control email" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Login:</label>
                        <input class="form-control login" type="text" name="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label>Senha:</label>
                        <input class="form-control senha" type="password" name="senha" placeholder="senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{ route('tela_login') }}">Faça seu login</a>
                </form>
            </div>

            <div class="col-md-4"></div>
        </div>
    </div>
    
    <script>
        const nome = document.querySelector(".nome");
        const senha = document.querySelector(".senha");
        const email = document.querySelector(".email");
        const login = document.querySelector(".login");
        const button = document.querySelector(".btn");
        var w,x, y, z = false;

        button.disabled = true;

        email.addEventListener("keyup", () =>{
            if(email.value.length > 0){
                w = true;
                email.style.borderColor = "green"
            }else{
                w = false;
                email.style.borderColor = "red"
            }
            enableButton();
        });

        login.addEventListener("keyup", () =>{
            if(login.value.length > 2){
                x = true;
                login.style.borderColor = "green"
            }else{
                x = false;
                login.style.borderColor = "red"
            }
            enableButton();
        });

        nome.addEventListener("keyup", () =>{
            if(nome.value.length > 2){
                y = true;
                nome.style.borderColor = "green"
            }else{
                y = false;
                nome.style.borderColor = "red"
            }
            enableButton();
        });

        senha.addEventListener("keyup", () =>{
            if(senha.value.length > 5 && senha.value.length < 17){
                z = true;
                senha.style.borderColor = "green";
            }else{
                senha.style.borderColor = "red";
                z = false;
            }
            enableButton();
        });

        function enableButton(){
            if(x == true && y == true && z == true && w == true){
                button.disabled = false;
            }else{
                button.disabled = true;
            }
        }
    </script>
</body>
</html>