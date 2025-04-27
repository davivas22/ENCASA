
<style>




/********************FORMULARIO PARA CREAR CUENTA *****************/
</style>

    <!--=============== LOGIN IMAGE ===============-->
    <svg
      class="login__blob"
      viewBox="0 0 850.6 924"
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
       
        <image  class="login__img" href="https://images.adsttc.com/media/images/59b0/06e1/b22e/3848/cc00/005f/newsletter/AdCo_Paisajes.jpg?1504708319" alt="Imagen SVG" />

      </g>
    </svg>

    <!--=============== REGISTRO ===============-->
    <div class="login container grid" id="loginAccessRegister">
      <!--===== LOGIN ACCESS =====-->
      <div class="login__access">
        <h1 class="login__title">Crear nueva cuenta</h1>

        <?php ?>

        <div class="login__area">
          <form action="/crearcuenta" class="login__form" method="POST">
            <div class="login__content grid">
              <div class="login__box">
                <input
                  type="text"
                  id="nombre"
                  name="nombre"
                  placeholder=" "
                  value="<?php echo s($usuario->nombre); ?>"
                  class="login__input"
                />
                <label for="email" class="login__label">Nombre</label>

              </div>

              <div class="login__box">
                  <input
                    type="text"
                    id="apellido"
                    name="apellido"
                    placeholder=" "
                    value="<?php echo s($usuario->apellido); ?>"
                    class="login__input"
                  />
                  <label for="email" class="login__label">Apellidos</label>
  
                </div>

                <div class="login__box">
                  <input
                    type="tel"
                    id="tel"
                    name="telefono"
                    placeholder=" "
                    value="<?php echo s($usuario->telefono); ?>"
                    class="login__input"
                  />
                  <label for="email" class="login__label">Numero telefonico</label>
  
                </div>
        
                <div class="login__box">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder=" "
                    value="<?php echo s($usuario->email); ?>"
                    class="login__input"
                  />
                  <label for="email" class="login__label">Email</label>
  
                  <i class="ri-mail-fill login__icon"></i>
                </div>
                

              <div class="login__box">
                <input
                  type="password"
                  id="password"
                  name="contrasena"
                  placeholder=" "
                  class="login__input"
                />
                <label for="password" class="login__label">Password</label>

                <i
                  class="ri-eye-off-fill login__icon login__password"
                  id="loginPassword"
                ></i>
              </div>
             </div>
          

               <input type="submit" value="Crear cuenta" class="login__button">
          </form>

          <p class="login__switch">
           Ya tienes una cuenta?
            <a href="/login">Inicia sesion</a>
          </p>
        </div>
      </div>