<?php
$cantantes = ['the beatles', 'ed sheeran', 'drake'];
$numeros = [1,2,3,5,7,8,9,0];
sort($numeros);
var_dump($numeros);
echo "<hr/>";
//añadir elementos array
$cantantes []= "sebas";
array_push($cantantes, "hombre g");
var_dump($cantantes);
echo "<hr/>";
//eliminar elementos array
array_pop($cantantes); //elimina el ultimo
unset($cantantes[1]);
var_dump($cantantes);
echo "<hr/>";
//aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo "<hr/>";
//inverso del array
var_dump(array_reverse($numeros));
echo "<hr/>";
//buscar dentro de un array
$result = array_search("the beatles", $cantantes);
var_dump($result);
?>