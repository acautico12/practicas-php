<?php
/*Escribe un script PHP que sobre un array de temperaturas realice las siguientes 
operaciones:
-Calcular la media.
-Calcular el valor máximo.
-Calcular el valor mínimo.
-Mostrar todos los valores calculados.
-El array de temperaturas lo vamos a generar con números aleatorios. 

El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30.

5. Resuelva el ejercicio utilizando bucles for.
*/

$numeros = array(); //Declarar el array

for($i=0;$i<10;$i++){ // Asignar valores al array
    $numeros[$i]=rand(1,30);
}

for($i=0;$i<10;$i++){ //Mostrar el array
    echo $numeros[$i];
    echo "</br>";
}

$valor_array = count($numeros);// Contar el número de valores del array

$suma = 0;
for($i=0;$i<$valor_array;$i++){//Calcular la media 
    $suma=$suma+$numeros[$i];
}
$media = $suma/$valor_array;
echo "</br>";
echo "La media de los valores del array es: $media";//Mostrar valor de la media
echo "</br>";


$maximo = 0;
for($i=0;$i<$valor_array;$i++){//Sacar el máximo valor del array
    if($maximo < $numeros[$i]){
        $maximo=$numeros[$i];
        $posicion=$i;
    }
    
}
echo "</br>";
echo "El valor máximo de los valores del array es: $maximo. Y está en la posicion $posicion";//Mostrar máximo valor del array
echo "</br>";


$minimo = 33;
for($i=0;$i<$valor_array;$i++){//Sacar el valor mínimo del array
    if($minimo > $numeros[$i]){
        $minimo=$numeros[$i];
        $posicion=$i;
    }
    
}
echo "</br>";
echo "El valor mínimo de los valores del array es: $minimo. Y está en la posicion $posicion";//Mostrar mínimo valor del array
echo "</br>";

?>
