document.addEventListener('DOMContentLoaded', function() {
    // Toggle sidebar
    const toggleSidebar = document.querySelector('.toggle-sidebar');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    
    if (toggleSidebar) {
        toggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            
            // Ajustar el margen del contenido principal en móviles
            if (window.innerWidth <= 768) {
                if (sidebar.classList.contains('active')) {
                    mainContent.style.marginLeft = '280px';
                } else {
                    mainContent.style.marginLeft = '0';
                }
            }
        });
    }
    
    // Cerrar sidebar al hacer clic fuera de ella en móviles
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768 && sidebar.classList.contains('active')) {
            if (!sidebar.contains(event.target) && !toggleSidebar.contains(event.target)) {
                sidebar.classList.remove('active');
                mainContent.style.marginLeft = '0';
            }
        }
    });
    
    // Gráfico de rendimiento (si estamos en la página de dashboard)
    const performanceChart = document.getElementById('performanceChart');
    if (performanceChart) {
        const ctx = performanceChart.getContext('2d');
        
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                datasets: [{
                    label: 'Visitas',
                    data: [150, 220, 180, 270, 320, 350, 400, 450, 500, 550, 600, 650],
                    borderColor: '#b08d57',
                    backgroundColor: 'rgba(176, 141, 87, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#5d4037',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        titleFont: {
                            family: 'Montserrat',
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            family: 'Montserrat',
                            size: 12
                        },
                        padding: 12,
                        cornerRadius: 8
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            font: {
                                family: 'Montserrat'
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Montserrat'
                            }
                        }
                    }
                }
            }
        });
        
        // Cambiar datos del gráfico según el filtro seleccionado
        const chartFilters = document.querySelectorAll('.chart-filters button');
        if (chartFilters) {
            chartFilters.forEach(button => {
                button.addEventListener('click', function() {
                    // Quitar clase activa de todos los botones
                    chartFilters.forEach(btn => btn.classList.remove('active'));
                    // Añadir clase activa al botón clickeado
                    this.classList.add('active');
                    
                    // Cambiar datos según el filtro
                    if (this.textContent === 'Visitas') {
                        chart.data.datasets[0].data = [150, 220, 180, 270, 320, 350, 400, 450, 500, 550, 600, 650];
                        chart.data.datasets[0].label = 'Visitas';
                    } else if (this.textContent === 'Solicitudes') {
                        chart.data.datasets[0].data = [10, 15, 12, 18, 22, 25, 30, 35, 40, 45, 50, 55];
                        chart.data.datasets[0].label = 'Solicitudes';
                    } else if (this.textContent === 'Ventas') {
                        chart.data.datasets[0].data = [1, 2, 1, 3, 2, 4, 3, 5, 4, 6, 5, 7];
                        chart.data.datasets[0].label = 'Ventas';
                    }
                    
                    chart.update();
                });
            });
        }
    }
    
    // Modal de confirmación para eliminar propiedad
    const deleteButtons = document.querySelectorAll('.btn-action.delete');
    const deleteModal = document.getElementById('deleteModal');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmDelete = document.getElementById('confirmDelete');
    const closeModal = document.querySelector('.close-modal');
    
    if (deleteButtons && deleteModal) {
        deleteButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                deleteModal.classList.add('active');
                
                // Guardar referencia a la propiedad que se va a eliminar
                const propertyCard = this.closest('.property-card');
                confirmDelete.setAttribute('data-property-id', propertyCard.getAttribute('data-id'));
            });
        });
        
        if (cancelDelete) {
            cancelDelete.addEventListener('click', function() {
                deleteModal.classList.remove('active');
            });
        }
        
        if (closeModal) {
            closeModal.addEventListener('click', function() {
                deleteModal.classList.remove('active');
            });
        }
        
        if (confirmDelete) {
            confirmDelete.addEventListener('click', function() {
                // Obtener el ID de la propiedad a eliminar
                const propertyId = this.getAttribute('data-property-id');
                
                // Aquí iría la lógica para eliminar la propiedad (AJAX, fetch, etc.)
                console.log('Eliminando propiedad con ID:', propertyId);
                
                // Simulación de eliminación (en producción, esto se haría después de confirmar la eliminación en el servidor)
                const propertyCard = document.querySelector(`.property-card[data-id="${propertyId}"]`);
                if (propertyCard) {
                    propertyCard.style.opacity = '0';
                    propertyCard.style.transform = 'scale(0.8)';
                    
                    setTimeout(() => {
                        propertyCard.remove();
                    }, 300);
                }
                
                // Cerrar modal
                deleteModal.classList.remove('active');
            });
        }
    }
    
    // Filtros de solicitudes
    const tabButtons = document.querySelectorAll('.tab-btn');
    const requestCards = document.querySelectorAll('.request-card');
    
    if (tabButtons && requestCards) {
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Si el botón es para filtrar solicitudes
                if (this.hasAttribute('data-filter')) {
                    // Quitar clase activa de todos los botones
                    tabButtons.forEach(btn => {
                        if (btn.hasAttribute('data-filter')) {
                            btn.classList.remove('active');
                        }
                    });
                    // Añadir clase activa al botón clickeado
                    this.classList.add('active');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    // Filtrar solicitudes
                    requestCards.forEach(card => {
                        if (filter === 'all' || card.classList.contains(filter)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                }
                // Si el botón es para cambiar de pestaña en perfil o configuración
                else if (this.hasAttribute('data-tab')) {
                    const tabId = this.getAttribute('data-tab');
                    const tabContent = document.getElementById(tabId);
                    
                    if (tabContent) {
                        // Quitar clase activa de todos los botones de pestañas
                        const tabsContainer = this.closest('.profile-tabs, .settings-tabs');
                        if (tabsContainer) {
                            tabsContainer.querySelectorAll('.tab-btn').forEach(btn => {
                                btn.classList.remove('active');
                            });
                        }
                        
                        // Añadir clase activa al botón clickeado
                        this.classList.add('active');
                        
                        // Ocultar todos los contenidos de pestañas
                        const tabContents = document.querySelectorAll('.tab-content');
                        tabContents.forEach(content => {
                            content.classList.remove('active');
                        });
                        
                        // Mostrar el contenido de la pestaña seleccionada
                        tabContent.classList.add('active');
                    }
                }
            });
        });
    }
    
    // Modal de respuesta a solicitud
    const replyButtons = document.querySelectorAll('.btn-primary');
    const replyModal = document.getElementById('replyModal');
    
    if (replyButtons && replyModal) {
        replyButtons.forEach(button => {
            if (button.innerHTML.includes('Responder')) {
                button.addEventListener('click', function() {
                    replyModal.classList.add('active');
                });
            }
        });
        
        // Cerrar modal
        const closeReplyModal = replyModal ? replyModal.querySelector('.close-modal') : null;
        if (closeReplyModal) {
            closeReplyModal.addEventListener('click', function() {
                replyModal.classList.remove('active');
            });
        }
    }
    
    // Mapa para agregar propiedad
    const propertyMap = document.getElementById('propertyMap');
    if (propertyMap) {
        // Inicializar mapa con Leaflet
        var L = window.L;
        const map = L.map('propertyMap').setView([13.6929, -89.2182], 13); // Coordenadas de San Salvador
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        let marker;
        
        // Añadir marcador al hacer clic en el mapa
        map.on('click', function(e) {
            const lat = e.latlng.lat;
            const lng = e.latlng.lng;
            
            // Actualizar campos de latitud y longitud
            document.getElementById('propertyLat').value = lat.toFixed(6);
            document.getElementById('propertyLng').value = lng.toFixed(6);
            
            // Eliminar marcador anterior si existe
            if (marker) {
                map.removeLayer(marker);
            }
            
            // Añadir nuevo marcador
            marker = L.marker([lat, lng]).addTo(map);
        });
    }
    
    // Previsualización de imágenes
    const propertyImages = document.getElementById('propertyImages');
    const imagePreviewContainer = document.querySelector('.image-preview-container');
    
    if (propertyImages && imagePreviewContainer) {
        propertyImages.addEventListener('change', function(e) {
            // Limpiar contenedor de previsualizaciones
            imagePreviewContainer.innerHTML = '';
            
            // Mostrar previsualizaciones de las imágenes seleccionadas
            const files = e.target.files;
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                
                // Verificar que sea una imagen
                if (!file.type.match('image.*')) {
                    continue;
                }
                
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const preview = document.createElement('div');
                    preview.className = 'image-preview';
                    
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    
                    const removeButton = document.createElement('button');
                    removeButton.className = 'remove-image';
                    removeButton.innerHTML = '<i class="fas fa-times"></i>';
                    removeButton.addEventListener('click', function() {
                        preview.remove();
                    });
                    
                    preview.appendChild(img);
                    preview.appendChild(removeButton);
                    imagePreviewContainer.appendChild(preview);
                };
                
                reader.readAsDataURL(file);
            }
        });
    }
    
    // Previsualización de documentos
    const propertyDocs = document.getElementById('propertyDocs');
    const fileList = document.querySelector('.file-list');
    
    if (propertyDocs && fileList) {
        propertyDocs.addEventListener('change', function(e) {
            // Mostrar lista de documentos seleccionados
            const files = e.target.files;
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                
                const fileItem = document.createElement('div');
                fileItem.className = 'file-item';
                
                const fileName = document.createElement('div');
                fileName.className = 'file-item-name';
                
                // Determinar icono según tipo de archivo
                let icon = 'fa-file';
                if (file.name.endsWith('.pdf')) {
                    icon = 'fa-file-pdf';
                } else if (file.name.endsWith('.doc') || file.name.endsWith('.docx')) {
                    icon = 'fa-file-word';
                } else if (file.name.endsWith('.xls') || file.name.endsWith('.xlsx')) {
                    icon = 'fa-file-excel';
                }
                
                fileName.innerHTML = `<i class="fas ${icon}"></i> ${file.name}`;
                
                const removeButton = document.createElement('button');
                removeButton.className = 'remove-file';
                removeButton.innerHTML = '<i class="fas fa-times"></i>';
                removeButton.addEventListener('click', function() {
                    fileItem.remove();
                });
                
                fileItem.appendChild(fileName);
                fileItem.appendChild(removeButton);
                fileList.appendChild(fileItem);
            }
        });
    }
    
    // Formulario de agregar propiedad
    const propertyForm = document.querySelector('.property-form');
    const confirmModal = document.getElementById('confirmModal');
    
    if (propertyForm) {
        propertyForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validar formulario
            const requiredFields = propertyForm.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });
            
            if (isValid) {
                // Mostrar modal de confirmación
                if (confirmModal) {
                    confirmModal.classList.add('active');
                } else {
                    // Si no hay modal, enviar directamente
                    console.log('Formulario enviado');
                    // Aquí iría la lógica para enviar el formulario
                }
            } else {
                // Mostrar mensaje de error
                alert('Por favor, complete todos los campos obligatorios.');
                
                // Hacer scroll al primer campo con error
                const firstError = propertyForm.querySelector('.error');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
        
        // Botones del modal de confirmación
        const cancelPublish = document.getElementById('cancelPublish');
        const confirmPublish = document.getElementById('confirmPublish');
        
        if (cancelPublish && confirmModal) {
            cancelPublish.addEventListener('click', function() {
                confirmModal.classList.remove('active');
            });
        }
        
        if (confirmPublish && confirmModal) {
            confirmPublish.addEventListener('click', function() {
                // Aquí iría la lógica para enviar el formulario
                console.log('Propiedad publicada');
                
                // Simular éxito
                confirmModal.classList.remove('active');
                
                // Redireccionar a la página de propiedades después de un breve retraso
                setTimeout(() => {
                    window.location.href = 'agente-propiedades.html';
                }, 1000);
            });
        }
    }
    
    // Animaciones al hacer scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.animate__animated');
        
        elements.forEach(element => {
            const position = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (position < windowHeight - 100) {
                const animationClass = element.classList.contains('animate__fadeIn') ? 'animate__fadeIn' : 
                                      element.classList.contains('animate__fadeInUp') ? 'animate__fadeInUp' : '';
                
                if (animationClass && !element.classList.contains('animate__animated--visible')) {
                    element.classList.add('animate__animated--visible');
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            }
        });
    }
    
    // Ejecutar animaciones al cargar y al hacer scroll
    window.addEventListener('load', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);
    
    // Funcionalidad para la página de perfil
    const saveProfileBtn = document.getElementById('save-profile');
    const successModal = document.getElementById('successModal');
    
    if (saveProfileBtn) {
        saveProfileBtn.addEventListener('click', function() {
            // Aquí iría la lógica para guardar el perfil
            console.log('Guardando perfil...');
            
            // Mostrar modal de éxito
            if (successModal) {
                successModal.classList.add('active');
            }
        });
    }
    
    // Cambiar avatar
    const changeAvatarBtn = document.getElementById('change-avatar');
    const avatarUpload = document.getElementById('avatar-upload');
    const profileImage = document.getElementById('profile-image');
    
    if (changeAvatarBtn && avatarUpload) {
        changeAvatarBtn.addEventListener('click', function() {
            avatarUpload.click();
        });
        
        avatarUpload.addEventListener('change', function(e) {
            const file = e.target.files[0];
            
            if (file && file.type.match('image.*')) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    if (profileImage) {
                        profileImage.src = e.target.result;
                    }
                };
                
                reader.readAsDataURL(file);
            }
        });
    }
    
    // Funcionalidad para la página de configuración
    const saveSettingsBtn = document.getElementById('save-settings');
    
    if (saveSettingsBtn) {
        saveSettingsBtn.addEventListener('click', function() {
            // Aquí iría la lógica para guardar la configuración
            console.log('Guardando configuración...');
            
            // Mostrar modal de éxito
            if (successModal) {
                successModal.classList.add('active');
            }
        });
    }
    
    // Cambiar contraseña
    const changePasswordBtn = document.getElementById('change-password-btn');
    const passwordModal = document.getElementById('passwordModal');
    const newPasswordInput = document.getElementById('new-password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const strengthBar = document.querySelector('.strength-bar');
    const strengthText = document.querySelector('.strength-text');
    
    if (changePasswordBtn && passwordModal) {
        changePasswordBtn.addEventListener('click', function() {
            // Validar que las contraseñas coincidan
            if (newPasswordInput && confirmPasswordInput) {
                if (newPasswordInput.value !== confirmPasswordInput.value) {
                    alert('Las contraseñas no coinciden');
                    return;
                }
                
                if (newPasswordInput.value.length < 8) {
                    alert('La contraseña debe tener al menos 8 caracteres');
                    return;
                }
            }
            
            // Aquí iría la lógica para cambiar la contraseña
            console.log('Cambiando contraseña...');
            
            // Mostrar modal de éxito
            passwordModal.classList.add('active');
        });
    }
    
    // Medidor de fortaleza de contraseña
    if (newPasswordInput && strengthBar && strengthText) {
        newPasswordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Calcular fortaleza
            if (password.length >= 8) strength += 20;
            if (password.match(/[a-z]+/)) strength += 20;
            if (password.match(/[A-Z]+/)) strength += 20;
            if (password.match(/[0-9]+/)) strength += 20;
            if (password.match(/[^a-zA-Z0-9]+/)) strength += 20;
            
            // Actualizar barra y texto
            strengthBar.style.width = strength + '%';
            
            if (strength <= 20) {
                strengthBar.style.backgroundColor = '#d32f2f';
                strengthText.textContent = 'Muy débil';
            } else if (strength <= 40) {
                strengthBar.style.backgroundColor = '#ff9800';
                strengthText.textContent = 'Débil';
            } else if (strength <= 60) {
                strengthBar.style.backgroundColor = '#ffc107';
                strengthText.textContent = 'Media';
            } else if (strength <= 80) {
                strengthBar.style.backgroundColor = '#8bc34a';
                strengthText.textContent = 'Fuerte';
            } else {
                strengthBar.style.backgroundColor = '#4caf50';
                strengthText.textContent = 'Muy fuerte';
            }
        });
    }
    
    // Opciones de tema
    const themeOptions = document.querySelectorAll('.theme-option');
    
    if (themeOptions) {
        themeOptions.forEach(option => {
            option.addEventListener('click', function() {
                // Quitar clase activa de todas las opciones
                themeOptions.forEach(opt => opt.classList.remove('active'));
                
                // Añadir clase activa a la opción seleccionada
                this.classList.add('active');
                
                // Aquí iría la lógica para cambiar el tema
                const theme = this.getAttribute('data-theme');
                console.log('Cambiando tema a:', theme);
            });
        });
    }
    
    // Cerrar modales de éxito
    const okButtons = document.querySelectorAll('#okButton, #passwordOkButton');
    const closeModalButtons = document.querySelectorAll('.close-modal');
    
    if (okButtons) {
        okButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modal = this.closest('.modal');
                if (modal) {
                    modal.classList.remove('active');
                }
            });
        });
    }
    
    if (closeModalButtons) {
        closeModalButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modal = this.closest('.modal');
                if (modal) {
                    modal.classList.remove('active');
                }
            });
        });
    }
    
    // Funcionalidad de cerrar sesión
    const logoutBtn = document.getElementById('logout-btn');
    
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (confirm('¿Estás seguro de que deseas cerrar sesión?')) {
                // Aquí iría la lógica para cerrar sesión
                console.log('Cerrando sesión...');
                
                // Redireccionar a la página de inicio de sesión
                setTimeout(() => {
                    window.location.href = 'index.html';
                }, 500);
            }
        });
    }
    
    // Funcionalidad para botones de editar propiedad
    const editButtons = document.querySelectorAll('.btn-action.edit');
    
    if (editButtons) {
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Obtener el ID de la propiedad a editar
                const propertyCard = this.closest('.property-card');
                const propertyId = propertyCard ? propertyCard.getAttribute('data-id') : null;
                
                // Redireccionar a la página de edición
                window.location.href = `agente-agregar-propiedad.html?id=${propertyId}&edit=true`;
            });
        });
    }
    
    // Funcionalidad para botones de ver propiedad
    const viewButtons = document.querySelectorAll('.btn-action.view');
    
    if (viewButtons) {
        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Obtener el ID de la propiedad a ver
                const propertyCard = this.closest('.property-card');
                const propertyId = propertyCard ? propertyCard.getAttribute('data-id') : null;
                
                // Aquí iría la lógica para ver la propiedad (por ejemplo, abrir un modal o redireccionar)
                alert(`Ver detalles de la propiedad ID: ${propertyId}`);
            });
        });
    }
    
    // Funcionalidad para botones de programar visita
    const scheduleButtons = document.querySelectorAll('.btn-secondary');
    
    if (scheduleButtons) {
        scheduleButtons.forEach(button => {
            if (button.innerHTML.includes('Programar Visita')) {
                button.addEventListener('click', function() {
                    // Obtener la solicitud
                    const requestCard = this.closest('.request-card');
                    
                    // Aquí iría la lógica para programar visita
                    alert('Funcionalidad para programar visita implementada');
                });
            }
        });
    }
    
    // Funcionalidad para botones de marcar como En Proceso o Completada
    const statusButtons = document.querySelectorAll('.btn-outline, .btn-success');
    
    if (statusButtons) {
        statusButtons.forEach(button => {
            if (button.innerHTML.includes('Marcar como')) {
                button.addEventListener('click', function() {
                    // Obtener la solicitud
                    const requestCard = this.closest('.request-card');
                    
                    if (requestCard) {
                        // Cambiar el estado de la solicitud
                        if (button.innerHTML.includes('En Proceso')) {
                            requestCard.classList.remove('new');
                            requestCard.classList.add('in-progress');
                            
                            // Actualizar el badge
                            const statusBadge = requestCard.querySelector('.status-badge');
                            if (statusBadge) {
                                statusBadge.className = 'status-badge in-progress';
                                statusBadge.textContent = 'En Proceso';
                            }
                            
                            // Actualizar el botón
                            button.innerHTML = '<i class="fas fa-check-double"></i> Marcar como Completada';
                            button.classList.remove('btn-outline');
                            button.classList.add('btn-success');
                        } else if (button.innerHTML.includes('Completada')) {
                            requestCard.classList.remove('in-progress');
                            requestCard.classList.add('completed');
                            
                            // Actualizar el badge
                            const statusBadge = requestCard.querySelector('.status-badge');
                            if (statusBadge) {
                                statusBadge.className = 'status-badge completed';
                                statusBadge.textContent = 'Completada';
                            }
                            
                            // Actualizar el botón
                            button.innerHTML = '<i class="fas fa-archive"></i> Archivar';
                            button.classList.remove('btn-success');
                            button.classList.add('btn-secondary');
                        }
                    }
                });
            }
        });
    }
});
