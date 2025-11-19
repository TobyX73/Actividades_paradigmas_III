<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Ejercicio 10: Nivel de Estudios</h1>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre_ej10" required><br>
        <input type="radio" name="estudios" value="1" required> No tiene estudios<br>
        <input type="radio" name="estudios" value="2"> Estudios primarios<br>
        <input type="radio" name="estudios" value="3"> Estudios secundarios<br>
        <input type="submit" name="btn_ej10" value="Enviar">
    </form>

    <?php
    if (isset($_POST['btn_ej10'])) {
        $nom = $_POST['nombre_ej10'];
        $tipo = $_POST['estudios'];
        echo "<br>Persona: $nom.<br>";
        if ($tipo == 1) echo "No tiene estudios.";
        elseif ($tipo == 2) echo "Tiene estudios primarios.";
        elseif ($tipo == 3) echo "Tiene estudios secundarios.";
    }
    ?>
</body>
</html>
