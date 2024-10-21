<?php
    include("link.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$usuario]);
        $user = $stmt->fetch();
        
        if ($user && $user['senha'] == $senha) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            header('Location: dashboard.php');
        } else {
            echo "Usuário ou senha incorretos!";
        }
    }
    
?>