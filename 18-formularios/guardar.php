<?php

$titulo = $_POST['titulo'];
$descripcion = $_POST['descrip'];

if(isset($titulo)&& isset($descripcion)){

    echo $titulo."<br>"; echo $descripcion;
}

?>