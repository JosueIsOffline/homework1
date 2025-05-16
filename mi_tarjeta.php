<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tarjeta Personal</title>
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
        
        .card {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .card h2 {
            color: #6a11cb;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .info-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #eee;
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-weight: bold;
            color: #2575fc;
            margin-right: 10px;
        }
        
        .age-status {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: bold;
        }
        
        .adult {
            background-color: #d4edda;
            color: #155724;
        }
        
        .minor {
            background-color: #f8d7da;
            color: #721c24;
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
            <h1>Mi Tarjeta Personal</h1>
        </header>
        
        <div class="card">
            <?php
            $nombre = "Josue";
            $apellido = "Hernandez";
            $edad = 20;
            $carrera = "Ingeniería en Software";
            $universidad = "ITLA";
            ?>
            
            <h2>Información Personal</h2>
            
            <div class="info-item">
                <span class="info-label">Nombre completo:</span>
                <?php echo "$nombre $apellido"; ?>
            </div>
            
            <div class="info-item">
                <span class="info-label">Edad:</span>
                <?php echo $edad; ?> años
            </div>
            
            <div class="info-item">
                <span class="info-label">Carrera:</span>
                <?php echo $carrera; ?>
            </div>
            
            <div class="info-item">
                <span class="info-label">Universidad:</span>
                <?php echo $universidad; ?>
            </div>
            
            <?php
            // Verificación de mayoría de edad
            if ($edad >= 18) {
                echo '<div class="age-status adult">Eres mayor de edad</div>';
            } else {
                echo '<div class="age-status minor">Eres menor de edad</div>';
            }
            ?>
        </div>
        
        <div style="text-align: center;">
            <a href="index.php" class="btn-back">Volver al Menú Principal</a>
        </div>
    </div>
</body>
</html>
