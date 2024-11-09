console.log("Chart.js")

const data = {
  datasets: [{
    label: 'My First Dataset',
    data: [65, 59, 80, 81, 56, 55, 40],
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1
  }]
};

const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: data
  });