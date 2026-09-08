<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: zoren.php");
    exit;
}

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $lugar = $_POST["lugar"];
    $ciudad = $_POST["ciudad"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $descripcion = $_POST["descripcion"];

    $sql = "INSERT INTO Evento
            (nombre, lugar, ciudad, fecha, hora, descripcion)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param(
        "ssssss",
        $nombre,
        $lugar,
        $ciudad,
        $fecha,
        $hora,
        $descripcion
    );

    $stmt->execute();

    $stmt->close();
}

$resultado = $conexion->query(
    "SELECT * FROM Evento ORDER BY fecha ASC"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Eventos | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<main class="max-w-5xl mx-auto px-6 py-16">

<a href="admin.php" class="text-gray-500">
← Volver al panel
</a>

<h1 class="text-5xl font-bold mt-8 mb-10">
Eventos
</h1>

<form method="POST" class="card mb-10">

<label>Nombre del evento</label>
<input type="text" name="nombre" class="form-input mb-5" required>

<label>Lugar</label>
<input type="text" name="lugar" class="form-input mb-5">

<label>Ciudad</label>
<input type="text" name="ciudad" class="form-input mb-5">

<label>Fecha</label>
<input type="date" name="fecha" class="form-input mb-5" required>

<label>Hora</label>
<input type="time" name="hora" class="form-input mb-5">

<label>Descripción</label>
<textarea name="descripcion" class="form-input mb-6"></textarea>

<button
type="submit"
class="border border-white px-6 py-3 rounded-lg"
>
Agregar evento
</button>

</form>

<h2 class="text-2xl font-bold mb-5">
Eventos registrados
</h2>

<div class="space-y-4">

<?php while ($evento = $resultado->fetch_assoc()) { ?>

<div class="card">

<h3 class="text-xl font-bold">
<?php echo htmlspecialchars($evento["nombre"]); ?>
</h3>

<p class="text-gray-400 mt-2">
<?php echo htmlspecialchars($evento["lugar"]); ?>
·
<?php echo htmlspecialchars($evento["ciudad"]); ?>
</p>

<p class="text-gray-500 mt-2">
<?php echo htmlspecialchars($evento["fecha"]); ?>
·
<?php echo htmlspecialchars($evento["hora"]); ?>
</p>

<p class="text-gray-400 mt-3">
<?php echo htmlspecialchars($evento["descripcion"]); ?>
</p>

</div>

<?php } ?>

</div>

</main>

</body>
</html>