<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: zoren.php");
    exit;
}

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_album = $_POST["id_album"];
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $duracion = $_POST["duracion"];
    $enlace = $_POST["enlace"];

    $sql = "INSERT INTO Cancion
            (id_album, titulo, genero, duracion, enlace)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param(
        "issss",
        $id_album,
        $titulo,
        $genero,
        $duracion,
        $enlace
    );

    $stmt->execute();

    $stmt->close();
}

$albumes = $conexion->query(
    "SELECT * FROM Album ORDER BY titulo"
);

$canciones = $conexion->query(
    "SELECT Cancion.*, Album.titulo AS album
     FROM Cancion
     INNER JOIN Album
     ON Cancion.id_album = Album.id_album
     ORDER BY Cancion.id_cancion DESC"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Canciones | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<main class="max-w-5xl mx-auto px-6 py-16">

<a href="admin.php" class="text-gray-500">
← Volver al panel
</a>

<h1 class="text-5xl font-bold mt-8 mb-10">
Canciones
</h1>

<form method="POST" class="card mb-10">

<label>Álbum</label>

<select name="id_album" class="form-input mb-5" required>

<option value="">
Selecciona un álbum
</option>

<?php while ($album = $albumes->fetch_assoc()) { ?>

<option value="<?php echo $album["id_album"]; ?>">
<?php echo htmlspecialchars($album["titulo"]); ?>
</option>

<?php } ?>

</select>

<label>Título</label>

<input
type="text"
name="titulo"
class="form-input mb-5"
required
>

<label>Género</label>

<input
type="text"
name="genero"
placeholder="Alternative Rock"
class="form-input mb-5"
>

<label>Duración</label>

<input
type="text"
name="duracion"
placeholder="3:30"
class="form-input mb-5"
>

<label>Enlace</label>

<input
type="text"
name="enlace"
placeholder="https://..."
class="form-input mb-6"
>

<button
type="submit"
class="border border-white px-6 py-3 rounded-lg"
>
Agregar canción
</button>

</form>

<h2 class="text-2xl font-bold mb-5">
Canciones registradas
</h2>

<div class="space-y-4">

<?php while ($cancion = $canciones->fetch_assoc()) { ?>

<div class="card">

<h3 class="text-xl font-bold">
<?php echo htmlspecialchars($cancion["titulo"]); ?>
</h3>

<p class="text-gray-500">
Álbum:
<?php echo htmlspecialchars($cancion["album"]); ?>
</p>

<p class="text-gray-400 mt-2">
<?php echo htmlspecialchars($cancion["genero"]); ?>
·
<?php echo htmlspecialchars($cancion["duracion"]); ?>
</p>

</div>

<?php } ?>

</div>

</main>

</body>
</html>