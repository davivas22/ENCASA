<!-- Header -->
<nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <h1>ENCASA</h1>
                    <p>Tu mejor solución para el hogar</p>
                </a>
            </div>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="/about">Acerca de</a>
                <a href="/propiedades">Propiedades</a>
                <a href="/contacto">Contacto</a>
                <?php if(!isset($_SESSION['login'])): ?>
                    <li><a href="/login" class="btn-login">Iniciar sesión</a></li>
                    <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
                    <?php else: ?>
                        <div class="menu-usuario">
                        <details class="detalles-usuario">
                            <summary class="boton-perfil">
                            <img src="/img/profile-icon-design-free-vector.jpg" alt="Foto de perfil" class="foto-perfil">
                            </summary>
                            <ul class="lista-opciones">
                            <li><a href="/perfil"><i class="fas fa-user"></i> Mi perfil</a></li>
                            <li><a href="/favoritos"><i class="fas fa-heart"></i> Mis favoritos</a></li>
                            <li><a href="/solicitud-agente"><i class="fas fa-envelope"></i> Convertirte en agente</a></li>
                            <li><a href="/propiedades"><i class="fas fa-home"></i> Mis propiedades</a></li>
                            <li><a href="/configuracion"><i class="fas fa-cog"></i> Configuración</a></li>
                            <li><a href="/cerrarsesion" class="contact-btn">Cerrar sesión</a></li>
                            </ul>
                        </details>
                        </div>
                      <?php endif;?>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>