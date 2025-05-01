document.addEventListener("DOMContentLoaded", () => {
  // Sidebar toggle functionality
  const sidebarToggle = document.getElementById("sidebarToggle");
  const sidebar = document.querySelector(".sidebar");

  if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed");

      // For mobile
      if (window.innerWidth < 768) {
        sidebar.classList.toggle("expanded");
      }
    });
  }

  // Close sidebar when clicking outside on mobile
  document.addEventListener("click", (event) => {
    if (
      window.innerWidth < 768 &&
      !event.target.closest(".sidebar") &&
      !event.target.closest("#sidebarToggle") &&
      sidebar.classList.contains("expanded")
    ) {
      sidebar.classList.remove("expanded");
    }
  });

  // Handle window resize
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) {
      sidebar.classList.remove("expanded");
    }
  });

  // Initialize tooltips
  initTooltips();
});

// Initialize tooltips
function initTooltips() {
  const tooltips = document.querySelectorAll("[data-tooltip]");

  tooltips.forEach((tooltip) => {
    tooltip.addEventListener("mouseenter", function () {
      const tooltipText = this.getAttribute("data-tooltip");
      if (!tooltipText) return;

      // Create tooltip element
      const tooltipEl = document.createElement("div");
      tooltipEl.className = "tooltip-text";
      tooltipEl.textContent = tooltipText;

      // Position tooltip
      const rect = this.getBoundingClientRect();
      tooltipEl.style.position = "absolute";
      tooltipEl.style.top = rect.top - 40 + "px";
      tooltipEl.style.left = rect.left + rect.width / 2 + "px";
      tooltipEl.style.transform = "translateX(-50%)";
      tooltipEl.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
      tooltipEl.style.color = "#fff";
      tooltipEl.style.padding = "5px 10px";
      tooltipEl.style.borderRadius = "4px";
      tooltipEl.style.fontSize = "12px";
      tooltipEl.style.zIndex = "1000";

      // Add to body
      document.body.appendChild(tooltipEl);

      // Remove on mouseleave
      this.addEventListener(
        "mouseleave",
        () => {
          tooltipEl.remove();
        },
        { once: true }
      );
    });
  });
}
