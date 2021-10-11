<?php
 
include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">¡La dirección de correo electrónico ya está registrada!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Te has registrado correctamente!</p>';
        } else {
            echo '<p class="error">¡Algo salió mal!</p>';
        }
    }
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

        <form method="post" action="" name="signup-form">
        <div class="form-element">
            <label>Usuario</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Correo</label>
            <input type="email" name="email" required />
        </div>
        <div class="form-element">
            <label>Contraseña</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="register" value="register">Registrarse</button>
        </form>
    </main>

    <footer class="footer">
        <p class="footer__texto">A E Z A - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>