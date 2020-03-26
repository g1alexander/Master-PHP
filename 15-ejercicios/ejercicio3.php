<?php
$hola = $_GET['n1'];
if(!empty($hola)){
echo$hola;
}else{
    $hola= "<strong> hombre g </strong>";
    $str = strtoupper($hola);
    echo $str;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" action="ejercicio3.php">
        <p>
            <label for="n1">Ingrese</label>
            <input type="text" name="n1">
        </p>
        <input type="submit" value="enviar">
    </form>
</body>
</html>