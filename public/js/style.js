document.addEventListener("DOMContentLoaded", function () {
  // Variables para el slider
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");
  const progress = document.querySelector(".progress");
  const slides = document.querySelectorAll(".hero-slide");
  const heroBackground = document.querySelector(".hero-background");

  // ===== AQUÍ DEBES AGREGAR TUS IMÁGENES =====
  // Reemplaza estas URLs con las rutas a tus propias imágenes
  const backgroundImages = [
    // Imagen 1 - Para el primer slide
    'linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("/img/architecture-interior-design.webp")',

    // Imagen 2 - Para el segundo slide
    'linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("/img/casa-modular-moderna-piscina.webp")',

    // Imagen 3 - Para el tercer slide
    'linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("/img/casa-modular-moderna-valencia-piscina-scaled.webp")',
  ];
  // ============================================

  let currentIndex = 0;
  let isAnimating = false;
  let autoplayInterval;

  // Inicializar el slider
  function initSlider() {
    // Establecer la primera imagen de fondo
    heroBackground.style.backgroundImage = backgroundImages[0];

    // Iniciar el autoplay
    startAutoplay();

    // Event listeners para los botones
    prevBtn.addEventListener("click", function () {
      if (isAnimating) return;
      stopAutoplay();
      goToPrevSlide();
      startAutoplay();
    });

    nextBtn.addEventListener("click", function () {
      if (isAnimating) return;
      stopAutoplay();
      goToNextSlide();
      startAutoplay();
    });

    // Precargar imágenes para una transición más suave
    preloadImages();
  }

  // Precargar imágenes
  function preloadImages() {
    backgroundImages.forEach((imageUrl) => {
      // Extraer la URL de la imagen del string completo
      const urlMatch = imageUrl.match(/url$$['"]?([^'"]+)['"]?$$/);
      if (urlMatch && urlMatch[1]) {
        const img = new Image();
        img.src = urlMatch[1];
      }
    });
  }

  // Función para ir a la siguiente diapositiva
  function goToNextSlide() {
    if (isAnimating) return;
    isAnimating = true;

    // Añadir clase de salida a la diapositiva actual
    slides[currentIndex].classList.add("exit");

    // Actualizar el índice
    currentIndex = (currentIndex + 1) % slides.length;

    // Actualizar la imagen de fondo con fade
    const newBackground = document.createElement("div");
    newBackground.className = "hero-background";
    newBackground.style.backgroundImage = backgroundImages[currentIndex];
    newBackground.style.opacity = "0";
    document.querySelector(".hero-container").appendChild(newBackground);

    setTimeout(() => {
      newBackground.style.opacity = "1";
    }, 50);

    setTimeout(() => {
      // Eliminar la clase active de todas las diapositivas
      slides.forEach((slide) => {
        slide.classList.remove("active");
        slide.classList.remove("exit");
      });

      // Añadir la clase active a la nueva diapositiva
      slides[currentIndex].classList.add("active");

      // Actualizar la barra de progreso
      updateProgressBar();

      // Eliminar el fondo anterior
      const oldBackgrounds = document.querySelectorAll(".hero-background");
      if (oldBackgrounds.length > 1) {
        oldBackgrounds[0].remove();
      }

      isAnimating = false;
    }, 800);
  }

  // Función para ir a la diapositiva anterior
  function goToPrevSlide() {
    if (isAnimating) return;
    isAnimating = true;

    // Añadir clase de salida a la diapositiva actual
    slides[currentIndex].classList.add("exit");

    // Actualizar el índice
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;

    // Actualizar la imagen de fondo con fade
    const newBackground = document.createElement("div");
    newBackground.className = "hero-background";
    newBackground.style.backgroundImage = backgroundImages[currentIndex];
    newBackground.style.opacity = "0";
    document.querySelector(".hero-container").appendChild(newBackground);

    setTimeout(() => {
      newBackground.style.opacity = "1";
    }, 50);

    setTimeout(() => {
      // Eliminar la clase active de todas las diapositivas
      slides.forEach((slide) => {
        slide.classList.remove("active");
        slide.classList.remove("exit");
      });

      // Añadir la clase active a la nueva diapositiva
      slides[currentIndex].classList.add("active");

      // Actualizar la barra de progreso
      updateProgressBar();

      // Eliminar el fondo anterior
      const oldBackgrounds = document.querySelectorAll(".hero-background");
      if (oldBackgrounds.length > 1) {
        oldBackgrounds[0].remove();
      }

      isAnimating = false;
    }, 800);
  }

  // Actualizar la barra de progreso
  function updateProgressBar() {
    const progressWidth = ((currentIndex + 1) / slides.length) * 100;
    progress.style.width = `${progressWidth}%`;
  }

  // Iniciar autoplay
  function startAutoplay() {
    autoplayInterval = setInterval(goToNextSlide, 5000); // Cambiar cada 5 segundos
  }

  // Detener autoplay
  function stopAutoplay() {
    clearInterval(autoplayInterval);
  }

  // Indicador de scroll
  const scrollIndicator = document.querySelector(".scroll-indicator");

  // Hacer que el indicador de scroll lleve al usuario hacia abajo al hacer clic
  scrollIndicator.addEventListener("click", function () {
    window.scrollTo({
      top: window.innerHeight,
      behavior: "smooth",
    });
  });

  // Ocultar el indicador de scroll cuando el usuario hace scroll
  window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
      scrollIndicator.style.opacity = "0";
      scrollIndicator.style.pointerEvents = "none";
    } else {
      scrollIndicator.style.opacity = "1";
      scrollIndicator.style.pointerEvents = "auto";
    }
  });

  // Inicializar el slider
  initSlider();

  // Testimonios slider (básico)
  const prevTestimonial = document.querySelector(".prev-testimonial");
  const nextTestimonial = document.querySelector(".next-testimonial");

  if (prevTestimonial && nextTestimonial) {
    prevTestimonial.addEventListener("click", function () {
      // Aquí iría la lógica para cambiar al testimonio anterior
      console.log("Testimonio anterior");
    });

    nextTestimonial.addEventListener("click", function () {
      // Aquí iría la lógica para cambiar al siguiente testimonio
      console.log("Siguiente testimonio");
    });
  }
});
