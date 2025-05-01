document.addEventListener("DOMContentLoaded", function () {
  // Dark Mode Toggle
  const darkModeToggle = document.getElementById("darkMode");

  if (darkModeToggle) {
    // Check if dark mode is enabled in localStorage
    const isDarkMode = localStorage.getItem("darkMode") === "true";

    // Set initial state
    if (isDarkMode) {
      document.body.classList.add("dark-mode");
      darkModeToggle.checked = true;
    }

    // Toggle dark mode
    darkModeToggle.addEventListener("change", function () {
      if (this.checked) {
        document.body.classList.add("dark-mode");
        localStorage.setItem("darkMode", "true");
      } else {
        document.body.classList.remove("dark-mode");
        localStorage.setItem("darkMode", "false");
      }
    });
  }

  // Save Settings
  const saveButtons = document.querySelectorAll(
    ".settings-footer .btn-primary"
  );

  saveButtons.forEach((button) => {
    button.addEventListener("click", function () {
      alert("Configuración guardada correctamente.");
    });
  });
});
