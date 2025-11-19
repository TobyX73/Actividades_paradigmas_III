<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7: Estructura Condicional</h1>
    <?php
    $valor = rand(1, 3);
    echo "Valor generado: $valor -> ";
    if ($valor == 1) { echo "uno"; }
    elseif ($valor == 2) { echo "dos"; }
    elseif ($valor == 3) { echo "tres"; }
    ?>
</body>
</html>
