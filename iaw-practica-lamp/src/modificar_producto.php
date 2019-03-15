<?php
session_start();

if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}

//Conexion a BD
include_once("config.php");

// Copiar el archivo a la ruta
$dir_subida = '../productos/imagenes/';



if(empty($_FILES['imagen']) == 1){
    $imagen = '../assets/default.png'; 
}else{
    // Obtenemos el nuevo nombre
    $posicion = strpos($_FILES['imagen']['name'], ".");
    $extension = substr($_FILES['imagen']['name'],$posicion);
    $nombre = uniqid().$extension;
    $imagen = $dir_subida.$nombre;

    // Copiamos la imagen a disco con el nuevo nombre
    if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen)) {
        header('Location: edit_producto.php');
    }  
}

//Recibo Variables
$codigo_producto= $_GET['codigo_producto'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$fabricante = $_POST['fabricante'];


if(empty($nombre) == 1 || empty($precio) == 1 || empty($fabricante) == 1 || empty($imagen) == 1 || empty($codigo_producto) == 1) {
    header('Location: edit_producto.php');
    exit;
}

$query= "UPDATE producto SET ".
        "nombre = ?, precio = ?, codigo_fabricante = ?, imagen = ? ".
        "WHERE codigo = ?";

    // insert data to database
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "sdisi", $nombre, $precio, $fabricante, $imagen, $codigo_producto);
    mysqli_stmt_execute($stmt);
    $comprobar = $stmt->affected_rows;
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);

if ($comprobar == 1){
    header('Location: panel.php');
    
}else{
    header('Location: edit_producto.php?codigo_producto=$codigo_producto');
}

?>
