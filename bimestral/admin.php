<?php

session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: zoren.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Administración | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<header>

<nav class="flex justify-between items-center px-6 py-5">

<a href="admin.php" class="text-xl font-bold">
ZØREN
</a>

<a href="cerrar_sesion.php" class="text-gray-500 hover:text-white">
Salir
</a>

</nav>

</header>


<main class="max-w-6xl mx-auto px-6 py-16">

<p class="text-gray-500 mb-3">
ÁREA DE ADMINISTRACIÓN
</p>

<h1 class="text-5xl font-bold mb-4">
Administración
</h1>

<p class="text-gray-400 mb-12">
Panel para administrar el contenido de la página.
</p>


<div class="grid md:grid-cols-3 gap-5">


<!-- CANCIONES -->

<a href="admin_canciones.php"
class="card block">

<h2 class="text-xl font-bold">
Canciones
</h2>

<p class="text-gray-400 mt-3">
Agregar, modificar y eliminar canciones.
</p>

</a>


<!-- ÁLBUMES -->

<a href="admin_albumes.php"
class="card block">

<h2 class="text-xl font-bold">
Álbumes
</h2>

<p class="text-gray-400 mt-3">
Administrar los álbumes musicales.
</p>

</a>


<!-- EVENTOS -->

<a href="admin_eventos.php"
class="card block">

<h2 class="text-xl font-bold">
Eventos
</h2>

<p class="text-gray-400 mt-3">
Crear y modificar eventos.
</p>

</a>


<!-- GALERÍA -->

<a href="admin_galeria.php"
class="card block">

<h2 class="text-xl font-bold">
Galería
</h2>

<p class="text-gray-400 mt-3">
Administrar fotografías.
</p>

</a>


<!-- MENSAJES -->

<a href="admin_mensajes.php"
class="card block">

<h2 class="text-xl font-bold">
Mensajes
</h2>

<p class="text-gray-400 mt-3">
Consultar mensajes recibidos.
</p>

</a>


<!-- USUARIOS -->

<a href="admin_usuarios.php"
class="card block">

<h2 class="text-xl font-bold">
Usuarios
</h2>

<p class="text-gray-400 mt-3">
Consultar usuarios registrados.
</p>

</a>


</div>

</main>


<footer class="text-center py-8 text-gray-600">

© 2032 ZØREN

</footer>

</body>

</html>