<?php

//Incluimos las funciones con include
include 'funciones.php';

//Incluimos las funciones con require
//require 'funciones.php';

//--------------------------CODIGO-----------------------

$lista=inicializar_array(10,30,50);
$media=calcular_media($lista);

echo "La media del array es: $media";
echo "</br>";
echo dirname(__FILE__);
?>