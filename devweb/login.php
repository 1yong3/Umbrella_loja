<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilologin.css">
</head>   
<body>
    <div class="login-box">
        <h2>Credenciais</h2>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="e-mail" value="<?php echo $email_cookie ?? ''; ?>" required>
            <input type="password" name="senha" placeholder="senha" required>
            <label>
                <input type="checkbox" name="lembrar"> Lembre-me
            </label>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>