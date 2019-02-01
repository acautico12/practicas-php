<?php

$temperaturas=array();

for ($i=0;$i<10;$i++){
    $temperaturas[$i]=rand(1,30);
}

$numero_elementos=count($temperaturas);

echo "<h2>Array desordenado</h2>";
echo "<table border=1>";
echo "<tr>";

//Imprimir array
for ($i=0;$i<$numero_elementos;$i++){
    echo "<td>$i</td>";
}
echo "</tr>";


for ($i=0;$i<$numero_elementos;$i++){
    echo "<td>$temperaturas[$i]</td>";
}
echo "</table>";

// De menor a mayor
sort($temperaturas);

echo "<h2>Array ordenado de menor a mayor</h2>";
echo "<table border=1>";
echo "<tr>";

//Imprimir array
for ($i=0;$i<$numero_elementos;$i++){
    echo "<td>$i</td>";
}
echo "</tr>";


for ($i=0;$i<$numero_elementos;$i++){
    echo "<td>$temperaturas[$i]</td>";
}
echo "</table>";

// De mayor a menor
rsort($temperaturas);

echo "<h2>Array ordenado de mayor a menor</h2>";
echo "<table border=1>";
echo "<tr>";

//Imprimir array
for ($i=0;$i<$numero_elementos;$i++){
    echo "<td>$i</td>";
}
echo "</tr>";


for ($i=0;$i<$numero_elementos;$i++){
    echo "<td>$temperaturas[$i]</td>";
}
echo "</table>";


?>