<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Ejercicio 9: Mayoría de edad</h1>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre_ej9" required>
        Edad: <input type="number" name="edad_ej9" required>
        <input type="submit" name="btn_ej9" value="Verificar">
    </form>

    <?php
    if (isset($_POST['btn_ej9'])) {
        $edad = $_POST['edad_ej9'];
        $nombre = $_POST['nombre_ej9'];
        echo "<br>Hola $nombre. ";
        if ($edad >= 18) echo "Eres mayor de edad.";
        else echo "Eres menor de edad.";
    }
    ?>
</body>
</html>
