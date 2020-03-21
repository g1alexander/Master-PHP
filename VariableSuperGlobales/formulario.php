
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
<form method="GET" action="recibir.php"> <?php
//el metodo GET envia informacion por medio de la url a otro formulario ?>
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
    </p>
    <p>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
    </p>  
    <p>
        <label for="edad">Edad</label>
        <input type="text" name="edad">
    </p>
    <input type="submit" value="enviar">
    </form>
</body>
</html>