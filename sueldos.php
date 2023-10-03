<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Sueldo de Vendedor</title>
</head>
<body>

    <h1>Calculadora de Sueldo de Vendedor</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="total_vendido">Importe total vendido del mes (S/.):</label>
        <input type="text" name="total_vendido" required>
        <br>

        <label for="hijos_escolar">Cantidad de hijos en edad escolar:</label>
        <input type="number" name="hijos_escolar" required>
        <br>

        <input type="submit" value="Calcular Sueldo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $total_vendido = $_POST["total_vendido"];
        $hijos_escolar = $_POST["hijos_escolar"];

        
        $comision = 0.075 * $total_vendido;

        
        $bonificacion = 50 * $hijos_escolar;

        
        $sueldo_basico = 600;
        $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;

       
        $descuento = 0.11 * $sueldo_bruto;

        
        $sueldo_neto = $sueldo_bruto - $descuento;
        
        
        echo "<h2>Resultados:</h2>";
        echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
        echo "Bonificación: S/. " . number_format($bonificacion, 2) . "<br>";
        echo "Sueldo Bruto: S/. " . number_format($sueldo_bruto, 2) . "<br>";
        echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Sueldo Neto: S/. " . number_format($sueldo_neto, 2);
    }
    ?>

</body>
</html>
