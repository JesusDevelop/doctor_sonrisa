<?php

// $mysqli = new mysqli("localhost", "root", "", "doctor_sonrisa");
// if ($mysqli->connect_errno) {
//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }


   $nombre_paciente=$_POST['nombre_paciente'];
   $apellido_paciente= $_POST['apellido_paciente'];
   $email= $_POST['email'];
   $telefono= $_POST['telefono'];
   $comentarios= $_POST['comentarios'];

//    $mysqli->query("INSERT INTO contacto (nombre,apellido,email,telefono,comentarios) values ('$nombre_paciente','$apellido_paciente','$email','$telefono','$comentarios')");

$para      = 'jesus258911@gmail.com,'.$email.'';
$titulo    = $nombre_paciente;
$mensaje   = $comentarios;
$cabeceras = 'From: '.$email.'' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    if(@mail($para, $titulo, $mensaje, $cabeceras))
    {
        echo "<script>alert('Su mensaje fue enviado exitosamente');</script>";
        echo '<script>location.href ="../index.html";</script>"';
    }
    else{
    
        echo "<script>alert('Erro al enviar su mensaje, por favor intente nuevamente');</script>";
        echo '<script>location.href ="../contacto.html";</script>"';
    }
    
?>