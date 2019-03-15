<?php
session_start();

if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}

//Conexion a BD
include_once("config.php");

//Recibo Variables
$nombre = $_POST['name'];

if(empty($nombre) == 1){
    header('Location: new_fabricante.php');
    exit;
}

$query= "INSERT INTO fabricante ".
        "(nombre) ".
        "VALUES (?)";

    // insert data to database
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "s", $nombre);
    mysqli_stmt_execute($stmt);
    $comprobar = $stmt->affected_rows;
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);

if ($comprobar == 1){
    header('Location: panel_fabricantes.php');
    
}else{
    header('Location: new_fabricante.php');
}

?>