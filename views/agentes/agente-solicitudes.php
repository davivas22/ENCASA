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
                    <input type="text" placeholder="Buscar solicitudes...">
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
                    <h2>Solicitudes de Clientes</h2>
                    <div class="header-actions">
                        <div class="filter-tabs">
                            <button class="tab-btn active" data-filter="all">Todas</button>
                            <button class="tab-btn" data-filter="new">Nuevas</button>
                            <button class="tab-btn" data-filter="in-progress">En Proceso</button>
                            <button class="tab-btn" data-filter="completed">Completadas</button>
                        </div>
                    </div>
                </div>
                
                <div class="requests-container animate__animated animate__fadeIn">
                    <!-- Solicitud 1 -->
                    <div class="request-card new">
                        <div class="request-header">
                            <div class="request-user">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Foto de cliente">
                                <div class="request-user-info">
                                    <h3>María Rodríguez</h3>
                                    <p><i class="fas fa-envelope"></i> maria.rodriguez@example.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7123-4567</p>
                                </div>
                            </div>
                            <div class="request-status">
                                <span class="status-badge new">Nueva</span>
                                <p class="request-date">Recibida: 15 Mayo, 2025 - 10:30 AM</p>
                            </div>
                        </div>
                        
                        <div class="request-body">
                            <div class="request-property">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Casa Moderna en Zona Rosa">
                                <div class="property-info">
                                    <h4>Casa Moderna en Zona Rosa</h4>
                                    <p><i class="fas fa-map-marker-alt"></i> Zona Rosa, San Salvador</p>
                                    <p class="property-price">$245,000</p>
                                </div>
                            </div>
                            
                            <div class="request-message">
                                <h4>Mensaje del cliente:</h4>
                                <p>Estoy muy interesada en esta propiedad. Me gustaría programar una visita para este fin de semana si es posible. También quisiera saber si el precio es negociable y si hay posibilidad de financiamiento.</p>
                            </div>
                        </div>
                        
                        <div class="request-footer">
                            <div class="request-actions">
                                <button class="btn-primary">
                                    <i class="fas fa-reply"></i> Responder
                                </button>
                                <button class="btn-secondary">
                                    <i class="fas fa-calendar-alt"></i> Programar Visita
                                </button>
                                <button class="btn-outline">
                                    <i class="fas fa-check"></i> Marcar como En Proceso
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Solicitud 2 -->
                    <div class="request-card new">
                        <div class="request-header">
                            <div class="request-user">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Foto de cliente">
                                <div class="request-user-info">
                                    <h3>Juan Pérez</h3>
                                    <p><i class="fas fa-envelope"></i> juan.perez@example.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7234-5678</p>
                                </div>
                            </div>
                            <div class="request-status">
                                <span class="status-badge new">Nueva</span>
                                <p class="request-date">Recibida: 15 Mayo, 2025 - 14:45 PM</p>
                            </div>
                        </div>
                        
                        <div class="request-body">
                            <div class="request-property">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Apartamento en Horizontes">
                                <div class="property-info">
                                    <h4>Apartamento en Horizontes</h4>
                                    <p><i class="fas fa-map-marker-alt"></i> Ilopango, San Salvador</p>
                                    <p class="property-price">$135,000</p>
                                </div>
                            </div>
                            
                            <div class="request-message">
                                <h4>Mensaje del cliente:</h4>
                                <p>Hola, me interesa conocer más detalles sobre este apartamento. ¿Podría proporcionarme información sobre los gastos de mantenimiento y si cuenta con estacionamiento asignado? También me gustaría saber si es posible hacer una visita virtual.</p>
                            </div>
                        </div>
                        
                        <div class="request-footer">
                            <div class="request-actions">
                                <button class="btn-primary">
                                    <i class="fas fa-reply"></i> Responder
                                </button>
                                <button class="btn-secondary">
                                    <i class="fas fa-calendar-alt"></i> Programar Visita
                                </button>
                                <button class="btn-outline">
                                    <i class="fas fa-check"></i> Marcar como En Proceso
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Solicitud 3 -->
                    <div class="request-card in-progress">
                        <div class="request-header">
                            <div class="request-user">
                                <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Foto de cliente">
                                <div class="request-user-info">
                                    <h3>Ana Martínez</h3>
                                    <p><i class="fas fa-envelope"></i> ana.martinez@example.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7345-6789</p>
                                </div>
                            </div>
                            <div class="request-status">
                                <span class="status-badge in-progress">En Proceso</span>
                                <p class="request-date">Recibida: 14 Mayo, 2025 - 09:15 AM</p>
                            </div>
                        </div>
                        
                        <div class="request-body">
                            <div class="request-property">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Residencial en Santa Tecla">
                                <div class="property-info">
                                    <h4>Residencial en Santa Tecla</h4>
                                    <p><i class="fas fa-map-marker-alt"></i> Santa Tecla, La Libertad</p>
                                    <p class="property-price">$320,000</p>
                                </div>
                            </div>
                            
                            <div class="request-message">
                                <h4>Mensaje del cliente:</h4>
                                <p>Buenas tardes, estoy interesada en esta propiedad para mi familia. Necesitaría saber si la zona es segura y qué colegios hay cerca. También me gustaría conocer si hay posibilidad de modificar algunos espacios de la casa.</p>
                            </div>
                            
                            <div class="request-notes">
                                <h4>Notas del agente:</h4>
                                <p>Visita programada para el sábado 18 de mayo a las 10:00 AM. Cliente muy interesada, posible compra rápida. Preparar información sobre colegios cercanos y opciones de financiamiento.</p>
                            </div>
                        </div>
                        
                        <div class="request-footer">
                            <div class="request-actions">
                                <button class="btn-primary">
                                    <i class="fas fa-reply"></i> Responder
                                </button>
                                <button class="btn-secondary">
                                    <i class="fas fa-edit"></i> Editar Notas
                                </button>
                                <button class="btn-success">
                                    <i class="fas fa-check-double"></i> Marcar como Completada
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Solicitud 4 -->
                    <div class="request-card completed">
                        <div class="request-header">
                            <div class="request-user">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Foto de cliente">
                                <div class="request-user-info">
                                    <h3>Roberto Gómez</h3>
                                    <p><i class="fas fa-envelope"></i> roberto.gomez@example.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7456-7890</p>
                                </div>
                            </div>
                            <div class="request-status">
                                <span class="status-badge completed">Completada</span>
                                <p class="request-date">Recibida: 10 Mayo, 2025 - 16:20 PM</p>
                            </div>
                        </div>
                        
                        <div class="request-body">
                            <div class="request-property">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Casa Moderna en Zona Rosa">
                                <div class="property-info">
                                    <h4>Casa Moderna en Zona Rosa</h4>
                                    <p><i class="fas fa-map-marker-alt"></i> Zona Rosa, San Salvador</p>
                                    <p class="property-price">$245,000</p>
                                </div>
                            </div>
                            
                            <div class="request-message">
                                <h4>Mensaje del cliente:</h4>
                                <p>Me interesa esta propiedad para inversión. Quisiera saber cuál es el potencial de rentabilidad y si hay alguna restricción para alquilarla por temporadas cortas.</p>
                            </div>
                            
                            <div class="request-notes">
                                <h4>Notas del agente:</h4>
                                <p>Cliente decidió no seguir con esta propiedad después de la visita. Prefiere buscar algo más cercano al centro de la ciudad. Se le enviaron alternativas por correo electrónico.</p>
                            </div>
                            
                            <div class="request-resolution">
                                <h4>Resolución:</h4>
                                <p>Cliente no interesado en esta propiedad. Se le ofrecieron alternativas en la zona de San Benito.</p>
                            </div>
                        </div>
                        
                        <div class="request-footer">
                            <div class="request-actions">
                                <button class="btn-primary">
                                    <i class="fas fa-reply"></i> Enviar Seguimiento
                                </button>
                                <button class="btn-secondary">
                                    <i class="fas fa-archive"></i> Archivar
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Solicitud 5 -->
                    <div class="request-card new">
                        <div class="request-header">
                            <div class="request-user">
                                <img src="https://randomuser.me/api/portraits/women/56.jpg" alt="Foto de cliente">
                                <div class="request-user-info">
                                    <h3>Laura Sánchez</h3>
                                    <p><i class="fas fa-envelope"></i> laura.sanchez@example.com</p>
                                    <p><i class="fas fa-phone"></i> +503 7567-8901</p>
                                </div>
                            </div>
                            <div class="request-status">
                                <span class="status-badge new">Nueva</span>
                                <p class="request-date">Recibida: 15 Mayo, 2025 - 18:05 PM</p>
                            </div>
                        </div>
                        
                        <div class="request-body">
                            <div class="request-property">
                                <img src="https://imgix.cosentino.com/es/wp-content/uploads/2023/07/Lumire-70-Facade-MtWaverley-vic-1.jpg?auto=format%2Ccompress&ixlib=php-3.3.0" alt="Villa de Lujo en Antiguo Cuscatlán">
                                <div class="property-info">
                                    <h4>Villa de Lujo en Antiguo Cuscatlán</h4>
                                    <p><i class="fas fa-map-marker-alt"></i> Antiguo Cuscatlán, La Libertad</p>
                                    <p class="property-price">$475,000</p>
                                </div>
                            </div>
                            
                            <div class="request-message">
                                <h4>Mensaje del cliente:</h4>
                                <p>Estoy buscando una propiedad de lujo para mi familia. Esta villa parece perfecta. Me gustaría saber si tiene sistema de seguridad, si la piscina tiene sistema de calefacción y si el precio incluye los muebles que se ven en las fotos.</p>
                            </div>
                        </div>
                        
                        <div class="request-footer">
                            <div class="request-actions">
                                <button class="btn-primary">
                                    <i class="fas fa-reply"></i> Responder
                                </button>
                                <button class="btn-secondary">
                                    <i class="fas fa-calendar-alt"></i> Programar Visita
                                </button>
                                <button class="btn-outline">
                                    <i class="fas fa-check"></i> Marcar como En Proceso
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- Modal de respuesta -->
    <div class="modal" id="replyModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Responder a solicitud</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Para:</label>
                    <input type="text" value="maria.rodriguez@example.com" readonly>
                </div>
                <div class="form-group">
                    <label>Asunto:</label>
                    <input type="text" value="RE: Solicitud sobre Casa Moderna en Zona Rosa">
                </div>
                <div class="form-group">
                    <label>Mensaje:</label>
                    <textarea rows="6" placeholder="Escribe tu respuesta aquí..."></textarea>
                </div>
                <div class="form-group">
                    <label>Adjuntos:</label>
                    <div class="file-upload">
                        <input type="file" id="fileUpload" multiple>
                        <label for="fileUpload">
                            <i class="fas fa-paperclip"></i> Adjuntar archivos
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-secondary">Guardar borrador</button>
                <button class="btn-primary">Enviar respuesta</button>
            </div>
        </div>
    </div>
  