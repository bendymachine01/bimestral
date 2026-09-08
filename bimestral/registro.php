<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro | ZØREN</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="css/estilos.css">

</head>


<body class="bg-black text-white">


<main class="min-h-screen flex items-center justify-center px-6">


    <div class="w-full max-w-md">


        <!-- TÍTULO -->

        <p class="text-gray-500 mb-3">
            SITIO OFICIAL
        </p>


        <h1 class="text-4xl font-bold mb-3">
            Crear cuenta
        </h1>


        <p class="text-gray-500 mb-8">
            Regístrate para entrar al sitio de ZØREN.
        </p>



        <!-- FORMULARIO -->

        <form action="registrar.php" method="POST">


            <!-- NOMBRE -->

            <label>
                Nombre
            </label>

            <input
                type="text"
                name="nombre"
                placeholder="Tu nombre"
                class="form-input mb-5"
                required
            >



            <!-- CORREO -->

            <label>
                Correo
            </label>

            <input
                type="email"
                name="correo"
                placeholder="correo@ejemplo.com"
                class="form-input mb-5"
                required
            >



            <!-- CONTRASEÑA -->

            <label>
                Contraseña
            </label>

            <input
                type="password"
                name="contraseña"
                placeholder="Contraseña"
                class="form-input mb-5"
                required
            >



            <!-- CONFIRMAR CONTRASEÑA -->

            <label>
                Confirmar contraseña
            </label>

            <input
                type="password"
                name="confirmar"
                placeholder="Repite tu contraseña"
                class="form-input mb-6"
                required
            >



            <!-- BOTÓN -->

            <button
                type="submit"
                class="w-full border border-white py-3 rounded-lg hover:bg-white hover:text-black transition"
            >
                Registrarme
            </button>


        </form>



        <!-- INICIAR SESIÓN -->

        <p class="text-gray-500 mt-6 text-center">

            ¿Ya tienes una cuenta?

            <a
                href="login.php"
                class="text-white hover:underline"
            >
                Iniciar sesión
            </a>

        </p>



        <!-- VOLVER -->

        <div class="text-center mt-5">

            <a
                href="acceso.php"
                class="text-gray-600 hover:text-white"
            >
                ← Volver
            </a>

        </div>


    </div>


</main>


</body>

</html>