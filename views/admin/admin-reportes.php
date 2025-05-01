<?php 
   $pageStylesheet = '/css/admin-reportes.css';
   $pageScript = '/js/admin-reportes.js';
   ob_start();
   // Todo el contenido de la página
   include_once __DIR__ . '/../includes/admin/sidebar.php';

   
   ?>
    <div class="admin-wrapper">
        <!-- Main Content -->
        <main class="main-content">
            <header class="content-header">
                <div class="header-left">
                    <h1 class="animate-fade-in">Reportes y Análisis</h1>
                    <nav class="breadcrumb animate-fade-in">
                        <a href="index.html">Dashboard</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Reportes</span>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="search-bar">
                        <input type="text" placeholder="Buscar...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="header-actions">
                        <button class="btn-icon tooltip" data-tooltip="Notificaciones">
                            <i class="fas fa-bell"></i>
                            <span class="badge">3</span>
                        </button>
                        <button class="btn-icon tooltip" data-tooltip="Mensajes">
                            <i class="fas fa-envelope"></i>
                            <span class="badge">5</span>
                        </button>
                    </div>
                </div>
            </header>
            
            <div class="content-body">
                <!-- Date Filter -->
                <div class="date-filter animate-fade-in">
                    <div class="date-inputs">
                        <div class="date-input">
                            <label for="startDate">Fecha Inicial</label>
                            <input type="date" id="startDate" class="form-control">
                        </div>
                        <div class="date-input">
                            <label for="endDate">Fecha Final</label>
                            <input type="date" id="endDate" class="form-control">
                        </div>
                    </div>
                    <button class="btn-primary btn-filter">
                        <i class="fas fa-filter"></i>
                        Aplicar Filtros
                    </button>
                </div>
                
                <!-- Sales Summary -->
                <div class="report-card animate-up" style="animation-delay: 0.1s">
                    <div class="report-header">
                        <h4>Resumen de Ventas</h4>
                        <div class="report-actions">
                            <select class="form-control report-period">
                                <option value="monthly">Mensual</option>
                                <option value="quarterly">Trimestral</option>
                                <option value="yearly">Anual</option>
                            </select>
                            <button class="btn-icon tooltip" data-tooltip="Descargar reporte">
                                <i class="fas fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="report-body">
                        <div class="chart-container">
                            <div class="chart-loader">
                                <i class="fas fa-spinner animate-spin"></i>
                            </div>
                            <canvas id="monthlySalesChart"></canvas>
                        </div>
                        <div class="sales-summary">
                            <div class="summary-item">
                                <div class="summary-label">Ventas Totales</div>
                                <div class="summary-value" data-value="0">$0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Promedio Mensual</div>
                                <div class="summary-value" data-value="0">$0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Crecimiento</div>
                                <div class="summary-value positive" data-value="0">0%</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Property Categories -->
                <div class="report-grid">
                    <div class="report-card animate-left" style="animation-delay: 0.2s">
                        <div class="report-header">
                            <h4>Categorías de Propiedades</h4>
                            <div class="report-actions">
                                <select class="form-control report-period">
                                    <option value="monthly">Mensual</option>
                                    <option value="quarterly">Trimestral</option>
                                    <option value="yearly">Anual</option>
                                </select>
                                <button class="btn-icon tooltip" data-tooltip="Descargar reporte">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div class="report-body">
                            <div class="chart-container">
                                <div class="chart-loader">
                                    <i class="fas fa-spinner animate-spin"></i>
                                </div>
                                <canvas id="propertyCategoryChart"></canvas>
                            </div>
                            <div class="chart-legend">
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: rgba(176, 141, 87, 0.7)"></span>
                                    <span class="legend-label">Casas</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: rgba(141, 110, 99, 0.7)"></span>
                                    <span class="legend-label">Apartamentos</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: rgba(93, 64, 55, 0.7)"></span>
                                    <span class="legend-label">Terrenos</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color" style="background-color: rgba(215, 204, 200, 0.7)"></span>
                                    <span class="legend-label">Comercial</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Agent Performance -->
                    <div class="report-card animate-right" style="animation-delay: 0.3s">
                        <div class="report-header">
                            <h4>Rendimiento de Agentes</h4>
                            <div class="report-actions">
                                <select class="form-control report-period">
                                    <option value="monthly">Mensual</option>
                                    <option value="quarterly">Trimestral</option>
                                    <option value="yearly">Anual</option>
                                </select>
                                <button class="btn-icon tooltip" data-tooltip="Descargar reporte">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div class="report-body">
                            <div class="chart-container">
                                <div class="chart-loader">
                                    <i class="fas fa-spinner animate-spin"></i>
                                </div>
                                <canvas id="agentPerformanceChart"></canvas>
                            </div>
                            <div class="agent-performance-metrics">
                                <div class="metric-item" style="--width: 100%">
                                    <div class="metric-label">
                                        <span>Agente 1</span>
                                        <span class="metric-value">$0</span>
                                    </div>
                                    <div class="metric-bar">
                                        <div class="metric-fill" style="width: var(--width)"></div>
                                    </div>
                                </div>
                                <div class="metric-item" style="--width: 85%">
                                    <div class="metric-label">
                                        <span>Agente 2</span>
                                        <span class="metric-value">$0</span>
                                    </div>
                                    <div class="metric-bar">
                                        <div class="metric-fill" style="width: var(--width)"></div>
                                    </div>
                                </div>
                                <div class="metric-item" style="--width: 70%">
                                    <div class="metric-label">
                                        <span>Agente 3</span>
                                        <span class="metric-value">$0</span>
                                    </div>
                                    <div class="metric-bar">
                                        <div class="metric-fill" style="width: var(--width)"></div>
                                    </div>
                                </div>
                                <div class="metric-item" style="--width: 55%">
                                    <div class="metric-label">
                                        <span>Agente 4</span>
                                        <span class="metric-value">$0</span>
                                    </div>
                                    <div class="metric-bar">
                                        <div class="metric-fill" style="width: var(--width)"></div>
                                    </div>
                                </div>
                                <div class="metric-item" style="--width: 40%">
                                    <div class="metric-label">
                                        <span>Agente 5</span>
                                        <span class="metric-value">$0</span>
                                    </div>
                                    <div class="metric-bar">
                                        <div class="metric-fill" style="width: var(--width)"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="report-card animate-up" style="animation-delay: 0.4s">
                    <div class="report-header">
                        <h4>Actividad Reciente</h4>
                        <div class="report-actions">
                            <button class="btn-secondary">
                                <i class="fas fa-sync-alt"></i>
                                Actualizar
                            </button>
                        </div>
                    </div>
                    <div class="report-body">
                        <div class="empty-state">
                            <i class="fas fa-chart-line"></i>
                            <h3>No hay actividad reciente</h3>
                            <p>La actividad reciente aparecerá aquí cuando esté disponible.</p>
                        </div>
                    </div>
                </div>
                
                <!-- KPI Cards -->
                <div class="kpi-section">
                    <h3 class="section-title animate-left">Indicadores Clave de Rendimiento</h3>
                    <div class="kpi-cards">
                        <div class="kpi-card animate-slide-up" style="animation-delay: 0.1s">
                            <div class="kpi-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="kpi-content">
                                <h4>Ingresos Totales</h4>
                                <div class="kpi-value">$0</div>
                                <div class="kpi-change positive">
                                    <i class="fas fa-arrow-up"></i> 0%
                                </div>
                            </div>
                        </div>
                        
                        <div class="kpi-card animate-slide-up" style="animation-delay: 0.2s">
                            <div class="kpi-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="kpi-content">
                                <h4>Propiedades Vendidas</h4>
                                <div class="kpi-value">0</div>
                                <div class="kpi-change positive">
                                    <i class="fas fa-arrow-up"></i> 0%
                                </div>
                            </div>
                        </div>
                        
                        <div class="kpi-card animate-slide-up" style="animation-delay: 0.3s">
                            <div class="kpi-icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="kpi-content">
                                <h4>Nuevos Clientes</h4>
                                <div class="kpi-value">0</div>
                                <div class="kpi-change positive">
                                    <i class="fas fa-arrow-up"></i> 0%
                                </div>
                            </div>
                        </div>
                        
                        <div class="kpi-card animate-slide-up" style="animation-delay: 0.4s">
                            <div class="kpi-icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <div class="kpi-content">
                                <h4>Tasa de Conversión</h4>
                                <div class="kpi-value">0%</div>
                                <div class="kpi-change negative">
                                    <i class="fas fa-arrow-down"></i> 0%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="content-footer">
                <p>&copy; 2023 InmoAdmin. Todos los derechos reservados.</p>
                <div class="footer-links">
                    <a href="#">Términos de Servicio</a>
                    <a href="#">Política de Privacidad</a>
                    <a href="#">Ayuda</a>
                </div>
            </footer>
        </main>
    </div>
