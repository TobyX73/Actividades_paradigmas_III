<?php
session_start();
include 'conexion.php';

[cite_start]// [cite: 315] Seguridad: Solo admin accede
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'admin') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Admin - Halloween</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Volver al Inicio</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <main>
        <section class="section">
            <h2>💀 Agregar Nuevo Disfraz</h2>
            <form action="procesar_disfraz.php" method="POST" enctype="multipart/form-data">
                <label>Nombre del Disfraz:</label>
                <input type="text" name="disfraz-nombre" required>
                
                <label>Descripción:</label>
                <textarea name="disfraz-descripcion" required></textarea>
                
                <label>Foto:</label>
                <input type="file" name="foto" required>

                <button type="submit">Subir Disfraz</button>
            </form>
        </section>
    </main>
</body>
</html>