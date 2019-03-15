<?php
session_start();

if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}

//Conexion a BD
include_once("config.php");


//Recibo Variables
$codigo_fabricante= $_GET['codigo_fabricante'];
$nombre = $_POST['nombre'];


    $query= "UPDATE fabricante SET ".
            "nombre = ? ".
            "WHERE codigo = ?";

        // insert data to database
        $stmt = mysqli_prepare($mysqli, $query);
        mysqli_stmt_bind_param($stmt, "si", $nombre, $codigo_fabricante);
        mysqli_stmt_execute($stmt);
        $comprobar = $stmt->affected_rows;
        mysqli_stmt_close($stmt);
        mysqli_close($mysqli);


if ($comprobar == 1){
    header('Location: panel_fabricantes.php');
    
}else{
    header('Location: edit_usuario.php?codigo_usuario=$codigo_producto');
}

?>