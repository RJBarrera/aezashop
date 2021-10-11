
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
        <a class="navegacion__enlace" href="carrito.php">Mi carrito</a>
        <a class="navegacion__enlace" href="login.php">Iniciar sesión</a>
    </nav>

    <main class="contenedor">
        <h1>Nuestros Productos</h1>

        <div class="grid">
            <div class="producto">
                <a href="RopaMujer.php">
                    <img class="producto__imagen" src="img/1.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Ropa de Mujer</p>
                        
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="Ropahombre.php">
                    <img class="producto__imagen" src="img/2.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Ropa de Hombre</p>
                       
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="Productobelleza.php">
                    <img class="producto__imagen" src="img/3.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Belleza</p>
                       
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="Joyeria.php">
                    <img class="producto__imagen" src="img/4.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Joyeria</p>
                    </div>
                </a>
            </div>  <!--.producto-->

        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>