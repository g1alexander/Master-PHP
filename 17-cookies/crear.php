<?php
/*es un fichero que se almacena en el ordenador del ususario que vista la web con el fin de 
recordar datos o rastear cierta comportamiento del mismo en la web */

//cookies

//setcookie("nombre", "esto solo puedo ser texto", caducidad);

setcookie("migalleta", "valor de mi galleta");//cookie basica

//cookie con expiracion
setcookie("unyear","valor de mi cookie de 365 dias", time()+(60*60*24*365));
header('Location:ver.php');
?>
