<?php

if(empty($_GET["ciudad"]) == 1){
    //echo "<h1>ERROR</h1>";
    //echo "<h2>Tiene que indicar el nombre de una ciudad";
    header("Location: index.php");
    exit;
}



$ciudad=$_GET["ciudad"];
$appid="2e1771d6989168058859fdd4b1b30d89";

$url="https://api.openweathermap.org/data/2.5/weather?q=".$ciudad."&appid=".$appid."&units=metric";

$json = @file_get_contents($url);


$weather=json_decode($json);//Convertir el texto a objeto

if($weather->cod != 200){
    echo "<h1>Error al realizar la llamada a la API</h1>";
    exit;
}

/*
echo "<pre>";
print_r($weather);
echo "</pre>";

echo "Lat: ".$weather->coord->lat;
echo "</br>";
echo "Lon: ".$weather->coord->lon;
echo "</br>";
*/
echo "<img src=\"http://openweathermap.org/img/w/".$weather->weather[0]->icon.".png\">";
echo "<h2>".$weather->weather[0]->description."</h2>";
echo "<hr>";
echo "<table border=1>";
echo "<tr>";
echo "<td>Temperatura media:</td>";
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