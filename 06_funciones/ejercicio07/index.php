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

function imprimir_array($lista)
{
    $numero_elementos=count($lista);
    echo "<table border=1 cellpadding=5>";
    for ($control=0;$control<$numero_elementos;$control++){
        echo "<tr>";
            echo "<td>$control</td>";
            echo "<td>$lista[$control]</td>";
        echo "</tr>";
        }
        echo"</table></br></br>";
}
//-----------------------------------------------------


//--------------------CODIGO----------------------------

$lista=incializar_array(30,100,200);
imprimir_array($lista);

?>