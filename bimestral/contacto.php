<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto | ZØREN</title>

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

<main class="max-w-3xl mx-auto px-6 py-16">

    <p class="text-gray-500 mb-3">
        CONTACTO PROFESIONAL
    </p>

    <h1 class="text-5xl font-bold mb-5">
        Trabajemos juntos
    </h1>

    <p class="text-gray-400 mb-10">
        Si quieres contratar a ZØREN, comprar una canción,
        programar un evento, realizar una colaboración o hacer
        otra propuesta, puedes escribir aquí.
    </p>

    <form action="guardar_contacto.php" method="POST">

        <label>Nombre</label>

        <input
            type="text"
            name="nombre"
            placeholder="Tu nombre"
            class="form-input mb-5"
            required
        >

        <label>Correo</label>

        <input
            type="email"
            name="correo"
            placeholder="correo@ejemplo.com"
            class="form-input mb-5"
            required
        >

        <label>¿Qué necesitas?</label>

        <select
            name="asunto"
            class="form-input mb-5"
            required
        >
            <option value="">Selecciona una opción</option>
            <option value="Contratar a ZØREN">Contratar a ZØREN</option>
            <option value="Comprar canción">Comprar canción</option>
            <option value="Programar evento">Programar evento</option>
            <option value="Colaboración musical">Colaboración musical</option>
            <option value="Otra propuesta">Otra propuesta</option>
        </select>

        <label>Mensaje</label>

        <textarea
            name="mensaje"
            rows="6"
            placeholder="Cuéntame los detalles de tu propuesta..."
            class="form-input mb-6"
            required
        ></textarea>

        <button
            type="submit"
            class="w-full border border-white py-3 rounded-lg hover:bg-white hover:text-black transition"
        >
            Enviar propuesta
        </button>

    </form>

</main>

<footer class="text-center py-8 text-gray-600">
    © 2032 ZØREN
</footer>

</body>
</html>