<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: zoren.php");
    exit;
}

include("conexion.php");

$sql = "SELECT * FROM Contacto ORDER BY fecha DESC";

$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mensajes | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<main class="max-w-5xl mx-auto px-6 py-16">

<a href="admin.php" class="text-gray-500">
← Volver al panel
</a>

<h1 class="text-5xl font-bold mt-8 mb-10">
Mensajes
</h1>

<div class="space-y-5">

<?php while ($mensaje = $resultado->fetch_assoc()) { ?>

<div class="card">

<h2 class="text-xl font-bold">
<?php echo htmlspecialchars($mensaje["asunto"]); ?>
</h2>

<p class="text-gray-400 mt-3">
<?php echo htmlspecialchars($mensaje["nombre"]); ?>
</p>

<p class="text-gray-500">
<?php echo htmlspecialchars($mensaje["correo"]); ?>
</p>

<p class="text-gray-300 mt-5">
<?php echo nl2br(htmlspecialchars($mensaje["mensaje"])); ?>
</p>

<p class="text-gray-600 mt-5">
<?php echo htmlspecialchars($mensaje["fecha"]); ?>
</p>

</div>

<?php } ?>

</div>

</main>

</body>
</html>