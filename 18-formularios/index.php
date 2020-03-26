<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="" method="POST" enctype="multipart/form-data">  
<!-- 
enctype="multipart/form-data" -> permite enviar archivos al servidor 
method="POST" -> es como va enviar la informaacion
action="" -> hacia donde se va a redirigir el formulario
autofocus="autofocus" -> para cuando inicie la pagina se selecciona automaticamente
disabled="" -> desavilitar el campo
minlength="4" -> validaciones no puede enviar la informacion menos de 4 caracteres
pattern="[a-z ]+ -> validar campos que se pueden introducir
required="require" -> no envia la informacion sin que este lleno
placeholder="hola" -> rellenan campos automaticamente
value="" -> rellenan campos automaticamente
-->
<p> 
<label for="nombre">Nombre</label>
<input type="text" name="nombre" autofocus="autofocus" minlength="4"> <br>
</p>
<p>
<label for="apellido">apellido</label>
<input type="text" name="apellido" placeholder="hola"><br>
</p>
<input type="submit" value="Enviar">
</form>
</body>
</html>

<?php

?>