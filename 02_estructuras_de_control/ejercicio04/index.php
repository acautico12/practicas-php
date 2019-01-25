<?php

$numero = rand(1,6);

echo $numero;
echo "</br>";

if ($numero == 1){
    echo "<img src='imagenes/1.svg'></img>";
}elseif ($numero == 2){
    echo "<img src='imagenes/2.svg'></img>";
}elseif ($numero == 3){
    echo "<img src='imagenes/3.svg'></img>";
}elseif ($numero == 4){
    echo "<img src='imagenes/4.svg'></img>";
}elseif ($numero == 5){
    echo "<img src='imagenes/5.svg'></img>";
}elseif ($numero == 6){
    echo "<img src='imagenes/6.svg'></img>";
}

?>