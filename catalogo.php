<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesanias alebrijes</title>
    <link rel="stylesheet" href="styloscatalogo.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<?php
session_start();

// Si el usuario ya está logueado, redirige a la página protegida
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: protected.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica las credenciales (esto es un ejemplo; usa una base de datos en producción)
    if ($username === 'usuario' && $password === 'contraseña') {
        $_SESSION['loggedin'] = true;
        header('Location: protected.php');
        exit;
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
    }
}
    ?>
<body>
    <heade>
        <div id="banner">
            <img src="ima/logon.png" >
            <h1> Bienvenidos Al Catalogo de<br>"Artesanias alebrije"</h1>
        </div>
    </heade>
   
   
    <body>
        <header>
            <h1>Catálogo de Productos</h1>
            <nav>
                <button onclick="filterProducts('todos')">Todos</button>
                <button onclick="filterProducts('categoria1')">TEXTILES</button>
                <button onclick="filterProducts('categoria2')">BARRO</button>
                <button onclick="filterProducts('categoria3')">MADERA</button>
                <button onclick="filterProducts('categoria4')">METAL</button>
                <button onclick="filterProducts('categoria5')">PIEDRA</button>
                <button onclick="filterProducts('categoria6')">FIBRAS NATURALES</button>
               
            </nav>
            <div class="cart">
                <h2>Carrito de Compras</h2>
                <ul id="cart-items"></ul>
                <p>Total: $<span id="cart-total">0.00</span></p>
            </div>
            
        </header>
        <menu>
        <div class="menu">
            <button onclick="location.href='pedidos.php'">regitrar pedidos especiales </button>
            <button onclick="location.href='provedores.php'">registro de Proveedores </button>
            <button onclick="location.href='logout.php'">Cerrar sesión</button>
        </div></menu>
        <main> 
            <div class="product" data-category="categoria1">
                <img src="ima/textil (5).jpeg" alt="huipil">
                <h2>HUIPIL BORDADO</h2>
                <p>Un hupil bordado a mano de la region...</p>
                <span class="price">$7000.00</span>
                <button onclick="addToCart('huipil', 7000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria2">
                <img src="ima/Artesanías_de_barro_en_Naolinco.jpg" alt="figuritas de barro">
                <h2>mini figuritas de barro</h2>
                <p>artesanias de barro de naolino</p>
                <span class="price">$20.00</span>
                <button onclick="addToCart('figuras de barro', 20.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria3">
                <img src="ima/mortero.jpeg" alt="mortero">
                <h2>mortero de madera</h2>
                <p>mortero de madera decorado con frida kalho</p>
                <span class="price">$150.00</span>
                <button onclick="addToCart('mortero', 150.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria3">
                <img src="ima/juego de decoracion ele.jpeg" alt="elefantes">
                <h2>juego de elfantes</h2>
                <p>juego de decoracio de elefantes.</p>
                <span class="price">100.00</span>
                <button onclick="addToCart('elefante', 100.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria2">
                <img src="ima/bateria-barro-negro-mesa-tradicional_9283a974-0808-4a56-b334-4bc7fbf8f9c1.jpg" alt="barro negro">
                <h2>bateria de barro negro</h2>
                <p>un bateria de barro para la mesa</p>
                <span class="price">$1500.00</span>
                <button onclick="addToCart('bateria', 1500.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria2">
                <img src="ima/BARRO-PETATILLO-1024x679.jpg" alt="plato">
                <h2>platos</h2>
                <p>plato decorado a mano</p>
                <span class="price">$120.00</span>
                <button onclick="addToCart('platos', 20.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria6">
                <img src="ima/canasta.jpeg" alt="canasta">
                <h2>canasta</h2>
                <p>canasta tejida a mano...</p>
                <span class="price">$150.00</span>
                <button onclick="addToCart('canasta', 150.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria4">
                <img src="ima/motometal.jpeg" alt="Producto 2">
                <h2>mini motocicleta</h2>
                <p>figura decoraiva de metal</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('moto', 20.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria2">
                <img src="ima/BARRO-CANELO-1024x683.jpg" alt="plato">
                <h2>plato</h2>
                <p>platos decorados a mano</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('platos', 200.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (7).jpeg" alt="Producto 2">
                <h2>trajes tipicos</h2>
                <p>trajes tipicos de ... completos</p>
                <span class="price">$20000.00</span>
                <button onclick="addToCart('trajes', 20000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (9).jpeg" alt="Producto 1">
                <h2>aban</h2>
                <p>abanes borados a mano.</p>
                <span class="price">$2500.00</span>
                <button onclick="addToCart('aban', 2500.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria5">
                <img src="ima/hombrepiedra.jpeg" alt="hombre">
                <h2>hombre pescando</h2>
                <p>figura decorativa de un hombre pescaanddo (piedra).</p>
                <span class="price">$2000.00</span>
                <button onclick="addToCart('hombre pescando', 2000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria4">
                <img src="ima/baleros.jpeg" alt="baleros">
                <h2>baleros</h2>
                <p>baleros tallados a mano .</p>
                <span class="price">$100.00</span>
                <button onclick="addToCart('balero', 1.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria4">
                <img src="ima/mariposa.jpeg" alt="Producto 2">
                <h2>mariposa</h2>
                <p>mariposa de hierro.</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('mariposa', 200.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria3">
                <img src="ima/vasijas.jpeg" alt="Producto 1">
                <h2>vasijas</h2>
                <p>vasija de...</p>
                <span class="price">$150.00</span>
                <button onclick="addToCart('vasijas', 150.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria4">
                <img src="ima/conejometal.jpeg" alt="Producto 2">
                <h2>conejos</h2>
                <p>decoracion de metal</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('conejos', 200.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria6">
                <img src="ima/elefantepalma.jpeg" alt="Producto 1">
                <h2>canasta de elfante</h2>
                <p>mini canastita de elefante </p>
                <span class="price">$60.00</span>
                <button onclick="addToCart('canasta', 60.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (8).jpeg" alt="Producto 2">
                <h2>bolsas</h2>
                <p>bolsa estilo...</p>
                <span class="price">$80.00</span>
                <button onclick="addToCart('bolsas', 80.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (4).jpeg" alt="Producto 2">
                <h2>huipil</h2>
                <p>huiplil tejiodo a mano de la region..</p>
                <span class="price">$9000.00</span>
                <button onclick="addToCart('huipil', 9000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (3).jpeg" alt="Producto 1">
                <h2>blusas</h2>
                <p>blusas tejidas a mano</p>
                <span class="price">$150.00</span>
                <button onclick="addToCart('blusa', 150.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria5">
                <img src="ima/mesapiedra.jpeg" alt="Producto 2">
                <h2>mesa de piedra</h2>
                <p>mesa  de pierdar con...</p>
                <span class="price">$2000.00</span>
                <button onclick="addToCart('mesa', 2000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria5">
                <img src="ima/cubetapiedra.jpeg" alt="Producto 1">
                <h2>cubeta</h2>
                <p>maceta de piedra en forma de piedra.</p>
                <span class="price">$1000.00</span>
                <button onclick="addToCart('maceta', 10.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria6">
                <img src="ima/decoracionplama.jpeg" alt="Producto 2">
                <h2>decoracion</h2>
                <p>Descripción del producto 2.</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('decoracion', 200.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (5).jpeg" alt="huipil">
                <h2>HUIPIL BORDADO</h2>
                <p>Un hupil bordado a mano de la region...</p>
                <span class="price">$7000.00</span>
                <button onclick="addToCart('huipil', 7000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria2">
                <img src="ima/Artesanías_de_barro_en_Naolinco.jpg" alt="figuritas de barro">
                <h2>mini figuritas de barro</h2>
                <p>artesanias de barro de naolino</p>
                <span class="price">$20.00</span>
                <button onclick="addToCart('figuras de barro', 20.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria3">
                <img src="ima/mortero.jpeg" alt="mortero">
                <h2>mortero de madera</h2>
                <p>mortero de madera decorado con frida kalho</p>
                <span class="price">$150.00</span>
                <button onclick="addToCart('mortero', 150.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria3">
                <img src="ima/juego de decoracion ele.jpeg" alt="elefantes">
                <h2>juego de elfantes</h2>
                <p>juego de decoracio de elefantes.</p>
                <span class="price">100.00</span>
                <button onclick="addToCart('elefante', 100.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria2">
                <img src="ima/bateria-barro-negro-mesa-tradicional_9283a974-0808-4a56-b334-4bc7fbf8f9c1.jpg" alt="barro negro">
                <h2>bateria de barro negro</h2>
                <p>un bateria de barro para la mesa</p>
                <span class="price">$1500.00</span>
                <button onclick="addToCart('bateria', 1500.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria2">
                <img src="ima/BARRO-PETATILLO-1024x679.jpg" alt="plato">
                <h2>platos</h2>
                <p>plato decorado a mano</p>
                <span class="price">$120.00</span>
                <button onclick="addToCart('platos', 20.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria6">
                <img src="ima/canasta.jpeg" alt="canasta">
                <h2>canasta</h2>
                <p>canasta tejida a mano...</p>
                <span class="price">$150.00</span>
                <button onclick="addToCart('canasta', 150.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria4">
                <img src="ima/motometal.jpeg" alt="Producto 2">
                <h2>mini motocicleta</h2>
                <p>figura decoraiva de metal</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('moto', 20.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria2">
                <img src="ima/BARRO-CANELO-1024x683.jpg" alt="plato">
                <h2>plato</h2>
                <p>platos decorados a mano</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('platos', 200.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (7).jpeg" alt="Producto 2">
                <h2>trajes tipicos</h2>
                <p>trajes tipicos de ... completos</p>
                <span class="price">$20000.00</span>
                <button onclick="addToCart('trajes', 20000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (9).jpeg" alt="Producto 1">
                <h2>aban</h2>
                <p>abanes borados a mano.</p>
                <span class="price">$2500.00</span>
                <button onclick="addToCart('aban', 2500.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria5">
                <img src="ima/hombrepiedra.jpeg" alt="hombre">
                <h2>hombre pescando</h2>
                <p>figura decorativa de un hombre pescaanddo (piedra).</p>
                <span class="price">$2000.00</span>
                <button onclick="addToCart('hombre pescando', 2000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria4">
                <img src="ima/baleros.jpeg" alt="baleros">
                <h2>baleros</h2>
                <p>baleros tallados a mano .</p>
                <span class="price">$100.00</span>
                <button onclick="addToCart('balero', 1.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria4">
                <img src="ima/mariposa.jpeg" alt="Producto 2">
                <h2>mariposa</h2>
                <p>mariposa de hierro.</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('mariposa', 200.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria3">
                <img src="ima/vasijas.jpeg" alt="Producto 1">
                <h2>vasijas</h2>
                <p>vasija de...</p>
                <span class="price">$150.00</span>
                <button onclick="addToCart('vasijas', 150.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria4">
                <img src="ima/conejometal.jpeg" alt="Producto 2">
                <h2>conejos</h2>
                <p>decoracion de metal</p>
                <span class="price">$200.00</span>
                <button onclick="addToCart('conejos', 200.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria6">
                <img src="ima/elefantepalma.jpeg" alt="Producto 1">
                <h2>canasta de elfante</h2>
                <p>mini canastita de elefante </p>
                <span class="price">$60.00</span>
                <button onclick="addToCart('canasta', 60.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (8).jpeg" alt="Producto 2">
                <h2>bolsas</h2>
                <p>bolsa estilo...</p>
                <span class="price">$80.00</span>
                <button onclick="addToCart('bolsas', 80.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (4).jpeg" alt="Producto 2">
                <h2>huipil</h2>
                <p>huiplil tejiodo a mano de la region..</p>
                <span class="price">$9000.00</span>
                <button onclick="addToCart('huipil', 9000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria1">
                <img src="ima/textil (3).jpeg" alt="Producto 1">
                <h2>blusas</h2>
                <p>blusas tejidas a mano</p>
                <span class="price">$150.00</span>
                <button onclick="addToCart('blusa', 150.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria5">
                <img src="ima/mesapiedra.jpeg" alt="Producto 2">
                <h2>mesa de piedra</h2>
                <p>mesa  de pierdar con...</p>
                <span class="price">$2000.00</span>
                <button onclick="addToCart('mesa', 2000.00)">Añadir al Carrito</button>
            </div>
            <div class="product" data-category="categoria5">
                <img src="ima/cubetapiedra.jpeg" alt="Producto 1">
                <h2>cubeta</h2>
                <p>maceta de piedra en forma de piedra.</p>
                <span class="price">$1000.00</span>
                <button onclick="addToCart('maceta', 10.00)">Añadir al Carrito</button>
            </div>
        </main>
    
        <script src="scripts.js"></script>
    </body>
  
    </html>
    