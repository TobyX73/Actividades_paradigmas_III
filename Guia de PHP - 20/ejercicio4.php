<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4: Aleatorio y Condicional</h1>
    <?php
    $num = rand(1, 100);
    echo "El número generado es: <strong>$num</strong><br>";
    if ($num <= 50) {
        echo "El número es menor o igual a 50.";
    } else {
        echo "El número es mayor a 50.";
    }
    ?>
</body>
</html>
