<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Subir Archivos</h1>

<form action="subir.php" method="POST" enctype="multipart/form-data">  
<p> 
<input type="file" name="archivo"> <br>
</p>
<input type="submit" value="Enviar">
</form>

<h1>lista de imagens</h1>

<?php
$gestor= opendir('./images');

if($gestor):
    while(($image = readdir($gestor)) !==false):
        if($image != '.' && $image != '..'):
            echo "<img src ='images/$image' width='200px'/><br/>";
        endif;
    endwhile;
endif;
?>
</body>
</html>
