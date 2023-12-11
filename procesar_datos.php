<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Establecer la configuración de SMTP y smtp_port
    ini_set("SMTP", "smtp.example.com");
    ini_set("smtp_port", "587");

    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $tipoConsulta = $_POST["tipoConsulta"];
    $interesEgipto = isset($_POST["interesEgipto"]) ? implode(", ", $_POST["interesEgipto"]) : "";
    $consulta = $_POST["consulta"];

    // Configurar destinatario y asunto
    $destinatario = "matiarchilli@gmail.com"; // Reemplazar con tu dirección de correo electrónico
    $asunto = "Envio de datos por correo electronico - Final de Maquetado y Desarrollo Web";

    // Construir el cuerpo del mensaje
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Tipo de Consulta: $tipoConsulta\n";
    $mensaje .= "Intereses sobre Egipto: $interesEgipto\n";
    $mensaje .= "Consulta:\n$consulta";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Redirigir a la página de gracias
    header("Location: ./gracias.html");
    exit;

?>