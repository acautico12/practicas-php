<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM fabricante ORDER BY codigo DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>
<a href="formulario_fabricante.html">Add New Data</a><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nombre del fabricante</td>
			</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>\n";
		echo "<td>".$res['nombre']."</td>\n";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>\n";
		echo "</tr>\n";
	}

	mysqli_close($msqli);
	?>
	</table>
</body>
</html>
