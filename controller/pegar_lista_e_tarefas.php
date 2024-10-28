<?php

include_once '../model/link.php';


$listaId = isset($_GET['id']) ? intval($_GET['id']) : 0;
$_SESSION['listaId'] = $listaId;

if ($listaId > 0) {
    print $listaId;
    $stmt = $conn->prepare("SELECT nome, descricao, data_criacao, data_conclusao, situacao FROM tarefas WHERE id_lista_tarefa = ?");
    $stmt->execute([$listaId]);
    $tarefas = $stmt->fetchAll();
    

    if ($tarefas) {
        include "pegar_nome_lista.php";

        print "<div class='menu-overlay' id='menu'>
        <button class='close-btn' onclick='fecharMenu()'>×</button>
        <h3>Criar Tarefa</h3>
        <ul>
        <form action='../controller/criar_tarefa.php' method='POST'>
            <div class='div-forms'>
            <li><input class='form-control' type='text' placeholder='Nome' name='nome_tarefa'></li>
            <li><textarea class='form-control' placeholder='Descrição' name='descricao_tarefa'></textarea></li>
            <li><input class='form-control' type='date' placeholder='Data final' name='data_final' required></li>
            <button class='btn' type='submit'>Confirmar</button>
            </div>
        </ul>
        </form>
        </div>";
        
        print "<h2>".$lista[0]['nome']."</h2>";
        
        foreach ($tarefas as $tarefa) {
            
            print "<div class='form-chek card-tarefa'>";
            print "<input class='form-check-input' type='checkbox' value=''>
            <label class='form-check-label' for='flexCheckDefault'>";
            print "<h2>" 
                    .$tarefa['nome'] . "</h2></strong> " .$tarefa['descricao'] .
                
                " </div>";
        }
        print "<button class='open-btn' onclick=
        'abrirMenu()'>☰ Menu</button>";
        
    } else {
        print "<p>Nenhuma tarefa encontrada para esta lista.</p>";
    }
} else {
    print "<p>Lista de tarefas não encontrada.</p>";
}
?>
