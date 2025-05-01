document.addEventListener("DOMContentLoaded", function () {
  // Add Agent Button
  const addAgentBtn = document.getElementById("addAgentBtn");

  if (addAgentBtn) {
    addAgentBtn.addEventListener("click", function () {
      alert("Aquí se abriría un formulario para agregar un nuevo agente.");
    });
  }
});
