<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Ejercicio 16: Pedidos Pizza (Leer)</h1>
    <?php
    echo "<h3>Lista de Pedidos (Leyendo archivo):</h3>";
    if (file_exists("pedidos.txt")) {
        $archivo = fopen("pedidos.txt", "r");
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            echo nl2br($linea);
        }
        fclose($archivo);
    } else {
        echo "Aún no hay pedidos.";
    }
    ?>
</body>
</html>
