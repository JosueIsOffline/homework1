<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Acerca De</title>
    <style>
        
        
        
        
        header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 20px 0;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .about-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .tabs {
            display: flex;
            background-color: #f0f0f0;
            overflow: hidden;
            position: relative;
        }
        
        .tabs::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 25%; 
            height: 3px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            transition: transform 0.3s ease;
            z-index: 2;
        }
        
        .tabs.tab-2::before { transform: translateX(100%); }
        .tabs.tab-3::before { transform: translateX(200%); }
        .tabs.tab-4::before { transform: translateX(300%); }
        
        .tab-btn {
            flex: 1;
            padding: 15px;
            text-align: center;
            background: none;
            border: none;
            cursor: pointer;
            font-weight: bold;
            color: #555;
            transition: all 0.3s;
            position: relative;
            z-index: 1;
        }
        
        .tab-btn:hover {
            color: #6a11cb;
        }
        
        .tab-btn.active {
            color: #6a11cb;
        }
        
        /* Contenido de los tabs */
        .tab-content {
            padding: 30px;
            display: none;
            animation: fadeIn 0.5s ease;
        }
        
        .tab-content.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .profile {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 30px;
        }
        
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #f0f0f0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .profile-info {
            flex: 1;
            min-width: 250px;
        }
        
        .profile-info h2 {
            color: #6a11cb;
            margin-bottom: 15px;
        }
        
        .contact-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .contact-btn {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 8px 15px;
            border-radius: 30px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .telegram {
            background-color: #0088cc;
        }
        
        .whatsapp {
            background-color: #25D366;
        }
        
        .contact-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        
        .skill-item {
            background-color: #f0f0f0;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: bold;
            color: #555;
            position: relative;
            overflow: hidden;
        }
        
        .skill-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            transform: translateX(-100%);
            transition: transform 0.3s;
            z-index: -1;
        }
        
        .skill-item:hover {
            color: #6a11cb;
        }
        
        .skill-item:hover::before {
            transform: translateX(0);
        }
        
        .video-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%; 
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 15px 15px rgba(0, 0, 0, 0.1);
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* Estilos para la galería de proyectos */
        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .project-item {
            background-color: #f8f8f8;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .project-item:hover {
            transform: translateY(-5px);
        }
        
        .project-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        
        .project-info {
            padding: 15px;
        }
        
        .project-info h3, a {
            margin-bottom: 10px;
            color: #6a11cb;
            text-decoration: none;
        }

        .project-info h3 a:hover {
            text-decoration: underline;
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
            <h1>Acerca De</h1>
        </header>
        
        <div class="about-container">
            <div class="tabs" id="tabs">
                <button class="tab-btn active" data-tab="1">Perfil</button>
                <button class="tab-btn" data-tab="2">Habilidades</button>
                <button class="tab-btn" data-tab="3">Video Recomendado</button>
                <button class="tab-btn" data-tab="4">Proyectos</button>
            </div>
            
            <!-- Tab de Perfil -->
            <div class="tab-content active" id="tab-1">
                <div class="profile">
                    <?php
                    $nombre = "Josué";
                    $apellido = "Hernández";
                    $descripcion = "Estudiante de Ingeniería en Software apasionado por el desarrollo web y la programación. Siempre en busca de nuevos desafíos y oportunidades para aprender.";
                    ?>
                    
                    <img src="./assets/profile1.jpeg" alt="Foto 2x2" class="profile-img">
                    
                    <div class="profile-info">
                        <h2><?php echo "$nombre $apellido"; ?></h2>
                        <p><?php echo $descripcion; ?></p>
                        
                        <div class="contact-links">
                            <a href="https://t.me/TuUsuarioDeTelegram" class="contact-btn telegram">
                                <i>📱</i> Telegram
                            </a>
                            <a href="https://wa.me/1234567890" class="contact-btn whatsapp">
                                <i>💬</i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tab de Habilidades -->
            <div class="tab-content" id="tab-2">
                <h2>Mis Habilidades</h2>
                <p>Estas son las tecnologías y herramientas con las que trabajo:</p>
                
                <div class="skills">
                    <div class="skill-item">React</div>
                    <div class="skill-item">NodeJS</div>
                    <div class="skill-item">JavaScript</div>
                    <div class="skill-item">TypeScript</div>
                    <div class="skill-item">MySQL</div>
                    <div class="skill-item">Git</div>
                    <div class="skill-item">Tailwind</div>
                    <div class="skill-item">C#</div>
                </div>
            </div>
            
            <div class="tab-content" id="tab-3">
                <h2>Mi Video Recomendado</h2>
                <p>Este es un video que me parece interesante y quiero compartir contigo:</p>
                
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/pXHnLbyDKNQ?si=v2ZdY3AVB43vGYnQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            
            <div class="tab-content" id="tab-4">
                <h2>Mis Proyectos</h2>
                <p>Aquí hay algunos de los proyectos en los que he trabajado:</p>
                
                <div class="projects">
                    <div class="project-item">
                        <div class="project-info">
                            <h3><a href="https://github.com/JosueIsOffline/finance-platform" target="_blank">Finance Platform</a></h3>
                            <p>Finance SaaS Platform With Nextjs, React, Honojs with CSV</p>
                        </div>
                    </div>
                    
                    <div class="project-item">
                        <div class="project-info">
                        <h3><a href="https://github.com/JosueIsOffline/ai-dino" target="_blank">IA Dino</a></h3>
                            <p>Simple Google Dino Game With Neural Network (wip)</p>
                        </div>
                    </div>
                    
                    <div class="project-item">
                        <div class="project-info">
                        <h3><a href="https://github.com/JosueIsOffline/clarencebot" target="_blank">Clarence Bot</a></h3>
                            <p>larenceBot es un bot de discord creado para servir en un servidor de discord llamado “Dominican Devs”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center;">
            <a href="index.php" class="btn-back">Volver al Menú Principal</a>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab-btn');
            const tabsContainer = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const tabId = tab.getAttribute('data-tab');
                                        
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    
                    tabsContainer.className = 'tabs';
                    tabsContainer.classList.add('tab-' + tabId);
                    
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                    });
                    document.getElementById('tab-' + tabId).classList.add('active');
                });
            });
        });
    </script>
</body>
</html>
