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
<input type="button" name="boton" value="boton"> <r>
</p>

<p>
<label for="sexo">Sexo:</label><br>
 hombre: <input type="checkbox" name="sexo" value="M"><br>
 mujer: <input type="checkbox" name="sexo" value="F"><br>
</p>


<label for="color">Color</label>
<input type="color" name="color"> <br>
</p>
<p>
<label for="fecha">Facha</label>
<input type="date" name="fecha"><br>
</p>

<p>
<label for="correo">Correo</label>
<input type="email" name="correo"><br>
</p>

<p>
<label for="archivo">archivo</label>
<input type="file" name="archivo" multiple="multiple"><br>
</p>

<p>
<label for="numero">numero</label>
<input type="number" name="numero"><br>
</p>

<p>
<label for="contra">contraseña</label>
<input type="password" name="contra"><br>
</p>

<label for="continente">continente</label>
<p>
America: <input type="radio" name="continente" value="america"><br>
Europa <input type="radio" name="continente"value="europa"><br>
Asia <input type="radio" name="continente"value="asia"><br>
</p>

<p>
<label for="web">web</label>
<input type="url" name="web"><br>
</p>

<p>
<textarea></textarea><br>
</p>

<p>
Peliculas

<select>
<option value="1"> Harry</option>
<option value="1">Mcfly</option>
<option value="1">Hola Mundo</option>

</select>

</p>

<input type="submit" value="Enviar">
</form>
</body>
</html>

<?php

?>