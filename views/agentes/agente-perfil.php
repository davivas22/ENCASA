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
                    <h2>Mi Perfil</h2>
                    <button class="btn-primary" id="save-profile">
                        <i class="fas fa-save"></i> Guardar Cambios
                    </button>
                </div>
                
                <div class="profile-container animate__animated animate__fadeIn">
                    <div class="profile-header">
                        <div class="profile-avatar-container">
                            <div class="profile-avatar">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Foto de perfil" id="profile-image">
                            </div>
                            <div class="profile-avatar-actions">
                                <button class="btn-change-avatar" id="change-avatar">
                                    <i class="fas fa-camera"></i> Cambiar foto
                                </button>
                                <input type="file" id="avatar-upload" accept="image/*" style="display: none;">
                            </div>
                        </div>
                        
                        <div class="profile-info">
                            <h3>Carlos Mendoza</h3>
                            <p>Agente Senior</p>
                            <div class="profile-stats">
                                <div class="stat">
                                    <span class="stat-value">12</span>
                                    <span class="stat-label">Propiedades</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-value">45</span>
                                    <span class="stat-label">Solicitudes</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-value">8</span>
                                    <span class="stat-label">Ventas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="profile-tabs">
                        <button class="tab-btn active" data-tab="personal-info">Información Personal</button>
                        <button class="tab-btn" data-tab="professional-info">Información Profesional</button>
                        <button class="tab-btn" data-tab="social-media">Redes Sociales</button>
                    </div>
                    
                    <div class="profile-content">
                        <!-- Información Personal -->
                        <div class="tab-content active" id="personal-info">
                            <form class="profile-form">
                                <div class="form-section">
                                    <div class="form-grid">
                                        <div class="form-group">
                                            <label for="firstName">Nombre*</label>
                                            <input type="text" id="firstName" value="Carlos" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="lastName">Apellido*</label>
                                            <input type="text" id="lastName" value="Mendoza" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email">Correo Electrónico*</label>
                                            <input type="email" id="email" value="carlos.mendoza@encasa.com" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="phone">Teléfono*</label>
                                            <input type="tel" id="phone" value="+503 7123-4567" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="birthdate">Fecha de Nacimiento</label>
                                            <input type="date" id="birthdate" value="1985-06-15">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="address">Dirección</label>
                                            <input type="text" id="address" value="Calle Principal #123, San Salvador">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Información Profesional -->
                        <div class="tab-content" id="professional-info">
                            <form class="profile-form">
                                <div class="form-section">
                                    <div class="form-grid">
                                        <div class="form-group">
                                            <label for="title">Título Profesional*</label>
                                            <input type="text" id="title" value="Agente Senior" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="license">Número de Licencia</label>
                                            <input type="text" id="license" value="AG-2023-1234">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="experience">Años de Experiencia*</label>
                                            <input type="number" id="experience" value="8" min="0" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="specialization">Especialización</label>
                                            <select id="specialization">
                                                <option value="residential">Residencial</option>
                                                <option value="commercial" selected>Comercial</option>
                                                <option value="luxury">Propiedades de Lujo</option>
                                                <option value="investment">Inversión</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="bio">Biografía Profesional</label>
                                        <textarea id="bio" rows="6">Con más de 8 años de experiencia en el mercado inmobiliario, me especializo en propiedades comerciales y residenciales de alto valor. Mi compromiso es brindar un servicio personalizado y profesional para ayudar a mis clientes a encontrar la propiedad perfecta para sus necesidades o vender su propiedad al mejor precio posible.</textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Áreas de Especialización</label>
                                        <div class="specialties-grid">
                                            <div class="specialty-checkbox">
                                                <input type="checkbox" id="specialty1" checked>
                                                <label for="specialty1">Propiedades de Lujo</label>
                                            </div>
                                            <div class="specialty-checkbox">
                                                <input type="checkbox" id="specialty2" checked>
                                                <label for="specialty2">Comercial</label>
                                            </div>
                                            <div class="specialty-checkbox">
                                                <input type="checkbox" id="specialty3">
                                                <label for="specialty3">Residencial</label>
                                            </div>
                                            <div class="specialty-checkbox">
                                                <input type="checkbox" id="specialty4" checked>
                                                <label for="specialty4">Inversión</label>
                                            </div>
                                            <div class="specialty-checkbox">
                                                <input type="checkbox" id="specialty5">
                                                <label for="specialty5">Terrenos</label>
                                            </div>
                                            <div class="specialty-checkbox">
                                                <input type="checkbox" id="specialty6">
                                                <label for="specialty6">Alquiler</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Redes Sociales -->
                        <div class="tab-content" id="social-media">
                            <form class="profile-form">
                                <div class="form-section">
                                    <div class="form-grid">
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <div class="input-with-icon">
                                                <i class="fab fa-facebook-f"></i>
                                                <input type="url" id="facebook" value="https://facebook.com/carlosmendoza">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <div class="input-with-icon">
                                                <i class="fab fa-instagram"></i>
                                                <input type="url" id="instagram" value="https://instagram.com/carlosmendoza">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="linkedin">LinkedIn</label>
                                            <div class="input-with-icon">
                                                <i class="fab fa-linkedin-in"></i>
                                                <input type="url" id="linkedin" value="https://linkedin.com/in/carlosmendoza">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <div class="input-with-icon">
                                                <i class="fab fa-twitter"></i>
                                                <input type="url" id="twitter" value="https://twitter.com/carlosmendoza">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="youtube">YouTube</label>
                                            <div class="input-with-icon">
                                                <i class="fab fa-youtube"></i>
                                                <input type="url" id="youtube" placeholder="Enlace a tu canal de YouTube">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="website">Sitio Web Personal</label>
                                            <div class="input-with-icon">
                                                <i class="fas fa-globe"></i>
                                                <input type="url" id="website" value="https://carlosmendoza.com">
                                            </div>
                                        </div>
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
                    <p>Los cambios en tu perfil han sido guardados exitosamente.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-primary" id="okButton">Aceptar</button>
            </div>
        </div>
    </div>
