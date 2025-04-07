<?php
session_start();

if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Segura</title>
</head>
<body>
    <h1>Bem-vindo à Página Segura</h1>
    <p>Somente usuários autenticados podem ver esta página.</p>
    <a href="logout.php">Sair</a>
</body>
</html>
