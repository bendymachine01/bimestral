<?php

session_start();

include("conexion.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$confirmar = $_POST["confirmar"];

if ($contraseña != $confirmar) {
    die("Las contraseñas no coinciden.");
}

$sql = "SELECT id_usuario FROM Usuario WHERE correo = ?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    die("Ese correo ya está registrado.");
}

$stmt->close();

$contraseña_segura = password_hash(
    $contraseña,
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO Usuario
        (nombre, correo, contraseña, rol)
        VALUES (?, ?, ?, 'usuario')";

$stmt = $conexion->prepare($sql);

$stmt->bind_param(
    "sss",
    $nombre,
    $correo,
    $contraseña_segura
);

if ($stmt->execute()) {

    $_SESSION["id_usuario"] = $conexion->insert_id;
    $_SESSION["nombre"] = $nombre;
    $_SESSION["rol"] = "usuario";

    header("Location: index.php");
    exit;

} else {

    die("Error al registrar: " . $stmt->error);

}

?>