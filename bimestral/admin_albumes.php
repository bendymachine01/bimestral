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

    <title>Administración | ZØREN</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<header>

    <nav class="flex justify-between items-center px-6 py-5">

        <a href="admin.php" class="text-xl font-bold">
            ZØREN
        </a>

        <a href="cerrar_sesion.php" class="text-gray-500 hover:text-white">
            Cerrar sesión
        </a>

    </nav>

</header>

<main class="max-w-6xl mx-auto px-6 py-16">

    <p class="text-gray-500 mb-3">
        ÁREA PRIVADA
    </p>

    <h1 class="text-5xl font-bold mb-4">
        Panel de administración
    </h1>

    <p class="text-gray-500 mb-12">
        Bienvenido al panel de ZØREN. Desde aquí puedes administrar
        la información de la página.
    </p>

    <div class="grid md:grid-cols-3 gap-5">

        <!-- CANCIONES -->
        <a href="admin_canciones.php" class="card block">
            <p class="text-gray-500 mb-3">01</p>

            <h2 class="text-xl font-bold">
                Canciones
            </h2>

            <p class="text-gray-500 mt-3">
                Agregar, consultar y administrar canciones.
            </p>

            <p class="mt-5">
                Administrar →
            </p>
        </a>


        <!-- ÁLBUMES -->
        <a href="admin_albumes.php" class="card block">
            <p class="text-gray-500 mb-3">02</p>

            <h2 class="text-xl font-bold">
                Álbumes
            </h2>

            <p class="text-gray-500 mt-3">
                Administrar los álbumes y lanzamientos.
            </p>

            <p class="mt-5">
                Administrar →
            </p>
        </a>


        <!-- EVENTOS -->
        <a href="admin_eventos.php" class="card block">
            <p class="text-gray-500 mb-3">03</p>

            <h2 class="text-xl font-bold">
                Eventos
            </h2>

            <p class="text-gray-500 mt-3">
                Programar y administrar presentaciones.
            </p>

            <p class="mt-5">
                Administrar →
            </p>
        </a>


        <!-- GALERÍA -->
        <a href="admin_galeria.php" class="card block">
            <p class="text-gray-500 mb-3">04</p>

            <h2 class="text-xl font-bold">
                Galería
            </h2>

            <p class="text-gray-500 mt-3">
                Administrar fotografías de ZØREN.
            </p>

            <p class="mt-5">
                Administrar →
            </p>
        </a>


        <!-- MENSAJES -->
        <a href="admin_mensajes.php" class="card block">
            <p class="text-gray-500 mb-3">05</p>

            <h2 class="text-xl font-bold">
                Mensajes
            </h2>

            <p class="text-gray-500 mt-3">
                Ver propuestas y solicitudes recibidas.
            </p>

            <p class="mt-5">
                Ver mensajes →
            </p>
        </a>


        <!-- USUARIOS -->
        <a href="admin_usuarios.php" class="card block">
            <p class="text-gray-500 mb-3">06</p>

            <h2 class="text-xl font-bold">
                Usuarios
            </h2>

            <p class="text-gray-500 mt-3">
                Consultar las cuentas registradas.
            </p>

            <p class="mt-5">
                Ver usuarios →
            </p>
        </a>

    </div>

</main>

<footer class="text-center py-8 text-gray-600">

    © 2032 ZØREN · Panel privado

</footer>

</body>
</html>