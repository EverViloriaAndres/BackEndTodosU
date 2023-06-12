<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculoFechas</title>
    <link rel="stylesheet" href="../css/CalculoFechas.css">
</head>
<body>
<div class="container">
        <h2>Verificar Edad</h2>
        <form action="CalculoFechas.php" method="post">
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="form-group">
                <button type="submit">Verificar</button>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $fecha_actual = date('Y-m-d');
            $edad = date_diff(date_create($fecha_nacimiento), date_create($fecha_actual))->y;

            if ($edad < 18) {
                echo "<p>Su edad es $edad, por tanto: No es mayor de edad</p>";
            } else {
                echo "<p>Su edad es $edad, por tanto: Es mayor de edad</p>";
            }
        }
        ?>
    </div>
    
</body>
</html>