document.addEventListener("DOMContentLoaded", function () {
  // Toggle sidebar
  const sidebar = document.getElementById("sidebar");
  const toggleSidebar = document.getElementById("toggleSidebar");
  const pageTitle = document.getElementById("pageTitle");

  toggleSidebar.addEventListener("click", function () {
    sidebar.classList.toggle("collapsed");
  });

  // Navigation
  const navItems = document.querySelectorAll(".sidebar-nav li");
  const contentSections = document.querySelectorAll(".content-section");

  navItems.forEach((item) => {
    item.addEventListener("click", function () {
      const section = this.getAttribute("data-section");

      // Update active nav item
      navItems.forEach((nav) => nav.classList.remove("active"));
      this.classList.add("active");

      // Show corresponding section
      contentSections.forEach((content) => content.classList.remove("active"));
      document.getElementById(`${section}-section`).classList.add("active");

      // Update page title
      pageTitle.textContent =
        section.charAt(0).toUpperCase() + section.slice(1);
    });
  });

  // Tab functionality
  const tabButtons = document.querySelectorAll(".tab-btn");

  tabButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const tabId = this.getAttribute("data-tab");
      const tabContainer = this.closest(".tabs").parentElement;

      // Update active tab button
      tabContainer
        .querySelectorAll(".tab-btn")
        .forEach((btn) => btn.classList.remove("active"));
      this.classList.add("active");

      // Show corresponding tab content
      tabContainer
        .querySelectorAll(".tab-content")
        .forEach((content) => content.classList.remove("active"));
      tabContainer.querySelector(`#${tabId}`).classList.add("active");
    });
  });

  // Add Agent Modal
  const addAgentBtn = document.getElementById("addAgentBtn");

  if (addAgentBtn) {
    addAgentBtn.addEventListener("click", function () {
      alert("Funcionalidad para agregar agente. Aquí se abriría un modal.");
    });
  }

  // Agent actions
  const editButtons = document.querySelectorAll(".edit-btn");
  const deleteButtons = document.querySelectorAll(".delete-btn");
  const viewButtons = document.querySelectorAll(".view-btn");

  editButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.stopPropagation();
      alert(
        "Funcionalidad para editar. Aquí se abriría un formulario de edición."
      );
    });
  });

  deleteButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.stopPropagation();
      if (confirm("¿Estás seguro de que deseas eliminar este elemento?")) {
        alert("Elemento eliminado correctamente.");
      }
    });
  });

  viewButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.stopPropagation();
      alert(
        "Funcionalidad para ver detalles. Aquí se mostrarían los detalles completos."
      );
    });
  });

  // Approve/Reject agent functionality
  const approveButtons = document.querySelectorAll(".btn-approve");
  const rejectButtons = document.querySelectorAll(".btn-reject");

  approveButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const agentItem = this.closest(".pending-agent");
      const agentName = agentItem.querySelector("h4").textContent;

      if (confirm(`¿Estás seguro de que deseas aprobar a ${agentName}?`)) {
        alert(`${agentName} ha sido aprobado correctamente.`);
        agentItem.style.opacity = "0.5";
        this.disabled = true;
        this.nextElementSibling.disabled = true;
      }
    });
  });

  rejectButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const agentItem = this.closest(".pending-agent");
      const agentName = agentItem.querySelector("h4").textContent;

      if (confirm(`¿Estás seguro de que deseas rechazar a ${agentName}?`)) {
        alert(`${agentName} ha sido rechazado.`);
        agentItem.style.opacity = "0.5";
        this.disabled = true;
        this.previousElementSibling.disabled = true;
      }
    });
  });

  // Notification dropdown (simplified)
  const notificationBtn = document.querySelector(".notification-btn");

  if (notificationBtn) {
    notificationBtn.addEventListener("click", function () {
      alert("Aquí se mostraría un dropdown con las notificaciones.");
    });
  }

  // Responsive adjustments
  function handleResponsive() {
    if (window.innerWidth < 768) {
      sidebar.classList.add("collapsed");
    }
  }

  // Initial call
  handleResponsive();

  // Listen for window resize
  window.addEventListener("resize", handleResponsive);

  // Simulate loading charts with animation
  const bars = document.querySelectorAll(".bar-fill");

  bars.forEach((bar) => {
    const width = bar.style.width;
    bar.style.width = "0";

    setTimeout(() => {
      bar.style.transition = "width 1s ease";
      bar.style.width = width;
    }, 300);
  });
});
