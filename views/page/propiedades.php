<?php
$pageStylesheet = '/css/propiedades.css';
$pageScript = '/js/propiedades.js';
ob_start();
// Todo el contenido de la página
?>
    <?php include_once __DIR__ . '/../includes/page/header.php';?>

    <!-- Hero Section -->
    <section class="properties-hero">
        <div class="hero-content">
            <h1 class="fade-in">Encuentra tu <span>propiedad ideal</span></h1>
        </div>
    </section>
    

    <!-- Filtros -->
    <section class="filters-section">
        <div class="container">
            <div class="filters-container">
                <div class="filters-header">
                    <h2>Filtrar propiedades</h2>
                    <button class="toggle-filters">
                        <i class="fas fa-sliders-h"></i>
                        <span>Filtros</span>
                    </button>
                </div>
                
                <div class="filters-body">
                    <form class="filters-form">
                        <div class="filter-group">
                            <label>Tipo de propiedad</label>
                            <select class="filter-select">
                                <option value="">Todas</option>
                                <option value="casa">Casa</option>
                                <option value="apartamento">Apartamento</option>
                            </select>
                        </div>
                        
                        <div class="filter-group">
                            <label>Ubicación</label>
                            <select class="filter-select">
                                <option value="">Todas las zonas</option>
                                <option value="ahuachapan">Ahuachapán</option>
                                <option value="sonsonate">Sonsonate</option>
                                <option value="santa-ana">Santa Ana</option>
                                <option value="la-libertad">La Libertad</option>
                                <option value="san-salvador">San Salvador</option>
                                <option value="cuscatlan">Cuscatlán</option>
                                <option value="san-vicente">San Vicente</option>
                                <option value="cabanas">Cabañas</option>
                                <option value="usulutan">Usulutan</option>
                                <option value="san-miguel">San Miguel</option>
                                <option value="morazan">Morazán</option>
                                <option value="la-paz">La Paz</option>
                                <option value="la-union">La union</option>
                                

                            </select>
                        </div>
                        
                        <div class="filter-group">
                            <label>Precio</label>
                            <div class="range-slider">
                                <div class="price-inputs">
                                    <div class="price-input">
                                        <span>Min</span>
                                        <input type="text" value="$0" class="min-price">
                                    </div>
                                    <div class="price-input">
                                        <span>Max</span>
                                        <input type="text" value="$500,000" class="max-price">
                                    </div>
                                </div>
                                <div class="slider-container">
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="500000" value="0" class="min-range">
                                    <input type="range" min="0" max="500000" value="500000" class="max-range">
                                </div>
                            </div>
                        </div>
                        
                        <div class="filter-group">
                            <label>Habitaciones</label>
                            <div class="rooms-filter">
                                <button type="button" class="room-btn active">Cualquiera</button>
                                <button type="button" class="room-btn">1+</button>
                                <button type="button" class="room-btn">2+</button>
                                <button type="button" class="room-btn">3+</button>
                                <button type="button" class="room-btn">4+</button>
                            </div>
                        </div>
                        
                        <div class="filter-group">
                            <label>Baños</label>
                            <div class="rooms-filter">
                                <button type="button" class="room-btn active">Cualquiera</button>
                                <button type="button" class="room-btn">1+</button>
                                <button type="button" class="room-btn">2+</button>
                                <button type="button" class="room-btn">3+</button>
                            </div>
                        </div>
                        
                        <div class="filter-group features-filter">
                            <label>Características</label>
                            <div class="features-grid">
                                <div class="feature-checkbox">
                                    <input type="checkbox" id="feature-pool">
                                    <label for="feature-pool">Piscina</label>
                                </div>
                                <div class="feature-checkbox">
                                    <input type="checkbox" id="feature-garden">
                                    <label for="feature-garden">Jardín</label>
                                </div>
                                <div class="feature-checkbox">
                                    <input type="checkbox" id="feature-garage">
                                    <label for="feature-garage">Garaje</label>
                                </div>
                                <div class="feature-checkbox">
                                    <input type="checkbox" id="feature-security">
                                    <label for="feature-security">Seguridad</label>
                                </div>
                                <div class="feature-checkbox">
                                    <input type="checkbox" id="feature-furnished">
                                    <label for="feature-furnished">Amueblado</label>
                                </div>
                                <div class="feature-checkbox">
                                    <input type="checkbox" id="feature-ac">
                                    <label for="feature-ac">Aire acondicionado</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="filter-actions">
                            <button type="reset" class="btn-reset">Limpiar filtros</button>
                            <button type="submit" class="btn-apply">Aplicar filtros</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="results-info">
                <p><span class="results-count">24</span> propiedades encontradas</p>
                <div class="view-options">
                    <button class="view-btn active" data-view="grid">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button class="view-btn" data-view="list">
                        <i class="fas fa-list"></i>
                    </button>
                    <select class="sort-select">
                        <option value="relevance">Relevancia</option>
                        <option value="price-asc">Precio: menor a mayor</option>
                        <option value="price-desc">Precio: mayor a menor</option>
                        <option value="date-desc">Más recientes</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Catálogo de Propiedades -->
    <section class="properties-catalog">
        <div class="container">
            <div class="properties-grid">
                <!-- Propiedad 1 -->
                <div class="property-card" data-aos="fade-up">
                    <div class="property-image">
                        <img src="/sleek-poolside-retreat.png" alt="Casa Moderna en Zona Rosa">
                        <div class="property-tags">
                            <span class="property-tag sale">Venta</span>
                            <button class="favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
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
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Propiedad 2 -->
                <div class="property-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="property-image">
                        <img src="/minimalist-loft.png" alt="Apartamento en Horizontes">
                        <div class="property-tags">
                            <span class="property-tag sale">Venta</span>
                            <button class="favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
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
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Propiedad 3 -->
                <div class="property-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="property-image">
                        <img src="/grand-estate-garden.png" alt="Residencial en Santa Tecla">
                        <div class="property-tags">
                            <span class="property-tag sale">Venta</span>
                            <button class="favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
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
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Propiedad 4 -->
                <div class="property-card" data-aos="fade-up">
                    <div class="property-image">
                        <img src="/secluded-villa-oasis.png" alt="Villa de Lujo en Antiguo Cuscatlán">
                        <div class="property-tags">
                            <span class="property-tag sale">Venta</span>
                            <button class="favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="property-content">
                        <h3>Villa de Lujo en Antiguo Cuscatlán</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Antiguo Cuscatlán, La Libertad</p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 5 Hab</span>
                            <span><i class="fas fa-bath"></i> 4 Baños</span>
                            <span><i class="fas fa-ruler-combined"></i> 350 m²</span>
                        </div>
                        <div class="property-footer">
                            <p class="property-price">$475,000</p>
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Propiedad 5 -->
                <div class="property-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="property-image">
                        <img src="/city-lights-penthouse.png" alt="Penthouse en San Benito">
                        <div class="property-tags">
                            <span class="property-tag sale">Venta</span>
                            <button class="favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="property-content">
                        <h3>Penthouse en San Benito</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> San Benito, San Salvador</p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 3 Hab</span>
                            <span><i class="fas fa-bath"></i> 2 Baños</span>
                            <span><i class="fas fa-ruler-combined"></i> 200 m²</span>
                        </div>
                        <div class="property-footer">
                            <p class="property-price">$390,000</p>
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Propiedad 6 -->
                <div class="property-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="property-image">
                        <img src="/mountain-retreat.png" alt="Casa de Campo en Los Planes">
                        <div class="property-tags">
                            <span class="property-tag sale">Venta</span>
                            <button class="favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="property-content">
                        <h3>Casa de Campo en Los Planes</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Los Planes, La Libertad</p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 4 Hab</span>
                            <span><i class="fas fa-bath"></i> 3 Baños</span>
                            <span><i class="fas fa-ruler-combined"></i> 280 m²</span>
                        </div>
                        <div class="property-footer">
                            <p class="property-price">$280,000</p>
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Propiedad 7 -->
                <div class="property-card" data-aos="fade-up">
                    <div class="property-image">
                        <img src="/urban-balcony-view.png" alt="Apartamento en Torre Cuscatlán">
                        <div class="property-tags">
                            <span class="property-tag rent">Alquiler</span>
                            <button class="favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="property-content">
                        <h3>Apartamento en Torre Cuscatlán</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Centro, San Salvador</p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 2 Hab</span>
                            <span><i class="fas fa-bath"></i> 2 Baños</span>
                            <span><i class="fas fa-ruler-combined"></i> 110 m²</span>
                        </div>
                        <div class="property-footer">
                            <p class="property-price">$1,200<span class="price-period">/mes</span></p>
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Propiedad 8 -->
                <div class="property-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="property-image">
                        <img src="/suburban-family-home.png" alt="Casa en Residencial Altavista">
                        <div class="property-tags">
                            <span class="property-tag sale">Venta</span>
                            <button class="favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="property-content">
                        <h3>Casa en Residencial Altavista</h3>
                        <p class="property-location"><i class="fas fa-map-marker-alt"></i> Altavista, San Salvador</p>
                        <div class="property-features">
                            <span><i class="fas fa-bed"></i> 3 Hab</span>
                            <span><i class="fas fa-bath"></i> 2 Baños</span>
                            <span><i class="fas fa-ruler-combined"></i> 160 m²</span>
                        </div>
                        <div class="property-footer">
                            <p class="property-price">$210,000</p>
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Paginación -->
            <div class="pagination">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <span class="page-separator">...</span>
                <button class="page-btn">8</button>
                <button class="page-btn next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Mantente informado</h2>
                <p>Suscríbete para recibir notificaciones sobre nuevas propiedades y ofertas exclusivas</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Tu correo electrónico" required>
                    <button type="submit">Suscribirse</button>
                </form>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Propiedades</a></li>
                        <li><a href="#">Acerca de</a></li>
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

    <!-- Botón de volver arriba -->
    <button class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>