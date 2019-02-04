<?php

//Inizializo el array

$alumno = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

echo "<h2>Orden ascendente por valor (asort)</h2>";

asort($alumno);

echo "<table border=1>";
foreach ($alumno as $clave => $valor) {
    echo "<tr>";
    echo "<td>$clave</td>";
    echo "<td bgcolor=cdffeb>$valor</td>";
    echo "<tr>";
}
echo "</table>";

echo "<h2>Orden ascendente por clave (arsort)</h2>";

arsort($alumno);

echo "<table border=1>";
foreach ($alumno as $clave => $valor) {
    echo "<tr>";
    echo "<td bgcolor=ff8484>$clave</td>";
    echo "<td>$valor</td>";
    echo "<tr>";
}
echo "</table>";

echo "<h2>Orden descendente por valor (ksort)</h2>";

ksort($alumno);

echo "<table border=1>";
foreach ($alumno as $clave => $valor) {
    echo "<tr>";
    echo "<td>$clave</td>";
    echo "<td bgcolor=cdffeb>$valor</td>";
    echo "<tr>";
}
echo "</table>";

echo "<h2>Orden descendente por clave (krsort)</h2>";

ksort($alumno);

echo "<table border=1>";
foreach ($alumno as $clave => $valor) {
    echo "<tr>";
    echo "<td bgcolor=ff8484>$clave</td>";
    echo "<td>$valor</td>";
    echo "<tr>";
}
echo "</table>";
?>