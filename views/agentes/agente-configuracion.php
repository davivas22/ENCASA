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
                    <h2>Configuración</h2>
                    <button class="btn-primary" id="save-settings">
                        <i class="fas fa-save"></i> Guardar Cambios
                    </button>
                </div>
                
                <div class="settings-container animate__animated animate__fadeIn">
                    <div class="settings-tabs">
                        <button class="tab-btn active" data-tab="account">Cuenta</button>
                        <button class="tab-btn" data-tab="security">Seguridad</button>
                        <button class="tab-btn" data-tab="notifications">Notificaciones</button>
                        <button class="tab-btn" data-tab="appearance">Apariencia</button>
                    </div>
                    
                    <div class="settings-content">
                        <!-- Configuración de Cuenta -->
                        <div class="tab-content active" id="account">
                            <form class="settings-form">
                                <div class="form-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-user-circle"></i>
                                        Configuración de Cuenta
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label for="account-email">Correo Electrónico Principal</label>
                                        <input type="email" id="account-email" value="carlos.mendoza@encasa.com">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="account-language">Idioma</label>
                                        <select id="account-language">
                                            <option value="es" selected>Español</option>
                                            <option value="en">English</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="account-timezone">Zona Horaria</label>
                                        <select id="account-timezone">
                                            <option value="america-el-salvador" selected>América/El Salvador (UTC-6)</option>
                                            <option value="america-mexico">América/México (UTC-6)</option>
                                            <option value="america-new-york">América/New York (UTC-5)</option>
                                            <option value="america-los-angeles">América/Los Angeles (UTC-8)</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Formato de Fecha</label>
                                        <div class="radio-group">
                                            <label class="radio-option">
                                                <input type="radio" name="date-format" value="dd/mm/yyyy" checked>
                                                <span>DD/MM/YYYY</span>
                                            </label>
                                            <label class="radio-option">
                                                <input type="radio" name="date-format" value="mm/dd/yyyy">
                                                <span>MM/DD/YYYY</span>
                                            </label>
                                            <label class="radio-option">
                                                <input type="radio" name="date-format" value="yyyy-mm-dd">
                                                <span>YYYY-MM-DD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-dollar-sign"></i>
                                        Configuración de Moneda
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label for="account-currency">Moneda Principal</label>
                                        <select id="account-currency">
                                            <option value="usd" selected>USD - Dólar Estadounidense</option>
                                            <option value="eur">EUR - Euro</option>
                                            <option value="mxn">MXN - Peso Mexicano</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Formato de Moneda</label>
                                        <div class="radio-group">
                                            <label class="radio-option">
                                                <input type="radio" name="currency-format" value="symbol-before" checked>
                                                <span>Símbolo antes ($100)</span>
                                            </label>
                                            <label class="radio-option">
                                                <input type="radio" name="currency-format" value="symbol-after">
                                                <span>Símbolo después (100$)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Configuración de Seguridad -->
                        <div class="tab-content" id="security">
                            <form class="settings-form">
                                <div class="form-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-lock"></i>
                                        Cambiar Contraseña
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label for="current-password">Contraseña Actual*</label>
                                        <input type="password" id="current-password" placeholder="Ingresa tu contraseña actual">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="new-password">Nueva Contraseña*</label>
                                        <input type="password" id="new-password" placeholder="Ingresa tu nueva contraseña">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="confirm-password">Confirmar Nueva Contraseña*</label>
                                        <input type="password" id="confirm-password" placeholder="Confirma tu nueva contraseña">
                                    </div>
                                    
                                    <div class="password-strength">
                                        <p>Fortaleza de la contraseña:</p>
                                        <div class="strength-meter">
                                            <div class="strength-bar" style="width: 0%"></div>
                                        </div>
                                        <p class="strength-text">Ingresa una contraseña</p>
                                    </div>
                                    
                                    <button type="button" class="btn-primary" id="change-password-btn">
                                        <i class="fas fa-key"></i> Cambiar Contraseña
                                    </button>
                                </div>
                                
                                <div class="form-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-shield-alt"></i>
                                        Seguridad de la Cuenta
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="two-factor-auth" checked>
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Autenticación de dos factores</span>
                                        </label>
                                        <p class="form-hint">Aumenta la seguridad de tu cuenta requiriendo un código adicional al iniciar sesión.</p>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="login-notifications" checked>
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Notificaciones de inicio de sesión</span>
                                        </label>
                                        <p class="form-hint">Recibe notificaciones cuando se detecte un inicio de sesión desde un dispositivo o ubicación desconocida.</p>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="session-timeout">Tiempo de inactividad para cierre de sesión</label>
                                        <select id="session-timeout">
                                            <option value="15">15 minutos</option>
                                            <option value="30" selected>30 minutos</option>
                                            <option value="60">1 hora</option>
                                            <option value="120">2 horas</option>
                                            <option value="0">Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Configuración de Notificaciones -->
                        <div class="tab-content" id="notifications">
                            <form class="settings-form">
                                <div class="form-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-bell"></i>
                                        Notificaciones por Correo Electrónico
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="email-new-requests" checked>
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Nuevas solicitudes de clientes</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="email-property-views" checked>
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Vistas de mis propiedades</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="email-messages" checked>
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Mensajes de clientes</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="email-marketing">
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Boletines y ofertas especiales</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-mobile-alt"></i>
                                        Notificaciones Push
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="push-new-requests" checked>
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Nuevas solicitudes de clientes</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="push-property-views">
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Vistas de mis propiedades</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="push-messages" checked>
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Mensajes de clientes</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="push-system" checked>
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Notificaciones del sistema</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="notification-frequency">Frecuencia de resumen de notificaciones</label>
                                    <select id="notification-frequency">
                                        <option value="immediately">Inmediatamente</option>
                                        <option value="daily" selected>Diariamente</option>
                                        <option value="weekly">Semanalmente</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Configuración de Apariencia -->
                        <div class="tab-content" id="appearance">
                            <form class="settings-form">
                                <div class="form-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-palette"></i>
                                        Tema
                                    </h3>
                                    
                                    <div class="theme-options">
                                        <div class="theme-option active" data-theme="light">
                                            <div class="theme-preview light-theme"></div>
                                            <span>Claro</span>
                                        </div>
                                        <div class="theme-option" data-theme="dark">
                                            <div class="theme-preview dark-theme"></div>
                                            <span>Oscuro</span>
                                        </div>
                                        <div class="theme-option" data-theme="auto">
                                            <div class="theme-preview auto-theme"></div>
                                            <span>Automático</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-th-large"></i>
                                        Diseño del Dashboard
                                    </h3>
                                    
                                    <div class="form-group">
                                        <label for="dashboard-layout">Diseño</label>
                                        <select id="dashboard-layout">
                                            <option value="default" selected>Predeterminado</option>
                                            <option value="compact">Compacto</option>
                                            <option value="expanded">Expandido</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="sidebar-collapsed">
                                            <span class="toggle-slider"></span>
                                            <span class="toggle-label">Iniciar con sidebar colapsado</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="items-per-page">Elementos por página</label>
                                        <select id="items-per-page">
                                            <option value="10">10</option>
                                            <option value="20" selected>20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- Modal de éxito -->
    <div class="modal" id="successModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Cambios guardados</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="success-message">
                    <i class="fas fa-check-circle"></i>
                    <p>Los cambios en la configuración han sido guardados exitosamente.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-primary" id="okButton">Aceptar</button>
            </div>
        </div>
    </div>
    
    <!-- Modal de cambio de contraseña -->
    <div class="modal" id="passwordModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Contraseña actualizada</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="success-message">
                    <i class="fas fa-check-circle"></i>
                    <p>Tu contraseña ha sido actualizada exitosamente.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-primary" id="passwordOkButton">Aceptar</button>
            </div>
        </div>
    </div>