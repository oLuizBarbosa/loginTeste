<?php
$user_id = $_SESSION['user_id']; 
include('../model/link.php');
// Consulta para buscar as listas de tarefas do usuário
$sql = "SELECT * FROM lista_tarefas WHERE id_usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$user_id]);
$listas = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($listas as $lista) {
    // Exibe o nome da lista
    echo "<h2>" . htmlspecialchars($lista['nome']) . "</h2>";

    // Consulta para buscar as tarefas da lista atual
    $sql = "SELECT * FROM tarefas WHERE id_lista_tarefa = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$lista['id']]);
    $tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($tarefas) > 0) {
        // Exibe a lista de tarefas
        echo "<ul>";
        foreach ($tarefas as $tarefa) {
            echo "<li>";
            echo "<strong>" . htmlspecialchars($tarefa['nome']) . "</strong>: " . htmlspecialchars($tarefa['descricao']);
            echo " (Data de Criação: " . htmlspecialchars($tarefa['data_criacao']) . " | Data Limite: " . htmlspecialchars($tarefa['data_conclusao']) . ")";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhuma tarefa encontrada nesta lista.</p>";
    }
}

?>
