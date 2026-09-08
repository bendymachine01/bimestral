<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Iniciar sesión | ZØREN</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="css/estilos.css">

</head>

<body class="bg-black text-white">

<main class="min-h-screen flex items-center justify-center px-6">

<div class="w-full max-w-md">

<p class="text-gray-500 mb-3">
SITIO OFICIAL
</p>

<h1 class="text-4xl font-bold mb-3">
Iniciar sesión
</h1>

<p class="text-gray-500 mb-8">
Entra a tu cuenta de ZØREN.
</p>

<form action="iniciar_sesion.php" method="POST">

<label>Correo</label>

<input
type="email"
name="correo"
placeholder="correo@ejemplo.com"
class="form-input mb-5"
required
>

<label>Contraseña</label>

<input
type="password"
name="contraseña"
placeholder="Contraseña"
class="form-input mb-6"
required
>

<button
type="submit"
class="w-full border border-white py-3 rounded-lg"
>
Iniciar sesión
</button>

</form>

<p class="text-gray-500 mt-6 text-center">

¿No tienes cuenta?

<a href="registro.php" class="text-white">
Crear cuenta
</a>

</p>

<div class="text-center mt-5">

<a href="acceso.php" class="text-gray-600">
← Volver
</a>

</div>

</div>

</main>

</body>
</html>