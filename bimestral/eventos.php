<?php
include("conexion.php");

$sql = "SELECT * FROM Evento ORDER BY fecha ASC";

$resultado = $conexion->query($sql);
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
        EVENTOS
    </p>

    <h1 class="text-5xl font-bold mb-12">
        Próximas presentaciones
    </h1>

    <div class="grid md:grid-cols-2 gap-5">

        <?php while ($evento = $resultado->fetch_assoc()) { ?>

            <div class="card">

                <h2 class="text-2xl font-bold">
                    <?php echo htmlspecialchars($evento["nombre"]); ?>
                </h2>

                <p class="text-gray-400 mt-3">
                    <?php echo htmlspecialchars($evento["lugar"]); ?>
                    ·
                    <?php echo htmlspecialchars($evento["ciudad"]); ?>
                </p>

                <p class="text-gray-500 mt-2">
                    <?php echo htmlspecialchars($evento["fecha"]); ?>

                    <?php if (!empty($evento["hora"])) { ?>

                        ·
                        <?php echo htmlspecialchars($evento["hora"]); ?>

                    <?php } ?>

                </p>

                <p class="text-gray-400 mt-4">
                    <?php echo htmlspecialchars($evento["descripcion"]); ?>
                </p>

            </div>

        <?php } ?>

    </div>

</main>

<footer class="text-center py-8 text-gray-600">
    © 2032 ZØREN
</footer>

</body>
</html>