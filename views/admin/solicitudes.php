
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
                   
                    
                    
                </div>
                <?php foreach($solicitudes as $solicitud): ?>
                    <?php if($solicitud->getEstado() == 'pendiente'):?>

                                <?php $usuario = $solicitud->getUsuario(); ?>
                        <div class="card">
                            <h3><?= $usuario->nombre?></h3>
                            <p><strong>Email:</strong> <?= $usuario->email?></p>
                            <p><strong>Teléfono:</strong> <?=$solicitud->getTelefono(); ?></p>
                            <p><strong>Mensaje:</strong> <?= $solicitud->getMensaje();?></p>
                            <div class="status">
                            <span class="badge">Pendiente</span>
                            <div>
                            <div class="acciones">
                                <form method="POST" action="/procesar">
                                    <input type="hidden" name="usuario_id" value=" <?= $usuario->id ?>">
                                    <input type="hidden" name="solicitud_id" value="<?= $solicitud->getId(); ?>">
                                    <input type="hidden" name="accion" value="aprobado">
                                    <button type="submit" class="btn btn-approve">Aceptar</button>
                                </form>
                                <form method="POST" action="/procesar">
                                    <input type="hidden" name="solicitud_id" value="<?= $solicitud->getId(); ?>">
                                    <input type="hidden" name="accion" value="rechazado">
                                    <button type="submit" class="btn btn-reject">Rechazar</button>
                                </form>
                            </div>

                            </div>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php endforeach; ?>


                       
                   

                <!-- Active Agents Tab -->
               

                <!-- Pending Agents Tab -->
               
            </div>
        </main>
    </div>
