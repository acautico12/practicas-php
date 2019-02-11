<?php
//FORMULARIO CON GET Y SE ENVIA A SI MISMO

if(empty($_GET["user_name"])!=1){
    echo "<h2>Bienvenido a IAW: ".$_GET["user_name"]."</h2>";
}

?>

<html>
<head>
</head>

<body>

<form action="index.php" method="get">
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="user_name">
    </div>

    <div class="button">
        <button type="submit">Enviar</button>
    </div>

</form>

</body>
</html>