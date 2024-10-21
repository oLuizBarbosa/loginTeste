<?php
    include("link.php");
    $sql = "SELECT * FROM lista_tarefas 
            WHERE id_usuario=".$_REQUEST["id_usuario"];
    $res = $conn->query($sql);

    $qtd = $res->;

    if ($qtd > 0) {
        print "<table class= 'table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Data</th>";
            print "<th>Id_usuario</th>";
            print "</tr>";
        while ($row = $res->fetch()) {
            print "<tr>";
            print "<td>".$row ->id."</td>";
            print "<td>".$row ->nome."</td>";
            print "<td>".$row ->data_criacao."</td>";
            print "<td>".$row ->id_usuario."</td>";
            
            
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class= 'alert alert-danger'>Não encontrou resultado!</p>";
    }
