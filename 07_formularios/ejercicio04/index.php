<html>
<head>
</head>

<body>

<form action="monedas.php" method="post">
    <div>
        <label for="cantidad">¿Cuantas monedas deseas lanzar?:</label>
        <input type="number" id="cantidad" name="numero">
    </div>
    <div>
        <label for="tipo">¿Qué tipo de moneda deseas lanzar?:</label>
        <select id="tipo" name="moneda">
            <option value="1">Dólar Estadounidense</option>
            <option value="2">Euro</option>
            <option value="3">Escudos Portugueses</option>
            <option value="4">Lira Turca</option>
            <option value="5">Franco suizo</option>
        </select>
    </div>

    <div class="button">
        <button type="submit">Enviar</button>
    </div>

</form>

</body>
</html>