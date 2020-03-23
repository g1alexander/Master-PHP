<?php
    $frase = "Soy el que soy xd";
    //echo $frase."<br>";
    function prueba(){
        global $frase; //variable global
        echo "<h1>".$frase."</h1>";
        $year=2019; //variable local
       // echo $year;
        return $year;
    }
   //echo prueba();

    function buenasdias(){
        return "buenos dias";
    }
    function buenastardes(){
        return "buenas tardes";
    }
    function buenasnoches(){
        return "<h1>buenas noches</h1>";
    }

   // $hola = $_GET['hola'];
    $hola = "noches";
    $mifuntion = "buenas".$hola;
    echo $mifuntion();

?>