document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const closeBtn = document.getElementById('close-btn');
    const menuBtn = document.getElementById('menu-btn');
    const mainContent = document.querySelector('.main-content');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.add('show');
        mainContent.classList.add('shift');
    });

    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('show');
        mainContent.classList.remove('shift');
    });
});
const ctx = document.getElementById('salesChart').getContext('2d');
const salesChart = new Chart(ctx, {
    type: 'line', // or 'bar', 'pie', etc.
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Sales',
            data: [1200, 1900, 3000, 5000, 2300, 3400, 2900],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx2 = document.getElementById('usersChart').getContext('2d');
const usersChart = new Chart(ctx2, {
    type: 'bar', // or 'line', 'pie', etc.
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Users',
            data: [150, 200, 250, 300, 350, 400, 450],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
