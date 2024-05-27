<?php
// Procesamiento de un formulario de contacto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación y sanitización de datos
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    // Enviar correo electrónico (código de ejemplo, ajusta según tus necesidades)
    $to = "tu@email.com";
    $subject = "Mensaje de contacto";
    $body = "Nombre: $name\nEmail: $email\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p class='success'>¡Mensaje enviado con éxito!</p>";
    } else {
        echo "<p class='error'>Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</p>";
    }
}
?>
