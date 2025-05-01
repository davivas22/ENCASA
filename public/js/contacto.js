document.addEventListener("DOMContentLoaded", () => {
  // Header scroll effect
  const header = document.querySelector(".navbar");

  if (header) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 100) {
        header.style.backgroundColor = "rgba(255, 255, 255, 0.98)";
        header.style.boxShadow = "0 4px 12px rgba(0, 0, 0, 0.08)";
      } else {
        header.style.backgroundColor = "rgba(255, 255, 255, 0.95)";
        header.style.boxShadow = "0 2px 8px rgba(0, 0, 0, 0.05)";
      }
    });
  }

  // Mobile menu toggle
  const menuToggle = document.querySelector(".menu-toggle");
  const navMenu = document.querySelector(".nav-menu");

  menuToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active");
    menuToggle.querySelector("i").classList.toggle("fa-bars");
    menuToggle.querySelector("i").classList.toggle("fa-times");
  });

  // Form validation
  const contactForm = document.querySelector(".contact-form");

  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault();

      // Basic validation
      let isValid = true;
      const name = document.getElementById("name");
      const email = document.getElementById("email");
      const subject = document.getElementById("subject");
      const message = document.getElementById("message");
      const privacy = document.getElementById("privacy");

      // Reset previous error states
      const formGroups = contactForm.querySelectorAll(".form-group");
      formGroups.forEach((group) => {
        group.classList.remove("error");
        const existingError = group.querySelector(".error-message");
        if (existingError) {
          existingError.remove();
        }
      });

      // Validate name
      if (!name.value.trim()) {
        showError(name, "Por favor, ingresa tu nombre completo");
        isValid = false;
      }

      // Validate email
      if (!email.value.trim()) {
        showError(email, "Por favor, ingresa tu correo electrónico");
        isValid = false;
      } else if (!isValidEmail(email.value)) {
        showError(email, "Por favor, ingresa un correo electrónico válido");
        isValid = false;
      }

      // Validate subject
      if (!subject.value || subject.value === "") {
        showError(subject, "Por favor, selecciona un asunto");
        isValid = false;
      }

      // Validate message
      if (!message.value.trim()) {
        showError(message, "Por favor, escribe tu mensaje");
        isValid = false;
      }

      // Validate privacy checkbox
      if (!privacy.checked) {
        showError(privacy, "Debes aceptar la política de privacidad");
        isValid = false;
      }

      // If form is valid, submit it (or show success message)
      if (isValid) {
        // Here you would typically send the form data to a server
        // For demo purposes, we'll just show a success message
        const formContainer = contactForm.closest(".contact-form-container");
        formContainer.innerHTML = `
            <div class="success-message">
              <div class="success-icon">
                <i class="fas fa-check-circle"></i>
              </div>
              <h3>¡Mensaje enviado con éxito!</h3>
              <p>Gracias por contactarnos. Nos pondremos en contacto contigo lo antes posible.</p>
            </div>
          `;

        // Add success message styles
        const style = document.createElement("style");
        style.textContent = `
            .success-message {
              text-align: center;
              padding: 40px 20px;
            }
            .success-icon {
              font-size: 4rem;
              color: var(--color-success);
              margin-bottom: 20px;
            }
            .success-message h3 {
              font-size: 1.5rem;
              margin-bottom: 15px;
              color: var(--color-black);
            }
            .success-message p {
              color: var(--color-text-light);
            }
          `;
        document.head.appendChild(style);
      }
    });
  }

  // Helper functions for form validation
  function showError(input, message) {
    const formGroup = input.closest(".form-group");
    formGroup.classList.add("error");

    const errorMessage = document.createElement("div");
    errorMessage.className = "error-message";
    errorMessage.textContent = message;
    formGroup.appendChild(errorMessage);

    // Add error styles
    const style = document.createElement("style");
    style.textContent = `
        .form-group.error input,
        .form-group.error select,
        .form-group.error textarea {
          border-color: var(--color-danger);
        }
        .error-message {
          color: var(--color-danger);
          font-size: 0.85rem;
          margin-top: 5px;
        }
      `;
    document.head.appendChild(style);
  }

  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

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
