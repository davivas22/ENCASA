<?php
$pageStylesheet = '/css/auth.css';
$pageScript = '/js/auth-script.js';
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
                    <h2>Crear cuenta</h2>
                    <p>Únete a nuestra comunidad y encuentra tu hogar ideal</p>
                </div>
                
                <form class="auth-form" method="post" action="/crearcuenta">
                    <div class="form-row">
                        <div class="form-group half">
                            <label for="firstname">Nombres</label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="firstname" name="nombre">
                            </div>
                        </div>
                        
                        <div class="form-group half">
                            <label for="lastname">Apellidos</label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="lastname" name="apellido">
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
                            <input type="password" id="password" name="contrasena">
                            <button type="button" class="toggle-password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <div class="terms-conditions">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">Acepto los <a href="#">Términos y Condiciones</a></label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn-auth">Crear Cuenta</button>
                    
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
                </form>
                
                <div class="auth-footer">
                    <p>¿Ya tienes una cuenta? <a href="/login">Inicia sesión</a></p>
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
                <a href="index.html">Home</a>
                <a href="#">Propiedades</a>
                <a href="#">Contacto</a>
            </div>
        </div>
    </div>