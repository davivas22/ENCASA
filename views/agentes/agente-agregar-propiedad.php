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
                    <h2>Agregar Nueva Propiedad</h2>
                    <p>Complete todos los campos para publicar una nueva propiedad</p>
                </div>
                
                <form class="property-form animate__animated animate__fadeIn">
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-info-circle"></i>
                            Información Básica
                        </h3>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="propertyTitle">Título de la Propiedad*</label>
                                <input type="text" id="propertyTitle" placeholder="Ej: Casa Moderna en Zona Rosa" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyType">Tipo de Propiedad*</label>
                                <select id="propertyType" required>
                                    <option value="">Seleccionar tipo</option>
                                    <option value="casa">Casa</option>
                                    <option value="apartamento">Apartamento</option>
                                    <option value="terreno">Terreno</option>
                                    <option value="local">Local Comercial</option>
                                    <option value="oficina">Oficina</option>
                                    <option value="bodega">Bodega</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyStatus">Estado*</label>
                                <select id="propertyStatus" required>
                                    <option value="">Seleccionar estado</option>
                                    <option value="venta">En Venta</option>
                                    <option value="alquiler">En Alquiler</option>
                                    <option value="venta-alquiler">Venta y Alquiler</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyPrice">Precio*</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-dollar-sign"></i>
                                    <input type="number" id="propertyPrice" placeholder="Ej: 245000" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-map-marker-alt"></i>
                            Ubicación
                        </h3>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="propertyAddress">Dirección*</label>
                                <input type="text" id="propertyAddress" placeholder="Ej: Calle Principal #123" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyCity">Ciudad/Municipio*</label>
                                <select id="propertyCity" required>
                                    <option value="">Seleccionar ciudad</option>
                                    <option value="san-salvador">San Salvador</option>
                                    <option value="santa-tecla">Santa Tecla</option>
                                    <option value="antiguo-cuscatlan">Antiguo Cuscatlán</option>
                                    <option value="ilopango">Ilopango</option>
                                    <option value="soyapango">Soyapango</option>
                                    <option value="mejicanos">Mejicanos</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyZone">Zona/Colonia*</label>
                                <input type="text" id="propertyZone" placeholder="Ej: Zona Rosa" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyState">Departamento*</label>
                                <select id="propertyState" required>
                                    <option value="">Seleccionar departamento</option>
                                    <option value="ahuachapan">Ahuachapán</option>
                                    <option value="cabanas">Cabañas</option>
                                    <option value="chalatenango">Chalatenango</option>
                                    <option value="cuscatlan">Cuscatlán</option>
                                    <option value="la-libertad">La Libertad</option>
                                    <option value="la-paz">La Paz</option>
                                    <option value="la-union">La Unión</option>
                                    <option value="morazan">Morazán</option>
                                    <option value="san-miguel">San Miguel</option>
                                    <option value="san-salvador">San Salvador</option>
                                    <option value="san-vicente">San Vicente</option>
                                    <option value="santa-ana">Santa Ana</option>
                                    <option value="sonsonate">Sonsonate</option>
                                    <option value="usulutan">Usulután</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group map-container">
                            <label>Ubicación en el Mapa*</label>
                            <p class="form-hint">Haz clic en el mapa para marcar la ubicación exacta de la propiedad</p>
                            <div id="propertyMap"></div>
                            <div class="map-coordinates">
                                <div class="form-group">
                                    <label for="propertyLat">Latitud</label>
                                    <input type="text" id="propertyLat" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="propertyLng">Longitud</label>
                                    <input type="text" id="propertyLng" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-home"></i>
                            Características
                        </h3>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="propertyBedrooms">Habitaciones</label>
                                <input type="number" id="propertyBedrooms" min="0" placeholder="Ej: 3">
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyBathrooms">Baños</label>
                                <input type="number" id="propertyBathrooms" min="0" step="0.5" placeholder="Ej: 2.5">
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyGarage">Garajes</label>
                                <input type="number" id="propertyGarage" min="0" placeholder="Ej: 2">
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyArea">Área Total (m²)*</label>
                                <input type="number" id="propertyArea" min="1" placeholder="Ej: 180" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyBuiltArea">Área Construida (m²)</label>
                                <input type="number" id="propertyBuiltArea" min="0" placeholder="Ej: 150">
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyYear">Año de Construcción</label>
                                <input type="number" id="propertyYear" min="1900" max="2025" placeholder="Ej: 2020">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Amenidades</label>
                            <div class="amenities-grid">
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityPool">
                                    <label for="amenityPool">Piscina</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityGarden">
                                    <label for="amenityGarden">Jardín</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenitySecurity">
                                    <label for="amenitySecurity">Seguridad 24/7</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityAC">
                                    <label for="amenityAC">Aire Acondicionado</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityFurnished">
                                    <label for="amenityFurnished">Amueblado</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityBalcony">
                                    <label for="amenityBalcony">Balcón/Terraza</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityStorage">
                                    <label for="amenityStorage">Bodega</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityPets">
                                    <label for="amenityPets">Acepta Mascotas</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityGym">
                                    <label for="amenityGym">Gimnasio</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityBBQ">
                                    <label for="amenityBBQ">Área de BBQ</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityInternet">
                                    <label for="amenityInternet">Internet de Alta Velocidad</label>
                                </div>
                                <div class="amenity-checkbox">
                                    <input type="checkbox" id="amenityLaundry">
                                    <label for="amenityLaundry">Lavandería</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-align-left"></i>
                            Descripción
                        </h3>
                        
                        <div class="form-group">
                            <label for="propertyDescription">Descripción Detallada*</label>
                            <textarea id="propertyDescription" rows="6" placeholder="Describe detalladamente la propiedad, destacando sus características principales y beneficios..." required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-images"></i>
                            Imágenes
                        </h3>
                        
                        <div class="form-group">
                            <label>Imágenes de la Propiedad*</label>
                            <p class="form-hint">Sube al menos 3 imágenes de alta calidad. La primera imagen será la principal.</p>
                            
                            <div class="image-upload-container">
                                <div class="image-upload-box">
                                    <input type="file" id="propertyImages" multiple accept="image/*">
                                    <label for="propertyImages">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <span>Arrastra imágenes aquí o haz clic para seleccionar</span>
                                    </label>
                                </div>
                                
                                <div class="image-preview-container">
                                    <!-- Las miniaturas de las imágenes se mostrarán aquí -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-video"></i>
                            Video y Tour Virtual (Opcional)
                        </h3>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="propertyVideo">URL de Video (YouTube/Vimeo)</label>
                                <input type="url" id="propertyVideo" placeholder="Ej: https://www.youtube.com/watch?v=...">
                            </div>
                            
                            <div class="form-group">
                                <label for="propertyTour">URL de Tour Virtual</label>
                                <input type="url" id="propertyTour" placeholder="Ej: https://my.matterport.com/show/?m=...">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-file-contract"></i>
                            Documentos (Opcional)
                        </h3>
                        
                        <div class="form-group">
                            <label>Documentos Relevantes</label>
                            <p class="form-hint">Sube documentos como planos, escrituras, permisos, etc.</p>
                            
                            <div class="file-upload-box">
                                <input type="file" id="propertyDocs" multiple accept=".pdf,.doc,.docx,.xls,.xlsx">
                                <label for="propertyDocs">
                                    <i class="fas fa-file-upload"></i>
                                    <span>Arrastra documentos aquí o haz clic para seleccionar</span>
                                </label>
                            </div>
                            
                            <div class="file-list">
                                <!-- La lista de documentos se mostrará aquí -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="button" class="btn-secondary">Guardar Borrador</button>
                        <button type="submit" class="btn-primary">Publicar Propiedad</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    
    <!-- Modal de confirmación -->
    <div class="modal" id="confirmModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Confirmar publicación</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas publicar esta propiedad? Una vez publicada, estará visible para todos los usuarios.</p>
            </div>
            <div class="modal-footer">
                <button class="btn-secondary" id="cancelPublish">Cancelar</button>
                <button class="btn-primary" id="confirmPublish">Publicar</button>
            </div>
        </div>
    </div>