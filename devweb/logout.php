<?php
session_start();

$_SESSION = [];

session_destroy();

// remove cookie (se existir)
if (isset($_COOKIE['email'])) {
    setcookie("email", "", time() - 3600);
}

header("Location: login.php");
exit();
?>