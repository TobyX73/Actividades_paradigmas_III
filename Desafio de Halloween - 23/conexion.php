<?php
function conectar() {
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "halloween";

    [cite_start]//
    $con = mysqli_connect($servidor, $usuario, $clave, $bd);

    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    
    $con->set_charset("utf8");
    return $con;
}
?>