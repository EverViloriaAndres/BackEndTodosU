<!DOCTYPE html>
<html>
<head>
    <title>Datos del Usuario</title>
    
</head>
<body>
    <div class="container">
        <h2>Datos del Usuario</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cedula'];

            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Apellido:</strong> $apellido</p>";
            echo "<p><strong>Número de Cédula:</strong> $cedula</p>";
        }
        ?>
    </div>
</body>
</html>