<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina Mi Número</title>
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
        
        .game-box {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }
        
        .game-box h2 {
            color: #6a11cb;
            margin-bottom: 20px;
        }
        
        .game-instructions {
            background-color: #e9f5ff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-size: 15px;
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
        
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            max-width: 150px;
            margin: 0 auto;
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
            width: 150px;
            margin: 0 auto;
            transition: opacity 0.3s;
        }
        
        button:hover {
            opacity: 0.9;
        }
        
        .result {
            margin-top: 30px;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        
        .failure {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .number-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .number-box {
            width: 50px;
            height: 50px;
            background-color: #6a11cb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        
        .numbers {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }
        
        .num-option {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
            border-radius: 50%;
            font-weight: bold;
            color: #555;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Adivina Mi Número</h1>
        </header>
        
        <div class="game-box">
            <h2>¡Prueba tu suerte!</h2>
            
            <div class="game-instructions">
                <p>Adivina el número que estoy pensando entre 1 y 5.</p>
                <p>Ingresa un número y haz clic en "Adivinar" para probar tu suerte.</p>
                
                <div class="numbers">
                    <div class="num-option">1</div>
                    <div class="num-option">2</div>
                    <div class="num-option">3</div>
                    <div class="num-option">4</div>
                    <div class="num-option">5</div>
                </div>
            </div>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="user_number">Tu número:</label>
                    <input type="number" id="user_number" name="user_number" min="1" max="5" required>
                </div>
                
                <button type="submit" name="adivinar">Adivinar</button>
            </form>
            
            <?php
            // Procesar el formulario si se ha enviado
            if (isset($_POST['adivinar'])) {
                // Obtener el número ingresado por el usuario
                $userNumber = intval($_POST['user_number']);
                
                if ($userNumber >= 1 && $userNumber <= 5) {
                    $randomNumber = rand(1, 5);
                    
                    // Comparar los números
                    if ($userNumber === $randomNumber) {
                        echo '<div class="result success">¡Wow, adivinaste!</div>';
                    } else {
                        echo '<div class="result failure">¡Sigue intentando!</div>';
                        echo '<div>El número correcto era:</div>';
                        echo '<div class="number-container"><div class="number-box">' . $randomNumber . '</div></div>';
                    }
                } else {
                    echo '<div class="result failure">Por favor, ingresa un número entre 1 y 5.</div>';
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