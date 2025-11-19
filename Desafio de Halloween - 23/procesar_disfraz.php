<?php
session_start();
include 'conexion.php';
$con = conectar();

// Seguridad Admin
if ($_SESSION['usuario'] != 'admin') { exit("Acceso denegado"); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    [cite_start]// [cite: 335] mysqli_real_escape_string para textos
    $nombre = mysqli_real_escape_string($con, $_POST['disfraz-nombre']);
    $desc = mysqli_real_escape_string($con, $_POST['disfraz-descripcion']);

    // Manejo de FOTO
    [cite_start]if (is_uploaded_file($_FILES['foto']['tmp_name'])) { // [cite: 339]
        
        $archivo = $_FILES['foto']['name'];
        [cite_start]// [cite: 337] [cite_start]explode y [cite: 338] end para sacar extension
        $extension = end(explode(".", $archivo));
        
        [cite_start]// [cite: 347] time() para nombre único
        $nombre_foto = time() . "." . $extension;
        
        // Guardar en carpeta
        copy($_FILES['foto']['tmp_name'], "fotos/" . $nombre_foto); [cite_start]// [cite: 348]

        // Leer contenido para el BLOB (Requerimiento extra del PDF)
        $blob = addslashes(file_get_contents("fotos/" . $nombre_foto));

        $sql = "INSERT INTO disfraces (nombre, descripcion, foto, foto_blob) 
                VALUES ('$nombre', '$desc', '$nombre_foto', '$blob')";

        if(mysqli_query($con, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error SQL: " . mysqli_error($con);
        }
    } else {
        echo "Error al subir archivo.";
    }
}
?>