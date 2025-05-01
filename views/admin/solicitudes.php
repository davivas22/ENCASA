
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
                    <h2>Solicitudes para Agentes</h2>
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
                <?php foreach($solicitudes as $solicitud): ?>
                    <?php $usuario = $solicitud->getUsuario(); ?>
                <div class="card">
                    <h3><?= $usuario->nombre?></h3>
                    <p><strong>Email:</strong> <?= $usuario->email?></p>
                    <p><strong>Teléfono:</strong> <?=$solicitud->getTelefono(); ?></p>
                    <p><strong>Mensaje:</strong> <?= $solicitud->getMensaje();?></p>
                    <div class="status">
                    <span class="badge">Pendiente</span>
                    <div>
                        <button class="btn btn-approve">Aceptar</button>
                        <button class="btn btn-reject">Rechazar</button>
                    </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Active Agents Tab -->
               

                <!-- Pending Agents Tab -->
               
            </div>
        </main>
    </div>
