<?php

    //esto es al correo destino
    $destinatario = 'juargu22@gmail.com';
    $nombre = $_POST['nombre'];
    $empresa = $_POST['empresa'];
    $email = $_POST['email'];
    $tel = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    //Datos para el Correo
    $destinatario = "juargu22@gmail.com";
    $asunto = "Contacto desde web";

    $carta = "De: $nombre \n";
    $carta .= "Correo: $email \n";
    $carta .= "Tel: $tel\n";
    $carta .="Mensaje: $mensaje";

    //enviando Mensaje
    mail($destinatario, $asunto, $carta);

    header('Location:enviado.html');

    // if(isset($_POST['enviar'])){
    //   if (!empty($_POST['nombre']) &&
    //       !empty($_POST['empresa']) &&
    //       !empty($_POST['email']) &&
    //       !empty($_POST['telefono']) &&
    //       !empty($_POST['mensaje'])) {
    //
    //        $nombre = $_POST['nombre'];
    //        $empresa = $_POST['empresa'];
    //        $email = $_POST['email'];
    //        $tel = $_POST['telefono'];
    //        $mensaje = $_POST['mensaje'];
    //        $header = "From: juargu22@gmail.com" . "\r\n";
    //        $header. = "Reply-to: juargu22@gmail.com" . "\r\n";
    //        $header = "X-Mailer: PHP/" . phpversion();
    //        $mail = @mail($email, $empresa, $mensaje, $telefono, $header);
    //
    //        if ($mail) {
    //          echo "<h3> ¡Mail enviado con exito!, nos comunicaremos contigo lo antes posible.</h3>";
    //        }
    //   }
    // }


 ?>
