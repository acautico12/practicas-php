<?php

//Inicializo array asociativo
$edades=array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

foreach ($edades as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
}

?>