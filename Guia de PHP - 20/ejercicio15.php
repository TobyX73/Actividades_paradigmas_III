<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Ejercicio 15: Pedidos Pizza (Grabar)</h1>
    <form method="post" action="">
        Nombre: <input type="text" name="nom_pizz" required><br>
        Dirección: <input type="text" name="dir_pizz" required><br>
        <input type="checkbox" name="jamon" value="Jamon y Queso"> Jamón y Queso - Cant: <input type="number" name="cant_jamon" size="5"><br>
        <input type="checkbox" name="napo" value="Napolitana"> Napolitana - Cant: <input type="number" name="cant_napo" size="5"><br>
        <input type="checkbox" name="muzza" value="Muzzarella"> Muzzarella - Cant: <input type="number" name="cant_muzza" size="5"><br>
        <input type="submit" name="btn_pedido" value="Confirmar Pedido">
    </form>

    <?php
    if (isset($_POST['btn_pedido'])) {
        $archivo = fopen("pedidos.txt", "a") or die("Error al crear archivo");
        $linea = "Pedido de: " . $_POST['nom_pizz'] . " - Dir: " . $_POST['dir_pizz'] . PHP_EOL;
        if (isset($_POST['jamon'])) $linea .= " - J&Q: " . $_POST['cant_jamon'];
        if (isset($_POST['napo'])) $linea .= " - Napo: " . $_POST['cant_napo'];
        if (isset($_POST['muzza'])) $linea .= " - Muzza: " . $_POST['cant_muzza'];
        $linea .= PHP_EOL . "................................" . PHP_EOL;
        fputs($archivo, $linea);
        fclose($archivo);
        echo "<p style='color:green'>Pedido guardado correctamente.</p>";
    }
    ?>
</body>
</html>
