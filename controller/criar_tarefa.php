<?php
include("../model/link.php");
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['nome_tarefa'], $_POST['descricao_tarefa'], $_POST['data_final'], $_POST['id_lista'])) {
        
        $nome_tarefa = $_POST['nome_tarefa'];
        $descricao_tarefa = $_POST['descricao_tarefa'];
        $data_conclusao = $_POST['data_final'];
        $id_lista = $_POST['id_lista'];//ISSO DEFINITIVAMENTE NÃO DEVERIA SER ASSIM
        $situacao = "pendente";
        try {
            $sql = "INSERT INTO tarefas (nome, descricao, data_conclusao, id_lista_tarefa, situacao, data_criacao) VALUES (?, ?, ?, ?, ?, CURDATE())";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nome_tarefa, $descricao_tarefa, $data_conclusao, $id_lista, $situacao]);
            header('Location: ../view/dashboard.php');
            
        } catch (PDOException $e) {
            echo "Erro ao inserir tarefa: " . $e->getMessage();
        }
    } else {
        echo "Dados insuficientes para inserir tarefa.";
    }
}

