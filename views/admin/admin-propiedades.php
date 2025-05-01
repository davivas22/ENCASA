<?php 
   $pageStylesheet = '/css/admin-all.css';
   $pageScript = '/js/admin-propiedades.js';
   ob_start();
   // Todo el contenido de la página
   include_once __DIR__ . '/../includes/admin/sidebar.php';

   
   ?>
    <div class="admin-container">
        <!-- Main Content -->
        <main class="main-content">
            <header class="content-header">
                <div class="header-left">
                    <h2>Propiedades</h2>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar propiedad...">
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
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Listado de Propiedades</h3>
                    <button class="btn-primary">
                        <i class="fas fa-plus"></i> Agregar Propiedad
                    </button>
                </div>

                <!-- Search and Filter -->
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
                            <option>Todos los estados</option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                            <option>Vendido</option>
                        </select>
                        <select>
                            <option>Ordenar por</option>
                            <option>Precio: menor a mayor</option>
                            <option>Precio: mayor a menor</option>
                            <option>Fecha: más reciente</option>
                            <option>Fecha: más antiguo</option>
                        </select>
                    </div>
                </div>

                <!-- Properties Table -->
                <div class="properties-table animate-fade-in">
                    <table>
                        <thead>
                            <tr>
                                <th>Propiedad</th>
                                <th>Tipo</th>
                                <th>Ubicación</th>
                                <th>Precio</th>
                                <th>Estado</th>
                                <th>Agente</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Las propiedades se cargarán dinámicamente -->
                        </tbody>
                    </table>
                    
                    <!-- Empty State -->
                    <div class="empty-state">
                        <i class="fas fa-home"></i>
                        <h3>No hay propiedades</h3>
                        <p>Agrega propiedades para verlas aquí</p>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </main>
    </div>
