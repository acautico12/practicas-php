<?php

$pass="123456";

echo md5($pass);


/* Cifrar con Crypt

$semilla="78342ruih789g4JHGSDF";
$password = "123456";
$PasswordCifrado = crypt($password, $semilla);


if (crypt($password,$semilla) == $PasswordCifrado){
    echo "Coinciden";
}else{
    echo "Error";
}
*/
?>