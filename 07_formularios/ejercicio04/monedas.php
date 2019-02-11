<?php

$cantidad=$_POST["numero"];
$tipo=$_POST["moneda"];

if(empty($cantidad)!=1 && empty($tipo)!=1){
    for($i=0;$i<$cantidad;$i++){
        echo "<img src=monedas/".$tipo."/".rand(1,2).".jpg></img>";
    }
}else{
    echo "Algún valor del formulario está en blanco";
}


?>