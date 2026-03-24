<?php
session_start();
//verificar se logado
$logado = isset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja Virtual</title>
      <link rel="stylesheet" href="estilo.css">
      <?php include 'config.php'; ?>
</head>
<body>
<div class="container">
    <h1 class ="welc">You Welcome...</h1>
    <a href="login.php">
        <button class="login">CREDENCIAIS</button>
    </a>
    <?php if ($logado): ?>
        <a href="dashboard.php">
            <button class="mercado">MERCADO</button>
        </a>
    <?php else: ?>
        <button class="mercado desativado" disabled>MERCADO</button>
    <?php endif; ?>
</div>
</body>
</html>