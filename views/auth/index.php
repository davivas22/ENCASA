<?php
$pageStylesheet = '/css/style.css';
$pageScript = '/js/style.js';
ob_start();
// Todo el contenido de la página
?>
    <!-- Hero Section -->
    <div class="hero-container">
        <div class="hero-background"></div>
        
        <header>
            <div class="logo">
                <h1>ENCASA</h1>
                <p class="tagline">Tu mejor solución para el hogar</p>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">Acerca de</a></li>
                    <li><a href="/propiedades">Propiedades</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                    <?php if(!isset($_SESSION['login'])): ?>
                    <li><a href="/login" class="contact-btn">Iniciar sesión</a></li>
                    <?php else: ?>
                        <div class="menu-usuario">
                        <details class="detalles-usuario">
                            <summary class="boton-perfil">
                            <img src="/img/profile-icon-design-free-vector.jpg" alt="Foto de perfil" class="foto-perfil">
                            </summary>
                            <ul class="lista-opciones">
                            <li><a href="/perfil"><i class="fas fa-user"></i> Mi perfil</a></li>
                            <li><a href="/favoritos"><i class="fas fa-heart"></i> Mis favoritos</a></li>
                            <li><a href="/solicitud-agente"><i class="fas fa-envelope"></i> Convertirte en agente</a></li>
                            <li><a href="/propiedades"><i class="fas fa-home"></i> Mis propiedades</a></li>
                            <li><a href="/configuracion"><i class="fas fa-cog"></i> Configuración</a></li>
                            <li><a href="/cerrarsesion" class="contact-btn">Cerrar sesión</a></li>
                            </ul>
                        </details>
                        </div>
                      <?php endif;?>
                </ul>
            </nav>
         
        </header>
        
        <div class="hero-content">
            <div class="hero-slides">
                <!-- Slide 1 -->
                <div class="hero-slide active">
                    <h2 class="hero-title">
                        <span class="small-text">Zona rosa</span> Propiedad <span class="small-text">estilo</span><br>
                        MODERNA
                    </h2>
                    <a href="#" class="case-btn">
                        Ver más
                        <span class="arrow">→</span>
                    </a>
                </div>
                
                <!-- Slide 2 -->
                <div class="hero-slide">
                    <h2 class="hero-title">
                        <span class="small-text">Ilopango</span> Horizontes <span class="small-text">estilo</span><br>
                        MODERNA
                    </h2>
                    <a href="#" class="case-btn">
                        Ver más
                        <span class="arrow">→</span>
                    </a>
                </div>
                
                <!-- Slide 3 -->
                <div class="hero-slide">
                    <h2 class="hero-title">
                        <span class="small-text">Santa Tecla</span> Residencial <span class="small-text">estilo</span><br>
                        CONTEMPORÁNEO
                    </h2>
                    <a href="#" class="case-btn">
                        Ver más
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>

        <div class="slider-controls">
            <button class="prev-btn"><i class="fas fa-arrow-left"></i></button>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
            <button class="next-btn"><i class="fas fa-arrow-right"></i></button>
        </div>
        
        <!-- Indicador de Scroll - MODIFICADO: posición más alta -->
        <div class="scroll-indicator">
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
            <span class="scroll-text">Scroll</span>
        </div>
    </div>

    <!-- Sección de Búsqueda -->
    <section class="search-section">
        <div class="container">
            <div class="search-container">
                <h2>Encuentra tu propiedad ideal</h2>
                <form class="search-form">
                    <div class="search-row">
                        <div class="search-group">
                            <label>Tipo de propiedad</label>
                            <select>
                                <option>Todas</option>
                                <option>Casa</option>
                                <option>Apartamento</option>
                                
                                
                            </select>
                        </div>
                        <div class="search-group">
                            <label>Ubicación</label>
                            <select>
                                <option>Todas las zonas</option>
                                <option>Zona Rosa</option>
                                <option>Ilopango</option>
                                <option>Santa Tecla</option>
                                <option>San Salvador</option>
                            </select>
                        </div>
                        <div class="search-group">
                            <label>Precio máximo</label>
                            <select>
                                <option>Sin límite</option>
                                <option>$50,000</option>
                                <option>$100,000</option>
                                <option>$200,000</option>
                                <option>$500,000</option>
                            </select>
                        </div>
                        <div class="search-group">
                            <label>Habitaciones</label>
                            <select>
                                <option>Cualquiera</option>
                                <option>1+</option>
                                <option>2+</option>
                                <option>3+</option>
                                <option>4+</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-solid">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Sección Sobre Nosotros -->
    <section class="about-section">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2 class="section-title">Sobre <span class="highlight">ENCASA</span></h2>
                    <p class="section-text">En ENCASA, nos dedicamos a encontrar el hogar perfecto para cada familia. Con años de experiencia en el mercado inmobiliario, ofrecemos un servicio personalizado y profesional para ayudarte a encontrar la propiedad de tus sueños.</p>
                    <p class="section-text">Nuestro equipo de agentes inmobiliarios altamente capacitados está comprometido con brindar un servicio excepcional y hacer que tu experiencia de compra o venta sea lo más sencilla posible.</p>
                    <a href="#" class="btn-outline">Conoce más sobre nosotros</a>
                </div>
                <div class="about-image">
                    <img src="unnamed.png" alt="Equipo de ENCASA">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios - MODIFICADO: más animado y colorido -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title centered">Nuestros <span class="highlight">Servicios</span></h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Compra de Propiedades</h3>
                    <p>Te ayudamos a encontrar la propiedad perfecta que se ajuste a tus necesidades y presupuesto.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3>Venta de Propiedades</h3>
                    <p>Maximizamos el valor de tu propiedad con estrategias de marketing efectivas y asesoramiento experto.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Renta de propiedades</h3>
                    <p>Te ayudamos a encontrar la propiedad que se adapta a tus necesidades. Ya sea que busques un apartamento o una casa tenemos opciones que se ajustan a tu presupuesto y estilo de vida.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Propiedades Destacadas - MODIFICADO: nuevo diseño -->
    <section class="properties-section">
        <div class="container">
            <div class="properties-title-container">
                <h2 class="section-title centered">Propiedades <span class="highlight">Destacadas</span></h2>
            </div>
            <div class="properties-grid">
                <div class="property-card">
                    <div class="property-image">
                        <img src="architecture-interior-design.jpeg" alt="Propiedad en Zona Rosa">
                        <div class="property-tag">Venta</div>
                    </div>
                    <div class="property-content">
                        <h3>Casa Moderna en Zona Rosa</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Zona Rosa, San Salvador</p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 3 Hab</span>
                            <span><i class="fas fa-bath"></i> 2 Baños</span>
                            <span><i class="fas fa-ruler-combined"></i> 180 m²</span>
                        </div>
                        <div class="property-footer">
                            <p class="property-price">$245,000</p>
                            <a href="/ver-propiedades" class="btn-small">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <div class="property-card">
                    <div class="property-image">
                        <img src="casa-modular-moderna-piscina.jpg" alt="Propiedad en Ilopango">
                        <div class="property-tag">Venta</div>
                    </div>
                    <div class="property-content">
                        <h3>Apartamento en Horizontes</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Ilopango, San Salvador</p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 2 Hab</span>
                            <span><i class="fas fa-bath"></i> 1 Baño</span>
                            <span><i class="fas fa-ruler-combined"></i> 95 m²</span>
                        </div>
                        <div class="property-footer">
                            <p class="property-price">$135,000</p>
                            <a href="/ver-propiedades" class="btn-small">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <div class="property-card">
                    <div class="property-image">
                        <img src="casa-modular-moderna-valencia-piscina-scaled.jpg" alt="Propiedad en Santa Tecla">
                        <div class="property-tag">Venta</div>
                    </div>
                    <div class="property-content">
                        <h3>Residencial en Santa Tecla</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Santa Tecla, La Libertad</p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 4 Hab</span>
                            <span><i class="fas fa-bath"></i> 3 Baños</span>
                            <span><i class="fas fa-ruler-combined"></i> 250 m²</span>
                        </div>
                        <div class="property-footer">
                            <p class="property-price">$320,000</p>
                            <a href="/ver-propiedades" class="btn-small">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="centered-button">
                <a href="#" class="btn-outline">Ver todas las propiedades</a>
            </div>
        </div>
    </section>

    <!-- Sección de Testimonios -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title centered">Lo que dicen <span class="highlight">nuestros clientes</span></h2>
            <div class="testimonials-slider">
                <div class="testimonial">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"El equipo de ENCASA hizo que el proceso de compra de nuestra primera casa fuera increíblemente fácil. Siempre estuvieron disponibles para responder nuestras preguntas y nos guiaron en cada paso del camino."</p>
                    <div class="client-info">
                        <h4>María y Juan Rodríguez</h4>
                        <p>Compraron casa en Zona Rosa, 2023</p>
                    </div>
                </div>
                <!-- Más testimonios aquí -->
            </div>
            <div class="testimonial-controls">
                <button class="prev-testimonial"><i class="fas fa-arrow-left"></i></button>
                <button class="next-testimonial"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2 class="section-title">Contacta <span class="highlight">con nosotros</span></h2>
                    <p>¿Interesado en alguna de nuestras propiedades? ¿Tienes alguna pregunta? Contáctanos y te responderemos a la brevedad.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Calle Principal 123, San Salvador</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p>+503 2222-3333</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <p>info@encasa.com</p>
                        </div>
                    </div>
                    
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Mensaje" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn-solid">Enviar mensaje</button>
                    </form>
                </div>
                <div class="contact-map">
                    <!-- Aquí iría un iframe de Google Maps o similar -->
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.027144488119!2d-89.1520390241353!3d13.716805798101126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633766301b1307%3A0x4ed6e59668a0584c!2sColegio%20Don%20Bosco!5e0!3m2!1ses!2ssv!4v1745855019458!5m2!1ses!2ssv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-logo">
                    <h2>ENCASA</h2>
                    <p>Tu mejor solución para el hogar</p>
                </div>
                <div class="footer-links">
                    <h3>Enlaces rápidos</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Propiedades</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h3>Síguenos</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="footer-newsletter">
                    <h3>Newsletter</h3>
                    <p>Suscríbete para recibir noticias sobre nuevas propiedades.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Tu email">
                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 ENCASA Inmobiliaria. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

   
