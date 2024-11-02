<?php
include("../model/link.php");
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_tarefa = $_POST['id_tarefa'];
    
    try {
        $sql = "DELETE FROM tarefas WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_tarefa]);
        
    } catch (PDOException $e) {
        echo "Erro ao inserir tarefa: " . $e->getMessage();
    }
    
}