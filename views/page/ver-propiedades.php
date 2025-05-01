<?php
$pageStylesheet = '/css/ver-propiedades.css';
$pageScript = '/js/ver-propiedades.js';
ob_start();
// Todo el contenido de la página
?>
    <!-- Navegación -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.html">
                    <h1>ENCASA</h1>
                    <p>Tu mejor solución para el hogar</p>
                </a>
            </div>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">Acerca de</a>
                <a href="#">Propiedades</a>
                <a href="#">Contacto</a>
                <a href="#" class="btn-login">Iniciar sesión</a>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Sección de galería de imágenes -->
    <section class="property-gallery">
        <div class="gallery-container">
            <div class="main-image">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-8HK2uUCOKs80qyJ5Ne1HK2uOdxnA8L.png" alt="Residencial Santa Tecla" id="mainImage">
                <div class="image-counter">1 / 6</div>
                <button class="gallery-nav prev"><i class="fas fa-chevron-left"></i></button>
                <button class="gallery-nav next"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="thumbnails">
                <img src="mh2729_1_villa-1.jpg" alt="Vista exterior" class="active" onclick="changeImage(0)">
                <img src="mh2729_1_villa-1.jpg" alt="Sala de estar" onclick="changeImage(1)">
                <img src="mh2729_1_villa-1.jpg" alt="Cocina" onclick="changeImage(2)">
                <img src="mh2729_1_villa-1.jpg" alt="Dormitorio principal" onclick="changeImage(3)">
                <img src="mh2729_1_villa-1.jpg" alt="Baño" onclick="changeImage(4)">
                <img src="mh2729_1_villa-1.jpg" alt="Área de piscina" onclick="changeImage(5)">
            </div>
        </div>
    </section>

    <!-- Información principal de la propiedad -->
    <section class="property-main-info">
        <div class="container">
            <div class="property-header">
                <div class="property-title">
                    <h1>Residencial en Santa Tecla</h1>
                    <p class="property-location"><i class="fas fa-map-marker-alt"></i> Santa Tecla, La Libertad</p>
                </div>
                <div class="property-price">
                    <h2>$320,000</h2>
                    <span class="price-tag">Venta</span>
                </div>
            </div>
            
            <div class="property-features">
                <div class="feature">
                    <i class="fas fa-bed"></i>
                    <span>4 Habitaciones</span>
                </div>
                <div class="feature">
                    <i class="fas fa-bath"></i>
                    <span>3 Baños</span>
                </div>
                <div class="feature">
                    <i class="fas fa-ruler-combined"></i>
                    <span>250 m²</span>
                </div>
                <div class="feature">
                    <i class="fas fa-car"></i>
                    <span>2 Garajes</span>
                </div>
                <div class="feature">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Construido en 2022</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Descripción detallada -->
    <section class="property-description">
        <div class="container">
            <div class="description-content">
                <h2>Descripción</h2>
                <p>Espectacular residencia de estilo contemporáneo ubicada en una de las zonas más exclusivas de Santa Tecla. Esta propiedad de lujo ofrece amplios espacios, acabados de primera calidad y un diseño moderno que maximiza la entrada de luz natural.</p>
                <p>La casa cuenta con 4 habitaciones, incluyendo una suite principal con vestidor y baño privado, 3 baños completos, sala de estar con doble altura, comedor formal, cocina equipada con isla central, área de lavandería, terraza y piscina privada.</p>
                <p>El diseño minimalista se complementa con materiales de alta calidad como mármol, madera y cristal, creando ambientes elegantes y confortables. La propiedad está rodeada de áreas verdes que brindan privacidad y tranquilidad.</p>
                
                <h3>Características destacadas</h3>
                <ul class="amenities-list">
                    <li><i class="fas fa-check"></i> Piscina privada</li>
                    <li><i class="fas fa-check"></i> Jardín paisajístico</li>
                    <li><i class="fas fa-check"></i> Sistema de seguridad 24/7</li>
                    <li><i class="fas fa-check"></i> Cocina equipada con electrodomésticos de alta gama</li>
                    <li><i class="fas fa-check"></i> Aire acondicionado en todas las habitaciones</li>
                    <li><i class="fas fa-check"></i> Ventanas de doble acristalamiento</li>
                    <li><i class="fas fa-check"></i> Terraza con área de barbacoa</li>
                    <li><i class="fas fa-check"></i> Acceso a áreas comunes del residencial</li>
                </ul>
            </div>
            
           
    </section>

    <!-- Información del agente -->
    <section class="agent-info">
        <div class="container">
            <h2>Agente inmobiliario</h2>
            <div class="agent-card">
                <div class="agent-photo">
                    <img src="/placeholder.svg?height=300&width=300&query=professional%20real%20estate%20agent" alt="Agente inmobiliario">
                </div>
                <div class="agent-details">
                    <h3>Carlos Mendoza</h3>
                    <p class="agent-title">Agente Senior</p>
                    <p class="agent-description">Con más de 10 años de experiencia en el mercado inmobiliario de lujo, Carlos se especializa en propiedades exclusivas en las zonas más prestigiosas del país.</p>
                    <div class="agent-contact">
                        <a href="tel:+50322334455"><i class="fas fa-phone"></i> +503 2233-4455</a>
                        <a href="mailto:carlos@encasa.com"><i class="fas fa-envelope"></i> carlos@encasa.com</a>
                    </div>
                    <button class="btn-contact">Contactar ahora</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Ubicación con Google Maps -->
    <section class="property-location">
        <div class="container">
            <h2>Ubicación</h2>
            <div class="location-details">
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15502.022091684707!2d-89.30000037145996!3d13.673899999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632efe53778fb3%3A0x21f34da7f1473fd3!2sSanta%20Tecla%2C%20El%20Salvador!5e0!3m2!1ses!2s!4v1651055283619!5m2!1ses!2s" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="location-info">
                    <h3>Acerca de la zona</h3>
                    <p>Santa Tecla es una de las zonas residenciales más exclusivas y seguras del país, conocida por su excelente calidad de vida, infraestructura moderna y cercanía a todos los servicios.</p>
                    
                    <h4>Puntos de interés cercanos:</h4>
                    <ul class="nearby-places">
                        <li><i class="fas fa-shopping-cart"></i> Centro comercial Multiplaza (5 min)</li>
                        <li><i class="fas fa-utensils"></i> Zona gastronómica El Paseo (8 min)</li>
                        <li><i class="fas fa-graduation-cap"></i> Colegio Internacional (3 min)</li>
                        <li><i class="fas fa-hospital"></i> Hospital Privado (10 min)</li>
                        <li><i class="fas fa-tree"></i> Parque Daniel Hernández (7 min)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Propiedades por el mismo agente -->
    <section class="agent-properties">
        <div class="container">
            <h2>Propiedades por el mismo agente</h2>
            <div class="agent-name">
                <img src="/placeholder.svg?height=50&width=50&query=professional%20real%20estate%20agent" alt="Carlos Mendoza" class="agent-mini-photo">
                <span>Carlos Mendoza</span>
            </div>
            <div class="properties-grid">
                <div class="property-card" data-aos="fade-up">
                    <div class="property-image">
                        <img src="/placeholder.svg?height=300&width=400&query=modern%20house%20with%20garden" alt="Casa en Escalón">
                        <span class="property-tag">Venta</span>
                        <div class="agent-badge">
                            <i class="fas fa-user-tie"></i> Carlos Mendoza
                        </div>
                    </div>
                    <div class="property-info">
                        <h3>Casa en Escalón</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Colonia Escalón, San Salvador</p>
                        <div class="property-features-mini">
                            <span><i class="fas fa-bed"></i> 3</span>
                            <span><i class="fas fa-bath"></i> 2</span>
                            <span><i class="fas fa-ruler-combined"></i> 180m²</span>
                        </div>
                        <p class="property-price">$275,000</p>
                        <a href="#" class="btn-details">Ver detalles</a>
                    </div>
                </div>
                
                <div class="property-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="property-image">
                        <img src="/placeholder.svg?height=300&width=400&query=luxury%20apartment%20with%20view" alt="Apartamento en Antiguo Cuscatlán">
                        <span class="property-tag">Venta</span>
                        <div class="agent-badge">
                            <i class="fas fa-user-tie"></i> Carlos Mendoza
                        </div>
                    </div>
                    <div class="property-info">
                        <h3>Apartamento en Antiguo Cuscatlán</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Antiguo Cuscatlán, La Libertad</p>
                        <div class="property-features-mini">
                            <span><i class="fas fa-bed"></i> 2</span>
                            <span><i class="fas fa-bath"></i> 2</span>
                            <span><i class="fas fa-ruler-combined"></i> 120m²</span>
                        </div>
                        <p class="property-price">$195,000</p>
                        <a href="#" class="btn-details">Ver detalles</a>
                    </div>
                </div>
                
                <div class="property-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="property-image">
                        <img src="/placeholder.svg?height=300&width=400&query=modern%20villa%20with%20pool" alt="Villa en Santa Elena">
                        <span class="property-tag">Venta</span>
                        <div class="agent-badge">
                            <i class="fas fa-user-tie"></i> Carlos Mendoza
                        </div>
                    </div>
                    <div class="property-info">
                        <h3>Villa en Santa Elena</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Santa Elena, Antiguo Cuscatlán</p>
                        <div class="property-features-mini">
                            <span><i class="fas fa-bed"></i> 4</span>
                            <span><i class="fas fa-bath"></i> 3.5</span>
                            <span><i class="fas fa-ruler-combined"></i> 280m²</span>
                        </div>
                        <p class="property-price">$350,000</p>
                        <a href="#" class="btn-details">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de contacto -->
    <section class="contact-form">
        <div class="container">
            <div class="form-container">
                <h2>¿Interesado en esta propiedad?</h2>
                <p>Complete el formulario y nos pondremos en contacto con usted a la brevedad.</p>
                
                <form id="propertyContactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nombre completo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Mensaje" rows="4" required>Estoy interesado en esta propiedad (Residencial en Santa Tecla). Por favor contáctenme para más información.</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-submit">Enviar mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h2>ENCASA</h2>
                    <p>Tu mejor solución para el hogar</p>
                </div>
                
                <div class="footer-links">
                    <div class="footer-column">
                        <h3>Navegación</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Acerca de</a></li>
                            <li><a href="#">Propiedades</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Servicios</h3>
                        <ul>
                            <li><a href="#">Venta de propiedades</a></li>
                            <li><a href="#">Alquiler de propiedades</a></li>
                            <li><a href="#">Asesoría inmobiliaria</a></li>
                            <li><a href="#">Tasaciones</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Contacto</h3>
                        <ul class="contact-info">
                            <li><i class="fas fa-map-marker-alt"></i> Av. La Revolución, Col. Escalón, San Salvador</li>
                            <li><i class="fas fa-phone"></i> +503 2233-4455</li>
                            <li><i class="fas fa-envelope"></i> info@encasa.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
                <p class="copyright">© 2025 ENCASA. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Botón de volver arriba -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Modal de galería -->
    <div id="galleryModal" class="modal">
        <span class="close-modal">&times;</span>
        <div class="modal-content">
            <img id="modalImage" src="/placeholder.svg" alt="Imagen ampliada">
            <button class="modal-nav prev"><i class="fas fa-chevron-left"></i></button>
            <button class="modal-nav next"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="modal-thumbnails">
            <!-- Se generará dinámicamente con JavaScript -->
        </div>
    </div>
