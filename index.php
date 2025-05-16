<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP Básico</title>
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

.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 91vh;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    flex: 1
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

h1 {
    margin-bottom: 15px;
}

.menu {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 20px;
}

.menu-item {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 200px;
    text-align: center;
}

.menu-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.menu-item a {
    display: block;
    padding: 20px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: background-color 0.3s;
}

.menu-item a:hover {
    background-color: #f0f0f0;
}

.menu-icon {
    font-size: 24px;
    margin-bottom: 10px;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
    border-radius: 10px;
}
</style>
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