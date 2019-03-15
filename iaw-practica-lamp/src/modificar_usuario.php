<?php
session_start();

if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}

//Conexion a BD
include_once("config.php");


//Recibo Variables
$codigo_usuario= $_GET['codigo_usuario'];
$nombre = $_POST['nombre'];
$edad = $_POST['age'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$pass = md5($passwd);


if( empty($passwd) == 1) {
    $query= "UPDATE users SET ".
        "name = ?, age = ?, email = ? ".
        "WHERE id = ?";

    // insert data to database
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "sisi", $nombre, $edad, $email, $codigo_usuario);
    mysqli_stmt_execute($stmt);
    $comprobar = $stmt->affected_rows;
    mysqli_stmt_close($stmt);
}else{
    $query= "UPDATE users SET ".
            "name = ?, age = ?, email = ?, password = ? ".
            "WHERE id = ?";

        // insert data to database
        $stmt = mysqli_prepare($mysqli, $query);
        mysqli_stmt_bind_param($stmt, "sissi", $nombre, $edad, $email, $pass, $codigo_usuario);
        mysqli_stmt_execute($stmt);
        $comprobar = $stmt->affected_rows;
        mysqli_stmt_close($stmt);
        mysqli_close($mysqli);
}

if ($comprobar == 1){
    header('Location: panel_usuarios.php');
    
}else{
    header('Location: edit_usuario.php?codigo_usuario=$codigo_producto');
}

?>