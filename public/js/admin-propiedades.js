document.addEventListener("DOMContentLoaded", function () {
  // Add Property Button
  const addPropertyBtn = document.querySelector(".btn-primary");

  if (addPropertyBtn) {
    addPropertyBtn.addEventListener("click", function () {
      alert("Aquí se abriría un formulario para agregar una nueva propiedad.");
    });
  }
});
