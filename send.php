<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['name'];
$email = $_POST['email'];
// Definir la dirección de destino:
$dest = "mega_nyu@hotmail.com"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre $email\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$cuerpo = "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Asunto: ".$asunto."<br>";
$cuerpo .= "Mensaje: ".$mensaje;

// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombre != '' && $email != '' && $asunto != '' && $mensaje != ''){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
}
?>