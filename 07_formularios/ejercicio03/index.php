<?php
//FORMULARIO CON POST
include 'funciones.php';

$numero=$_POST["numero"];

if(empty($numero)!=1){
    tabla_multiplicar($numero);
}else{
    echo "Introduce un número en el formulario";
}

?>

<html>
<head>
</head>

<body>

<form action="index.php" method="post">
    <div>
        <label for="name">Numero para hacer la tabla:</label>
        <input type="number" id="name" name="numero">
    </div>

    <div class="button">
        <button type="submit">Enviar</button>
    </div>

</form>

</body>
</html>