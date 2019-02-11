<?php

//Declaro la funcion

//Funcion para inicializar un array
function inicializar_array($numero_elementos,$min,$max)
{
    $numeros=array();

    for ($i=0;$i<$numero_elementos;$i++){
        $numeros[$i]=rand($min,$max);
    }

    return $numeros;
}

//Funcion para calcular media
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

//Funcion para calcular el maximo de un array

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

//Funcion para calcular el minimo de un array

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

//Funcion para mostrar el contenido de un array

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

?>