<?php
$num1 = (int)$_POST ['n1'];
$num2 = (int)$_POST ['n2'];

if(isset($num1)&&isset($num2)){
    $resultado=false;
    if(isset($_POST ['sum'])){
        $resultado = "resultado suma: ".($num1 + $num2);
    }
    if(isset($_POST ['res'])){
        $resultado = "resultado resta: ".($num1 - $num2);
    }
    if(isset($_POST ['mul'])){
        $resultado = "resultado multiplicacion: ".($num1 * $num2);
    }
    if(isset($_POST ['div'])){
        $resultado = "resultado dividir: ".($num1 / $num2);
    }
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
    <form  action="ejercicio3.php" method="POST" enctype="multipart/form-data">
        <p>
        <label for="n1">Numero 1</label>
        <input type="number" name="n1"pattern="[0-9]+">
        </p>
        <p>
        <label for="n2">Numero 2</label>
        <input type="number" name="n2"pattern="[0-9]+">
        </p>

        <input type="submit" name="sum" value="sumar">
        <input type="submit" name="res" value="restar">
        <input type="submit" name="mul" value="multiplicar">
        <input type="submit" name="div" value="dividir">
        
    </form>
    <?php
if($resultado==true):
    echo "<h1> $resultado</h1>";
endif
?>
</body>
</html>

