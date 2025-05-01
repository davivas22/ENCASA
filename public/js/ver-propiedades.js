// Inicialización de AOS (Animate On Scroll)
document.addEventListener("DOMContentLoaded", function () {
  // Inicializar AOS
  AOS.init({
    duration: 800,
    easing: "ease",
    once: true,
  });

  // Variables para la galería
  const images = [
    "mh2729_1_villa-1.jpg",
    "images.jpg",
    "mh2729_1_villa-1.jpg",
    "images.jpg",
    "mh2729_1_villa-1.jpg",
    "images.jpg",
  ];

  const imageAlts = [
    "Vista exterior",
    "Sala de estar",
    "Cocina",
    "Dormitorio principal",
    "Baño",
    "Área de piscina",
  ];

  let currentIndex = 0;
  const mainImage = document.getElementById("mainImage");
  const imageCounter = document.querySelector(".image-counter");
  const prevBtn = document.querySelector(".gallery-nav.prev");
  const nextBtn = document.querySelector(".gallery-nav.next");

  // Función para cambiar la imagen principal
  function changeImage(index) {
    currentIndex = index;
    mainImage.src = images[index];
    mainImage.alt = imageAlts[index];
    imageCounter.textContent = `${index + 1} / ${images.length}`;

    // Actualizar miniaturas activas
    document.querySelectorAll(".thumbnails img").forEach((thumb, i) => {
      if (i === index) {
        thumb.classList.add("active");
      } else {
        thumb.classList.remove("active");
      }
    });
  }

  // Asignar la función changeImage al objeto window para que sea accesible desde HTML
  window.changeImage = changeImage;

  // Eventos para los botones de navegación
  prevBtn.addEventListener("click", function () {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    changeImage(currentIndex);
  });

  nextBtn.addEventListener("click", function () {
    currentIndex = (currentIndex + 1) % images.length;
    changeImage(currentIndex);
  });

  // Modal de galería
  const galleryModal = document.getElementById("galleryModal");
  const modalImage = document.getElementById("modalImage");
  const closeModal = document.querySelector(".close-modal");
  const modalPrev = document.querySelector(".modal-nav.prev");
  const modalNext = document.querySelector(".modal-nav.next");
  const modalThumbnails = document.querySelector(".modal-thumbnails");

  // Abrir modal al hacer clic en la imagen principal
  mainImage.addEventListener("click", function () {
    openModal(currentIndex);
  });

  // Función para abrir el modal
  function openModal(index) {
    galleryModal.style.display = "block";
    document.body.style.overflow = "hidden";
    updateModalImage(index);

    // Generar miniaturas para el modal
    modalThumbnails.innerHTML = "";
    images.forEach((src, i) => {
      const thumb = document.createElement("img");
      thumb.src = src;
      thumb.alt = imageAlts[i];
      if (i === index) {
        thumb.classList.add("active");
      }
      thumb.addEventListener("click", function () {
        updateModalImage(i);
      });
      modalThumbnails.appendChild(thumb);
    });
  }

  // Función para actualizar la imagen del modal
  function updateModalImage(index) {
    currentIndex = index;
    modalImage.src = images[index];
    modalImage.alt = imageAlts[index];

    // Actualizar miniaturas activas
    document.querySelectorAll(".modal-thumbnails img").forEach((thumb, i) => {
      if (i === index) {
        thumb.classList.add("active");
      } else {
        thumb.classList.remove("active");
      }
    });
  }

  // Cerrar modal
  closeModal.addEventListener("click", function () {
    galleryModal.style.display = "none";
    document.body.style.overflow = "auto";
  });

  // Navegación en el modal
  modalPrev.addEventListener("click", function () {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateModalImage(currentIndex);
  });

  modalNext.addEventListener("click", function () {
    currentIndex = (currentIndex + 1) % images.length;
    updateModalImage(currentIndex);
  });

  // Cerrar modal con tecla Escape
  window.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && galleryModal.style.display === "block") {
      galleryModal.style.display = "none";
      document.body.style.overflow = "auto";
    }
  });

  // Botón volver arriba
  const backToTopBtn = document.getElementById("backToTop");

  window.addEventListener("scroll", function () {
    if (window.pageYOffset > 300) {
      backToTopBtn.classList.add("active");
    } else {
      backToTopBtn.classList.remove("active");
    }
  });

  backToTopBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  // Menú móvil
  const menuToggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");

  menuToggle.addEventListener("click", function () {
    navLinks.classList.toggle("active");

    // Estilo para el menú móvil (añadido dinámicamente)
    if (!document.getElementById("mobile-menu-style")) {
      const style = document.createElement("style");
      style.id = "mobile-menu-style";
      style.textContent = `
                .nav-links.active {
                    display: flex;
                    flex-direction: column;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    width: 100%;
                    background-color: white;
                    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    z-index: 1000;
                }
            `;
      document.head.appendChild(style);
    }
  });

  // Formulario de contacto
  const contactForm = document.getElementById("propertyContactForm");

  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();

      // Animación de envío
      const submitBtn = contactForm.querySelector(".btn-submit");
      const originalText = submitBtn.textContent;

      submitBtn.textContent = "Enviando...";
      submitBtn.disabled = true;

      // Simulación de envío (en producción, aquí iría el fetch a tu API)
      setTimeout(function () {
        // Crear elemento de confirmación
        const confirmation = document.createElement("div");
        confirmation.className = "form-confirmation";
        confirmation.innerHTML = `
                    <div class="confirmation-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>¡Mensaje enviado con éxito!</h3>
                    <p>Nos pondremos en contacto contigo a la brevedad.</p>
                `;

        // Estilo para la confirmación
        const style = document.createElement("style");
        style.textContent = `
                    .form-confirmation {
                        text-align: center;
                        padding: 30px;
                        animation: fadeIn 0.5s ease;
                    }
                    .confirmation-icon {
                        font-size: 3rem;
                        color: var(--primary-color);
                        margin-bottom: 20px;
                    }
                    .confirmation-icon i {
                        animation: pulse 1s infinite;
                    }
                `;
        document.head.appendChild(style);

        // Reemplazar formulario con confirmación
        contactForm.innerHTML = "";
        contactForm.appendChild(confirmation);
      }, 2000);
    });
  }

  // Animación para elementos al hacer scroll
  const animateOnScroll = function () {
    const elements = document.querySelectorAll(
      ".property-card, .agent-card, .form-container"
    );

    elements.forEach((element) => {
      const elementPosition = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (elementPosition < windowHeight - 100) {
        element.style.opacity = "1";
        element.style.transform = "translateY(0)";
      }
    });
  };

  // Estilo inicial para elementos animados
  const style = document.createElement("style");
  style.textContent = `
        .property-card, .agent-card, .form-container {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
    `;
  document.head.appendChild(style);

  // Ejecutar animación al cargar y al hacer scroll
  window.addEventListener("load", animateOnScroll);
  window.addEventListener("scroll", animateOnScroll);

  // Inicializar la galería
  changeImage(0);
});
