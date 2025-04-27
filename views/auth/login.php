
  <?php 
  if(isset($_SESSION['confirmado'])): ?>

    <div class="alerta exito">
            <?php 
            echo $_SESSION['confirmado'];
            unset($_SESSION['confirmado']); // Para que solo salga una vez
            ?>
        </div>
<?php endif; ?>








<svg
      class="login__blob"
      viewBox="0 0 880.6 924"
      xmlns="http://www.w3.org/2000/svg"
    >
      <mask id="mask0" mask-type="alpha">
        <path
          d="M376.647 80.9946C427.383 62.0407 433.816 19.1007 428.692 
          0H622V924H0C16.9924 918.490 110.292 884.779 84.9249 778.989C54.6032 
          650.221 126.836 570.819 194.115 537.760C399.724 436.728 172.678 332.706 
          184.739 197.252C190.806 128.929 313.230 104.686 376.647 80.9946Z"
        />
      </mask>

      <g mask="url(#mask0)" transform="scale(1.4)">
        <path
          d="M376.647 80.9946C427.383 62.0407 433.816 19.1007 428.692 
              0H622V924H0C16.9924 918.490 110.292 884.779 84.9249 778.989C54.6032 
              650.221 126.836 570.819 194.115 537.760C399.724 436.728 172.678 332.706 
              184.739 197.252C190.806 128.929 313.230 104.686 376.647 80.9946Z"
        />

        <!-- Insert your image (recommended size: 1100 x 1320) -->
        <image
          class="login__img"
          href="../../src/img/Beige Brown Minimal Modern Aesthetic Fashion Clothes Brand Sales Collage Presentation.svg"
        />
      </g>
    </svg>

    <!--=============== LOGIN ===============-->
    <div class="login container grid" id="loginAccessRegister">
      <!--===== LOGIN ACCESS =====-->
      <div class="login__access">
        <h1 class="login__title">Iniciar sesion</h1>
        <div class="login__area">
          <form action="/login" class="login__form" method="post">
            <div class="login__content grid">
              <div class="login__box">
                <input
                  type="email"
                  id="email"
                  required
                  placeholder=" "
                  class="login__input"
                  name="email"
                />
                <label for="email" class="login__label">Correo</label>

                <i class="ri-mail-fill login__icon"></i>
              </div>

              <div class="login__box">
                <input
                  type="password"
                  id="password"
                  required
                  placeholder=" "
                  class="login__input"
                  name="contrasena"
                />
                <label for="password" class="login__label">Contraseña</label>

                <i
                  class="ri-eye-off-fill login__icon login__password"
                  id="loginPassword"
                ></i>
              </div>
            </div>

            <a href="/olvide" class="login__forgot">olvidaste tu contraseña?</a>

            <input type="submit" value="INICIAR" class="login__button">
          </form>

          <p class="login__switch">
            No tienes una cuenta?
            <a href="/crearcuenta">crea una cuenta</a>
          </p>
        </div>
      </div>

      <!--===== LOGIN REGISTER =====-->
      
    </div>
