<?php
session_start();

if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}

// including the database connection file
include_once("config.php");

//Recibo Variables
$codigo_producto = $_GET['codigo_producto'];

//Compruebo sí son vacias
if(empty($codigo_producto) == 1){
    header('Location: panel.php');
    exit;
}


$query= "DELETE FROM producto ".
        "WHERE codigo = ? ";
    // Delete data to database
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "i", $codigo_producto);
    mysqli_stmt_execute($stmt);
    $comprobar = $stmt->affected_rows;
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);


if ($comprobar == 1){
    header('Location: panel.php');
        
}

?>