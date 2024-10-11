document.addEventListener('DOMContentLoaded', function () {
    const barConfig = {
      type: 'bar',
      data: {
        datasets: [{
          data: [25, 35, 50, 30], 
          backgroundColor: ['#EF4444', '#F97316', '#FBBF24', '#10B981'],
          label: 'Shipments by Region'
        }],
        labels: ['North', 'South', 'East', 'West'],
      },
      options: {
        responsive: true,
        legend: {
          display: false,
        },
      },
    };

    const barCtx = document.getElementById('region').getContext('2d');
    window.myBar = new Chart(barCtx, barConfig);
  });