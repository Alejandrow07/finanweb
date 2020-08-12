<?php
$destino= "innovacreditosfinanciera@gmail.com";
$nombre = $_post["nombre"];
$correo = $_post["correo"];
$numero = $_post["numero"];
$mensaje = $_post["mensaje"];
$contenido = "nombre: " . $nombre . "/nCorreo: " . $correo . "/nNumero: " . $numero . "/nMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);

 ?>
