<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Ejercicio 13: Contrato</h1>
    <form method="post" action="">
        Complete el contrato:<br>
        <textarea name="contrato" rows="5" cols="50">En la ciudad de [........], se acuerda entre la Empresa [.......] representada por el Sr. [..............]...</textarea>
        <br><input type="submit" name="btn_ej13" value="Generar Contrato">
    </form>

    <?php
    if (isset($_POST['btn_ej13'])) {
        echo "<h3>Contrato Final:</h3>";
        echo nl2br(htmlspecialchars($_POST['contrato']));
    }
    ?>
</body>
</html>
