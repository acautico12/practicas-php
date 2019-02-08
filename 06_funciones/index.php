<?php

//Definicion de una funcion
function suma($numero1, $numero2)
{
    return $numero1+$numero2;
}

//-----------------------------------------------------

//Llamada de una función
$resultado= suma(3,100);

echo "Suma: $resultado";

echo "</br>";

echo "Suma:".suma(10,3);

?>