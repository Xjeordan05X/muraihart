<?php
$destino="arrh20@hotmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$pregunta = $_POST["pregunta"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nPregunta: " . $pregunta;
mail($destino, "Contacto", $contenido);
header("gracias.html");
/* header("carteles1.html"); en esta parte se pone la direccion de un nuevo html donde se den las gracias y un boton volver a la  */
?>
