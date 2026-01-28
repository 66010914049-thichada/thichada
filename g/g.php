<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914049 ธิชาดา สีทอน(น้ำตาล)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    body { font-family: 'Sarabun', sans-serif; padding: 20px; background-color: #fafafa; }
    .chart-wrapper { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
    .chart-box { 
        background: #fff; padding: 15px; border-radius: 12px; 
        box-shadow: 0 2px 10px rgba(0,0,0,0.05); width: 100%; max-width: 450px; 
    }
    .table-container { margin-top: 30px; display: flex; justify-content: center; }
    table { border-collapse: collapse; width: 100%; max-width: 500px; background: white; }
    th { background-color: #333; color: white; padding: 10px; }
    td { padding: 8px; border: 1px solid #eee; text-align: center; }
</style>
</head>

<body>
<h1 style="text-align:center;">66010914049 ธิชาดา สีทอน(น้ำตาล)</h1>

<?php
include_once("connectdb.php");
$sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month;";
$rs = mysqli_query($conn, $sql);

$labels = [];
$values = [];
$month_names = ["", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];
$table_data = [];

while ($data = mysqli_fetch_array($rs)){
    $labels[] = $month_names[$data['Month']];
    $values[] = $data['Total_Sales'];
    $table_data[] = $data;
}
?>

<div class="chart-wrapper">
    <div class="chart-box"><canvas id="barChart"></canvas></div>
    <div class="chart-box"><canvas id="doughnutChart"></canvas></div>
</div>

<div class="table-container">
    <table border="1">
        <tr>
            <th>เดือน</th>
            <th>ยอดขาย</th>
        </tr>
        <?php foreach ($table_data as $row) { ?>
        <tr>
            <td><?php echo $month_names[$row['Month']]; ?></td>
            <td align="right"><?php echo number_format($row['Total_Sales'], 0); ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<script>
// ชุดสี 12 สีที่ไม่ซ้ำกัน (Vivid 12 Colors Palette)
const uniqueColors = [
    '#FF6384', // Rose Red
    '#36A2EB', // Bright Blue
    '#FFCE56', // Yellow
    '#4BC0C0', // Teal
    '#9966FF', // Soft Purple
    '#FF9F40', // Orange
    '#C9CB3F', // Lime Green
    '#E7E9ED', // Light Grey
    '#74D12C', // Apple Green
    '#2259D1', // Royal Blue
    '#D122C1', // Magenta
    '#22D1B1'  // Turquoise
];

const commonOptions = {
    responsive: true,
    plugins: {
        legend: { position: 'bottom' }
    }
};

// กราฟแท่ง
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            label: 'ยอดขายรายเดือน',
            data: <?php echo json_encode($values); ?>,
            backgroundColor: uniqueColors, // ใช้ชุดสีที่ไม่ซ้ำ
            borderWidth: 1
        }]
    },
    options: {
        ...commonOptions,
        plugins: { legend: { display: false } } // กราฟแท่งซ่อน legend เพื่อความสะอาด
    }
});

// กราฟโดนัท
new Chart(document.getElementById('doughnutChart'), {
    type: 'doughnut',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            data: <?php echo json_encode($values); ?>,
            backgroundColor: uniqueColors
        }]
    },
    options: commonOptions
});
</script>

<?php mysqli_close($conn); ?>
</body>
</html>