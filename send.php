<?php
    $destino = "mega_nyu@hotmail.com";
    $name: $_POST["first_name"];
    $email: $_POST["email"];

    $contenido = "Nombre: " . $name, "\nE-mail: " . $email;

    mail($destino,"New User",$contenido);
    
    $header("Location:index.html");
?>
