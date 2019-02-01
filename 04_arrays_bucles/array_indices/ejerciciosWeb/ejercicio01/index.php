<?php
/* 
1. Escribe un script PHP que realice las siguientes acciones:  
-Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30. 
- Una vez que ha inicializado el array, imprimir todos los valores que almacena.
*/

$aleatorios = array();

for($i=0;$i<10;$i++){
    $aleatorios[$i]=rand(1,30);
}


for($i=0;$i<10;$i++){
    echo $aleatorios[$i];
    echo "</br>";
}



?>