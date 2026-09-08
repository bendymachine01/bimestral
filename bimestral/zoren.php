<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acceso ZØREN | ZØREN</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="bg-black text-white">

<main class="min-h-screen flex items-center justify-center px-6">

    <div class="w-full max-w-md">

        <p class="text-gray-500 mb-3">
            ACCESO PRIVADO
        </p>

        <h1 class="text-5xl font-bold mb-3">
            ZØREN
        </h1>

        <p class="text-gray-500 mb-8">
            Ingresa al área de administración.
        </p>

        <form action="admin.php" method="POST">

            <label>Contraseña</label>

            <input
                type="password"
                name="clave"
                placeholder="Ingresa tu contraseña"
                class="form-input mb-6"
                required
            >

            <button
                type="submit"
                class="w-full border border-white py-3 rounded-lg hover:bg-white hover:text-black transition"
            >
                Entrar
            </button>

        </form>

        <div class="text-center mt-6">

            <a href="acceso.php" class="text-gray-600 hover:text-white">
                ← Volver
            </a>

        </div>

    </div>

</main>

</body>
</html>