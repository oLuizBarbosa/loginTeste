<?php
include("link.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, usuario, email, senha) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome, $usuario, $email, $senha]);

    echo "Registro realizado com sucesso!";
}
?>
<form method="POST">
    <input type="text" name="nome" placeholder="Nome Completo" required>
    <input type="text" name="usuario" placeholder="Usuário" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Registrar</button>
</form>
