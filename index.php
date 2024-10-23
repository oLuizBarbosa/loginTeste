<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/login/style.css">
  </head>
  <body>
    <div class="login">
        <div >
            <div class="collum card-login">
                <div class="card card-login">
        
                <div class="card-body">
                <div>
                    <h1 style="text-align: center" class="gradient-text">Login</h1>
                    </div>
                    <form action="controller/login.php" method="POST">

                    <div class="mb-3"></div>
                    <input type="text"
                    name="usuario"
                    class="form-control label-login" placeholder="Usuário">

                    <div class="mb-3"></div>
                    <input type="password"
                    name="senha"
                    class="form-control label-login" placeholder="Senha">

                    <button type="submit" class="btn btn-primary form-control bt-login">Enviar</button>
                        <p style="text-align: center;">Ainda não tem uma conta?<a href="#"> Criar conta</a></p>

                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>