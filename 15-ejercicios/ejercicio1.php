<?php
    
    function r($numeros){
        $result = "";
        foreach ($numeros as $numero){
             $result.=$numero."<br>";
        }
        return $result;
    }

    $numeros = [7,6,5,8,9,2,3,1,4];
    echo "<h1> Punto 1 </h1>";
    echo r($numeros);
    echo "<hr/>";

    sort($numeros);
    echo "<h1> Punto 2 </h1>";
    echo r($numeros);
    echo "<hr/>";

    echo "<h1> Punto 3 </h1>";
    echo "la cantidad de numeros en el array es: ".count($numeros)."<br>";
    echo "<hr/>";
 if(isset($_GET['numero'])){
    $buscar = $_GET['numero'];
    echo "<h1> Punto 4 </h1>";
    $hola = array_search($buscar,$numeros);
    
    if(!empty($hola)){
        echo "el numero $buscar esta en la posicion: ".$hola;
    }else{
        echo"err";
    }
}
    echo "<hr/>";
?>