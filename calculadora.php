<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 20px 0;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .calculator {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        
        .calculator h2 {
            color: #6a11cb;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        
        input[type="number"], select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        button {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            width: 100%;
            transition: opacity 0.3s;
        }
        
        button:hover {
            opacity: 0.9;
        }
        
        .result {
            margin-top: 30px;
            padding: 20px;
            background-color: #f0f8ff;
            border-radius: 8px;
            text-align: center;
        }
        
        .result h3 {
            margin-bottom: 10px;
            color: #2575fc;
        }
        
        .result-value {
            font-size: 24px;
            font-weight: bold;
            color: #6a11cb;
        }
        
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }
        
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #6a11cb;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .btn-back:hover {
            background-color: #5a0cb2;
        }
        
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background-color: #333;
            color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Calculadora PHP</h1>
        </header>
        
        <div class="calculator">
            <h2>Realiza operaciones matemáticas</h2>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="num1">Primer número:</label>
                    <input type="number" id="num1" name="num1" step="any" required value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="num2">Segundo número:</label>
                    <input type="number" id="num2" name="num2" step="any" required value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="operation">Operación:</label>
                    <select id="operation" name="operation">
                        <option value="suma" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'suma') ? 'selected' : ''; ?>>Sumar</option>
                        <option value="resta" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'resta') ? 'selected' : ''; ?>>Restar</option>
                        <option value="multiplicacion" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'multiplicacion') ? 'selected' : ''; ?>>Multiplicar</option>
                        <option value="division" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'division') ? 'selected' : ''; ?>>Dividir</option>
                    </select>
                </div>
                
                <button type="submit" name="calcular">Calcular</button>
            </form>
            
            <?php
            if (isset($_POST['calcular'])) {
                $num1 = floatval($_POST['num1']);
                $num2 = floatval($_POST['num2']);
                $operation = $_POST['operation'];
                
                $resultado = 0;
                $operationText = '';
                
                switch ($operation) {
                    case 'suma':
                        $resultado = $num1 + $num2;
                        $operationText = 'Suma';
                        break;
                    case 'resta':
                        $resultado = $num1 - $num2;
                        $operationText = 'Resta';
                        break;
                    case 'multiplicacion':
                        $resultado = $num1 * $num2;
                        $operationText = 'Multiplicación';
                        break;
                    case 'division':
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                            $operationText = 'División';
                        } else {
                            echo '<div class="error">Error: No se puede dividir entre cero.</div>';
                            $operationText = ''; 
                        }
                        break;
                }
                
                if ($operationText != '') {
                    echo '<div class="result">';
                    echo '<h3>Resultado de la ' . $operationText . '</h3>';
                    echo '<div class="result-value">' . number_format($resultado, 2) . '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
        
        <div style="text-align: center;">
            <a href="index.php" class="btn-back">Volver al Menú Principal</a>
        </div>
    </div>
</body>
</html>