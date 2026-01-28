<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>66010914049 ธิชาดา สีทอน(น้ำตาล)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body { padding: 20px; background-color: #f8f9fa; }
        .table-container { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .product-img { width: 50px; height: auto; border-radius: 5px; }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="table-container">
        <h2 class="mb-4 text-primary">66010914049 ธิชาดา สีทอน (น้ำตาล)</h2>
        
        <table id="myTable" class="table table-striped table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Order ID</th>
                    <th>ชื่อสินค้า</th>
                    <th>ประเภทสินค้า</th>
                    <th>วันที่</th>
                    <th>ประเทศ</th>
                    <th>จำนวนเงิน</th>
                    <th class="text-center">รูปภาพ</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include_once("connectdb.php");
            $sql = "SELECT * FROM `popsupermarket`";
            $rs = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($rs)){
            ?>
                <tr>
                    <td><?php echo $data['p_order_id'];?></td>
                    <td><?php echo $data['p_product_name'];?></td>
                    <td><span class="badge bg-info text-dark"><?php echo $data['p_category'];?></span></td>
                    <td><?php echo $data['p_date'];?></td>
                    <td><?php echo $data['p_country'];?></td>
                    <td align="right" class="fw-bold"><?php echo number_format($data['p_amount'], 0);?></td>
                    <td align="center">
                        <img src="images/<?php echo $data['p_product_name'];?>.jpg" class="product-img" alt="product">
                    </td>
                </tr>
            <?php
            }
            mysqli_close($conn);
            ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json" // เมนูภาษาไทย
            },
            "pageLength": 50,
            "responsive": true
        });
    });
</script>

</body>
</html>