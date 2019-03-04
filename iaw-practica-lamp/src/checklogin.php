<?php
//Conexion a BD
include_once("config.php");

//Recibo Variables
$email = $_POST["email"];
$password = $_POST["password"];

//Comprobar variables vacias
if(empty($email) == 1 || empty($password) == 1){
    header('Location: login.php');
    exit;
}

$query= "SELECT * ".
        "FROM users ".
        "WHERE email = ? AND password = ?";

	// insert data to database
	$stmt = mysqli_prepare($mysqli, $query);
	mysqli_stmt_bind_param($stmt, "ss", $email, md5($password));
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    mysqli_stmt_free_result($stmt);
	mysqli_stmt_close($stmt);

mysqli_close($mysqli);

if ($resultado->num_rows == 1){
    echo "Bienvenido a tu server";
}else{
    echo "Eres un impostor";
}

?>