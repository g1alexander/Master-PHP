<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    if($n1==false||$n2==false){
        echo"error";
    }else{
    $sum = $n1 + $n2;
    echo"la suma es: $sum"."<br>";    
    $res = $n1 - $n2;
    echo"la resta es: $res"."<br>";      
    $mul = $n1 * $n2;
    echo"la multiplicacion es: $mul"."<br>";      
    $div = $n1 / $n2;
    echo"la division es: $div";      
    }
?>