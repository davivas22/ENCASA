<?php 
   $pageStylesheet = '/css/admin-all.css';
   $pageScript = '/js/admin-configuracion.js';
   ob_start();
   // Todo el contenido de la página
   include_once __DIR__ . '/../includes/admin/sidebar.php';

   
   ?>
    <div class="admin-container">
        <!-- Main Content -->
        <main class="main-content">
            <header class="content-header">
                <div class="header-left">
                    <h2>Configuración</h2>
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
                <!-- Settings Container -->
                <div class="settings-container">
                    <!-- Perfil -->
                    <div class="settings-card animate-fade-in">
                        <div class="settings-header">
                            <h4>Perfil de Administrador</h4>
                        </div>
                        <div class="settings-body">
                            <div class="settings-group">
                                <h5>Información Personal</h5>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" placeholder="Tu nombre">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="tu@email.com">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="tel" class="form-control" placeholder="Tu teléfono">
                                </div>
                            </div>
                            <div class="settings-group">
                                <h5>Cambiar Contraseña</h5>
                                <div class="form-group">
                                    <label>Contraseña Actual</label>
                                    <input type="password" class="form-control" placeholder="••••••••">
                                </div>
                                <div class="form-group">
                                    <label>Nueva Contraseña</label>
                                    <input type="password" class="form-control" placeholder="••••••••">
                                </div>
                                <div class="form-group">
                                    <label>Confirmar Contraseña</label>
                                    <input type="password" class="form-control" placeholder="••••••••">
                                </div>
                            </div>
                        </div>
                        <div class="settings-footer">
                            <button class="btn-primary">Guardar Cambios</button>
                        </div>
                    </div>

                    <!-- Configuración General -->
                    <div class="settings-card animate-fade-in" style="animation-delay: 0.1s">
                        <div class="settings-header">
                            <h4>Configuración General</h4>
                        </div>
                        <div class="settings-body">
                            <div class="settings-group">
                                <h5>Preferencias</h5>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="emailNotifications">
                                    <label class="form-check-label" for="emailNotifications">Recibir notificaciones por email</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="darkMode">
                                    <label class="form-check-label" for="darkMode">Modo oscuro</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="autoLogout">
                                    <label class="form-check-label" for="autoLogout">Cerrar sesión automáticamente después de 30 minutos</label>
                                </div>
                            </div>
                            <div class="settings-group">
                                <h5>Idioma y Región</h5>
                                <div class="form-group">
                                    <label>Idioma</label>
                                    <select class="form-control">
                                        <option>Español</option>
                                        <option>English</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Formato de Fecha</label>
                                    <select class="form-control">
                                        <option>DD/MM/YYYY</option>
                                        <option>MM/DD/YYYY</option>
                                        <option>YYYY-MM-DD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="settings-footer">
                            <button class="btn-primary">Guardar Cambios</button>
                        </div>
                    </div>

                    <!-- Configuración del Sitio -->
                    <div class="settings-card animate-fade-in" style="animation-delay: 0.2s">
                        <div class="settings-header">
                            <h4>Configuración del Sitio</h4>
                        </div>
                        <div class="settings-body">
                            <div class="settings-group">
                                <h5>Información de la Empresa</h5>
                                <div class="form-group">
                                    <label>Nombre de la Empresa</label>
                                    <input type="text" class="form-control" placeholder="ENCASA">
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control" placeholder="Tu mejor solución para el hogar"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Email de Contacto</label>
                                    <input type="email" class="form-control" placeholder="contacto@encasa.com">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono de Contacto</label>
                                    <input type="tel" class="form-control" placeholder="+123 456 7890">
                                </div>
                            </div>
                        </div>
                        <div class="settings-footer">
                            <button class="btn-primary">Guardar Cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
