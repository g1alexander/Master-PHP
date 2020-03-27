<?php

/*
    traemos los datos y los introducimos en las variables
*/
$nombre = $_POST['nombre'];
$apellido =$_POST['apellido'];
$edad = (int)$_POST ['edad']; //(int) castear ya que cuando se envia el formulario lo hace atraves de un string
$emial =$_POST ['email'];
$contraseña = $_POST ['password'];
$error ="faltan datos";// variable en la cual dentraran los errores 

//validacion de datos
if(!empty($nombre)&&!empty($apellido)&&!empty($edad)&&!empty($emial)&&!empty($contraseña)){
    $error ="ok";

    //validar el nombre  
    if(!is_string($nombre) || preg_match("/[0-9]/",$nombre)){
        $error ='nombre';
    }
    //apellido
    if(!is_string($apellido) || preg_match("/[0-9]/",$apellido)){
        $error ='apellido';
    }
    //edad
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){   //fliter_var es una validacion, con constante
        $error ='edad';
    }
    //email
    if(!filter_var($emial, FILTER_VALIDATE_EMAIL)){   //fliter_var es una validacion, con constante
        $error ='email';
    }
    //contraseña
    if(empty($contraseña) || strlen($contraseña)<5){   //srtlen = longitud
        $error ="contraseña";
    }
 
}else{
    $error ="faltan datos"; // vacio en algun campo del formulario
}

if($error!='ok'){
    header("Location:index.php?error=$error");
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
    <h1>datos validados</h1>
    <!-- si todo esta ok, mostrara los datos -->
    <?php if($error=='ok'):  ?>
      <p>
         <?= "nombre: ".$nombre;?>
      </p>  
      <p>
         <?= "apellido: ".$apellido;?>
      </p> 
      <p>
         <?= "email: ".$emial;?>
      </p> 
      <p>
         <?= "edad: ".$edad;?>
      </p>  
    <?php  endif; ?>
</body>
</html>