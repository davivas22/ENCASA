document.addEventListener("DOMContentLoaded", function () {
  // Initialize Charts
  initSalesChart();
  initPropertiesChart();
});

function initSalesChart() {
  const ctx = document.getElementById("salesChart");

  if (!ctx) return;

  const salesChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: [
        "Ene",
        "Feb",
        "Mar",
        "Abr",
        "May",
        "Jun",
        "Jul",
        "Ago",
        "Sep",
        "Oct",
        "Nov",
        "Dic",
      ],
      datasets: [
        {
          label: "Ventas",
          data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
          backgroundColor: "rgba(176, 141, 87, 0.7)",
          borderColor: "rgba(176, 141, 87, 1)",
          borderWidth: 1,
          borderRadius: 5,
          hoverBackgroundColor: "rgba(93, 64, 55, 0.7)",
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
        tooltip: {
          backgroundColor: "rgba(0, 0, 0, 0.7)",
          padding: 10,
          cornerRadius: 5,
          titleFont: {
            size: 14,
            weight: "bold",
          },
          bodyFont: {
            size: 12,
          },
          callbacks: {
            label: function (context) {
              return `$${context.raw}`;
            },
          },
        },
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            color: "rgba(0, 0, 0, 0.05)",
          },
        },
        x: {
          grid: {
            display: false,
          },
        },
      },
      animation: {
        duration: 2000,
        easing: "easeOutQuart",
      },
    },
  });
}

function initPropertiesChart() {
  const ctx = document.getElementById("propertiesChart");

  if (!ctx) return;

  const propertiesChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Casas", "Apartamentos", "Terrenos", "Comercial"],
      datasets: [
        {
          data: [0, 0, 0, 0],
          backgroundColor: [
            "rgba(176, 141, 87, 0.7)",
            "rgba(141, 110, 99, 0.7)",
            "rgba(93, 64, 55, 0.7)",
            "rgba(215, 204, 200, 0.7)",
          ],
          borderColor: [
            "rgba(176, 141, 87, 1)",
            "rgba(141, 110, 99, 1)",
            "rgba(93, 64, 55, 1)",
            "rgba(215, 204, 200, 1)",
          ],
          borderWidth: 1,
          hoverOffset: 10,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: "bottom",
          labels: {
            padding: 20,
            font: {
              size: 12,
            },
          },
        },
        tooltip: {
          backgroundColor: "rgba(0, 0, 0, 0.7)",
          padding: 10,
          cornerRadius: 5,
          titleFont: {
            size: 14,
            weight: "bold",
          },
          bodyFont: {
            size: 12,
          },
        },
      },
      animation: {
        duration: 2000,
        easing: "easeOutQuart",
      },
    },
  });
}
