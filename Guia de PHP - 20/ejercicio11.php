<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Ejercicio 11: Deportes</h1>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre_ej11"><br>
        <input type="checkbox" name="deportes[]" value="futbol"> Futbol
        <input type="checkbox" name="deportes[]" value="basket"> Basket
        <input type="checkbox" name="deportes[]" value="tennis"> Tennis
        <input type="checkbox" name="deportes[]" value="voley"> Voley<br>
        <input type="submit" name="btn_ej11" value="Contar Deportes">
    </form>

    <?php
    if (isset($_POST['btn_ej11'])) {
        $cantidad = 0;
        if (isset($_POST['deportes'])) {
            $cantidad = count($_POST['deportes']);
        }
        echo "<br>Practicas $cantidad deporte(s).";
    }
    ?>
</body>
</html>
