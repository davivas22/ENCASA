   
 <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <h1>ENCASA</h1>
                    <span class="tagline">Admin Panel</span>
                </div>
                <button class="toggle-sidebar" id="toggleSidebar">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>

            <div class="admin-profile">
                <div class="admin-avatar">
                    <img src="img/admin-avatar.jpg" alt="Admin">
                </div>
                <div class="admin-info">
                    <h3>Administrador</h3>
                    <p>Super Admin</p>
                </div>
            </div>

            <nav class="sidebar-nav">
                <ul>
                    <li>
                        <a href="/index">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="/admin-agentes">
                            <i class="fas fa-users"></i>
                            <span>Agentes</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-propiedades">
                            <i class="fas fa-building"></i>
                            <span>Propiedades</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-reportes">
                            <i class="fas fa-chart-bar"></i>
                            <span>Reportes</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-configuracion">
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