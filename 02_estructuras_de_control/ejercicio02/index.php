<?php

$nota = rand(0, 10);//Genero un número aleatorio entre 0 y 10

echo "<strong>Nota:</strong>$nota";//Muestro por pantalla el número generado

echo "</br>";


if ($nota >= 0 && $nota < 5 ){ //Compruebo si el número es mayor o igual a 0 y menor a 5
    echo "Estás suspenso";//Muestro por pantalla 
} elseif ($nota >= 5 && $nota < 6){//Compruebo si el número es mayor o igual a 5 y menor a 6
    echo "Estás aprobado con un suficiente";//Muestro por pantalla
}elseif ($nota >= 6 && $nota < 7){//Compruebo si el número es mayor o igual a 6 y menor a 7
    echo "Estás aprobado con un bien";//Muestro por pantalla
}elseif ($nota >= 7 && $nota < 9){//Compruebo si el número es mayor o igual a 7 y menor a 9
    echo "Estás aprobado con un notable";//Muestro por pantalla
}elseif ($nota >= 9 && $nota <= 10){//Compruebo si el número es mayor o igual a 9 y menor o igual a 10
    echo "Estás aprobado con un sobresaliente";//Muestro por pantalla
}else {
    echo "Introduce un valor comprendido entre 0 y 10";//Muestro por pantalla
}

?>
