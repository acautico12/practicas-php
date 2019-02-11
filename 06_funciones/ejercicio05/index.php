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

function calcular_maximo($lista)
{
    $numero_de_elementos=count($lista);
    $maximo=0;
    for($i=0;$i<$numero_de_elementos;$i++){
        if($maximo<$lista[$i]){
            $maximo=$lista[$i];
        }
    }
    return $maximo;
}
//-----------------------------------------------------


//--------------------CODIGO----------------------------


//Llamo a la funcion

$lista=incializar_array(10,1,30);
echo "<pre>";
print_r($lista);
echo "</pre>";

echo "</br>";
$maximo=calcular_maximo($lista);
echo "El máximo valor del array es: $maximo";

?>
