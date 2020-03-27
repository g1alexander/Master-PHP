<?php

//copiar fichero
//copy('fichero.txt','copia.txt') or die("errror al copiar");

//renombrar fichero
//rename('copia.txt','hola.txt');

//eliminar fichero
//unlink('hola.txt') or die('error al eliminar');

if(file_exists('copia.txt')){
    echo"existe";
}else{
    echo "no existe";
}
?>