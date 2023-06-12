<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../css/calculadora.css">
</head>
<body>

<div class="container">
        <h2>Calculadora</h2>
        <form action="Calculadora.php" method="post">
            <div class="form-group">
                <label for="numero1">Primer número:</label>
                <input type="number" id="numero1" name="numero1" required>
            </div>
            <div class="form-group">
                <label for="numero2">Segundo número:</label>
                <input type="number" id="numero2" name="numero2" required>
            </div>
            <div class="form-group">
                <label for="operacion">Operación:</label>
                <select id="operacion" name="operacion">
                    <option value="SUMA">Suma</option>
                    <option value="RESTA">Resta</option>
                    <option value="MULTIPLICACION">Multiplicación</option>
                    <option value="DIVISION">División</option>
                </select>
            </div>
                    <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $numero1 = $_POST['numero1'];
                                $numero2 = $_POST['numero2'];
                                $operacion = $_POST['operacion'];
                                
                                switch ($operacion) {
                                    
                                    case 'SUMA':
                                        $resultado = $numero1 + $numero2;
                                        break;
                                    case 'RESTA':
                                        $Tiporesta = "";
                                        if($numero1<$numero2){
                                            $resultado = $numero1 - $numero2;
                                            $Tiporesta = "Resta Negativa";
                                                        
                                        }
                                        $resultado = $numero1 - $numero2;
                                        break;
                                    case 'MULTIPLICACION':
                                        $resultado = $numero1 * $numero2;
                                        break;
                                    case 'DIVISION':
                                        if ($numero2 != 0) {
                                            $resultado = $numero1 / $numero2;
                                        } else {
                                            $resultado = "Error: No se puede dividir entre cero.";
                                        }
                                        break;
                                    default:
                                        $resultado = "Operación inválida";
                                        break;
                                }
                                echo "<p>$Tiporesta <br> Resultado: $resultado </p>";
                            }


                    ?>
            <div class="form-group">
                <button type="submit">Calcular</button>
            </div>
        </form>
    </div>
    
</body>
</html>