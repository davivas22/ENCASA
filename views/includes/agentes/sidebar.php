<div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <a href="/"><h1>ENCASA</h1></a>
                
                <p>Panel de <?= $_SESSION['nombre'] ?></p>
            </div>
            
            <nav class="sidebar-nav">
                <ul>
                    <li>
                        <a href="/agente-dashboard">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/agente-propiedades">
                            <i class="fas fa-home"></i>
                            <span>Mis Propiedades</span>
                        </a>
                    </li>
                    <li>
                        <a href="/agente-solicitudes">
                            <i class="fas fa-envelope"></i>
                            <span>Solicitudes</span>
                            <span class="badge">5</span>
                        </a>
                    </li>
                    <li>
                        <a href="/agente-agregar-propiedad">
                            <i class="fas fa-plus-circle"></i>
                            <span>Agregar Propiedad</span>
                        </a>
                    <li>
                        <a href="/agente-perfil">
                            <i class="fas fa-user"></i>
                            <span>Mi Perfil</span>
                        </a>
                    </li>
                    <li class="logout">
                        <a href="/cerrarsesion">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Cerrar Sesión</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="sidebar-footer">
                <p>&copy; 2025 ENCASA</p>
            </div>
        </aside>