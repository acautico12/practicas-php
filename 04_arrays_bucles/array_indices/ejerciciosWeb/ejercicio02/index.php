<?php
/*2. Escribe un script PHP que realice las siguientes acciones: 
- Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30. 
- Una vez que ha inicializado el array, imprima todos los valores que almacena. 
- Calcular el valor medio de los valores del array. 
- Mostrar el valor medio que ha calculado.
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

$suma = 0;
for($i=0;$i<$valor_array;$i++){
    $suma=$suma+$numeros[$i];
}
$media = $suma/$valor_array;
echo "</br>";
echo "La media de los valores del array es: $media";

?>