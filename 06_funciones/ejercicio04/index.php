<?php

//--------------FUNCIONES------------------

//Declaro la funcion
function inicializar_array($numero_elementos,$min,$max)
{
    $numeros=array();

    for ($i=0;$i<$numero_elementos;$i++){
        $numeros[$i]=rand($min,$max);
    }

    return $numeros;
}

//Declaro funcion
function calcular_media($lista)
{
    $numero_de_elementos=count($lista);
    $suma=0;
    for($i=0;$i<$numero_de_elementos;$i++){
        $suma=$suma+$lista[$i];
    }

    $media=$suma/$numero_de_elementos;
    return $media;
}

//------------------CODIGO---------------

//Llamo a la funcion

$lista=incializar_array(10,1,30);

$media=calcular_media($lista);

echo "La media del array es: $media";


?>
