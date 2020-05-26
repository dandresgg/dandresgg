<?php
$name = $email = $message = $para = $asunto = NULL;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];

    $headers = 'From: ' . $mail . " \r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $headers .= "Mime-Version: 1.0 \r\n";
    $headers .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por " . $name . ",\r\n";
    $message .= "Su e-mail es: " . $mail . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el " . date('d/m/Y', time());

    $para = 'diegogomez268@gmail.com';
    $asunto = 'Mensaje de mi sitio web';

    if (mail($para, $asunto, utf8_decode($message), $headers)) {
        echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
        echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }

    header("Location:index.html");
}
