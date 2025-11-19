<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Ejercicio 8: Estructuras Repetitivas (Tabla del 2)</h1>
    <?php
    echo "<strong>Con FOR:</strong> ";
    for ($f = 2; $f <= 20; $f += 2) {
        echo "$f ";
    }
    echo "<br>";

    echo "<strong>Con WHILE:</strong> ";
    $w = 2;
    while ($w <= 20) {
        echo "$w ";
        $w += 2;
    }
    echo "<br>";

    echo "<strong>Con DO/WHILE:</strong> ";
    $d = 2;
    do {
        echo "$d ";
        $d += 2;
    } while ($d <= 20);
    ?>
</body>
</html>
