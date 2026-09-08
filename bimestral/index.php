<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ZØREN | Inicio</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="css/estilos.css">
</head>

<body class="bg-black text-white">

<header>
<nav class="flex justify-between items-center px-6 py-5">

<a href="index.php" class="text-xl font-bold">ZØREN</a>

<div class="flex gap-6">
<a href="index.php">Inicio</a>
<a href="musica.php">Música</a>
<a href="eventos.php">Eventos</a>
<a href="galeria.php">Galería</a>
<a href="contacto.php">Contacto</a>
</div>

</nav>
</header>

<main>

<section class="min-h-[80vh] flex items-center px-6">

<div class="max-w-5xl mx-auto w-full">

<p class="text-gray-500 mb-4">
CANTAUTOR · 2032
</p>

<h1 class="text-7xl md:text-9xl font-bold">
ZØREN
</h1>

<p class="text-gray-400 text-xl mt-6 max-w-xl">
Música, historias y momentos convertidos en canciones.
</p>

<div class="flex gap-4 mt-8">

<a href="musica.php"
class="border border-white px-6 py-3 rounded-lg">
Escuchar música
</a>

<a href="contacto.php"
class="border border-gray-700 px-6 py-3 rounded-lg">
Contacto
</a>

</div>

</div>

</section>

<section class="max-w-5xl mx-auto px-6 py-20">

<p class="text-gray-500 mb-3">
SOBRE MÍ
</p>

<h2 class="text-4xl font-bold mb-6">
ZØREN
</h2>

<p class="text-gray-400 max-w-2xl">
Cantautor independiente que combina diferentes sonidos
para contar experiencias, emociones e historias.
</p>

</section>

</main>

<footer class="text-center py-8 text-gray-600">
© 2032 ZØREN
</footer>

</body>
</html>