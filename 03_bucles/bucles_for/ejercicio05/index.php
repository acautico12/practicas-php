<?php

/* Forma 1
echo "<table border='1'>";
for ($i=1;$i<=100;$i++){
    if ($i % 2 == 0){
    echo "<tr>";
    echo "<td>$i</td>";
    echo "</tr>";
    }
}

echo "</table>";

*/

// Forma 2
echo "<table border='1'>";
for ($i=2;$i<=100;$i=$i+2){
    echo "<tr>";
    echo "<td>$i</td>";
    echo "</tr>";
}

echo "</table>";


?>