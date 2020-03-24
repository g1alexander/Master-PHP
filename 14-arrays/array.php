<?php

//arrays 
$peliculas = array('batman', 'spiderman', 'volver al futuro');
$cantantes = ['the beatles', 'ed sheeran', 'drake'];

//arrays asociativos

$nombres = [
    "nombre"=> 'Alex',
    "apellido"=>'Granados',
    "edad"=> '12'
]; echo $nombres['nombre'];

/*
los _Get y _post tambien son arrays 
*/
echo "<ul>";
echo "<h1> lista de cantantes </h1>";
for ($i=0;$i<count($cantantes) ;$i++){
    
    echo "<li>".$cantantes[$i]."</li>"."<br>";
}
echo "</ul>"."<hr/>";

echo "<ul>";
echo "<h1> lista de peliculas </h1>";
foreach ($peliculas as $clave => $hola){
    echo "<li>".$hola."</li>"."<br>";
}
echo "</ul>"."<hr/>";

//arrays multidimensionales

$contantos = [
    [
        'nombre' => 'Alex',
        'email' => 'alex@gg'
    ],
    [
        'nombre' => 'vane',
        'email' => 'vane@gg'
    ],
    [
        'nombre' => 'wendy',
        'email' => 'wendy@gg'
    ]

    ];
    

foreach($contantos as $key => $contact){
    echo $contact['nombre']."<br>";
    echo $contact['email']."<br>";
}

?>