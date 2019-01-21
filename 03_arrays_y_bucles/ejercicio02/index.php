<?php

for ($numero = 0;$numero <= 10;$numero++){

    echo "<h2>Tabla del $numero</h2>";

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
    echo"</table></br></br>";
}

?>