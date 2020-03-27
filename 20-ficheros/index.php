<?php

/* permisos para un archivo:  a+ permite leer y escribir   */

//r de lectura, x de ejecucion, w = escritura

    //abrir archivo
    $abrir = fopen("fichero.txt", "a+");

    /*leer archivo
    Para leer todo el contenido de un archivo, se necesita de un bucle*/

    while(!feof($abrir)){ //FUNCION con la que recorre todo el archivo
        $contenido= fgets($abrir);  //funcion para leer, esto solo lee una linea
        echo $contenido."</br>";
    }

    //escribir en un archivo
    fwrite($abrir, "hola feo :v");

    //cerrar archivo
    fclose($abrir);
?>