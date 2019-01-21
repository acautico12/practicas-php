<?php

// Bucle for:

$numero = rand(0,10);

echo "<table>";
for ($control=0;$control<=10;$control++){
    echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td> x </td>";
        echo "<td>$control</td>";
        echo "<td> = </td>";
        echo "<td>".$numero*$control."</td>";
    echo "</tr>";
}
echo"</table>";
?>