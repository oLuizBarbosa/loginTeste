<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php;</script>'";
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .tarefas{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content:center;
            display: flex;
            background-color: grey;
        
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="navbar">Gerenciador de tarefas</a>
            <?php
                print"Olá, ".$_SESSION["nome"];
                print "<a href='logout.php' class='btn btn-danger'>Sair<a>";
            ?>
        </div>
    </nav>
    <div class="tarefas">
        <div class="card" style="width: 25rem; height: 50vh">
            <div class="card-body">
                <h5 class="card-title">Nome Lista </h5>
            </div>
            <div class="card">
                <?php
                    include("exibirListas.php");
                ?>
            </div>
        </div>
        </div>
</body>