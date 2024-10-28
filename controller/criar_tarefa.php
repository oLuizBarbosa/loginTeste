<?php
include("../model/link.php");
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['nome_tarefa'], $_POST['descricao_tarefa'], $_POST['data_final']/*, $_SESSION['listaId']*/)) {
        
        $nome_tarefa = $_POST['nome_tarefa'];
        $descricao_tarefa = $_POST['descricao_tarefa'];
        $data_final = $_POST['data_final'];
        $id_lista = 4;//$_SESSION['listaId'];
        
        try {
            $sql = "INSERT INTO tarefas (nome, descricao, data_conclusao, id_lista_tarefa, data_criacao) VALUES (?, ?, ?, ?, CURDATE())";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nome_tarefa, $descricao_tarefa, $data_final, $id_lista]);
            header('Location: ../view/dashboard.php');
        } catch (PDOException $e) {
            echo "Erro ao inserir tarefa: " . $e->getMessage();
        }
    } else {
        echo "Dados insuficientes para inserir tarefa.";
    }
}
?>
