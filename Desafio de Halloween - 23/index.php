<?php
session_start();
include 'conexion.php';
$con = conectar();

// Consulta para obtener disfraces no eliminados
$sql = "SELECT * FROM disfraces WHERE eliminado = 0 ORDER BY votos DESC";
$res = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Concurso de disfraces de Halloween</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <?php if(!isset($_SESSION['usuario'])): ?>
                <li><a href="#registro">Registro</a></li>
                <li><a href="#login">Iniciar Sesión</a></li>
            <?php else: ?>
                <li>Hola, <b><?php echo htmlspecialchars($_SESSION['usuario']); ?></b></li>
                <?php if($_SESSION['usuario'] == 'admin'): ?>
                    <li><a href="admin.php">Panel Admin</a></li>
                <?php endif; ?>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <header>
        <h1>🎃 Concurso de Disfraces 🎃</h1>
    </header>

    <main>
        <section id="disfraces-list" class="section">
            <h2>Galería del Terror</h2>
            
            <?php while($fila = mysqli_fetch_array($res)): ?>
                <div class="disfraz">
                    <h3><?php echo htmlspecialchars($fila['nombre']); ?></h3>
                    
                    <?php if(file_exists("fotos/" . $fila['foto'])): ?>
                        <img src="fotos/<?php echo $fila['foto']; ?>" width="100%" alt="Disfraz">
                    <?php else: ?>
                        <img src="imagenes/fondo.jpg" width="100%" alt="Sin foto">
                    <?php endif; ?>

                    <p><em><?php echo htmlspecialchars($fila['descripcion']); ?></em></p>
                    <p>👻 Votos: <strong><?php echo $fila['votos']; ?></strong></p>

                    <?php if(isset($_SESSION['id_usuario'])): ?>
                        <a href="votar.php?id=<?php echo $fila['id']; ?>">
                            <button class="votar">Votar por este</button>
                        </a>
                    <?php else: ?>
                        <p><small>Regístrate para votar</small></p>
                    <?php endif; ?>
                </div>
                <hr>
            <?php endwhile; ?>
        </section>

        <?php if(!isset($_SESSION['usuario'])): ?>
            <section id="registro" class="section">
                <h2>Registro</h2>
                <form action="procesar_registro.php" method="POST">
                    <label>Usuario:</label>
                    <input type="text" name="username" required>
                    <label>Contraseña:</label>
                    <input type="password" name="password" required>
                    <button type="submit">Registrarse</button>
                </form>
            </section>

            <section id="login" class="section">
                <h2>Iniciar Sesión</h2>
                <form action="procesar_login.php" method="POST">
                    <label>Usuario:</label>
                    <input type="text" name="login-username" required>
                    <label>Contraseña:</label>
                    <input type="password" name="login-password" required>
                    <button type="submit">Entrar</button>
                </form>
            </section>
        <?php endif; ?>
    </main>
    </body>
</html>