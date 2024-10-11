const pieConfig = {
  type: 'doughnut',
  data: {
    datasets: [
      {
        data: [35, 40, 30], // Replace with actual data
        backgroundColor: ['#1D4ED8', '#14B8A6', '#7E22CE'],
        label: 'Shipment Revenue',
      },
    ],
    labels: ['Air Freight', 'Sea Freight', 'Land Freight'],
  },
  options: {
    responsive: true,
    cutoutPercentage: 80, 
    legend: {
      display: false, 
    },
  },
}

// Change this to the id of your chart element in HTML
const pieCtx = document.getElementById('pie').getContext('2d');
window.myPie = new Chart(pieCtx, pieConfig);
