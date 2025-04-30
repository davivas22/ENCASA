<?php
$pageStylesheet = '/css/auth.css';
$pageScript = '/js/script.js';
ob_start();
// Todo el contenido de la página
?>
    <div class="auth-page">
        <!-- Mitad izquierda: Formulario -->
        <div class="auth-form-side">
            <a href="index.html" class="logo-link">
                <div class="logo">
                    <h1>ENCASA</h1>
                    <p class="tagline">Tu mejor solución para el hogar</p>
                </div>
            </a>
            
            <div class="form-container">
                <div class="form-header">
                    <h2>Iniciar sesión</h2>
                    <p>Bienvenido de nuevo, ingresa tus credenciales</p>
                </div>
                
                <form class="auth-form" action="/login" method="post">
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" name="contrasena" required>
                            <button type="button" class="toggle-password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember">
                            <label for="remember">Recordarme</label>
                        </div>
                        <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                    </div>
                    
                    <button type="submit" class="btn-auth">Iniciar Sesión</button>
                    
                    <div class="social-login">
                        <div class="divider">
                            <span>O continúa con</span>
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
                </form>
                
                <div class="auth-footer">
                    <p>¿No tienes una cuenta? <a href="/crearcuenta">Regístrate</a></p>
                </div>
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
                    <div class="slider-arrows">
                        <button class="slider-arrow prev-arrow">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slider-arrow next-arrow">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="slider-nav">
                <a href="/">Home</a>
                <a href="#">Propiedades</a>
                <a href="#">Contacto</a>
            </div>
        </div>
    </div>