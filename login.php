<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">La combinación de contraseña de nombre de usuario es incorrecta!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            include('index.php');
        } else {
            echo '<p class="error">La combinación de contraseña de nombre de usuario es incorrecta!</p>';
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
    </nav>

    <main class="contenedor">

    <form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" required />
    </div>
    <div class = "registrarse">   
        <button type="submit" name="login" value="login">Iniciar Sesión</button>
        <a class = "registro" href="registro.php">¿No estas registrado?</a>
    </div>
</form>
    </main>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>