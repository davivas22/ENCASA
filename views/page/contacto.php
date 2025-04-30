<?php
$pageStylesheet = '/css/contacto.css';
$pageScript = '/js/contacto.js';
ob_start();
// Todo el contenido de la página
?>
   <!-- Navbar -->
   <nav class="navbar">
        <div class="container">
            <div class="navbar-content">
                <div class="logo">
                    <a href="index.html">
                        <span class="logo-text">ENCASA</span>
                    </a>
                </div>
                
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                
                <ul class="nav-menu">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about-section.html" class="nav-link">Acerca de</a></li>
                    <li class="nav-item"><a href="properties.html" class="nav-link">Propiedades</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link active">Contacto</a></li>
                    <li class="nav-item nav-button"><a href="login.html" class="btn-login">Iniciar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Contacto</h1>
                <p>Estamos aquí para ayudarte a encontrar tu hogar ideal</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-form-container">
                    <div class="section-title">
                        <h2>Envíanos un <span>mensaje</span></h2>
                    </div>
                    <p class="contact-intro">Completa el formulario y nos pondremos en contacto contigo lo antes posible.</p>
                    
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Nombre completo</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Asunto</label>
                            <select id="subject" name="subject" required>
                                <option value="" disabled selected>Selecciona una opción</option>
                                <option value="compra">Compra de propiedad</option>
                                <option value="venta">Venta de propiedad</option>
                                <option value="alquiler">Alquiler</option>
                                <option value="inversion">Inversión</option>
                                <option value="asesoria">Asesoría legal</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <div class="form-group form-checkbox">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">Acepto la <a href="#">política de privacidad</a> y el tratamiento de mis datos.</label>
                        </div>
                        
                        <button type="submit" class="btn-primary">Enviar mensaje</button>
                    </form>
                </div>
                
                <div class="contact-info-container">
                    <div class="section-title">
                        <h2>Información de <span>contacto</span></h2>
                    </div>
                    
                    <div class="contact-info">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Dirección</h3>
                                <p>Colonia Escalón, Calle La Reforma #123<br>San Salvador, El Salvador</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <h3>Teléfono</h3>
                                <p>+503 2245-6789<br>+503 7123-4567</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h3>Email</h3>
                                <p>info@encasa.com<br>ventas@encasa.com</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h3>Horario</h3>
                                <p>Lunes a Viernes: 8:00 AM - 5:00 PM<br>Sábados: 9:00 AM - 1:00 PM</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <h3>Síguenos</h3>
                        <div class="social-icons">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-title center">
                <h2>Nuestra <span>ubicación</span></h2>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15504.806937970463!2d-89.22941541803905!3d13.701019090687383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633067b411775d%3A0x7f13879307634536!2sCol%20Escal%C3%B3n%2C%20San%20Salvador!5e0!3m2!1ses!2ssv!4v1650298118760!5m2!1ses!2ssv" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta">
        <div class="container">
            <div class="cta-content">
                <h2>¿Prefieres hablar directamente con un asesor?</h2>
                <p>Nuestro equipo de expertos está listo para atenderte y resolver todas tus dudas.</p>
                <a href="tel:+50322456789" class="btn-primary"><i class="fas fa-phone"></i> Llámanos ahora</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <span class="logo-text">ENCASA</span>
                    </div>
                    <p>Tu nuevo socio de confianza en el mercado inmobiliario salvadoreño. Comprometidos con hacer de tu experiencia inmobiliaria algo excepcional.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Enlaces rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-section.html">Acerca de</a></li>
                        <li><a href="properties.html">Propiedades</a></li>
                        <li><a href="contact.html">Contacto</a></li>
                        <li><a href="login.html">Iniciar sesión</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Servicios</h3>
                    <ul class="footer-links">
                        <li><a href="#">Compra de propiedades</a></li>
                        <li><a href="#">Venta de propiedades</a></li>
                        <li><a href="#">Alquiler de propiedades</a></li>
                        <li><a href="#">Administración de propiedades</a></li>
                        <li><a href="#">Asesoría legal</a></li>
                        <li><a href="#">Consultoría inmobiliaria</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contáctanos</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> Colonia Escalón, Calle La Reforma #123, San Salvador</p>
                        <p><i class="fas fa-phone"></i> +503 2245-6789</p>
                        <p><i class="fas fa-envelope"></i> info@encasa.com</p>
                        <p><i class="fas fa-clock"></i> Lun - Vie: 8:00 AM - 5:00 PM</p>
                    </div>
                    <div class="newsletter">
                        <h4>Suscríbete a nuestro boletín</h4>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Tu correo electrónico">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 ENCASA Inmobiliaria. Todos los derechos reservados.</p>
                <div class="footer-bottom-links">
                    <a href="#">Términos y condiciones</a>
                    <a href="#">Política de privacidad</a>
                    <a href="#">Política de cookies</a>
                </div>
            </div>
        </div>
    </footer>
  