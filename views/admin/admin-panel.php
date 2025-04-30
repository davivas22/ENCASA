<?php
$pageStylesheet = '/css/admin-panel.css';
$pageScript = '/js/admin-panel.js';
ob_start();
// Todo el contenido de la página
?>

    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <h1>ENCASA</h1>
                    <p class="tagline">Panel Admin</p>
                </div>
                <button class="toggle-sidebar" id="toggleSidebar">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>

            <div class="admin-profile">
                <div class="admin-avatar">
                    <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Admin">
                </div>
                <div class="admin-info">
                    <h3>Carlos Mendoza</h3>
                    <p>Administrador</p>
                </div>
            </div>

            <nav class="sidebar-nav">
                <ul>
                    <li class="active" data-section="dashboard">
                        <a href="#dashboard">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li data-section="agents">
                        <a href="#agents">
                            <i class="fas fa-user-tie"></i>
                            <span>Agentes</span>
                        </a>
                    </li>
                    <li data-section="properties">
                        <a href="#properties">
                            <i class="fas fa-home"></i>
                            <span>Propiedades</span>
                        </a>
                    </li>
                    <li data-section="reports">
                        <a href="#reports">
                            <i class="fas fa-chart-bar"></i>
                            <span>Reportes</span>
                        </a>
                    </li>
                    <li data-section="reviews">
                        <a href="#reviews">
                            <i class="fas fa-star"></i>
                            <span>Reseñas</span>
                        </a>
                    </li>
                    <li data-section="settings">
                        <a href="#settings">
                            <i class="fas fa-cog"></i>
                            <span>Configuración</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="sidebar-footer">
                <a href="/cerrarsesion" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar sesión</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="content-header">
                <div class="header-left">
                    <h2 id="pageTitle">Dashboard</h2>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar...">
                    </div>
                    <div class="notifications">
                        <button class="notification-btn">
                            <i class="fas fa-bell"></i>
                            <span class="notification-badge">3</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Dashboard Section -->
            <section class="content-section active" id="dashboard-section">
                <div class="dashboard-stats">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="stat-info">
                            <h3>156</h3>
                            <p>Propiedades</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="stat-info">
                            <h3>24</h3>
                            <p>Agentes</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>1,204</h3>
                            <p>Clientes</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$2.4M</h3>
                            <p>Ventas</p>
                        </div>
                    </div>
                </div>

                <div class="dashboard-charts">
                    <div class="chart-container">
                        <div class="chart-header">
                            <h3>Propiedades más vistas</h3>
                            <select class="chart-filter">
                                <option>Últimos 7 días</option>
                                <option>Últimos 30 días</option>
                                <option>Este año</option>
                            </select>
                        </div>
                        <div class="chart-body">
                            <div class="property-chart">
                                <div class="chart-item">
                                    <div class="chart-label">Casa Moderna en Zona Rosa</div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 85%;"></div>
                                        <span class="bar-value">1,245</span>
                                    </div>
                                </div>
                                <div class="chart-item">
                                    <div class="chart-label">Apartamento en Horizontes</div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 70%;"></div>
                                        <span class="bar-value">986</span>
                                    </div>
                                </div>
                                <div class="chart-item">
                                    <div class="chart-label">Residencial en Santa Tecla</div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 65%;"></div>
                                        <span class="bar-value">842</span>
                                    </div>
                                </div>
                                <div class="chart-item">
                                    <div class="chart-label">Villa de Lujo en Antiguo Cuscatlán</div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 55%;"></div>
                                        <span class="bar-value">723</span>
                                    </div>
                                </div>
                                <div class="chart-item">
                                    <div class="chart-label">Penthouse en San Benito</div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 45%;"></div>
                                        <span class="bar-value">612</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart-container">
                        <div class="chart-header">
                            <h3>Agentes con más ventas</h3>
                            <select class="chart-filter">
                                <option>Últimos 7 días</option>
                                <option>Últimos 30 días</option>
                                <option>Este año</option>
                            </select>
                        </div>
                        <div class="chart-body">
                            <div class="agent-chart">
                                <div class="chart-item">
                                    <div class="chart-label">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Agente">
                                        <span>Ana Martínez</span>
                                    </div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 90%;"></div>
                                        <span class="bar-value">$420K</span>
                                    </div>
                                </div>
                                <div class="chart-item">
                                    <div class="chart-label">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Agente">
                                        <span>Roberto Sánchez</span>
                                    </div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 75%;"></div>
                                        <span class="bar-value">$380K</span>
                                    </div>
                                </div>
                                <div class="chart-item">
                                    <div class="chart-label">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Agente">
                                        <span>María López</span>
                                    </div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 65%;"></div>
                                        <span class="bar-value">$310K</span>
                                    </div>
                                </div>
                                <div class="chart-item">
                                    <div class="chart-label">
                                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Agente">
                                        <span>Carlos Ramírez</span>
                                    </div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 55%;"></div>
                                        <span class="bar-value">$280K</span>
                                    </div>
                                </div>
                                <div class="chart-item">
                                    <div class="chart-label">
                                        <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="Agente">
                                        <span>Laura Guzmán</span>
                                    </div>
                                    <div class="chart-bar">
                                        <div class="bar-fill" style="width: 45%;"></div>
                                        <span class="bar-value">$210K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-recent">
                    <div class="recent-container">
                        <div class="recent-header">
                            <h3>Actividad reciente</h3>
                            <a href="#" class="view-all">Ver todo</a>
                        </div>
                        <div class="recent-body">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>Nueva propiedad</strong> agregada por <strong>Ana Martínez</strong></p>
                                    <span class="activity-time">Hace 2 horas</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>Nuevo agente</strong> registrado: <strong>Diego Flores</strong></p>
                                    <span class="activity-time">Hace 5 horas</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>Venta completada</strong> por <strong>Roberto Sánchez</strong></p>
                                    <span class="activity-time">Hace 1 día</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>Nueva reseña</strong> para <strong>María López</strong></p>
                                    <span class="activity-time">Hace 2 días</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-edit"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>Propiedad actualizada</strong> por <strong>Carlos Ramírez</strong></p>
                                    <span class="activity-time">Hace 3 días</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Agents Section -->
            <section class="content-section" id="agents-section">
                <div class="section-header">
                    <h3>Gestión de Agentes</h3>
                    <button class="btn-primary" id="addAgentBtn">
                        <i class="fas fa-plus"></i> Agregar Agente
                    </button>
                </div>

                <div class="tabs">
                    <button class="tab-btn active" data-tab="all-agents">Todos los Agentes</button>
                    <button class="tab-btn" data-tab="pending-agents">Solicitudes Pendientes <span class="badge">5</span></button>
                </div>

                <div class="tab-content active" id="all-agents">
                    <div class="search-filter">
                        <div class="search-input">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Buscar agente...">
                        </div>
                        <div class="filter-options">
                            <select>
                                <option>Todos los estados</option>
                                <option>Activo</option>
                                <option>Inactivo</option>
                            </select>
                            <select>
                                <option>Ordenar por</option>
                                <option>Nombre</option>
                                <option>Ventas</option>
                                <option>Actividad</option>
                            </select>
                        </div>
                    </div>

                    <div class="agents-grid">
                        <div class="agent-card">
                            <div class="agent-header">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ana Martínez">
                                <div class="agent-status active">Activo</div>
                                <div class="agent-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="agent-body">
                                <h4>Ana Martínez</h4>
                                <p class="agent-title">Agente Senior</p>
                                <div class="agent-info">
                                    <p><i class="fas fa-envelope"></i> ana.martinez@encasa.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7123-4567</p>
                                </div>
                                <div class="agent-stats">
                                    <div class="stat">
                                        <span class="stat-value">24</span>
                                        <span class="stat-label">Propiedades</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">18</span>
                                        <span class="stat-label">Ventas</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">4.8</span>
                                        <span class="stat-label">Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="agent-card">
                            <div class="agent-header">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Roberto Sánchez">
                                <div class="agent-status active">Activo</div>
                                <div class="agent-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="agent-body">
                                <h4>Roberto Sánchez</h4>
                                <p class="agent-title">Agente Senior</p>
                                <div class="agent-info">
                                    <p><i class="fas fa-envelope"></i> roberto.sanchez@encasa.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7234-5678</p>
                                </div>
                                <div class="agent-stats">
                                    <div class="stat">
                                        <span class="stat-value">19</span>
                                        <span class="stat-label">Propiedades</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">15</span>
                                        <span class="stat-label">Ventas</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">4.6</span>
                                        <span class="stat-label">Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="agent-card">
                            <div class="agent-header">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="María López">
                                <div class="agent-status active">Activo</div>
                                <div class="agent-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="agent-body">
                                <h4>María López</h4>
                                <p class="agent-title">Agente</p>
                                <div class="agent-info">
                                    <p><i class="fas fa-envelope"></i> maria.lopez@encasa.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7345-6789</p>
                                </div>
                                <div class="agent-stats">
                                    <div class="stat">
                                        <span class="stat-value">15</span>
                                        <span class="stat-label">Propiedades</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">12</span>
                                        <span class="stat-label">Ventas</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">4.5</span>
                                        <span class="stat-label">Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="agent-card">
                            <div class="agent-header">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Carlos Ramírez">
                                <div class="agent-status active">Activo</div>
                                <div class="agent-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="agent-body">
                                <h4>Carlos Ramírez</h4>
                                <p class="agent-title">Agente</p>
                                <div class="agent-info">
                                    <p><i class="fas fa-envelope"></i> carlos.ramirez@encasa.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7456-7890</p>
                                </div>
                                <div class="agent-stats">
                                    <div class="stat">
                                        <span class="stat-value">12</span>
                                        <span class="stat-label">Propiedades</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">9</span>
                                        <span class="stat-label">Ventas</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">4.3</span>
                                        <span class="stat-label">Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="agent-card">
                            <div class="agent-header">
                                <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="Laura Guzmán">
                                <div class="agent-status inactive">Inactivo</div>
                                <div class="agent-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="agent-body">
                                <h4>Laura Guzmán</h4>
                                <p class="agent-title">Agente Junior</p>
                                <div class="agent-info">
                                    <p><i class="fas fa-envelope"></i> laura.guzman@encasa.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7567-8901</p>
                                </div>
                                <div class="agent-stats">
                                    <div class="stat">
                                        <span class="stat-value">8</span>
                                        <span class="stat-label">Propiedades</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">5</span>
                                        <span class="stat-label">Ventas</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">4.0</span>
                                        <span class="stat-label">Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="agent-card">
                            <div class="agent-header">
                                <img src="https://randomuser.me/api/portraits/men/55.jpg" alt="Javier Morales">
                                <div class="agent-status active">Activo</div>
                                <div class="agent-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="agent-body">
                                <h4>Javier Morales</h4>
                                <p class="agent-title">Agente</p>
                                <div class="agent-info">
                                    <p><i class="fas fa-envelope"></i> javier.morales@encasa.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7678-9012</p>
                                </div>
                                <div class="agent-stats">
                                    <div class="stat">
                                        <span class="stat-value">10</span>
                                        <span class="stat-label">Propiedades</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">7</span>
                                        <span class="stat-label">Ventas</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-value">4.2</span>
                                        <span class="stat-label">Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pagination">
                        <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                        <button class="page-btn active">1</button>
                        <button class="page-btn">2</button>
                        <button class="page-btn">3</button>
                        <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>

                <div class="tab-content" id="pending-agents">
                    <div class="pending-agents-list">
                        <div class="pending-agent">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Diego Flores">
                                <div>
                                    <h4>Diego Flores</h4>
                                    <p><i class="fas fa-envelope"></i> diego.flores@gmail.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7890-1234</p>
                                </div>
                            </div>
                            <div class="agent-application">
                                <p class="application-date">Solicitud: 15/04/2025</p>
                                <p class="experience">Experiencia: 3 años en bienes raíces</p>
                            </div>
                            <div class="agent-actions">
                                <button class="btn-approve"><i class="fas fa-check"></i> Aprobar</button>
                                <button class="btn-reject"><i class="fas fa-times"></i> Rechazar</button>
                                <button class="btn-view"><i class="fas fa-eye"></i> Ver detalles</button>
                            </div>
                        </div>

                        <div class="pending-agent">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Sofía Mendoza">
                                <div>
                                    <h4>Sofía Mendoza</h4>
                                    <p><i class="fas fa-envelope"></i> sofia.mendoza@gmail.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7901-2345</p>
                                </div>
                            </div>
                            <div class="agent-application">
                                <p class="application-date">Solicitud: 16/04/2025</p>
                                <p class="experience">Experiencia: 5 años en ventas inmobiliarias</p>
                            </div>
                            <div class="agent-actions">
                                <button class="btn-approve"><i class="fas fa-check"></i> Aprobar</button>
                                <button class="btn-reject"><i class="fas fa-times"></i> Rechazar</button>
                                <button class="btn-view"><i class="fas fa-eye"></i> Ver detalles</button>
                            </div>
                        </div>

                        <div class="pending-agent">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/men/62.jpg" alt="Alejandro Vega">
                                <div>
                                    <h4>Alejandro Vega</h4>
                                    <p><i class="fas fa-envelope"></i> alejandro.vega@gmail.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7012-3456</p>
                                </div>
                            </div>
                            <div class="agent-application">
                                <p class="application-date">Solicitud: 17/04/2025</p>
                                <p class="experience">Experiencia: 2 años en sector inmobiliario</p>
                            </div>
                            <div class="agent-actions">
                                <button class="btn-approve"><i class="fas fa-check"></i> Aprobar</button>
                                <button class="btn-reject"><i class="fas fa-times"></i> Rechazar</button>
                                <button class="btn-view"><i class="fas fa-eye"></i> Ver detalles</button>
                            </div>
                        </div>

                        <div class="pending-agent">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/women/52.jpg" alt="Gabriela Torres">
                                <div>
                                    <h4>Gabriela Torres</h4>
                                    <p><i class="fas fa-envelope"></i> gabriela.torres@gmail.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7123-4567</p>
                                </div>
                            </div>
                            <div class="agent-application">
                                <p class="application-date">Solicitud: 18/04/2025</p>
                                <p class="experience">Experiencia: 4 años en ventas de propiedades</p>
                            </div>
                            <div class="agent-actions">
                                <button class="btn-approve"><i class="fas fa-check"></i> Aprobar</button>
                                <button class="btn-reject"><i class="fas fa-times"></i> Rechazar</button>
                                <button class="btn-view"><i class="fas fa-eye"></i> Ver detalles</button>
                            </div>
                        </div>

                        <div class="pending-agent">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="Ricardo Fuentes">
                                <div>
                                    <h4>Ricardo Fuentes</h4>
                                    <p><i class="fas fa-envelope"></i> ricardo.fuentes@gmail.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7234-5678</p>
                                </div>
                            </div>
                            <div class="agent-application">
                                <p class="application-date">Solicitud: 19/04/2025</p>
                                <p class="experience">Experiencia: 6 años en bienes raíces</p>
                            </div>
                            <div class="agent-actions">
                                <button class="btn-approve"><i class="fas fa-check"></i> Aprobar</button>
                                <button class="btn-reject"><i class="fas fa-times"></i> Rechazar</button>
                                <button class="btn-view"><i class="fas fa-eye"></i> Ver detalles</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Properties Section -->
            <section class="content-section" id="properties-section">
                <div class="section-header">
                    <h3>Gestión de Propiedades</h3>
                    <button class="btn-primary">
                        <i class="fas fa-plus"></i> Agregar Propiedad
                    </button>
                </div>

                <div class="search-filter">
                    <div class="search-input">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar propiedad...">
                    </div>
                    <div class="filter-options">
                        <select>
                            <option>Todos los tipos</option>
                            <option>Casa</option>
                            <option>Apartamento</option>
                            <option>Terreno</option>
                            <option>Comercial</option>
                        </select>
                        <select>
                            <option>Todas las ubicaciones</option>
                            <option>Zona Rosa</option>
                            <option>Ilopango</option>
                            <option>Santa Tecla</option>
                            <option>San Salvador</option>
                        </select>
                        <select>
                            <option>Ordenar por</option>
                            <option>Precio: menor a mayor</option>
                            <option>Precio: mayor a menor</option>
                            <option>Más recientes</option>
                            <option>Más vistas</option>
                        </select>
                    </div>
                </div>

                <div class="properties-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Propiedad</th>
                                <th>Tipo</th>
                                <th>Ubicación</th>
                                <th>Precio</th>
                                <th>Agente</th>
                                <th>Estado</th>
                                <th>Vistas</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="property-cell">
                                        <img src="https://via.placeholder.com/60x40" alt="Casa Moderna">
                                        <div>
                                            <h4>Casa Moderna en Zona Rosa</h4>
                                            <p>3 hab, 2 baños, 180 m²</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Casa</td>
                                <td>Zona Rosa, San Salvador</td>
                                <td>$245,000</td>
                                <td>Ana Martínez</td>
                                <td><span class="status-badge active">Activa</span></td>
                                <td>1,245</td>
                                <td>
                                    <div class="table-actions">
                                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="property-cell">
                                        <img src="https://via.placeholder.com/60x40" alt="Apartamento">
                                        <div>
                                            <h4>Apartamento en Horizontes</h4>
                                            <p>2 hab, 1 baño, 95 m²</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Apartamento</td>
                                <td>Ilopango, San Salvador</td>
                                <td>$135,000</td>
                                <td>Roberto Sánchez</td>
                                <td><span class="status-badge active">Activa</span></td>
                                <td>986</td>
                                <td>
                                    <div class="table-actions">
                                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="property-cell">
                                        <img src="https://via.placeholder.com/60x40" alt="Residencial">
                                        <div>
                                            <h4>Residencial en Santa Tecla</h4>
                                            <p>4 hab, 3 baños, 250 m²</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Casa</td>
                                <td>Santa Tecla, La Libertad</td>
                                <td>$320,000</td>
                                <td>María López</td>
                                <td><span class="status-badge active">Activa</span></td>
                                <td>842</td>
                                <td>
                                    <div class="table-actions">
                                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="property-cell">
                                        <img src="https://via.placeholder.com/60x40" alt="Villa">
                                        <div>
                                            <h4>Villa de Lujo en Antiguo Cuscatlán</h4>
                                            <p>5 hab, 4 baños, 350 m²</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Villa</td>
                                <td>Antiguo Cuscatlán, La Libertad</td>
                                <td>$475,000</td>
                                <td>Carlos Ramírez</td>
                                <td><span class="status-badge active">Activa</span></td>
                                <td>723</td>
                                <td>
                                    <div class="table-actions">
                                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="property-cell">
                                        <img src="https://via.placeholder.com/60x40" alt="Penthouse">
                                        <div>
                                            <h4>Penthouse en San Benito</h4>
                                            <p>3 hab, 2 baños, 200 m²</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Apartamento</td>
                                <td>San Benito, San Salvador</td>
                                <td>$390,000</td>
                                <td>Laura Guzmán</td>
                                <td><span class="status-badge inactive">Inactiva</span></td>
                                <td>612</td>
                                <td>
                                    <div class="table-actions">
                                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                                        <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="pagination">
                    <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </section>

            <!-- Reports Section -->
            <section class="content-section" id="reports-section">
                <div class="section-header">
                    <h3>Reportes y Estadísticas</h3>
                    <div class="report-actions">
                        <button class="btn-secondary">
                            <i class="fas fa-download"></i> Exportar
                        </button>
                        <select class="report-period">
                            <option>Últimos 30 días</option>
                            <option>Este mes</option>
                            <option>Último trimestre</option>
                            <option>Este año</option>
                        </select>
                    </div>
                </div>

                <div class="reports-grid">
                    <div class="report-card">
                        <div class="report-header">
                            <h4>Propiedades más vistas</h4>
                            <button class="btn-icon"><i class="fas fa-ellipsis-v"></i></button>
                        </div>
                        <div class="report-body">
                            <div class="report-chart">
                                <!-- Aquí iría un gráfico de barras -->
                                <div class="chart-placeholder">
                                    <div class="bar-chart">
                                        <div class="bar" style="height: 85%;" data-value="1,245"></div>
                                        <div class="bar" style="height: 70%;" data-value="986"></div>
                                        <div class="bar" style="height: 65%;" data-value="842"></div>
                                        <div class="bar" style="height: 55%;" data-value="723"></div>
                                        <div class="bar" style="height: 45%;" data-value="612"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="report-legend">
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee-light);"></span>
                                    <span class="legend-label">Casa Moderna en Zona Rosa</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee);"></span>
                                    <span class="legend-label">Apartamento en Horizontes</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee-dark);"></span>
                                    <span class="legend-label">Residencial en Santa Tecla</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee-pale);"></span>
                                    <span class="legend-label">Villa de Lujo en Antiguo Cuscatlán</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee-accent);"></span>
                                    <span class="legend-label">Penthouse en San Benito</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="report-card">
                        <div class="report-header">
                            <h4>Agentes con más ventas</h4>
                            <button class="btn-icon"><i class="fas fa-ellipsis-v"></i></button>
                        </div>
                        <div class="report-body">
                            <div class="report-chart">
                                <!-- Aquí iría un gráfico circular -->
                                <div class="chart-placeholder">
                                    <div class="pie-chart">
                                        <div class="pie-segment" style="--percentage: 35%; --color: var(--color-coffee-light);"></div>
                                        <div class="pie-segment" style="--percentage: 25%; --color: var(--color-coffee);"></div>
                                        <div class="pie-segment" style="--percentage: 20%; --color: var(--color-coffee-dark);"></div>
                                        <div class="pie-segment" style="--percentage: 12%; --color: var(--color-coffee-pale);"></div>
                                        <div class="pie-segment" style="--percentage: 8%; --color: var(--color-coffee-accent);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="report-legend">
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee-light);"></span>
                                    <span class="legend-label">Ana Martínez (35%)</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee);"></span>
                                    <span class="legend-label">Roberto Sánchez (25%)</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee-dark);"></span>
                                    <span class="legend-label">María López (20%)</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee-pale);"></span>
                                    <span class="legend-label">Carlos Ramírez (12%)</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: var(--color-coffee-accent);"></span>
                                    <span class="legend-label">Otros (8%)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="report-card">
                        <div class="report-header">
                            <h4>Ventas por mes</h4>
                            <button class="btn-icon"><i class="fas fa-ellipsis-v"></i></button>
                        </div>
                        <div class="report-body">
                            <div class="report-chart">
                                <!-- Aquí iría un gráfico de línea -->
                                <div class="chart-placeholder">
                                    <div class="line-chart">
                                        <svg viewBox="0 0 300 150" class="chart">
                                            <polyline
                                                fill="none"
                                                stroke="var(--color-coffee-light)"
                                                stroke-width="3"
                                                points="
                                                0,120
                                                50,100
                                                100,110
                                                150,60
                                                200,80
                                                250,40
                                                300,30
                                                "
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="report-summary">
                                <div class="summary-item">
                                    <span class="summary-label">Total ventas</span>
                                    <span class="summary-value">$2.4M</span>
                                </div>
                                <div class="summary-item">
                                    <span class="summary-label">Crecimiento</span>
                                    <span class="summary-value positive">+15%</span>
                                </div>
                                <div class="summary-item">
                                    <span class="summary-label">Proyección</span>
                                    <span class="summary-value">$3.2M</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="report-card">
                        <div class="report-header">
                            <h4>Agentes más activos</h4>
                            <button class="btn-icon"><i class="fas fa-ellipsis-v"></i></button>
                        </div>
                        <div class="report-body">
                            <div class="activity-list">
                                <div class="activity-item">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ana Martínez">
                                    <div class="activity-details">
                                        <h5>Ana Martínez</h5>
                                        <div class="activity-stats">
                                            <div class="activity-stat">
                                                <i class="fas fa-home"></i>
                                                <span>24 propiedades</span>
                                            </div>
                                            <div class="activity-stat">
                                                <i class="fas fa-eye"></i>
                                                <span>156 visitas</span>
                                            </div>
                                            <div class="activity-stat">
                                                <i class="fas fa-handshake"></i>
                                                <span>18 ventas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity-score">
                                        <span>95</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Roberto Sánchez">
                                    <div class="activity-details">
                                        <h5>Roberto Sánchez</h5>
                                        <div class="activity-stats">
                                            <div class="activity-stat">
                                                <i class="fas fa-home"></i>
                                                <span>19 propiedades</span>
                                            </div>
                                            <div class="activity-stat">
                                                <i class="fas fa-eye"></i>
                                                <span>142 visitas</span>
                                            </div>
                                            <div class="activity-stat">
                                                <i class="fas fa-handshake"></i>
                                                <span>15 ventas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity-score">
                                        <span>88</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="María López">
                                    <div class="activity-details">
                                        <h5>María López</h5>
                                        <div class="activity-stats">
                                            <div class="activity-stat">
                                                <i class="fas fa-home"></i>
                                                <span>15 propiedades</span>
                                            </div>
                                            <div class="activity-stat">
                                                <i class="fas fa-eye"></i>
                                                <span>128 visitas</span>
                                            </div>
                                            <div class="activity-stat">
                                                <i class="fas fa-handshake"></i>
                                                <span>12 ventas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity-score">
                                        <span>82</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Carlos Ramírez">
                                    <div class="activity-details">
                                        <h5>Carlos Ramírez</h5>
                                        <div class="activity-stats">
                                            <div class="activity-stat">
                                                <i class="fas fa-home"></i>
                                                <span>12 propiedades</span>
                                            </div>
                                            <div class="activity-stat">
                                                <i class="fas fa-eye"></i>
                                                <span>105 visitas</span>
                                            </div>
                                            <div class="activity-stat">
                                                <i class="fas fa-handshake"></i>
                                                <span>9 ventas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity-score">
                                        <span>75</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reviews Section -->
            <section class="content-section" id="reviews-section">
                <div class="section-header">
                    <h3>Reseñas de Clientes</h3>
                    <div class="filter-options">
                        <select>
                            <option>Todos los agentes</option>
                            <option>Ana Martínez</option>
                            <option>Roberto Sánchez</option>
                            <option>María López</option>
                            <option>Carlos Ramírez</option>
                        </select>
                        <select>
                            <option>Todas las calificaciones</option>
                            <option>5 estrellas</option>
                            <option>4 estrellas</option>
                            <option>3 estrellas</option>
                            <option>2 estrellas</option>
                            <option>1 estrella</option>
                        </select>
                    </div>
                </div>

                <div class="reviews-list">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Cliente">
                                <div>
                                    <h4>María Rodríguez</h4>
                                    <p>Cliente desde: Enero 2025</p>
                                </div>
                            </div>
                            <div class="review-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="review-date">15/04/2025</span>
                            </div>
                        </div>
                        <div class="review-body">
                            <p>Ana Martínez fue increíblemente profesional y atenta durante todo el proceso de compra de nuestra casa. Siempre estuvo disponible para responder nuestras preguntas y nos guió en cada paso del camino. Definitivamente la recomendaría a cualquiera que busque un agente inmobiliario confiable.</p>
                        </div>
                        <div class="review-footer">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ana Martínez">
                                <span>Ana Martínez</span>
                            </div>
                            <div class="review-actions">
                                <button class="btn-secondary"><i class="fas fa-reply"></i> Responder</button>
                                <button class="btn-icon"><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Cliente">
                                <div>
                                    <h4>Juan Pérez</h4>
                                    <p>Cliente desde: Febrero 2025</p>
                                </div>
                            </div>
                            <div class="review-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="review-date">10/04/2025</span>
                            </div>
                        </div>
                        <div class="review-body">
                            <p>Roberto Sánchez nos ayudó a encontrar el apartamento perfecto en Ilopango. Su conocimiento del mercado y su capacidad para entender nuestras necesidades fueron excepcionales. El proceso fue rápido y sin complicaciones. Le doy 4 estrellas porque hubo un pequeño retraso en la entrega de documentos, pero en general fue una experiencia muy positiva.</p>
                        </div>
                        <div class="review-footer">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Roberto Sánchez">
                                <span>Roberto Sánchez</span>
                            </div>
                            <div class="review-actions">
                                <button class="btn-secondary"><i class="fas fa-reply"></i> Responder</button>
                                <button class="btn-icon"><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Cliente">
                                <div>
                                    <h4>Sofía Mendoza</h4>
                                    <p>Cliente desde: Marzo 2025</p>
                                </div>
                            </div>
                            <div class="review-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="review-date">05/04/2025</span>
                            </div>
                        </div>
                        <div class="review-body">
                            <p>María López fue amable y profesional, pero sentí que podría haber sido más proactiva en la búsqueda de propiedades que se ajustaran a mis necesidades. Tuve que hacer muchas preguntas y seguimiento por mi cuenta. La propiedad que finalmente compré es buena, pero el proceso podría haber sido más eficiente.</p>
                        </div>
                        <div class="review-footer">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="María López">
                                <span>María López</span>
                            </div>
                            <div class="review-actions">
                                <button class="btn-secondary"><i class="fas fa-reply"></i> Responder</button>
                                <button class="btn-icon"><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Cliente">
                                <div>
                                    <h4>Carlos Gutiérrez</h4>
                                    <p>Cliente desde: Marzo 2025</p>
                                </div>
                            </div>
                            <div class="review-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="review-date">02/04/2025</span>
                            </div>
                        </div>
                        <div class="review-body">
                            <p>Carlos Ramírez superó todas mis expectativas. Encontró exactamente lo que estaba buscando en tiempo récord. Su atención al detalle y su dedicación son admirables. Recomendaría a Carlos a cualquier persona que busque comprar una propiedad en la zona. El proceso fue rápido, transparente y sin complicaciones.
                        </div>
                        <div class="review-footer">
                            <div class="agent-info">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Carlos Ramírez">
                                <span>Carlos Ramírez</span>
                            </div>
                            <div class="review-actions">
                                <button class="btn-secondary"><i class="fas fa-reply"></i> Responder</button>
                                <button class="btn-icon"><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination">
                    <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </section>

            <!-- Settings Section -->
            <section class="content-section" id="settings-section">
                <div class="section-header">
                    <h3>Configuración</h3>
                </div>

                <div class="settings-container">
                    <div class="settings-card">
                        <div class="settings-header">
                            <h4>Configuración General</h4>
                        </div>
                        <div class="settings-body">
                            <div class="settings-group">
                                <h5>Información de la Empresa</h5>
                                <div class="form-group">
                                    <label for="company-name">Nombre de la Empresa</label>
                                    <input type="text" id="company-name" value="ENCASA" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company-email">Email de Contacto</label>
                                    <input type="email" id="company-email" value="info@encasa.com" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company-phone">Teléfono</label>
                                    <input type="text" id="company-phone" value="+503 2222-3333" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company-address">Dirección</label>
                                    <textarea id="company-address" class="form-control">Av. La Revolución, Col. San Benito, San Salvador</textarea>
                                </div>
                            </div>

                            <div class="settings-group">
                                <h5>Preferencias del Sistema</h5>
                                <div class="form-check">
                                    <input type="checkbox" id="notifications" checked class="form-check-input">
                                    <label for="notifications" class="form-check-label">Activar notificaciones</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="email-alerts" checked class="form-check-input">
                                    <label for="email-alerts" class="form-check-label">Enviar alertas por email</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="auto-approve" class="form-check-input">
                                    <label for="auto-approve" class="form-check-label">Aprobar automáticamente propiedades nuevas</label>
                                </div>
                            </div>
                        </div>
                        <div class="settings-footer">
                            <button class="btn-primary">Guardar Cambios</button>
                        </div>
                    </div>

                    <div class="settings-card">
                        <div class="settings-header">
                            <h4>Configuración de Usuario</h4>
                        </div>
                        <div class="settings-body">
                            <div class="settings-group">
                                <h5>Información Personal</h5>
                                <div class="form-group">
                                    <label for="user-name">Nombre</label>
                                    <input type="text" id="user-name" value="Carlos Mendoza" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="user-email">Email</label>
                                    <input type="email" id="user-email" value="carlos.mendoza@encasa.com" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="user-phone">Teléfono</label>
                                    <input type="text" id="user-phone" value="+503 7890-1234" class="form-control">
                                </div>
                            </div>

                            <div class="settings-group">
                                <h5>Cambiar Contraseña</h5>
                                <div class="form-group">
                                    <label for="current-password">Contraseña Actual</label>
                                    <input type="password" id="current-password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="new-password">Nueva Contraseña</label>
                                    <input type="password" id="new-password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password">Confirmar Contraseña</label>
                                    <input type="password" id="confirm-password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="settings-footer">
                            <button class="btn-primary">Actualizar Perfil</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>