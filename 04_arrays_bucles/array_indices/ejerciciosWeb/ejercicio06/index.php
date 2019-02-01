<?php
/*Escribe un script PHP que sobre un array de temperaturas realice las siguientes 
operaciones:
-Calcular la media.
-Calcular el valor máximo.
-Calcular el valor mínimo.
-Mostrar todos los valores calculados.
-El array de temperaturas lo vamos a generar con números aleatorios. 

El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30.

6. Resuelva el ejercicio utilizando bucles while.
*/

$numeros = array(); //Declaro el array

$control = 0;//Declaro una variable de control 
while ($control<10){//Asigno números aleatorios entre 1 y 30 a las posiciones del array
    $numeros[$control] = rand(1,30);
    $control++;
}

$control = 0;//Declaro una variable de control
while ($control<10){// Muestro por pantalla los valores de las posiciones del array
    echo $numeros[$control];
    echo "</br>";
    $control++;
}

$numero_valores_array = count($numeros);//Contamos las posiciones del array
$control = 0;//Declaro variable de control
$suma = 0;//Declaro variable acumulativa
while ($control<$numero_valores_array){//Sumo todos los valores del array
    $suma = $suma + $numeros[$control];
    $control++;
}
$media = $suma/$numero_valores_array;//Hago la media de los valores del array

echo "</br>";
echo "La media del array es: $media";//Muestro la media
echo "</br>";

$control = 0;//Declaro variable de control
$maximo = 0;//Declaro variable acumulativa
while ($control<$numero_valores_array){//Recorro el array y saco el valor máximo
    if ($maximo<$numeros[$control]){
        $maximo=$numeros[$control];
        $posicion=$control;
    }
    $control++;
}
echo "</br>";
echo "El valor máximo del array es: $maximo. Y está en la posición: $posicion";//Muestro el valor máximo del array
echo "</br>";

$control = 0;//Declaro variable de control
$minimo = 33;//Declaro variable acumulativa
while ($control<$numero_valores_array){//Recorro el array y saco el valor mínimo
    if ($minimo>$numeros[$control]){
        $minimo=$numeros[$control];
        $posicion=$control;
    }
    $control++;
}
echo "</br>";
echo "El valor mínimo del array es: $minimo. Y está en la posición: $posicion";//Muestro el valor mínimo del array
echo "</br>";
?>