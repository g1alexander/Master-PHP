<?php
    /*Conjunto de instrucciones agrupadas bajo un nombre concreto 
    y que pueden reutilizarse solamente invocando a la funcion tanta veces como queramos*/

 /* function nombre(){
    echo "esta es mi primera funcion";
  }  
  nombre();*/
/*
  function tabla($numero){
      echo "Tabla de multiplicar del $numero <br>";
      for($i=1;$i<=10;$i++){
        $op=$numero *$i ;
        echo "$numero *$i = ".$op."<br>";
      }
  }

  if(isset($_GET['numero'])){
      tabla($_GET['numero']);
  }else{
      echo"f";
  }

  for($i=0;$i<=10;$i++){
    tabla($i);
  }*/

  //ejemplo 3

  function calculadora($n1,$n2,$negrita=false){
    $sum = $n1+$n2;
    $res = $n1-$n2;
    $mul = $n1*$n2;
    $div = $n1/$n2;
    $cadena = "";
    if($negrita){
      $cadena.="<h2>";
    }
    $cadena.="La suma es: $sum <br>";
    $cadena.="La resta es: $res<br>";
    $cadena.="La multiplicacion es: $mul<br>";
    $cadena.="La division es: $div </br>";
    if($negrita){
      $cadena.="</h2>";
    }
    return $cadena;
  }

  echo calculadora(2,2);

  //ejemplo 4
  function getNombre($nombre){
    return "mi nombre es: $nombre";
  }
  function getApellidos($apellido){
    return "mi apellido es: $apellido";
  }
  function nombres($nombre,$apellido){
    return getNombre($nombre)."<br>".getApellidos($apellido) ;
  }
    echo nombres("Alexander","Hola");

?>