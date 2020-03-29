
<?php
/*
1°funcion
2°validar un email con filter_var
3° recoger una funtion por get y validarla
4° mostrar resultado
*/


function validar($email){
    $static =  "no valido";
    if(!empty($email)&& filter_var($email,FILTER_VALIDATE_EMAIL)){
        $static = "valido";
    }
    return $static;
}

if(isset($_GET['email'])){
    echo validar($_GET['email']);
}else{
    echo "feo :v";
}

 ?>
