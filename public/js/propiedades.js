document.addEventListener("DOMContentLoaded", () => {
  // Inicializar AOS (Animate On Scroll)
  AOS.init({
    duration: 800,
    easing: "ease-out",
    once: true,
  });

  // Header scroll effect
  const header = document.querySelector(".main-header");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      header.style.backgroundColor = "rgba(255, 255, 255, 0.98)";
      header.style.boxShadow = "0 4px 12px rgba(0, 0, 0, 0.08)";
    } else {
      header.style.backgroundColor = "rgba(255, 255, 255, 0.95)";
      header.style.boxShadow = "0 2px 8px rgba(0, 0, 0, 0.05)";
    }
  });

  // Toggle filters
  const toggleFiltersBtn = document.querySelector(".toggle-filters");
  const filtersBody = document.querySelector(".filters-body");

  if (toggleFiltersBtn && filtersBody) {
    toggleFiltersBtn.addEventListener("click", function () {
      filtersBody.style.display =
        filtersBody.style.display === "none" ? "block" : "none";

      // Cambiar icono
      const icon = this.querySelector("i");
      if (icon.classList.contains("fa-sliders-h")) {
        icon.classList.remove("fa-sliders-h");
        icon.classList.add("fa-times");
      } else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-sliders-h");
      }
    });
  }

  // Range slider
  const minRange = document.querySelector(".min-range");
  const maxRange = document.querySelector(".max-range");
  const minPrice = document.querySelector(".min-price");
  const maxPrice = document.querySelector(".max-price");
  const sliderTrack = document.querySelector(".slider-track");

  if (minRange && maxRange && minPrice && maxPrice && sliderTrack) {
    // Función para formatear precio
    function formatPrice(value) {
      return "$" + Number.parseInt(value).toLocaleString();
    }

    // Función para actualizar el slider
    function updateSlider() {
      const minVal = Number.parseInt(minRange.value);
      const maxVal = Number.parseInt(maxRange.value);

      if (maxVal - minVal < 50000) {
        if (minVal === Number.parseInt(minRange.min)) {
          maxRange.value = minVal + 50000;
        } else {
          minRange.value = maxVal - 50000;
        }
      } else {
        sliderTrack.style.left =
          (minVal / Number.parseInt(minRange.max)) * 100 + "%";
        sliderTrack.style.width =
          ((maxVal - minVal) / Number.parseInt(minRange.max)) * 100 + "%";

        minPrice.value = formatPrice(minRange.value);
        maxPrice.value = formatPrice(maxRange.value);
      }
    }

    minRange.addEventListener("input", updateSlider);
    maxRange.addEventListener("input", updateSlider);

    // Inicializar slider
    updateSlider();
  }

  // Room buttons
  const roomBtns = document.querySelectorAll(".room-btn");

  roomBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      // Desactivar todos los botones del mismo grupo
      const parentGroup = this.closest(".rooms-filter");
      parentGroup.querySelectorAll(".room-btn").forEach((b) => {
        b.classList.remove("active");
      });

      // Activar el botón actual
      this.classList.add("active");
    });
  });

  // Toggle view (grid/list)
  const viewBtns = document.querySelectorAll(".view-btn");
  const propertiesGrid = document.querySelector(".properties-grid");

  viewBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      // Desactivar todos los botones
      viewBtns.forEach((b) => b.classList.remove("active"));

      // Activar el botón actual
      this.classList.add("active");

      // Cambiar vista
      const viewType = this.getAttribute("data-view");
      if (propertiesGrid) {
        if (viewType === "list") {
          propertiesGrid.classList.add("list-view");
        } else {
          propertiesGrid.classList.remove("list-view");
        }
      }
    });
  });

  // Favorite buttons
  const favoriteBtns = document.querySelectorAll(".favorite-btn");

  favoriteBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const icon = this.querySelector("i");

      if (icon.classList.contains("far")) {
        icon.classList.remove("far");
        icon.classList.add("fas");
        this.style.color = "#e91e63";
      } else {
        icon.classList.remove("fas");
        icon.classList.add("far");
        this.style.color = "";
      }
    });
  });

  // Back to top button
  const backToTopBtn = document.querySelector(".back-to-top");

  if (backToTopBtn) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        backToTopBtn.classList.add("visible");
      } else {
        backToTopBtn.classList.remove("visible");
      }
    });

    backToTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
});
