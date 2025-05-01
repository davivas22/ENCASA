
   <?php 
   $pageStylesheet = '/css/admin-all.css';
   $pageScript = '/js/admin-agentes.js';
   ob_start();
   // Todo el contenido de la página
   include_once __DIR__ . '/../includes/admin/sidebar.php';

   
   ?>
        <!-- Main Content -->
        <main class="main-content">
            <header class="content-header">
                <div class="header-left">
                    <h2>Agentes</h2>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar agente...">
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
                <!-- Tabs -->
                <div class="tabs-container">
                    <div class="tabs">
                        <button class="tab-btn active" data-tab="active-agents">Agentes Activos <span class="badge">0</span></button>
                        <a href="/solicitudes" class="tab-btn">
                        Solicitudes <span class="badge">0</span>
                        </a>

                    </div>
                    
                    <button class="btn-primary" id="addAgentBtn">
                        <i class="fas fa-plus"></i> Agregar Agente
                    </button>
                </div>

                <!-- Search and Filter -->
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
                            <option>Fecha</option>
                            <option>Ventas</option>
                        </select>
                    </div>
                </div>

                <!-- Active Agents Tab -->
                <div class="tab-content active" id="active-agents">
                    <div class="agents-grid">
                        <!-- Los agentes se cargarán dinámicamente -->
                        <div class="empty-state animate-fade-in">
                            <i class="fas fa-users"></i>
                            <h3>No hay agentes activos</h3>
                            <p>Agrega agentes para verlos aquí</p>
                        </div>
                    </div>
                </div>

                <!-- Pending Agents Tab -->
                <div class="tab-content" id="pending-agents">
                    <div class="pending-agents-list">
                        <!-- Los agentes pendientes se cargarán dinámicamente -->
                        <div class="empty-state animate-fade-in">
                            <i class="fas fa-user-clock"></i>
                            <h3>No hay agentes pendientes</h3>
                            <p>Las solicitudes de agentes aparecerán aquí</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
