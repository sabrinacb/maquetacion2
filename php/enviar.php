<?php
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$to = 'mimail@info.com';
$email_subject = "Nuevo mensaje: de la web";
$email_body = "Haz recibido un nuevo mensaje. \n <strong>Nombre:</strong> $name \n Correo: $email
\n  ";
$headers = "From: $email";
mail($to, $email_subject, $email_body, $headers);
echo 'Pronto nos estaremos comunicando con usted!'
?>
