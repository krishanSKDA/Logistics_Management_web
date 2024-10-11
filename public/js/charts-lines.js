const lineConfig = {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label: 'On-Time',
        backgroundColor: '#14B8A6', // Tailwind color for 'On-Time'
        borderColor: '#14B8A6',     // Tailwind color for 'On-Time'
        data: [43, 48, 40, 54, 67, 73, 70],
        fill: false,
      },
      {
        label: 'Delayed',
        backgroundColor: '#7E22CE', // Tailwind color for 'Delayed'
        borderColor: '#7E22CE',     // Tailwind color for 'Delayed'
        data: [24, 50, 64, 74, 52, 51, 65],
        fill: false,
      },
    ],
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    tooltips: {
      mode: 'index',
      intersect: false,
    },
    hover: {
      mode: 'nearest',
      intersect: true,
    },
    scales: {
      x: {
        display: true,
        title: {
          display: true,
          text: 'Month',
        },
      },
      y: {
        display: true,
        title: {
          display: true,
          text: 'Value',
        },
      },
    },
  },
}

// Change this to the id of your chart element in HTML
const lineCtx = document.getElementById('line').getContext('2d');
window.myLine = new Chart(lineCtx, lineConfig);
