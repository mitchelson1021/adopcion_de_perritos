<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'De: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por  " . "$nombre" . ",\r\n";
$mensaje .= "Su e-mail es: " . "$email" . " \r\n";
$mensaje .= "Mensaje: " . "$_POST['mensaje']" . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'mixander@gmail.com';
$asunto = 'Quieren adoptar un perrito!';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:ty.html");
?>

<!-- formulario 
    <form id="contact" class="container__index-form" method="post" action="./enviar.php">
            <input id="nombre" type="text" name="nombre" placeholder="nombre" required="required">
            <input type="email" name="email" id="email" placeholder="email" required="required">
            <label for="mensaje">MENSAJE</label>
            <textarea name="mensaje" id="mensaje" cols="50" rows="4" style="resize:none;"></textarea>
            <button class="btn_propio" name="enviar" type="submit">ENVIAR</button>
    </form>
    -->