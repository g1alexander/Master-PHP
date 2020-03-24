<?php require_once"includes/cabecera.php";?>

<?php 
/*
hay 4 tipos de includes para añadir a los ficheros

include -> incluye informacion y no es extricto y puedo incluir tantas veces como quiera
include_once -> solo puedo incluir una vez
si incluyo la ruta mal me cargara la pagina
///////////////////////////////////////////// 
requiere -> es estrito pero puedo incluirlo tanta veces como quiera
requiere_once -> es mas extricto y el que vamos a usar
si incluyo la ruta mal no me cargara la pagina
*/

?>

    <!--contenido -->
    <h2>HOla...</h2>
    <p>texto de prueba</p>

<hr/>
<?php require_once"includes/footer.php";?>