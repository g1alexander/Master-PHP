<?php
/*
almacena informacion del ususario mientras navega por la web hasta que cierre sesion o cierre navegador
-almacena mucha informacion, y se guarda en el servidor web
*/

//iniciamos sesion

session_start();
$_SESSION['hola'] ="mi primera session";
echo $_SESSION['hola'];

?>