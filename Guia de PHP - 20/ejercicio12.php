<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Ejercicio 12: Impuestos</h1>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre_ej12"><br>
        Ingresos: 
        <select name="ingresos">
            <option value="1">1 - 1000</option>
            <option value="2">1001 - 3000</option>
            <option value="3">Más de 3000</option>
        </select>
        <input type="submit" name="btn_ej12" value="Verificar Impuesto">
    </form>

    <?php
    if (isset($_POST['btn_ej12'])) {
        if ($_POST['ingresos'] == 3) {
            echo "<br>Debe pagar impuestos a las ganancias.";
        } else {
            echo "<br>No paga impuestos.";
        }
    }
    ?>
</body>
</html>
