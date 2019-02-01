<?php
/*3. Escribe un script PHP que realice las siguientes acciones: 
- Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30. 
- Una vez que ha inicializado el array, imprima todos los valores que almacena. 
- Buscar el valor máximo de los valores del array. 
- Muestre el valor máximo que ha encontrado.
*/

$numeros = array();

for($i=0;$i<10;$i++){
    $numeros[$i]=rand(1,30);
}

for($i=0;$i<10;$i++){
    echo $numeros[$i];
    echo "</br>";
}

$valor_array = count($numeros);

$maximo = 0;

for($i=0;$i<$valor_array;$i++){
    if($maximo < $numeros[$i]){
        $maximo=$numeros[$i];
    }
    
}
echo "</br>";
echo "El valor máximo de los valores del array es: $maximo";


?>