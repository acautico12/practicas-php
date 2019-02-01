<?php

//Declaración de un array
$productos = array();

//Declara e inicializa un array
$productos = array("Disco SSD", "Memoria RAM", "Monitor");

echo $productos[0];
echo "</br>";
echo $productos[1];
echo "</br>";
echo $productos[2];
echo "</br>";

//Asignamos nuevos valores al array

echo "</br>";
$productos[0]= "Este es el producto 0";
$productos[1]= "Este es el producto 1";
$productos[2]= "Este es el producto 2";

echo $productos[0];
echo "</br>";
echo $productos[1];
echo "</br>";
echo $productos[2];
echo "</br>";

// Para pintar un array completo

echo "</br>";
echo "<pre>";
print_r($productos);
echo "</pre>";

//Conocer el tamaño del array
echo "Número de elementos del array: ".count($productos);

// Recorrer un array con un for

echo "</br>";
echo "</br>";
$numero_de_elementos = count($productos);// No se pone dentro del for para que no esté todo el rato contando

for ($i = 0; $i < $numero_de_elementos; $i++ ) {
    echo $productos[$i];
    echo "</br>";
}

?>