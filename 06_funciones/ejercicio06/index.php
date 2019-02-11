<?php

//----------------------FUNCIONES-------------------------
//Declaro la funcion
function inicializar_array($numero_elementos,$min,$max)
{
    $numeros=array();

    for ($i=0;$i<$numero_elementos;$i++){
        $numeros[$i]=rand($min,$max);
    }

    return $numeros;
}

function calcular_minimo($lista)
{
    $numero_de_elementos=count($lista);
    $minimo=31;
    for($i=0;$i<$numero_de_elementos;$i++){
        if($minimo>$lista[$i]){
            $minimo=$lista[$i];
        }
    }
    return $minimo;
}
//-----------------------------------------------------


//--------------------CODIGO----------------------------


//Llamo a la funcion

$lista=incializar_array(10,1,30);
echo "<pre>";
print_r($lista);
echo "</pre>";

echo "</br>";
$minimo=calcular_minimo($lista);
echo "El máximo valor del array es: $minimo";

?>
