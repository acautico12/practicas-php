<?php

//echo "Muestro con un \"ECHO\" Ejercicio 01 Estructuras de Control";

//print("Muestro con un \"PRINT\" Ejercicio 01 Estructuras de Control");

$numero = rand(0,1);
// print($numero);
// Tambien puedo mostrarlo con echo $numero;

echo "</br>";

if ($numero == 0) {
    echo "<img src='imagenes/cara.jpg'></img>";
}else{
    echo"<img src='imagenes/cruz.jpg'></img>";
}
?>