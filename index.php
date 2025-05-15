<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP Básico</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="wrapper">
    <div class="container">
        <header>
            <h1>Proyecto PHP Básico</h1>
            <p>Aprende los fundamentos de PHP con ejemplos prácticos</p>
        </header>
        
        <div class="menu">
            <div class="menu-item">
                <a href="mi_tarjeta.php">
                    <div class="menu-icon">👤</div>
                    Mi Tarjeta
                </a>
            </div>
            
            <div class="menu-item">
                <a href="calculadora.php">
                    <div class="menu-icon">🔢</div>
                    Calculadora
                </a>
            </div>
            
            <div class="menu-item">
                <a href="adivina.php">
                    <div class="menu-icon">🎮</div>
                    Adivina Mi Número
                </a>
            </div>
            
            <div class="menu-item">
                <a href="acerca_de.php">
                    <div class="menu-icon">ℹ️</div>
                    Acerca De
                </a>
            </div>
        </div>
    </div>
    </div>
    
    <?php include './partials/footer.php'; ?>
</body>
</html>