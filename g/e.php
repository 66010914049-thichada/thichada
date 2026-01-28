<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914049 ธิชาดา สีทอน(น้ำตาล)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .chart-container { width: 45%; float: left; margin: 10px; }
    table { clear: both; margin-top: 20px; border-collapse: collapse; width: 50%; }
</style>
</head>

<body>
<h1>66010914049 ธิชาดา สีทอน(น้ำตาล)</h1>

<?php
include_once("connectdb.php");
$sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country`;";
$rs = mysqli_query($conn, $sql);

$labels = [];
$values = [];
$table_data = [];

while ($data = mysqli_fetch_array($rs)){
    $labels[] = $data['p_country'];
    $values[] = $data['total'];
    $table_data[] = $data; // เก็บไว้แสดงในตาราง
}
?>

<div class="chart-container"><canvas id="barChart"></canvas></div>
<div class="chart-container" style="width: 30%;"><canvas id="pieChart"></canvas></div>

<table border="1">
    <tr>
        <th>ประเทศ</th>
        <th>ยอดขาย</th>
    </tr>
    <?php foreach ($table_data as $row) { ?>
    <tr>
        <td><?php echo $row['p_country'];?></td>
        <td align="right"><?php echo number_format($row['total'],0);?></td>
    </tr>
    <?php } ?>
</table>

<script>
// เตรียมข้อมูลจาก PHP ส่งให้ JavaScript
const labels = <?php echo json_encode($labels); ?>;
const dataValues = <?php echo json_encode($values); ?>;
const colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'];

// 4. สร้าง Bar Chart
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขายรายประเทศ',
            data: dataValues,
            backgroundColor: colors
        }]
    },
    options: { plugins: { legend: { display: false } } }
});

// 5. สร้าง Pie Chart
new Chart(document.getElementById('pieChart'), {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: colors
        }]
    }
});
</script>

<?php mysqli_close($conn); ?>
</body>
</html>