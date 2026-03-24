<?php
session_start();
// proteção de acesso
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}


/*
Esse codigo serve para ver os dados do usuario que foram salvos
echo "<h3>Conteúdo da Sessão:</h3>";
echo "<pre>";
print_r($_SESSION); // Isso vai mostrar tudo o que está guardado no servidor
echo "</pre>";
*/
?>
<!-- 
<div class="produtos">

    <div class="produto">
        <img src="https://via.placeholder.com/150">
        <h3>Notebook</h3>
        <p>R$ 3.500,00</p>
        <a href="carrinho.php?add=1"><button>Comprar</button></a>
    </div>

    <div class="produto">
        <img src="https://via.placeholder.com/150">
        <h3>Mouse Gamer</h3>
        <p>R$ 150,00</p>
      <a href="carrinho.php?add=1"><button>Comprar</button></a>
    </div>

    <div class="produto">
        <img src="https://via.placeholder.com/150">
        <h3>Teclado Mecânico</h3>
        <p>R$ 300,00</p>
      <a href="carrinho.php?add=1"><button>Comprar</button></a>
    </div>

    <div class="produto">
        <img src="https://via.placeholder.com/150">
        <h3>Headset</h3>
        <p>R$ 200,00</p>
        <a href="carrinho.php?add=1"><button>Comprar</button></a>
    </div>

     <div class="produto">
        <img src="https://via.placeholder.com/150">
        <h3>Headset</h3>
        <p>R$ 200,00</p>
       <a href="carrinho.php?add=1"><button>Comprar</button></a>
    </div>

     <div class="produto">
        <img src="https://via.placeholder.com/150">
        <h3>Headset</h3>
        <p>R$ 200,00</p>
        <a href="carrinho.php?add=1"><button>Comprar</button></a>
    </div>
    
     <div class="produto">
        <img src="https://via.placeholder.com/150">
        <h3>Headset</h3>
        <p>R$ 200,00</p>
        <a href="carrinho.php?add=1"><button>Comprar</button></a>
    </div>

     <div class="produto">
        <img src="https://via.placeholder.com/150">
        <h3>Headset</h3>
        <p>R$ 200,00</p>
        <a href="carrinho.php?add=1"><button>Comprar</button></a>
    </div>
</div>
</body>
</html>
-->

<?php require_once 'dados_api.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
      <link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="topo">
    <h2 class="welc">Olá, <?php echo $_SESSION['email']; ?></h2>

    <a href="logout.php">
        <button>Logout</button>
    </a>
</div>

<div class="produtos">
<?php foreach ($produtos as $p): ?>
    <div class="produto">
        <img src="<?php echo $p['imagem']; ?>">

        <h3><?php echo $p['nome']; ?></h3>

        <p>R$ <?php echo number_format($p['preco'], 2, ',', '.'); ?></p>

        <a href="carrinho.php?add=<?php echo $p['id']; ?>">
            <button>Comprar</button>
        </a>
    </div>
<?php endforeach; ?>
</div>
</body>
</html>