<?php

    //esto es al correo destino
    $destinatario = 'contacto@elevetsas.com';
    $nombre = $_POST['nombre'];
    $empresa = $_POST['empresa'];
    $email = $_POST['email'];
    $tel = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    //Datos para el Correo
    $destinatario = "contacto@elevetsas.com";
    $asunto = "Contacto desde pagina web";

    $carta .= "Nuevo correro desde la pagina web: \n\n";
    $carta = "De: $nombre \n";
    $carta .= "Correo: $email \n";
    $carta .= "Tel: $tel\n";
    $carta .="Mensaje: $mensaje";

    //enviando Mensaje
    mail($destinatario, $asunto, $carta);

    header('Location:enviado.html');
 ?>
