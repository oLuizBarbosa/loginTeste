<?php
include("..\model\link.php");
$listaId = $_SESSION['listaId'];


// Consulta para buscar as listas de tarefas do usuário
$sql = "SELECT nome FROM lista_tarefas WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$listaId]);
$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>