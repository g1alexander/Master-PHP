<?php
     $n1 = $_GET['n1'];
     $n2 = $_GET['n2'];
 
     if($n1==false||$n2==false){
         echo"error";
     }else{
        if($n1<$n2){
            for($i=$n1;$i<=$n2;$i++){
                echo"<br> $i";
            }
        }else{
            echo"f";
        }
     }
?>