document.addEventListener("DOMContentLoaded", function () {
  // Toggle sidebar
  const sidebar = document.getElementById("sidebar");
  const toggleSidebar = document.getElementById("toggleSidebar");

  if (toggleSidebar) {
    toggleSidebar.addEventListener("click", function () {
      sidebar.classList.toggle("collapsed");
      localStorage.setItem(
        "sidebarState",
        sidebar.classList.contains("collapsed") ? "collapsed" : "expanded"
      );
    });
  }

  // Load sidebar state from localStorage
  const savedSidebarState = localStorage.getItem("sidebarState");
  if (savedSidebarState === "collapsed") {
    sidebar.classList.add("collapsed");
  }

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
      const tabContents = document.querySelectorAll(".tab-content");
      tabContents.forEach((content) => content.classList.remove("active"));
      document.getElementById(tabId).classList.add("active");
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
});
