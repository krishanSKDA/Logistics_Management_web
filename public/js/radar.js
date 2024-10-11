document.addEventListener('DOMContentLoaded', function () {
    const radarConfig = {
      type: 'radar',
      data: {
        labels: ['On-Time Deliverie', 'Delayed Deliveries', 'Damaged Shipments', 'Customer Satisfaction'],
        datasets: [
          {
            label: 'On-Time Deliverie',
            backgroundColor: 'rgba(29, 78, 216, 0.2)', // Light blue
            borderColor: '#1D4ED8',                    // Dark blue
            data: [95,85, 90, 81],                     // Sample data
            fill: true,
          },
          {
            label: 'Delayed Deliveries',
            backgroundColor: 'rgba(20, 184, 166, 0.2)', // Light teal
            borderColor: '#14B8A6',                    // Dark teal
            data: [28, 48, 40, 20],                     // Sample data
            fill: true,
          },
          {
            label: 'Damaged Shipments',
            backgroundColor: 'rgba(126, 34, 206, 0.2)', // Light purple
            borderColor: '#7E22CE',                    // Dark purple
            data: [45, 35, 25, 10],                     // Sample data
            fill: true,
          },
          {
            label: 'Customer Satisfaction',
            backgroundColor: 'rgba(239, 68, 68, 0.2)', // Light red
            borderColor: '#EF4444',                    // Dark red
            data: [95, 98, 90, 88],                     // Sample data
            fill: true,
          }
        ],
      },
      options: {
        responsive: true,
        legend: {
          display: false,
        },
        scale: {
          ticks: {
            beginAtZero: true,
          },
        },
      },
    };

    const radarCtx = document.getElementById('radar').getContext('2d');
    window.myRadar = new Chart(radarCtx, radarConfig);
  });