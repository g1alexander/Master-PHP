<?php
session_start();

/*
    crear una seccion que aumente su valor en uno o disminuya en uno en funcion de que si el parametro 
    get counter esta en uno a cero
*/


if(!isset($_SESSION['numero'])){
   $_SESSION['numero']= 0;
}

if(isset($_GET['counter'])&& $_GET['counter']==1){
    $_SESSION['numero']++;
}

if(isset($_GET['counter'])&& $_GET['counter']==0){
    $_SESSION['numero']--;
}
?>

<body>
<h1>hola, seccion :v <?= $_SESSION['numero']?></h1>
    <a href="ejercicio1.php?counter=1">aumentar</a>
    <a href="ejercicio1.php?counter=0">diminuir</a>

</body>