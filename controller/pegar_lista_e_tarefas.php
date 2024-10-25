<?php

include_once '../model/link.php';


$listaId = isset($_GET['id']) ? intval($_GET['id']) : 0;
$_SESSION['listaId'] = $listaId;

if ($listaId > 0) {
    
    $stmt = $conn->prepare("SELECT nome, descricao, data_criacao, data_conclusao, situacao FROM tarefas WHERE id_lista_tarefa = ?");
    $stmt->execute([$listaId]);
    $tarefas = $stmt->fetchAll();
    

    if ($tarefas) {
        include "pegar_nome_lista.php";
        print "<h2>".$lista[0]['nome']."</h2>";
        
        foreach ($tarefas as $tarefa) {
            
            print "<div class='form-chek card-tarefa'>";
            print "<input class='form-check-input' type='checkbox' value=''>
            <label class='form-check-label' for='flexCheckDefault'>";
            print "<h2>" 
                    .$tarefa['nome'] . "</h2></strong> " .$tarefa['descricao'] .
                
                " </div>";
        }
        
    } else {
        print "<p>Nenhuma tarefa encontrada para esta lista.</p>";
    }
} else {
    print "<p>Lista de tarefas não encontrada.</p>";
}
?>
