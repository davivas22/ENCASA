document.addEventListener("DOMContentLoaded", () => {
  // Datos de propiedades para el slider
  const properties = [
    {
      image: "/img/casitas.avif",
    },
    {
      image: "/img/mesa.avif",
    },
    {
      image: "/img/techo.avif",
    },
    {
      image: "/img/bath.avif",
    },
    {
      image: "/img/casa-modular-moderna-valencia-piscina-scaled.webp",
    },
    {
      image: "casa-modular-moderna-piscina.jpg",
    },
    {
      image: "architecture-interior-design.jpeg",
    },
    {
      image: "casa-modular-moderna-piscina.jpg",
    },
  ];

  // Configuración del slider
  let currentSlide = 0;
  const animationSpeed = 4000; // 5 segundos entre slides
  let animationInterval;
  let isAnimating = false;

  const sliderTracks = document.querySelectorAll("#sliderTrack");
  const sliderDots = document.querySelectorAll("#sliderDots");
  const propertyTitles = document.querySelectorAll("#propertyTitle");
  const propertyLocations = document.querySelectorAll("#propertyLocation");
  const propertyPrices = document.querySelectorAll("#propertyPrice");

  // Función para crear slides del slider
  function createSlides() {
    sliderTracks.forEach((track) => {
      // Limpiar el contenedor
      track.innerHTML = "";

      // Crear slides
      properties.forEach((property) => {
        const slide = document.createElement("div");
        slide.className = "slide";
        slide.innerHTML = `<img src="${property.image}" alt="${property.title}">`;
        track.appendChild(slide);
      });
    });

    // Crear dots para navegación
    sliderDots.forEach((dotsContainer) => {
      dotsContainer.innerHTML = "";

      properties.forEach((_, index) => {
        const dot = document.createElement("div");
        dot.className = index === 0 ? "slider-dot active" : "slider-dot";
        dot.dataset.index = index;

        dot.addEventListener("click", () => {
          goToSlide(index);
        });

        dotsContainer.appendChild(dot);
      });
    });

    // Actualizar la información de la propiedad inicial
    updatePropertyInfo(0);
  }

  // Función para actualizar la información de la propiedad
  function updatePropertyInfo(index) {
    const property = properties[index];

    propertyTitles.forEach((el) => {
      el.textContent = property.title;
    });

    propertyLocations.forEach((el) => {
      el.innerHTML = `<i class="fas fa-map-marker-alt"></i> ${property.location}`;
    });

    propertyPrices.forEach((el) => {
      el.textContent = property.price;
    });

    // Animar la aparición de la información
    document.querySelectorAll(".property-info").forEach((info) => {
      info.style.animation = "none";
      setTimeout(() => {
        info.style.animation = "fadeIn 0.5s ease";
      }, 10);
    });
  }

  // Función para ir a una slide específica
  function goToSlide(index) {
    if (isAnimating) return;
    isAnimating = true;

    currentSlide = index;

    // Actualizar dots
    document.querySelectorAll(".slider-dot").forEach((dot, i) => {
      dot.classList.toggle("active", i === currentSlide);
    });

    // Mover el slider
    sliderTracks.forEach((track) => {
      track.style.transform = `translateX(-${currentSlide * 100}%)`;
    });

    // Actualizar la información de la propiedad
    updatePropertyInfo(currentSlide);

    // Reiniciar el intervalo
    clearInterval(animationInterval);
    animationInterval = setInterval(nextSlide, animationSpeed);

    // Permitir nueva animación después de completar la transición
    setTimeout(() => {
      isAnimating = false;
    }, 800);
  }

  // Función para ir a la siguiente slide
  function nextSlide() {
    const newIndex = (currentSlide + 1) % properties.length;
    goToSlide(newIndex);
  }

  // Función para ir a la slide anterior
  function prevSlide() {
    const newIndex = (currentSlide - 1 + properties.length) % properties.length;
    goToSlide(newIndex);
  }

  // Inicializar el slider
  createSlides();

  // Iniciar la animación automática
  animationInterval = setInterval(nextSlide, animationSpeed);

  // Configurar botones de navegación
  const prevButtons = document.querySelectorAll(".prev-arrow");
  const nextButtons = document.querySelectorAll(".next-arrow");

  prevButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      prevSlide();
    });
  });

  nextButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      nextSlide();
    });
  });

  // Toggle para mostrar/ocultar contraseña
  const togglePasswordBtns = document.querySelectorAll(".toggle-password");

  togglePasswordBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const input = this.previousElementSibling;
      const icon = this.querySelector("i");

      if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      }
    });
  });

  // Animación para los formularios
  const formGroups = document.querySelectorAll(".form-group");

  formGroups.forEach((group, index) => {
    group.style.opacity = "0";
    group.style.transform = "translateY(20px)";

    setTimeout(() => {
      group.style.transition = "all 0.5s ease";
      group.style.opacity = "1";
      group.style.transform = "translateY(0)";
    }, 100 * index);
  });
});
