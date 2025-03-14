<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesanias alebrijes</title>
    <link rel="stylesheet" href="stylosArtesanias.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include 'session_check.php';
    ?>
<body>
    <header>
        <div id="banner">
            <img src="ima/logon.png">
            <h1> Bienvenidos <br>"Artesanias alebrije"</h1>
        </div>
    </header>

    <header>
        <header>
            <ul class="menu">
                <li><a href="ARTESANIAS ALEBRIJES.php">Inicio</a></li>
                <li><a href="categoria.php">Categorías</a></li>
                <li><a href="producto.php">Productos</a></li>
                <li><a href="ticket.php">Ticket</a></li>
                <li><a href="logout.php">cerrar sesion</a></li>
            </ul>
        </header>
    </header>
    <div class="formulario">
        <table>
            <tr>
                <th>
                    <h1>Insertar Producto</h1>
                    <form action="registroprod.php" method="post">
                        <label for="nombre">Nombre del Producto:</label>
                        <input type="text" id="nombre" name="nombre" pattern="[A-Za-z0-9\s]+"
                            title="Solo letras, números y espacios son permitidos"
                            oninput="this.value = this.value.replace(/[^A-Za-z0-9\s]/g, '')" required><br>

                        <label for="tamaño">Tamaño:</label>
                        <input type="text" id="tamaño" name="tamaño" pattern="[A-Za-z0-9\s]+"
                        title="Solo letras, números y espacios son permitidos"
                        oninput="this.value = this.value.replace(/[^A-Za-z0-9\s]/g, '')" required><br>

                        <label for="precio">Precio:</label>
                        <input type="text" id="precio" name="precio" pattern="\d+(\.\d{1,2})?"
                            title="Ingrese un precio válido (p.ej., 100.00)"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required><br>


                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" name="cantidad" required><br>

                        <label for="id_categoria">ID Categoría:</label>
                        <input type="number" id="id_categoria" name="id_categoria" required><br>

                        <div>
                            <button type="submit" name="action" value="insertar">Guardar</button>

                        </div>
                    </form>
                    <form method="POST" action="registroprod.php">
                        <input type="hidden" name="action" value="visualizar">
                        <button type="submit" value="Mostrar Productos">visualizar
                    </form>
    </div>



    </div>
    </main>

</body>

</html>