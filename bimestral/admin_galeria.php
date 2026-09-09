<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: zoren.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Galería | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<main class="max-w-5xl mx-auto px-6 py-16">

<a href="admin.php" class="text-gray-500">
← Volver al panel
</a>

<h1 class="text-5xl font-bold mt-8 mb-5">
Galería
</h1>

<p class="text-gray-400 mb-10">
Aquí podrás organizar las fotografías de la carrera artística de ZØREN.
</p>

<div class="card">

<h2 class="text-xl font-bold">
Galería de fotografías
</h2>

<p class="text-gray-500 mt-3">
Este espacio queda preparado para agregar las fotografías
del proyecto.
</p>

</div>

</main>

</body>
</html>