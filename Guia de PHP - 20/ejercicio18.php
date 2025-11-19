<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 18</title>
</head>
<body>
    <h1>Ejercicio 18: Verificar Claves</h1>
    <form method="post" action="">
        Usuario: <input type="text" name="user_func"><br>
        Clave 1: <input type="password" name="pass1"><br>
        Clave 2: <input type="password" name="pass2"><br>
        <input type="submit" name="btn_func" value="Validar">
    </form>

    <?php
    function verificarClaves($c1, $c2) {
        if ($c1 != $c2) {
            echo "<p style='color:red'>Las claves ingresadas son distintas.</p>";
        } else {
            echo "<p style='color:green'>Las claves coinciden.</p>";
        }
    }

    if (isset($_POST['btn_func'])) {
        verificarClaves($_POST['pass1'], $_POST['pass2']);
    }
    ?>
</body>
</html>
