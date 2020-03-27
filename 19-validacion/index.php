<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
        Tremos los errores del archivo procesar donde los validamos y mostramos los errores en el formulario
    */
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == "faltan datos"){
            echo "<strong style ='color:red'>Introduce bien los datos</strong>";
        }
        if($error == "nombre"){
            echo "<strong style ='color:red'>Introduce bien el nombre</strong>";
        }
        if($error == "apellido"){
            echo "<strong style ='color:red'>Introduce bien el apellido</strong>";
        }
        if($error == "edad"){
            echo "<strong style ='color:red'>Introduce bien la edad</strong>";
        }
        if($error == "email"){
            echo "<strong style ='color:red'>Introduce bien el email</strong>";
        }
        if($error == "contraseña"){
            echo "<strong style ='color:red'>Introduce bien la contraseña mayor a 5</strong>";
        }
    }

?>
<h1>Formulario</h1>
    <form action="procesar.php" method="POST" enctype="multipart/form-data">  

    <!-- formulario de 5 campos donde hacemos validaciones de html5 -->
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+" >
        </p>
        <p>
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z ]+">
        </p>
        <p>
            <label for="edad">edad</label>
            <input type="number" name="edad"pattern="[0-9]+">
        </p>
        <p>
            <label for="email">email</label>
            <input type="email" name="email"required="required">
        </p>
        <p>
            <label for="password">contraseña</label>
            <input type="password" name="password"required="required"minlength="5">
        </p>

        <!--   -->
        <input type="submit" value="enviar">
    </form>
</body>
</html>