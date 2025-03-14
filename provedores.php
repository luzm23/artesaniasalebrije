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
            <img src="ima/logon.png" >
            <h1> Bienvenidos <br>"Artesanias alebrije"</h1>
        </div>
    </header>

    <header>
        <ul class="menu">
            <a>"Invierte en tu negocio hoy para disfrutar del éxito mañana. ¡Haz la compra que transformará tu vida y te llevará un paso más cerca de tus sueños!"</a>
            <li><a href="catalogo.php">Inicio</a></li>
        </ul>
       
    </header>
    <div class="formulario">
        <table>
            <tr>
       <th>
    <h1>Insertar Proveedor</h1>

    <form action="registroprove.php" method="post">
       
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" pattern="[A-Za-z\s]+"
                            title="Solo letras y espacios son permitidos"
                            oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')"
                            required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" pattern="[A-Za-z\s]+"
                            title="Solo letras y espacios son permitidos"
                            oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')"
                            required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" pattern="\d{10}"
        title="Ingrese un número de teléfono válido de 10 dígitos"
        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
        required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" 
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                            title="Ingrese un correo electrónico válido (por ejemplo, usuario@dominio.com)"
                            required><br><br>

        <label for="negocio">Negocio:</label>
        <input type="text" id="negocio" name="negocio" pattern="[A-Za-z0-9\s]+"
                            title="Solo letras, números y espacios son permitidos"
                            oninput="this.value = this.value.replace(/[^A-Za-z0-9\s]/g, '')"
                            required><br><br>

        <label for="productos">Productos en Ventas:</label>
        <textarea id="productos" name="productos" pattern="[A-Za-z0-9\s]+"
        title="Solo letras, números y espacios son permitidos"></textarea><br><br>

        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios" pattern="[A-Za-z0-9\s]+"
        title="Solo letras, números y espacios son permitidos"></textarea><br><br>

        <button type="submit">Guardar</button>
         
    </form>
    <!-- Botón para visualizar los datos -->
    <form action="visualizarproveedores.php" method="get">
        <button type="submit">Visualizar Proveedores</button>
</body>
</html>
