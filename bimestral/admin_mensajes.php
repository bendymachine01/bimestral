<?php

session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: zoren.php");
    exit;
}

include("conexion.php");


// ELIMINAR MENSAJE

if (isset($_GET["eliminar"])) {

    $id = $_GET["eliminar"];

    $sql = "DELETE FROM Contacto WHERE id_contacto = ?";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $stmt->close();

    header("Location: admin_mensajes.php");

    exit;
}


// MOSTRAR MENSAJES

$mensajes = $conexion->query(
    "SELECT * FROM Contacto
     ORDER BY fecha DESC"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Mensajes | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet"
href="css/estilos.css">

</head>


<body class="bg-black text-white">


<main class="max-w-5xl mx-auto px-6 py-16">


<a href="admin.php"
class="text-gray-500 hover:text-white">

← Volver al panel

</a>


<h1 class="text-5xl font-bold mt-8 mb-4">

Mensajes

</h1>


<p class="text-gray-500 mb-10">

Mensajes y propuestas recibidas desde la página.

</p>


<div class="space-y-5">


<?php if ($mensajes->num_rows == 0) { ?>

<div class="card">

<p class="text-gray-500">

No hay mensajes todavía.

</p>

</div>

<?php } ?>


<?php while ($mensaje = $mensajes->fetch_assoc()) { ?>


<div class="card">


<h2 class="text-xl font-bold">

<?php echo htmlspecialchars($mensaje["asunto"]); ?>

</h2>


<p class="text-gray-300 mt-4">

<strong>Nombre:</strong>

<?php echo htmlspecialchars($mensaje["nombre"]); ?>

</p>


<p class="text-gray-300 mt-2">

<strong>Correo:</strong>

<?php echo htmlspecialchars($mensaje["correo"]); ?>

</p>


<p class="text-gray-500 mt-2">

<?php echo htmlspecialchars($mensaje["fecha"]); ?>

</p>


<div class="border-t border-gray-800 mt-5 pt-5">

<p class="text-gray-300">

<?php echo nl2br(htmlspecialchars($mensaje["mensaje"])); ?>

</p>

</div>


<a
href="admin_mensajes.php?eliminar=<?php echo $mensaje["id_contacto"]; ?>"
class="inline-block mt-6 text-red-400 hover:text-red-300"
onclick="return confirm('¿Quieres eliminar este mensaje?');"
>

Eliminar mensaje

</a>


</div>


<?php } ?>


</div>


</main>


</body>

</html>