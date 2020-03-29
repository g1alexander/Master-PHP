<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/jpg'||$tipo == 'image/jpeg'||$tipo == 'image/png'||$tipo == 'image/gif'){
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre); //direccion debe estar exacta porque entonces la cargara
    //fuera de la carpeta imagenes
    header("Refresh: 3, URL= index.php");
    echo "se subio la image :v";
}else{
    header("Refresh: 5, URL= index.php");
    echo "No se acepta ese formato";
}
?>