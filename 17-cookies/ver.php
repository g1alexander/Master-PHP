<?php
/*para mostrar las cookies tengo que usar la variable super cookies;*/

if(isset($_COOKIE['migalleta'])){
    echo "<h1>".$_COOKIE['migalleta']."</h1>";
}else{
    echo "no existe";
}
if(isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "no existe";
}

?>
<body>
<a href="delete.php">borrar</a>
<a href="crear.php">hola</a>
</body>