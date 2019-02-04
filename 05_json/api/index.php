<?php

$ciudad="Almeria";
$appid="2e1771d6989168058859fdd4b1b30d89";

$url="https://api.openweathermap.org/data/2.5/weather?q=".$ciudad."&appid=".$appid."&units=metric";

$json = file_get_contents($url);


$weather=json_decode($json);
echo "<pre>";
print_r($weather);
echo "</pre>";

echo "Lat: ".$weather->coord->lat;
echo "</br>";
echo "Lon: ".$weather->coord->lon;
echo "</br>";

echo "<hr>";
echo "<table border=1>";
echo "<tr>";
echo "<td>Temperatura actual:</td>";
echo "<td>".$weather->main->temp."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Presion:</td>";
echo "<td>".$weather->main->pressure."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Humedad:</td>";
echo "<td>".$weather->main->humidity."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Temperatura minima:</td>";
echo "<td>".$weather->main->temp_min."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Temperatura maxima:</td>";
echo "<td>".$weather->main->temp_max."</td>";
echo "</tr>";
echo "</table>";


?>