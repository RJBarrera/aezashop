<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
} else {
    // Show users the page!
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontEnd Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <a href="index.php">
            <span class="header__logo">A E Z A</span>
           <!--<img class="header__logo" src="img/logoo.png" alt="Logotipo">-->
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
        <a class="navegacion__enlace" href="nosotros.html">Iniciar sesión</a>
    </nav>

    <main class="contenedor">

    </main>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>