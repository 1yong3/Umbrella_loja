<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//pega cookie (se existir)
$email_cookie = $_COOKIE['email'] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'] ?? "";
    $senha = $_POST['senha'] ?? "";

    if (!empty($email) && !empty($senha)) {

        $_SESSION['email'] = $email;

        //  LEMBRAR-ME
        if (isset($_POST['lembrar'])) {
            setcookie("email", $email, time() + (30 * 24 * 60 * 60)); 
        } else {
            setcookie("email", "", time() - 3600);
        }
        header("Location: dashboard.php");
        exit();

    } else {
        $erro = "Preencha todos os campos!";
    }
}
?>