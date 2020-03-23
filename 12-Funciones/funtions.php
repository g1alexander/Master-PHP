<?php
    echo date('d-m-Y')."<br>";

    echo time()."<br>";
    echo "la raiz cuadrada es: ".sqrt(12.2)."<br>";
    echo "numero alatoreo: ".rand(2,4)."<br>";
    echo "numero pi".pi()."<br>";
    echo "redondear ".round(4.6666);

    $nombre ="hola";
    echo "<br>";
    //mas funciones
    echo gettype($nombre);
    echo "<br>";
    if(is_string($nombre)){
        echo "es un string";
    }
    echo "<br>";
    if(!is_float($nombre)){
        echo "no es un float";
    }
    echo "<br>";
    if(isset($nombre)){
        echo "existe";
    }echo "<br>";

    //limpiar
    $frase ="   mi contenido  ";
    var_dump(trim($frase));

    //eliminar
    $year =2020;
    unset($year);
    echo "<br>";
    //
    $bbb = "  ";
    if(empty(trim($bbb))){
        echo "esta vacia";
    }else{
        echo"llena";
    }
    //
    echo "<br>";
    $cadena ="12345";
    echo strlen($cadena);
    echo "<br>";
    // 
    $ff ="la vida es bella";
    echo strpos($ff,"a");
    echo "<br>";

    $ff = str_replace("vida","hola",$ff);
    echo $ff;
    echo "<br>";
    echo strtolower($ff);
    echo "<br>";
    echo strtoupper($ff);
    
?>