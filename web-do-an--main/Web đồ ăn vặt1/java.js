// Kích hoạt DataTable
$(document).ready(function() {
    $('#dataTable').DataTable();
});

// Biểu đồ mẫu với Chart.js
const ctx1 = document.getElementById('chart1').getContext('2d');
const chart1 = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
        datasets: [{
            label: 'Doanh Thu',
            data: [120, 190, 300, 500, 200, 300],
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 2
        }]
    }
});

const ctx2 = document.getElementById('chart2').getContext('2d');
const chart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
        datasets: [{
            label: 'Người Dùng Mới',
            data: [30, 50, 100, 75, 90, 130],
            backgroundColor: 'rgba(54, 162, 235, 0.6)'
        }]
    }
});

// Chuyển đổi chế độ sáng/tối
const toggleDarkMode = document.querySelector('.toggle-dark-mode');
toggleDarkMode.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    document.querySelector('.sidebar').classList.toggle('dark-mode');
    document.querySelector('.main-content').classList.toggle('dark-mode');
    document.querySelector('.table-container').classList.toggle('dark-mode');
});
