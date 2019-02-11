<?php

//Declaro la funcion
function inicializar_array($numero_elementos,$min,$max)
{
    $numeros=array();

    for ($i=0;$i<$numero_elementos;$i++){
        $numeros[$i]=rand($min,$max);
    }

    return $numeros;
}

//--------------------------

//Llamo a la funcion

$lista=incializar_array(10,1,30);

echo "<pre>";
print_r($lista);
echo "</pre>";

?>
