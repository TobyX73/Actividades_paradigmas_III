<?php
session_start();
include 'conexion.php';
$con = conectar();

if (!isset($_SESSION['id_usuario']) || !isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id_usuario = $_SESSION['id_usuario'];
$id_disfraz = (int)$_GET['id'];

// 1. Verificar si ya votó por ESTE disfraz
// (La lógica estricta sería si ya votó en general, pero la tabla permite muchos votos.
$check = mysqli_query($con, "SELECT id FROM votos WHERE id_usuario=$id_usuario AND id_disfraz=$id_disfraz");

if (mysqli_num_rows($check) == 0) {
    // 2. Sumar voto al disfraz
    mysqli_query($con, "UPDATE disfraces SET votos = votos + 1 WHERE id=$id_disfraz");
    
    // 3. Registrar el voto
    mysqli_query($con, "INSERT INTO votos (id_usuario, id_disfraz) VALUES ($id_usuario, $id_disfraz)");
}

header("Location: index.php");
?>