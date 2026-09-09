<?php
include("conexion.php");

$sql = "SELECT Cancion.titulo,
               Cancion.genero,
               Cancion.duracion,
               Cancion.enlace,
               Album.titulo AS album
        FROM Cancion
        INNER JOIN Album
        ON Cancion.id_album = Album.id_album
        ORDER BY Album.fecha_lanzamiento DESC";

$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Música | ZØREN</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="bg-black text-white">

<header>
    <nav class="flex justify-between items-center px-6 py-5">

        <a href="index.php" class="text-xl font-bold">
            ZØREN
        </a>

        <div class="flex gap-6">
            <a href="index.php">Inicio</a>
            <a href="musica.php">Música</a>
            <a href="eventos.php">Eventos</a>
            <a href="galeria.php">Galería</a>
            <a href="contacto.php">Contacto</a>
        </div>

    </nav>
</header>

<main class="max-w-5xl mx-auto px-6 py-16">

    <p class="text-gray-500 mb-3">
        MÚSICA
    </p>

    <h1 class="text-5xl font-bold mb-12">
        Canciones
    </h1>

    <div class="space-y-4">

        <?php while ($cancion = $resultado->fetch_assoc()) { ?>

            <div class="card">

                <h2 class="text-xl font-bold">
                    <?php echo htmlspecialchars($cancion["titulo"]); ?>
                </h2>

                <p class="text-gray-500">
                    <?php echo htmlspecialchars($cancion["album"]); ?>
                </p>

                <p class="text-gray-400 mt-2">
                    <?php echo htmlspecialchars($cancion["genero"]); ?>
                    ·
                    <?php echo htmlspecialchars($cancion["duracion"]); ?>
                </p>

                <?php if (!empty($cancion["enlace"])) { ?>

                    <a
                        href="<?php echo htmlspecialchars($cancion["enlace"]); ?>"
                        target="_blank"
                        class="inline-block mt-4"
                    >
                        Escuchar →
                    </a>

                <?php } ?>

            </div>

        <?php } ?>

    </div>

</main>

<footer class="text-center py-8 text-gray-600">
    © 2032 ZØREN
</footer>

</body>
</html>

<?php
$conexion->close();
?>