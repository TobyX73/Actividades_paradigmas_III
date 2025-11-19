<?php
session_start();
include 'conexion.php';
$con = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($con, $_POST['login-username']);
    $pass = $_POST['login-password'];

    [cite_start]// [cite: 301] Verificamos usuario
    $sql = "SELECT id, nombre, clave FROM usuarios WHERE nombre = '$user'";
    $res = mysqli_query($con, $sql);

    [cite_start]// [cite: 328] mysqli_num_rows
    if (mysqli_num_rows($res) == 1) {
        $fila = mysqli_fetch_assoc($res);
        
        // Verificar password hasheado
        if (password_verify($pass, $fila['clave'])) {
            $_SESSION['id_usuario'] = $fila['id'];
            $_SESSION['usuario'] = $fila['nombre'];
            header("Location: index.php"); // Éxito
        } else {
            echo "Contraseña incorrecta. <a href='index.php'>Volver</a>";
        }
    } else {
        echo "Usuario no encontrado. <a href='index.php'>Volver</a>";
    }
}
?>