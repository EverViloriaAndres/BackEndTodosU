<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET['?']</title>
    <div class="container">
        <h2>Formulario de Datos</h2>
        <form action="recibeGET.php" method="get">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="cedula">Número de Cédula:</label>
                <input type="text" id="cedula" name="cedula" required>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <link rel="stylesheet" href="../css/VerificarEdad.css">
</head>
<body>
    
</body>
</html>