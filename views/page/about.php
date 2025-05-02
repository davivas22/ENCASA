<?php
$pageStylesheet = '/css/about.css';
$pageScript = '/js/about.js';
ob_start();
// Todo el contenido de la página
?>
   <?php include_once __DIR__ . '/../includes/page/header.php';?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>Acerca de ENCASA</h1>
                <p>Conoce nuestra visión, valores y el equipo que hace posible encontrar tu hogar ideal</p>
                <div class="breadcrumbs">
                    <a href="index.html">Inicio</a>
                    <span class="separator"><i class="fas fa-chevron-right"></i></span>
                    <span class="current">Nosotros</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Overview Section -->
    <section class="about-overview">
        <div class="container">
            <div class="section-title">
                <h2>Sobre <span>ENCASA</span></h2>
            </div>
            <div class="overview-content">
                <div class="overview-text">
                    <p class="lead">En ENCASA, nos dedicamos a encontrar el hogar perfecto para cada familia. Con años de experiencia en el mercado inmobiliario, ofrecemos un servicio personalizado y profesional para ayudarte a encontrar la propiedad de tus sueños.</p>
                    
                    <p>Nuestro equipo de agentes inmobiliarios altamente capacitados está comprometido con brindar un servicio excepcional y hacer que tu experiencia de compra o venta sea lo más sencilla posible.</p>
                    
                    <a href="#" class="btn-outline">Conoce más sobre nosotros</a>
                    
                    <div class="stats-container">
                        <div class="stat-item">
                            <span class="stat-number">2023</span>
                            <span class="stat-text">Año de fundación</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30+</span>
                            <span class="stat-text">Propiedades disponibles</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-text">Compromiso</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-text">Agentes profesionales</span>
                        </div>
                    </div>
                </div>
                <div class="overview-image">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1073&q=80" alt="ENCASA Inmobiliaria">
                    <div class="image-badge">
                        <span>Desde</span>
                        <span class="year">2023</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Vision Values Section -->
    <section class="mvv-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Nuestra Filosofía</span>
                <h2>Misión, Visión y Valores</h2>
                <p>Estos son los pilares que guían nuestro trabajo diario y nos permiten ofrecer un servicio excepcional</p>
            </div>
            
            <div class="mvv-cards">
                <div class="mvv-card">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Nuestra Misión</h3>
                    <p>Transformar la experiencia inmobiliaria en El Salvador, ofreciendo un servicio personalizado, transparente y de calidad que supere las expectativas de nuestros clientes.</p>
                    <p>Nos comprometemos a facilitar el proceso de compra, venta o alquiler de propiedades, brindando asesoría profesional y acompañamiento en cada etapa.</p>
                </div>
                
                <div class="mvv-card">
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Nuestra Visión</h3>
                    <p>Ser la inmobiliaria de referencia en El Salvador, reconocida por nuestra excelencia, innovación y compromiso con el desarrollo sostenible del sector inmobiliario.</p>
                    <p>Aspiramos a expandir nuestra presencia en toda Centroamérica, manteniendo siempre nuestros estándares de calidad y servicio personalizado.</p>
                </div>
                
                <div class="mvv-card">
                    <div class="card-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Nuestros Valores</h3>
                    <ul class="values-list">
                        <li><i class="fas fa-check"></i> <strong>Integridad:</strong> Actuamos con honestidad y transparencia.</li>
                        <li><i class="fas fa-check"></i> <strong>Excelencia:</strong> Buscamos la perfección en cada detalle.</li>
                        <li><i class="fas fa-check"></i> <strong>Compromiso:</strong> Nos dedicamos a cumplir nuestras promesas.</li>
                        <li><i class="fas fa-check"></i> <strong>Innovación:</strong> Implementamos soluciones creativas.</li>
                        <li><i class="fas fa-check"></i> <strong>Pasión:</strong> Amamos lo que hacemos y lo transmitimos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Nuestro Equipo</span>
                <h2>Conoce a los profesionales detrás de ENCASA</h2>
                <p>Un equipo apasionado y comprometido con hacer realidad tus sueños inmobiliarios</p>
            </div>
            
            <div class="team-leaders">
                <div class="team-card">
                    <div class="card-image">
                        <img src="https://media.istockphoto.com/id/140462837/es/foto/linda-cerdo-apoyarse-sobre-la-baranda-de-la-cuna.jpg?s=612x612&w=0&k=20&c=s5JWs0NPQiqyVCT1u5qBSYwLDkKzMCXAwtkqakCB8Lc=" alt="Jimmy Rodríguez">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Jimmy Peña</h3>
                        <span class="position">Fundador & CEO</span>
                        <p>Con una visión innovadora y un compromiso inquebrantable con la excelencia, Jimmy lidera ENCASA desde su reciente fundación, aportando su pasión por el sector inmobiliario.</p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>jimmy@encasa.com</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>+503 7890-1234</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Steven Martínez">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Steven Quevedo</h3>
                        <span class="position">Fundador & Director de Operaciones</span>
                        <p>Especialista en gestión inmobiliaria y desarrollo de proyectos, Steven aporta su conocimiento y entusiasmo para impulsar el crecimiento de ENCASA en El Salvador.</p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>steven@encasa.com</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>+503 7890-5678</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="card-image">
                        <img src="https://images.cults3d.com/7N7stDIDIoYFpLo7f_FCruK9njE=/516x516/filters:no_upscale()/https://fbi.cults3d.com/uploaders/15556264/illustration-file/f71390c9-f908-4aa4-aefd-4bc895c2eb9a/8.png" alt="Samuel Hernández">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Samuel Menjivar</h3>
                        <span class="position">Fundador & Director Comercial</span>
                        <p>Con formación en ventas y marketing inmobiliario, Samuel desarrolla estrategias innovadoras para posicionar a ENCASA como una nueva referencia en el mercado salvadoreño.</p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>samuel@encasa.com</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>+503 7890-9012</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80" alt="Ana Morales">
                    <div class="member-info">
                        <h4>Ana Morales</h4>
                        <span>Gerente de Ventas</span>
                    </div>
                </div>
                
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Carlos Mendoza">
                    <div class="member-info">
                        <h4>Carlos Mendoza</h4>
                        <span>Asesor Senior</span>
                    </div>
                </div>
                
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=461&q=80" alt="Laura Guzmán">
                    <div class="member-info">
                        <h4>Laura Guzmán</h4>
                        <span>Asesora Inmobiliaria</span>
                    </div>
                </div>
                
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Roberto Díaz">
                    <div class="member-info">
                        <h4>Roberto Díaz</h4>
                        <span>Asesor Inmobiliario</span>
                    </div>
                </div>
            </div>
            
            <div class="team-cta">
                <p>Contamos con un equipo de 8 agentes inmobiliarios profesionales, comprometidos con ofrecer el mejor servicio.</p>
                <a href="team.html" class="btn-outline">Ver equipo completo <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Testimonios</span>
                <h2>Lo que dicen nuestros clientes</h2>
                <p>La satisfacción de nuestros clientes es nuestro mayor logro</p>
            </div>
            
            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">ENCASA hizo que el proceso de compra de mi primera casa fuera increíblemente fácil. Su equipo fue profesional, atento y siempre disponible para responder mis preguntas. ¡Altamente recomendados!</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="María Campos">
                        <div class="author-info">
                            <h4>María Campos</h4>
                            <span>Cliente reciente</span>
                        </div>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">Vendí mi propiedad a través de ENCASA y quedé impresionado con su profesionalismo y eficiencia. Lograron un precio mejor del que esperaba y en tiempo récord. Sin duda, volveré a trabajar con ellos.</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Javier Ramos">
                        <div class="author-info">
                            <h4>Javier Ramos</h4>
                            <span>Cliente reciente</span>
                        </div>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">Como inversionista inmobiliario, valoro la honestidad y el conocimiento del mercado. ENCASA ha demostrado ambas cualidades en cada transacción que hemos realizado juntos. Son mi primera opción siempre.</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Sofía Mendoza">
                        <div class="author-info">
                            <h4>Sofía Mendoza</h4>
                            <span>Cliente reciente</span>
                        </div>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Preguntas Frecuentes</span>
                <h2>Resolvemos tus dudas</h2>
                <p>Encuentra respuestas a las preguntas más comunes sobre nuestros servicios</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Cuáles son los servicios que ofrece ENCASA?</h3>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>ENCASA ofrece servicios completos de compra, venta y alquiler de propiedades, incluyendo asesoría legal, financiera y técnica. También brindamos servicios de administración de propiedades y consultoría inmobiliaria para inversionistas.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Cómo puedo vender mi propiedad con ENCASA?</h3>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>El proceso es simple: contáctanos para una evaluación gratuita de tu propiedad, firmamos un contrato de exclusividad, realizamos un plan de marketing personalizado, gestionamos las visitas y negociaciones, y te acompañamos hasta el cierre de la venta.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Cuáles son las comisiones por venta de propiedades?</h3>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Nuestras comisiones son competitivas y se establecen según el tipo y valor de la propiedad. Generalmente oscilan entre el 3% y 5% del valor de venta. Esta comisión incluye todos nuestros servicios, desde el marketing hasta el cierre de la transacción.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿En qué zonas de El Salvador opera ENCASA?</h3>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Operamos en todo El Salvador, con oficinas en San Salvador y Santa Ana. Tenemos especial presencia en zonas como Escalón, Santa Elena, Antiguo Cuscatlán, Colonia San Benito, Santa Tecla, y otras áreas residenciales y comerciales importantes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>¿Listo para encontrar tu hogar ideal?</h2>
                <p>Nuestro equipo de profesionales está esperando para ayudarte a hacer realidad tus sueños inmobiliarios.</p>
                <div class="cta-buttons">
                    <a href="contact.html" class="btn-primary">Contáctanos ahora <i class="fas fa-arrow-right"></i></a>
                    <a href="properties.html" class="btn-outline">Ver propiedades <i class="fas fa-home"></i></a>
                </div>
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
