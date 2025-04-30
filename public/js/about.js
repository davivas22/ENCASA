document.addEventListener("DOMContentLoaded", () => {
  // Navbar scroll effect
  const navbar = document.querySelector(".navbar");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  // Mobile menu toggle
  const menuToggle = document.querySelector(".menu-toggle");
  const navMenu = document.querySelector(".nav-menu");

  menuToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active");
    menuToggle.querySelector("i").classList.toggle("fa-bars");
    menuToggle.querySelector("i").classList.toggle("fa-times");
  });

  // FAQ accordion
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
    const question = item.querySelector(".faq-question");

    question.addEventListener("click", () => {
      // Close all other items
      faqItems.forEach((otherItem) => {
        if (otherItem !== item && otherItem.classList.contains("active")) {
          otherItem.classList.remove("active");
          otherItem.querySelector(".faq-icon i").className = "fas fa-plus";
        }
      });

      // Toggle current item
      item.classList.toggle("active");

      // Toggle icon
      const icon = item.querySelector(".faq-icon i");
      if (item.classList.contains("active")) {
        icon.className = "fas fa-minus";
      } else {
        icon.className = "fas fa-plus";
      }
    });
  });

  // Animation on Scroll
  const animatedElements = document.querySelectorAll(
    ".section-header, .overview-content, .mvv-card, .team-card, .team-member, .testimonial-card"
  );

  function checkVisibility() {
    const windowHeight = window.innerHeight;
    const windowTop = window.scrollY;
    const windowBottom = windowTop + windowHeight;

    animatedElements.forEach((element) => {
      const elementTop = element.offsetTop;
      const elementHeight = element.offsetHeight;
      const elementBottom = elementTop + elementHeight;

      // Check if element is in viewport
      if (elementBottom > windowTop && elementTop < windowBottom) {
        element.classList.add("animate");
      }
    });
  }

  // Add animation class
  window.addEventListener("scroll", checkVisibility);
  window.addEventListener("load", checkVisibility);

  // Add animation styles
  const style = document.createElement("style");
  style.textContent = `
      .section-header, .overview-content, .mvv-card, .team-card, .team-member, .testimonial-card {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease, transform 0.6s ease;
      }
      
      .animate {
        opacity: 1;
        transform: translateY(0);
      }
  
      .mvv-card:nth-child(1) {
        transition-delay: 0.1s;
      }
      
      .mvv-card:nth-child(2) {
        transition-delay: 0.2s;
      }
      
      .mvv-card:nth-child(3) {
        transition-delay: 0.3s;
      }
  
      .team-card:nth-child(1) {
        transition-delay: 0.1s;
      }
      
      .team-card:nth-child(2) {
        transition-delay: 0.2s;
      }
      
      .team-card:nth-child(3) {
        transition-delay: 0.3s;
      }
    `;
  document.head.appendChild(style);

  // Trigger initial check
  setTimeout(checkVisibility, 100);

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        // Close mobile menu if open
        if (navMenu.classList.contains("active")) {
          navMenu.classList.remove("active");
          menuToggle.querySelector("i").classList.remove("fa-times");
          menuToggle.querySelector("i").classList.add("fa-bars");
        }

        // Scroll to target
        window.scrollTo({
          top: targetElement.offsetTop - 100,
          behavior: "smooth",
        });
      }
    });
  });
});

// Función para inicializar las animaciones AOS (Animate On Scroll)
function initAOS() {
  // Seleccionar todos los elementos con atributo data-aos
  const aosElements = document.querySelectorAll("[data-aos]");

  // Configurar el observador de intersección
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        // Si el elemento es visible
        if (entry.isIntersecting) {
          // Añadir clase para animar
          entry.target.classList.add("aos-animate");
          // Dejar de observar el elemento una vez animado
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.1, // El elemento se considera visible cuando al menos el 10% está en el viewport
      rootMargin: "0px 0px -50px 0px", // Margen negativo para activar la animación un poco antes
    }
  );

  // Observar cada elemento
  aosElements.forEach((element) => {
    observer.observe(element);

    // Aplicar delay si está especificado
    const delay = element.getAttribute("data-aos-delay");
    if (delay) {
      element.style.transitionDelay = `${delay}ms`;
    }
  });
}

// Función para inicializar el scroll suave
function initSmoothScroll() {
  // Seleccionar todos los enlaces que apuntan a anclas internas
  const links = document.querySelectorAll('a[href^="#"]');

  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });
}

// Función para inicializar efecto parallax
function initParallax() {
  const aboutImage = document.querySelector(".about-image img");

  if (aboutImage) {
    window.addEventListener("scroll", () => {
      const scrollPosition = window.pageYOffset;
      const aboutSection = document.getElementById("about");
      const aboutSectionTop = aboutSection.offsetTop;
      const aboutSectionHeight = aboutSection.offsetHeight;

      // Verificar si la sección está visible
      if (
        scrollPosition > aboutSectionTop - window.innerHeight &&
        scrollPosition < aboutSectionTop + aboutSectionHeight
      ) {
        // Calcular el desplazamiento para el efecto parallax
        const offset =
          (scrollPosition - (aboutSectionTop - window.innerHeight)) * 0.1;

        // Aplicar transformación
        aboutImage.style.transform = `translateY(${offset}px)`;
      }
    });
  }
}

// Función para resaltar el CTA al hacer scroll
function initScrollCTA() {
  const ctaSection = document.querySelector(".cta-section");
  const ctaButtons = document.querySelectorAll(".cta-button");

  if (ctaSection && ctaButtons.length) {
    window.addEventListener(
      "scroll",
      () => {
        const scrollPosition = window.pageYOffset;
        const ctaSectionTop = ctaSection.offsetTop;

        // Si el usuario ha scrolleado hasta cerca del CTA
        if (scrollPosition > ctaSectionTop - window.innerHeight * 0.8) {
          // Añadir clase para resaltar los botones
          ctaButtons.forEach((button, index) => {
            setTimeout(() => {
              button.classList.add("highlight");

              // Quitar la clase después de un tiempo
              setTimeout(() => {
                button.classList.remove("highlight");
              }, 1000);
            }, index * 200); // Delay escalonado para cada botón
          });
        }
      },
      { passive: true }
    );
  }

  // Añadir estilos para la animación de highlight
  const style = document.createElement("style");
  style.textContent = `
          .cta-button.highlight {
              animation: pulse 1s ease;
          }
          
          @keyframes pulse {
              0% { transform: scale(1); }
              50% { transform: scale(1.05); box-shadow: 0 10px 20px rgba(0,0,0,0.15); }
              100% { transform: scale(1); }
          }
      `;
  document.head.appendChild(style);
}
