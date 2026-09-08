<?php

session_start();

include("conexion.php");

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$sql = "SELECT * FROM Usuario WHERE correo = ?";

$stmt = $conexion->prepare($sql);

$stmt->bind_param("s", $correo);

$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows == 1) {

    $usuario = $resultado->fetch_assoc();

    if (password_verify(
        $contraseña,
        $usuario["contraseña"]
    )) {

        $_SESSION["id_usuario"] = $usuario["id_usuario"];
        $_SESSION["nombre"] = $usuario["nombre"];
        $_SESSION["rol"] = $usuario["rol"];

        header("Location: index.php");
        exit;

    } else {

        die("Contraseña incorrecta.");

    }

} else {

    die("El correo no está registrado.");

}

$stmt->close();
$conexion->close();

?>