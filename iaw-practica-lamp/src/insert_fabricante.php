<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insertar Fabricante</title>
</head>

<body>

<?php
// including the database connection file
include_once("config.php");

$nombre_fabricante =$_POST['nombre_fabricante'];

if(empty($nombre_fabricante) ==1 ){
	echo "Variable Vacia";
	exit;
}

$query= "INSERT INTO fabricante (nombre) VALUES (?)";

	// insert data to database
	$stmt = mysqli_prepare($mysqli, $query);
	mysqli_stmt_bind_param($stmt, "s", $nombre_fabricante);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_free_result($stmt);
	mysqli_stmt_close($stmt);

	// display success message
	echo "<font color='green'>Data added successfully.";
	echo "<br/><a href='view_fabricante.php'>View Result</a>";

mysqli_close($mysqli);

?>

</body>
</html>
