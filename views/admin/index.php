<?php 
   $pageStylesheet = '/css/admin-all.css';
   $pageScript = '/js/admin-dashboard.js';
   ob_start();
   // Todo el contenido de la página
   include_once __DIR__ . '/../includes/admin/sidebar.php';

   
   ?>
    <div class="admin-container">
        <!-- Main Content -->
        <main class="main-content">
            <header class="content-header">
                <div class="header-left">
                    <h2>Dashboard</h2>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar...">
                    </div>
                    <div class="notifications">
                        <button class="notification-btn">
                            <i class="fas fa-bell"></i>
                        </button>
                        <span class="notification-badge">3</span>
                    </div>
                </div>
            </header>

            <div class="content-wrapper">
                <!-- Dashboard Stats -->
                <section class="dashboard-stats">
                    <div class="stat-card animate-up">
                        <div class="stat-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="stat-info">
                            <h3>0</h3>
                            <p>Propiedades</p>
                        </div>
                    </div>
                    
                    <div class="stat-card animate-up" style="animation-delay: 0.1s">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>0</h3>
                            <p>Agentes</p>
                        </div>
                    </div>
                    
                    <div class="stat-card animate-up" style="animation-delay: 0.2s">
                        <div class="stat-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$0</h3>
                            <p>Ventas</p>
                        </div>
                    </div>
                    
                    <div class="stat-card animate-up" style="animation-delay: 0.3s">
                        <div class="stat-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-info">
                            <h3>0</h3>
                            <p>Reseñas</p>
                        </div>
                    </div>
                </section>

                <!-- Dashboard Charts -->
                <section class="dashboard-charts">
                    <div class="chart-container animate-fade-in">
                        <div class="chart-header">
                            <h3>Ventas por Mes</h3>
                            <select class="chart-filter">
                                <option>Este Año</option>
                                <option>Último Año</option>
                                <option>Últimos 2 Años</option>
                            </select>
                        </div>
                        <div class="chart-body">
                            <div class="bar-chart-container">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    <div class="chart-container animate-fade-in" style="animation-delay: 0.2s">
                        <div class="chart-header">
                            <h3>Propiedades por Tipo</h3>
                            <select class="chart-filter">
                                <option>Todos</option>
                                <option>Activos</option>
                                <option>Inactivos</option>
                            </select>
                        </div>
                        <div class="chart-body">
                            <div class="pie-chart-container">
                                <canvas id="propertiesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Recent Activity -->
                <section class="dashboard-recent animate-fade-in" style="animation-delay: 0.3s">
                    <div class="recent-container">
                        <div class="recent-header">
                            <h3>Actividad Reciente</h3>
                            <a href="#" class="view-all">Ver todo</a>
                        </div>
                        <div class="recent-body">
                            <div class="activity-placeholder">
                                <p>No hay actividades recientes para mostrar.</p>
                            </div>
                            <!-- Las actividades se cargarán dinámicamente -->
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
