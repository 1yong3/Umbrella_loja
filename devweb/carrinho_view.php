<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>

</head>
<body>

<h1>Seu Carrinho</h1>
<?php if (empty($itens)): ?>
    <p>Carrinho vazio</p>
<?php else: ?>

    <ul>
        <?php foreach ($itens as $index => $item): ?>
            <li>
                <?php echo $item['nome']; ?> - R$ <?php echo $item['preco']; ?>
                <a href="carrinho.php?remover=<?php echo $_SESSION['carrinho'][$index]; ?>">
                    Remover
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Total: R$ <?php echo $total; ?></h3>

<?php endif; ?>

<a href="dashboard.php">Voltar</a>

</body>
</html> 