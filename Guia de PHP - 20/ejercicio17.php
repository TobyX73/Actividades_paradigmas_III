<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 17</title>
</head>
<body>
    <h1>Ejercicio 17: Usuarios y Claves</h1>
    <?php
    $usuarios = [
        "admin" => "1234",
        "pepe" => "abcde",
        "maria" => "5555",
        "invitado" => "0000",
        "root" => "toor"
    ];

    echo "La clave de 'maria' es: " . $usuarios['maria'];
    ?>
</body>
</html>
