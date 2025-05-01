<?php
$pageStylesheet = '/css/auth.css';
$pageScript = '/js/auth-script.js';
ob_start();
// Todo el contenido de la página
?>

<div class="auth-page">
        <!-- Mitad izquierda: Formulario -->
        <div class="auth-form-side">
            <a href="/" class="logo-link">
                <div class="logo">
                    <h1>ENCASA</h1>
                    <p class="tagline">Tu mejor solución para el hogar</p>
                </div>
            </a>
            
            <div class="form-container">
                <div class="form-header">
                    <h2>Crea tu solicitud</h2>
                </div>
                
                <form class="auth-form" method="post" action="/solicitud-agente">
                    <div class="form-row">
                        <div class="form-group half">
                            <label for="firstname">Usuario</label>
                            <div class="input-wrapper">
                                <select name="usuario_id" >
                                    <option value="<?= $_SESSION['id']?>"  selected ><?= $_SESSION['nombre']?> </option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="phone">Número telefónico</label>
                        <div class="input-wrapper">
                            <i class="fas fa-phone"></i>
                            <input type="tel" id="phone" name="telefono">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Zona de trabajo</label>
                        <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                            <input type="tel" id="phone" name="zona">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Porque quieres ser agente</label>
                        <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                            <input type="text" id="phone" name="mensaje">
                        </div>
                    </div>   
                    
                    
                    
                    
                    
                    <button type="submit" class="btn-auth">Enviar solicitud</button>
                    
                    <div class="social-login">
                        <div class="divider">
                            <span>O regístrate con</span>
                        </div>
                        <div class="social-buttons">
                            <button type="button" class="social-btn">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="social-btn">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="social-btn">
                                <i class="fab fa-apple"></i>
                            </button>
                        </div>
                    </div>

                   
                <div class="auth-footer">
                    <p>¿Ya tienes una cuenta? <a href="/login">Inicia sesión</a></p>
                </div>
                </form>
                
            </div>
        </div>
        
        <!-- Mitad derecha: Slider automático -->
        <div class="slider-side">
            <div class="slider-container">
                <div class="slider-track" id="sliderTrack">
                    <!-- Las slides se generarán dinámicamente con JavaScript -->
                </div>
                
                <div class="slider-controls">
                    <div class="slider-dots" id="sliderDots">
                        <!-- Los dots se generarán dinámicamente -->
                    </div>
                </div>
            </div>
            
            <div class="slider-nav">
                <a href="index.html">Home</a>
                <a href="#">Propiedades</a>
                <a href="#">Contacto</a>
            </div>
        </div>
    </div>