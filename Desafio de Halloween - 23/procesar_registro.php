<?php
include 'conexion.php';
$con = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($con, $_POST['username']);
    // Hasheamos la clave por seguridad
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, clave) VALUES ('$user', '$pass')";
    
    if (mysqli_query($con, $sql)) {
        echo "Registro exitoso. ¡Ahora inicia sesión! <a href='index.php'>Volver</a>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>