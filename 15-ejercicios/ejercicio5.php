<?php
$tabla = [
        "accion" => ['GTA 5','COD','PUGB'],
        "aventura" => ['ASSASINS','CRASH','PRINCE OF PERSIA'],
        "deportes" => ['FIFA 19','PES 19','MOTO GP 19']
    ];

    $categorias = array_keys($tabla); //saca los indices
?>

    <table border="1">
    <?= require_once("includes/cabecera.php"); ?>
    <?= require_once("includes/1.php"); ?>
    <?= require_once("includes/2.php"); ?>
    <?= require_once("includes/3.php"); ?>
    </table>