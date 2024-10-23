<?php
session_start();
if(empty($_SESSION)){
    header('Location: ../index.php');
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/dashboard/style.css">
</head>
<body>
    <nav class="barra-topo">
            <?php
                print"<h3>Olá, ".$_SESSION['nome']; print"</h3>";
                print "<div><a href='../controller/logout.php' class='btn btn-danger'>Sair</a>";print"</div>";
            ?>
    </nav>
    <div>
        <?php
        include("../view/exibirLista.php");
        ?>
    </div>
    
</body>

