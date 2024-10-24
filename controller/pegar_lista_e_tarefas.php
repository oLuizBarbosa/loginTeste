<?php
// Inclua a conexão com o banco de dados
include_once '../model/link.php';


$listaId = isset($_GET['id']) ? intval($_GET['id']) : 0;


if ($listaId > 0) {
    
    $stmt = $conn->prepare("SELECT nome, descricao, data_criacao, data_conclusao, situacao FROM tarefas WHERE id_lista_tarefa = ?");
    $stmt->execute([$listaId]);
    $tarefas = $stmt->fetchAll();

    if ($tarefas) {
        echo "<h2>Nome da lista</h2>";
        echo "<ul>";
        foreach ($tarefas as $tarefa) {
            echo "<li><strong>" 
                    .$tarefa['nome'] . "</strong>: " .$tarefa['descricao'] . 
                " - Data de criação: " .$tarefa['data_criacao'] . 
                " - Data limite: " .$tarefa['data_conclusao']. 
                " - Status: " . $tarefa['situacao'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhuma tarefa encontrada para esta lista.</p>";
    }
} else {
    echo "<p>Lista de tarefas não encontrada.</p>";
}
?>
