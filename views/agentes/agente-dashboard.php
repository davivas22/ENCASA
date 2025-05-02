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
                    <input type="text" placeholder="Buscar...">
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
                    <h2>Dashboard</h2>
                    <p>Bienvenido de nuevo, Carlos</p>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-card animate__animated animate__fadeInUp">
                        <div class="stat-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="stat-info">
                            <h3>12</h3>
                            <p>Propiedades Activas</p>
                        </div>
                        <div class="stat-progress">
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>
                            </div>
                            <p>+8% este mes</p>
                        </div>
                    </div>
                    
                    <div class="stat-card animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
                        <div class="stat-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="stat-info">
                            <h3>5</h3>
                            <p>Solicitudes Nuevas</p>
                        </div>
                        <div class="stat-progress">
                            <div class="progress-bar">
                                <div class="progress" style="width: 40%"></div>
                            </div>
                            <p>+12% este mes</p>
                        </div>
                    </div>
                    
                    <div class="stat-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                        <div class="stat-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="stat-info">
                            <h3>1,245</h3>
                            <p>Visitas a Propiedades</p>
                        </div>
                        <div class="stat-progress">
                            <div class="progress-bar">
                                <div class="progress" style="width: 65%"></div>
                            </div>
                            <p>+15% este mes</p>
                        </div>
                    </div>
                    
                    <div class="stat-card animate__animated animate__fadeInUp" style="animation-delay: 0.3s">
                        <div class="stat-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="stat-info">
                            <h3>3</h3>
                            <p>Ventas Completadas</p>
                        </div>
                        <div class="stat-progress">
                            <div class="progress-bar">
                                <div class="progress" style="width: 30%"></div>
                            </div>
                            <p>+5% este mes</p>
                        </div>
                    </div>
                </div>
                
                <div class="dashboard-grid">
                    <div class="dashboard-card recent-properties animate__animated animate__fadeIn" style="animation-delay: 0.4s">
                        <div class="card-header">
                            <h3>Propiedades Recientes</h3>
                            <a href="agente-propiedades.html" class="view-all">Ver todas</a>
                        </div>
                        
                        <div class="card-content">
                            <div class="property-list">
                                <div class="property-item">
                                    <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Casa Moderna en Zona Rosa">
                                    <div class="property-info">
                                        <h4>Casa Moderna en Zona Rosa</h4>
                                        <p><i class="fas fa-map-marker-alt"></i> Zona Rosa, San Salvador</p>
                                        <div class="property-meta">
                                            <span><i class="fas fa-bed"></i> 3</span>
                                            <span><i class="fas fa-bath"></i> 2</span>
                                            <span><i class="fas fa-ruler-combined"></i> 180 m²</span>
                                        </div>
                                    </div>
                                    <div class="property-price">
                                        <h4>$245,000</h4>
                                        <span class="status">Venta</span>
                                    </div>
                                </div>
                                
                                <div class="property-item">
                                    <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Apartamento en Horizontes">
                                    <div class="property-info">
                                        <h4>Apartamento en Horizontes</h4>
                                        <p><i class="fas fa-map-marker-alt"></i> Ilopango, San Salvador</p>
                                        <div class="property-meta">
                                            <span><i class="fas fa-bed"></i> 2</span>
                                            <span><i class="fas fa-bath"></i> 1</span>
                                            <span><i class="fas fa-ruler-combined"></i> 95 m²</span>
                                        </div>
                                    </div>
                                    <div class="property-price">
                                        <h4>$135,000</h4>
                                        <span class="status">Venta</span>
                                    </div>
                                </div>
                                
                                <div class="property-item">
                                    <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Residencial en Santa Tecla">
                                    <div class="property-info">
                                        <h4>Residencial en Santa Tecla</h4>
                                        <p><i class="fas fa-map-marker-alt"></i> Santa Tecla, La Libertad</p>
                                        <div class="property-meta">
                                            <span><i class="fas fa-bed"></i> 4</span>
                                            <span><i class="fas fa-bath"></i> 3</span>
                                            <span><i class="fas fa-ruler-combined"></i> 250 m²</span>
                                        </div>
                                    </div>
                                    <div class="property-price">
                                        <h4>$320,000</h4>
                                        <span class="status">Venta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dashboard-card recent-requests animate__animated animate__fadeIn" style="animation-delay: 0.5s">
                        <div class="card-header">
                            <h3>Solicitudes Recientes</h3>
                            <a href="agente-solicitudes.html" class="view-all">Ver todas</a>
                        </div>
                        
                        <div class="card-content">
                            <div class="request-list">
                                <div class="request-item">
                                    <div class="request-user">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Foto de cliente">
                                        <div class="request-user-info">
                                            <h4>María Rodríguez</h4>
                                            <p>Interesada en: Casa Moderna en Zona Rosa</p>
                                        </div>
                                    </div>
                                    <div class="request-actions">
                                        <span class="request-date">Hace 2 horas</span>
                                        <button class="btn-view">Ver</button>
                                    </div>
                                </div>
                                
                                <div class="request-item">
                                    <div class="request-user">
                                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Foto de cliente">
                                        <div class="request-user-info">
                                            <h4>Juan Pérez</h4>
                                            <p>Interesado en: Apartamento en Horizontes</p>
                                        </div>
                                    </div>
                                    <div class="request-actions">
                                        <span class="request-date">Hace 5 horas</span>
                                        <button class="btn-view">Ver</button>
                                    </div>
                                </div>
                                
                                <div class="request-item">
                                    <div class="request-user">
                                        <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Foto de cliente">
                                        <div class="request-user-info">
                                            <h4>Ana Martínez</h4>
                                            <p>Interesada en: Residencial en Santa Tecla</p>
                                        </div>
                                    </div>
                                    <div class="request-actions">
                                        <span class="request-date">Hace 1 día</span>
                                        <button class="btn-view">Ver</button>
                                    </div>
                                </div>
                                
                                <div class="request-item">
                                    <div class="request-user">
                                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Foto de cliente">
                                        <div class="request-user-info">
                                            <h4>Roberto Gómez</h4>
                                            <p>Interesado en: Casa Moderna en Zona Rosa</p>
                                        </div>
                                    </div>
                                    <div class="request-actions">
                                        <span class="request-date">Hace 2 días</span>
                                        <button class="btn-view">Ver</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="dashboard-row">
                    <div class="dashboard-card performance-chart animate__animated animate__fadeIn" style="animation-delay: 0.6s">
                        <div class="card-header">
                            <h3>Rendimiento Mensual</h3>
                            <div class="chart-filters">
                                <button class="active">Visitas</button>
                                <button>Solicitudes</button>
                                <button>Ventas</button>
                            </div>
                        </div>
                        
                        <div class="card-content">
                            <div class="chart-container">
                                <canvas id="performanceChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>