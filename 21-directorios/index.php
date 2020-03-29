<?php
if(!is_dir('directorio')){
    mkdir('directorio', 0777) or die('error'); //0777 son todos los permisos que puede contener

}else{
    echo"feo";
}

//rmdir('directorio');
  echo "<hr>";

  if($gestor = opendir('./directorio')){
      while(true == ($archivo= readdir($gestor))){
       if($archivo != '.' && $archivo != '..'){
        echo $archivo."<br>";
       }
      }
  }
?>