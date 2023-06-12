<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar</title>
    <link rel="stylesheet" href="../css/VerificarEdad.css">
</head>
<body>

<div class="container">
        <h2>Verificar Edad</h2>
        <form action="VerificarEdad.php" method="post">
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required>
            </div>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $edad = $_POST['edad'];

                        if ($edad < 18) {
                            echo "<p class='result'>No es mayor de edad</p>";
                        } else {
                            echo "<p class='result'>Es mayor de edad</p>";
                        }
                    }
                ?>

            <div class="form-group">
                <button type="submit">Verificar</button>
            </div>
        </form>
    </div>


</body>
</html>