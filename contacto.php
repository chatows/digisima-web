<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $correo = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars(trim($_POST["mensaje"]));

    $to = "contacto@digisima.com";
    $subject = "Nuevo mensaje desde la web de Digisima";
    $body = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje";
    $headers = "From: $correo";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.php?estado=exito");
        exit;
    } else {
        header("Location: index.php?estado=error");
        exit;
    }
}
?>
