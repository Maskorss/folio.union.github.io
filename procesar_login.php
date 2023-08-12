<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_valido = "usuario"; // Cambia esto por tu nombre de usuario válido
    $contrasena_valida = "contraseña"; // Cambia esto por tu contraseña válida

    $usuario_ingresado = $_POST["usuario"];
    $contrasena_ingresada = $_POST["contrasena"];

    if ($usuario_ingresado === $usuario_valido && $contrasena_ingresada === $contrasena_valida) {
        // Inicio de sesión exitoso, redirigir a index.html
        header("Location: folio.html");
        exit();
    } else {
        echo "Credenciales incorrectas. Inténtalo nuevamente.";
    }
}
?>
