<?php
$pageStylesheet = '/css/agente.css';
$pageScript = '/js/agente.js';
ob_start();
// Todo el contenido de la página
?>
<body>
    <?php include_once __DIR__ . '/../includes/agentes/sidebar.php';?>

        <!-- Main Content -->
        <main class="main-content">
            <header class="content-header">
                <div class="toggle-sidebar">
                    <i class="fas fa-bars"></i>
                </div>
                
                <div class="header-search">
                    <input type="text" placeholder="Buscar propiedades...">
                    <i class="fas fa-search"></i>
                </div>
                
                <div class="header-right">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    
                    <div class="user-profile">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Foto de perfil">
                        <div class="user-info">
                            <h4>Carlos Mendoza</h4>
                            <p>Agente Senior</p>
                        </div>
                    </div>
                </div>
            </header>
            
            <div class="content-wrapper">
                <div class="page-header animate__animated animate__fadeIn">
                    <h2>Mis Propiedades</h2>
                    <a href="agente-agregar-propiedad.html" class="btn-primary">
                        <i class="fas fa-plus"></i> Agregar Propiedad
                    </a>
                </div>
                
                <div class="properties-filters animate__animated animate__fadeIn">
                    <div class="filter-group">
                        <label>Tipo</label>
                        <select>
                            <option value="">Todos</option>
                            <option value="casa">Casa</option>
                            <option value="apartamento">Apartamento</option>
                            <option value="terreno">Terreno</option>
                            <option value="local">Local Comercial</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Estado</label>
                        <select>
                            <option value="">Todos</option>
                            <option value="venta">En Venta</option>
                            <option value="alquiler">En Alquiler</option>
                            <option value="vendido">Vendido</option>
                            <option value="alquilado">Alquilado</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Ubicación</label>
                        <select>
                            <option value="">Todas</option>
                            <option value="san-salvador">San Salvador</option>
                            <option value="santa-tecla">Santa Tecla</option>
                            <option value="antiguo-cuscatlan">Antiguo Cuscatlán</option>
                            <option value="ilopango">Ilopango</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Ordenar por</label>
                        <select>
                            <option value="reciente">Más recientes</option>
                            <option value="precio-asc">Precio: menor a mayor</option>
                            <option value="precio-desc">Precio: mayor a menor</option>
                            <option value="visitas">Más visitadas</option>
                        </select>
                    </div>
                    
                    <button class="btn-filter">
                        <i class="fas fa-filter"></i> Filtrar
                    </button>
                </div>
                
                <div class="properties-grid animate__animated animate__fadeIn">
                    <!-- Propiedad 1 -->
                    <div class="property-card">
                        <div class="property-header">
                            <div class="property-image">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Casa Moderna en Zona Rosa">
                                <span class="property-status">Venta</span>
                                <div class="property-actions">
                                    <button class="btn-action edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action delete" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="btn-action view" title="Ver">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="property-body">
                            <h3 class="property-title">Casa Moderna en Zona Rosa</h3>
                            <p class="property-location"><i class="fas fa-map-marker-alt"></i> Zona Rosa, San Salvador</p>
                            
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 3 Hab</span>
                                <span><i class="fas fa-bath"></i> 2 Baños</span>
                                <span><i class="fas fa-ruler-combined"></i> 180 m²</span>
                            </div>
                            
                            <div class="property-footer">
                                <div class="property-price">$245,000</div>
                                <div class="property-stats">
                                    <span title="Visitas"><i class="fas fa-eye"></i> 245</span>
                                    <span title="Solicitudes"><i class="fas fa-envelope"></i> 12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Propiedad 2 -->
                    <div class="property-card">
                        <div class="property-header">
                            <div class="property-image">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Apartamento en Horizontes">
                                <span class="property-status">Venta</span>
                                <div class="property-actions">
                                    <button class="btn-action edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action delete" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="btn-action view" title="Ver">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="property-body">
                            <h3 class="property-title">Apartamento en Horizontes</h3>
                            <p class="property-location"><i class="fas fa-map-marker-alt"></i> Ilopango, San Salvador</p>
                            
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 2 Hab</span>
                                <span><i class="fas fa-bath"></i> 1 Baño</span>
                                <span><i class="fas fa-ruler-combined"></i> 95 m²</span>
                            </div>
                            
                            <div class="property-footer">
                                <div class="property-price">$135,000</div>
                                <div class="property-stats">
                                    <span title="Visitas"><i class="fas fa-eye"></i> 187</span>
                                    <span title="Solicitudes"><i class="fas fa-envelope"></i> 8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Propiedad 3 -->
                    <div class="property-card">
                        <div class="property-header">
                            <div class="property-image">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Residencial en Santa Tecla">
                                <span class="property-status">Venta</span>
                                <div class="property-actions">
                                    <button class="btn-action edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action delete" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="btn-action view" title="Ver">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="property-body">
                            <h3 class="property-title">Residencial en Santa Tecla</h3>
                            <p class="property-location"><i class="fas fa-map-marker-alt"></i> Santa Tecla, La Libertad</p>
                            
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 4 Hab</span>
                                <span><i class="fas fa-bath"></i> 3 Baños</span>
                                <span><i class="fas fa-ruler-combined"></i> 250 m²</span>
                            </div>
                            
                            <div class="property-footer">
                                <div class="property-price">$320,000</div>
                                <div class="property-stats">
                                    <span title="Visitas"><i class="fas fa-eye"></i> 312</span>
                                    <span title="Solicitudes"><i class="fas fa-envelope"></i> 15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Propiedad 4 -->
                    <div class="property-card">
                        <div class="property-header">
                            <div class="property-image">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Villa de Lujo en Antiguo Cuscatlán">
                                <span class="property-status">Venta</span>
                                <div class="property-actions">
                                    <button class="btn-action edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action delete" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="btn-action view" title="Ver">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="property-body">
                            <h3 class="property-title">Villa de Lujo en Antiguo Cuscatlán</h3>
                            <p class="property-location"><i class="fas fa-map-marker-alt"></i> Antiguo Cuscatlán, La Libertad</p>
                            
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 5 Hab</span>
                                <span><i class="fas fa-bath"></i> 4 Baños</span>
                                <span><i class="fas fa-ruler-combined"></i> 350 m²</span>
                            </div>
                            
                            <div class="property-footer">
                                <div class="property-price">$475,000</div>
                                <div class="property-stats">
                                    <span title="Visitas"><i class="fas fa-eye"></i> 198</span>
                                    <span title="Solicitudes"><i class="fas fa-envelope"></i> 10</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Propiedad 5 -->
                    <div class="property-card">
                        <div class="property-header">
                            <div class="property-image">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Penthouse en San Benito">
                                <span class="property-status">Venta</span>
                                <div class="property-actions">
                                    <button class="btn-action edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action delete" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="btn-action view" title="Ver">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="property-body">
                            <h3 class="property-title">Penthouse en San Benito</h3>
                            <p class="property-location"><i class="fas fa-map-marker-alt"></i> San Benito, San Salvador</p>
                            
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 3 Hab</span>
                                <span><i class="fas fa-bath"></i> 2 Baños</span>
                                <span><i class="fas fa-ruler-combined"></i> 200 m²</span>
                            </div>
                            
                            <div class="property-footer">
                                <div class="property-price">$390,000</div>
                                <div class="property-stats">
                                    <span title="Visitas"><i class="fas fa-eye"></i> 156</span>
                                    <span title="Solicitudes"><i class="fas fa-envelope"></i> 7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Propiedad 6 -->
                    <div class="property-card">
                        <div class="property-header">
                            <div class="property-image">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Casa de Campo en Los Planes">
                                <span class="property-status">Venta</span>
                                <div class="property-actions">
                                    <button class="btn-action edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action delete" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="btn-action view" title="Ver">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="property-body">
                            <h3 class="property-title">Casa de Campo en Los Planes</h3>
                            <p class="property-location"><i class="fas fa-map-marker-alt"></i> Los Planes, La Libertad</p>
                            
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 4 Hab</span>
                                <span><i class="fas fa-bath"></i> 3 Baños</span>
                                <span><i class="fas fa-ruler-combined"></i> 280 m²</span>
                            </div>
                            
                            <div class="property-footer">
                                <div class="property-price">$280,000</div>
                                <div class="property-stats">
                                    <span title="Visitas"><i class="fas fa-eye"></i> 203</span>
                                    <span title="Solicitudes"><i class="fas fa-envelope"></i> 9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
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
        </main>
    </div>
    
    <!-- Modal de confirmación para eliminar -->
    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Confirmar eliminación</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar esta propiedad? Esta acción no se puede deshacer.</p>
            </div>
            <div class="modal-footer">
                <button class="btn-secondary" id="cancelDelete">Cancelar</button>
                <button class="btn-danger" id="confirmDelete">Eliminar</button>
            </div>
        </div>
    </div>
    