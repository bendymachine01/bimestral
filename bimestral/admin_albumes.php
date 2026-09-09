<?php

session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: zoren.php");
    exit;
}

include("conexion.php");

$mensaje = "";


// AGREGAR ÁLBUM
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {

    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha_lanzamiento"];

    $sql = "INSERT INTO Album (titulo, descripcion, fecha_lanzamiento)
            VALUES (?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $titulo, $descripcion, $fecha);

    if ($stmt->execute()) {
        $mensaje = "Álbum agregado correctamente.";
    } else {
        $mensaje = "Error al agregar el álbum.";
    }

    $stmt->close();
}


// ELIMINAR ÁLBUM
if (isset($_GET["eliminar"])) {

    $id = $_GET["eliminar"];

    $sql = "DELETE FROM Album WHERE id_album = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();

    header("Location: admin_albumes.php");
    exit;
}


// MOSTRAR ÁLBUMES
$albumes = $conexion->query(
    "SELECT * FROM Album ORDER BY fecha_lanzamiento DESC"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Álbumes | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<main class="max-w-5xl mx-auto px-6 py-16">

<a href="admin.php" class="text-gray-500">
← Volver al panel
</a>

<h1 class="text-5xl font-bold mt-8 mb-10">
Álbumes
</h1>


<?php if ($mensaje != "") { ?>

<div class="card mb-8">
    <?php echo htmlspecialchars($mensaje); ?>
</div>

<?php } ?>


<!-- FORMULARIO -->

<form method="POST" class="card mb-12">

<h2 class="text-2xl font-bold mb-6">
Agregar álbum
</h2>

<label>Título</label>

<input
type="text"
name="titulo"
placeholder="Nombre del álbum"
class="form-input mb-5"
required
>


<label>Descripción</label>

<textarea
name="descripcion"
rows="4"
placeholder="Descripción del álbum"
class="form-input mb-5"
></textarea>


<label>Fecha de lanzamiento</label>

<input
type="date"
name="fecha_lanzamiento"
class="form-input mb-6"
required
>


<button
type="submit"
name="agregar"
class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-black"
>
Agregar álbum
</button>

</form>


<!-- ÁLBUMES REGISTRADOS -->

<h2 class="text-2xl font-bold mb-5">
Álbumes registrados
</h2>


<div class="space-y-4">

<?php while ($album = $albumes->fetch_assoc()) { ?>

<div class="card">

<h3 class="text-xl font-bold">
<?php echo htmlspecialchars($album["titulo"]); ?>
</h3>

<p class="text-gray-400 mt-3">
<?php echo htmlspecialchars($album["descripcion"]); ?>
</p>

<p class="text-gray-500 mt-2">
Lanzamiento:
<?php echo htmlspecialchars($album["fecha_lanzamiento"]); ?>
</p>

<a
href="admin_albumes.php?eliminar=<?php echo $album["id_album"]; ?>"
class="inline-block mt-5 text-red-400 hover:text-red-300"
onclick="return confirm('¿Quieres eliminar este álbum?');"
>
Eliminar
</a>

</div>

<?php } ?>

</div>

</main>

</body>
</html>