<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: zoren.php");
    exit;
}

include("conexion.php");

$resultado = $conexion->query(
    "SELECT id_usuario, nombre, correo, rol
     FROM Usuario
     ORDER BY id_usuario DESC"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Usuarios | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<main class="max-w-5xl mx-auto px-6 py-16">

<a href="admin.php" class="text-gray-500">
← Volver al panel
</a>

<h1 class="text-5xl font-bold mt-8 mb-10">
Usuarios
</h1>

<div class="space-y-4">

<?php while ($usuario = $resultado->fetch_assoc()) { ?>

<div class="card">

<h2 class="text-xl font-bold">
<?php echo htmlspecialchars($usuario["nombre"]); ?>
</h2>

<p class="text-gray-400 mt-2">
<?php echo htmlspecialchars($usuario["correo"]); ?>
</p>

<p class="text-gray-500 mt-2">
Rol: <?php echo htmlspecialchars($usuario["rol"]); ?>
</p>

</div>

<?php } ?>

</div>

</main>

</body>
</html>