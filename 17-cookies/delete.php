<?php

//eliminar cookies

if(isset($_COOKIE['migalleta'])){
    unset($_COOKIE['migalleta']); //no sirve solo con la funcion unset toca tambien caducarla 
    setcookie("migalleta",'',time()-100); //eliminar cookie
}
header('Location:ver.php');

?>