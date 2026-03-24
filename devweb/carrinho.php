<?php
session_start();

// REMOVER 
if (isset($_GET['remover'])) {
    $idRemover = $_GET['remover'];

    $key = array_search($idRemover, $_SESSION['carrinho']);
    if ($key !== false) {
        unset($_SESSION['carrinho'][$key]);
    }

    $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);

    header("Location: carrinho.php");
    exit();
}

// proteção de acesso
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// inicializa carrinho
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

$produtos = [
    1 => ["id", "nome" => "Ammo", "preco" => 350,],
    2 => ["id" => 2, "nome" => "Caixa", "preco" => 150,],
    3 => ["id" => 3, "nome" => "Chave Acesso", "preco" => 200,],
    4 => ["id" => 4, "nome" => "Cartao Acesso", "preco" => 300,],
    5 => ["id" => 5, "nome" => "Heal Spray", "preco" => 900,],
    6 => ["id" => 6, "nome" => "Caneta", "preco" => 500,],
    7 => ["id" => 7, "nome" => "Relógio", "preco" => 400,],
    8 => ["id" => 8, "nome" => "Laucher", "preco" => 1000,]
];


// adicionar produto
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['carrinho'][] = $id;
    header("Location: carrinho.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Carrinho</title>
<link rel="stylesheet" href="carrinho.css">
</head>

<body>

<div class="container">
    <h2>Seu Carrinho</h2>

    <?php
    $total = 0;

    if (empty($_SESSION['carrinho'])) {
        echo "<p class='vazio'>Carrinho vazio</p>";
    } else {

        foreach ($_SESSION['carrinho'] as $id) {

            if (isset($produtos[$id])) {
                $produto = $produtos[$id];

                echo "<div class='item'>";
                echo "<strong>{$produto['nome']}</strong><br>";
                echo "R$ " . number_format($produto['preco'], 2, ',', '.');

                // REMOVER 
                echo "<br><a href='?remover=$id'>Remover</a>";

                echo "</div>";

                $total += $produto['preco'];
            }
        }

        echo "<div class='total'>";
        echo "Total: R$ " . number_format($total, 2, ',', '.');
        echo "</div>";
    }
    ?>
    <a href="dashboard.php"> <= Voltar para produtos</a>
</div>

</body>
</html>