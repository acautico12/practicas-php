<?php

// Declaro funcion tabla_multiplicar
function tabla_multiplicar($numero)
{   
    echo "<h2>Tabla del $numero</h2>";
    echo "<table border=1 cellpadding=5>";
    for ($control=0;$control<=10;$control++){
        echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>x</td>";
            echo "<td>$control</td>";
            echo "<td>=</td>";
            echo "<td>".$numero*$control."</td>";
        echo "</tr>";
        }
        echo"</table></br></br>";
}

//Declaro la funcion imprimir tablas con dos parametos
function imprimir_tablas($inicio, $fin)
{
    for ($i=$inicio;$i<=$fin;$i++){
        tabla_multiplicar($i);
    }
}

//-------------------------------------------------

//Llamo a la funcion

imprimir_tablas(20,40);

?>