<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENCASA - Contacto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #0F1625; /* Dark blue/black background */
            color: white;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            letter-spacing: 1px;
        }

        .nav {
            display: flex;
            gap: 30px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: opacity 0.3s;
        }

        .nav a:hover {
            opacity: 0.8;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            border: none;
            transition: all 0.3s;
        }

        .btn-dark {
            background-color: transparent;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-primary {
            background-color: #2E86DE; /* Blue button */
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* Contact Section Styles */
        .contact-hero {
            position: relative;
            height: 50vh;
            background: linear-gradient(rgba(15, 22, 37, 0.7), rgba(15, 22, 37, 0.7)), url('/api/placeholder/1600/800') center/cover no-repeat;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 70px;
            overflow: hidden;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(46, 134, 222, 0.3), transparent);
            z-index: 1;
        }

        .contact-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .contact-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .contact-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .animated-shape {
            position: absolute;
            background-color: rgba(46, 134, 222, 0.2);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-30px) rotate(180deg);
            }
            100% {
                transform: translateY(0) rotate(360deg);
            }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #0F1625;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #2E86DE;
        }

        /* Team Section */
        .team-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
            margin-bottom: 60px;
        }

        .team-member {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            width: 300px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .member-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .team-member:hover .member-image img {
            transform: scale(1.05);
        }

        .member-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(15, 22, 37, 0.8), transparent);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .team-member:hover .member-overlay {
            opacity: 1;
        }

        .member-info {
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .member-info h3 {
            margin-bottom: 10px;
            color: #0F1625;
            font-size: 1.5rem;
        }

        .member-info p {
            color: #777;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #f0f0f0;
            color: #0F1625;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background-color: #2E86DE;
            color: white;
            transform: translateY(-3px);
        }

        /* Contact Form */
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 30px;
        }

        .contact-info {
            flex: 1;
            min-width: 300px;
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            padding: 15px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .contact-info-item:hover {
            transform: translateY(-5px);
        }

        .contact-icon {
            background-color: #2E86DE;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 20px;
        }

        .contact-text h4 {
            margin-bottom: 5px;
            color: #0F1625;
        }

        .contact-text p {
            color: #777;
            line-height: 1.5;
        }

        .contact-form {
            flex: 1;
            min-width: 300px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .contact-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background-color: #2E86DE;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #0F1625;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #2E86DE;
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 134, 222, 0.2);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background-color: #2E86DE;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-block;
        }

        .submit-btn:hover {
            background-color: #2472C3;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(46, 134, 222, 0.4);
        }

        /* Map Section */
        .map-container {
            height: 400px;
            margin: 60px 0;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .map-placeholder {
            width: 100%;
            height: 100%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 18px;
        }

        /* Footer */
        .footer {
            background-color: #0F1625;
            color: white;
            padding: 40px 0 20px;
            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .footer-links a:hover {
            opacity: 0.8;
        }

        .copyright {
            opacity: 0.7;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header {
                padding: 15px 20px;
                flex-wrap: wrap;
            }

            .nav {
                order: 3;
                width: 100%;
                justify-content: center;
                margin-top: 15px;
            }

            .contact-hero h1 {
                font-size: 2.5rem;
            }

            .contact-hero {
                height: 40vh;
                margin-top: 120px;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="logo">ENCASA</div>
        <div class="nav">
            <a href="../html/viviendas.html">Propiedades</a>
            <a href="../html/nosotros.html">Nosotros</a>
            <a href="../html/Contacto.html">Contacto</a>
            <a href="./">Home</a>



        </div>
        <div class="auth-buttons">
            <button class="btn btn-dark">Iniciar sesión</button>
            <button class="btn btn-primary">Registrarse</button>
        </div>
    </div>

    <!-- Contact Hero Section -->
    <div class="contact-hero">
        <div class="animated-shape" style="width: 80px; height: 80px; bottom: -30px; left: 10%;"></div>
        <div class="animated-shape" style="width: 60px; height: 60px; top: 30%; right: 20%;"></div>
        <div class="animated-shape" style="width: 100px; height: 100px; top: 10%; left: 30%;"></div>
        <div class="contact-hero-content">
            <h1>Contacta con nuestro equipo</h1>
            <p>Estamos aquí para ayudarte a encontrar tu propiedad ideal. Nuestro equipo de expertos está listo para responder a todas tus preguntas.</p>
        </div>
    </div>

    <div class="container">
        <!-- Team Section -->
        <div class="section-title">
            <h2>Nuestros Administradores</h2>
        </div>
        
        <div class="team-container">
            <!-- Steven -->
            <div class="team-member">
                <div class="member-image">
                    <img src="../imagenes/file.enc" alt="Steven">
                    <div class="member-overlay"></div>
                </div>
                <div class="member-info">
                    <h3>Steven</h3>
                    <p>Programador</p>
                    <p>Encargado de backend y frontend.</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/steven_dvq/?utm_source=ig_web_button_share_sheet"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Jimmy -->
            <div class="team-member">
                <div class="member-image">
                    <img src="../imagenes/20230336.jpg" alt="Jimmy">
                    <div class="member-overlay"></div>
                </div>
                <div class="member-info">
                    <h3>Jimmy</h3>
                    <p>Programador</p>
                    <p>Encargado de frontend.</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/jimmysft/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Samuel -->
            <div class="team-member">
                <div class="member-image">
                    <img src="../imagenes/file (1).enc" alt="Samuel">
                    <div class="member-overlay"></div>
                </div>
                <div class="member-info">
                    <h3>Samuel</h3>
                    <p>Programador</p>
                    <p>Encargado de backend</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/ukn_eduardo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="section-title">
            <h2>Ponte en contacto</h2>
        </div>
        
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Ubicación</h4>
                        <p>Colegio Don Bosco</p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Teléfono</h4>
                        <p>+503 69898153</p>
                        <p>+503 72287585</p>
                        <p>+503 77501203</p>

                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Email</h4>
                        <p>estudiante20230336@cdb.edu.sv</p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Horario</h4>
                        <p>Lunes - Viernes: 7:00 AM - 4:15 PM</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h3>Envíanos un mensaje</h3>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input type="text" id="subject" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Enviar mensaje</button>
                </form>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="map-container">
            <div class="map-placeholder">
                <div id="map" style="width: 100%; height: 100%; border-radius: 10px;"></div>

                <script>
                    function initMap() {
                        // Coordenadas del Colegio Don Bosco según el link compartido (13.71416,-89.15573)
                        const location = { lat: 13.71416, lng: -89.15573 };
                        
                        // Crear el mapa
                        const map = new google.maps.Map(document.getElementById("map"), {
                            center: location,
                            zoom: 16,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            styles: [
                                {
                                    "featureType": "all",
                                    "elementType": "geometry.fill",
                                    "stylers": [{ "weight": "2.00" }]
                                },
                                {
                                    "featureType": "administrative",
                                    "elementType": "all",
                                    "stylers": [{ "color": "#f2f2f2" }]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "all",
                                    "stylers": [
                                        { "color": "#2E86DE" },
                                        { "visibility": "on" }
                                    ]
                                }
                            ]
                        });
                        
                        // Añadir un marcador
                        const marker = new google.maps.Marker({
                            position: location,
                            map: map,
                            title: "Colegio Don Bosco",
                            animation: google.maps.Animation.DROP
                        });
                        
                        // Añadir ventana de información
                        const infowindow = new google.maps.InfoWindow({
                            content: "<strong>Colegio Don Bosco</strong><br>ENCASA Inmobiliaria"
                        });
                        
                        marker.addListener("click", () => {
                            infowindow.open(map, marker);
                        });
                    }
                </script>
                
                <!-- Script para cargar la API de Google Maps -->
                <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <div class="footer-links">
            <a href="/index">Home</a>
            <a href="#">Propiedades</a>
            <a href="#">Contacto</a>
            <a href="#">Nosotros</a>
        </div>
        <div class="copyright">© 2025 ENCASA. Todos los derechos reservados.</div>
    </div>

    <script>
        // Form validation and submission animation
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Simple validation
                    const inputs = contactForm.querySelectorAll('input[required], textarea[required]');
                    let isValid = true;
                    
                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            isValid = false;
                            input.classList.add('error');
                        } else {
                            input.classList.remove('error');
                        }
                    });
                    
                    if (isValid) {
                        // Simulate form submission
                        const submitBtn = contactForm.querySelector('.submit-btn');
                        const originalText = submitBtn.innerText;
                        
                        submitBtn.innerText = 'Enviando...';
                        submitBtn.disabled = true;
                        
                        // Simulate API call
                        setTimeout(() => {
                            contactForm.reset();
                            submitBtn.innerText = 'Enviado ✓';
                            
                            setTimeout(() => {
                                submitBtn.innerText = originalText;
                                submitBtn.disabled = false;
                            }, 2000);
                        }, 1500);
                    }
                });
            }
            
            // Add hover effects to team members
            const teamMembers = document.querySelectorAll('.team-member');
            teamMembers.forEach(member => {
                member.addEventListener('mouseenter', function() {
                    this.querySelector('.member-overlay').style.opacity = '1';
                });
                
                member.addEventListener('mouseleave', function() {
                    this.querySelector('.member-overlay').style.opacity = '0';
                });
            });
        });
    </script>
</body>
</html>