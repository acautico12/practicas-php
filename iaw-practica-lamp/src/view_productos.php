<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT producto.nombre AS nombre_producto, producto.precio AS precio_producto, fabricante.nombre AS nombre_fabricante FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo ORDER BY producto.codigo DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nombre producto</td>
		<td>Precio</td>
		<td>Fabricante</td>
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>\n";
		echo "<td>".utf8_encode($res['nombre_producto'])."</td>\n";
		echo "<td>".$res['precio_producto']."€</td>\n";
		echo "<td>".$res['nombre_fabricante']."</td>\n";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>\n";
		echo "</tr>\n";
	}

	mysqli_close($msqli);
	?>
	</table>
</body>
</html>
