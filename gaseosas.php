<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Gaseosas</title>
</head>
<body>
    <h1>Calculadora de Gaseosas</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="precio_actual">Precio actual de la gaseosa (S/.):</label>
        <input type="text" name="precio_actual" required>
        <br>
        <label for="cantidad_unidades">Cantidad de unidades adquiridas:</label>
        <input type="number" name="cantidad_unidades" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precio_actual = $_POST["precio_actual"];
        $cantidad_unidades = $_POST["cantidad_unidades"];

        $nuevo_precio = $precio_actual - (0.05 * $precio_actual);
        $importe_compra = $nuevo_precio * $cantidad_unidades;
        $descuento = 0.07 * $importe_compra;
        $importe_pagar = $importe_compra - $descuento;
        $obsequio_caramelos = 2 * $cantidad_unidades;

        echo "<h2>Resultados</h2>";
        echo "Nuevo precio de la Gaseosa: S/." . number_format($nuevo_precio, 2) . "<br>";
        echo "Importe de la compra: S/." . number_format($importe_compra, 2) . "<br>";
        echo "Importe del Descuento: S/." . number_format($descuento, 2) . "<br>";
        echo "Importe a pagar: S/." . number_format($importe_pagar, 2) . "<br>";
        echo "Obsequio caramelos: " . $obsequio_caramelos . " caramelos";
    }
    ?>
</body>
</html>
