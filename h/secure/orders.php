<?php
    session_start();
    include_once("connectdb.php"); // เชื่อมต่อฐานข้อมูลของคุณ

    // ตรวจสอบสิทธิ์การเข้าใช้งาน
    if (empty($_SESSION['aid'])) {
        echo "<script>alert('กรุณาเข้าสู่ระบบ'); window.location='login.php';</script>";
        exit;
    }
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - ธิชาดา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root { --main-blue: #007bff; --light-blue: #f0f8ff; }
        body { background-color: var(--light-blue); font-family: 'Sarabun', sans-serif; }
        .navbar-custom { background-color: var(--main-blue); color: white; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .product-img { width: 50px; height: 50px; object-fit: cover; border-radius: 5px; }
        .table thead { background-color: #e9ecef; }
        .btn-add { border-radius: 20px; padding: 8px 20px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index2.php"><i class="bi bi-shop me-2"></i>ธิชาดา Store</a>
        <div class="navbar-text text-white">
            <i class="bi bi-person-circle"></i> แอดมิน: <?php echo $_SESSION['aname']; ?>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h3 class="fw-bold text-primary"><i class="bi bi-box-seam"></i> รายการสินค้าทั้งหมด</h3>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="product_add.php" class="btn btn-primary btn-add shadow">
                <i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">ลำดับ</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อสินค้า</th>
                            <th>หมวดหมู่</th>
                            <th>ราคา</th>
                            <th>จำนวน</th>
                            <th class="text-center">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // สมมติการดึงข้อมูลจากตาราง products
                        $sql = "SELECT * FROM products ORDER BY p_id DESC";
                        $rs = mysqli_query($conn, $sql);
                        $i = 1;
                        
                        while($data = mysqli_fetch_array($rs)) {
                        ?>
                        <tr>
                            <td class="ps-4"><?php echo $i++; ?></td>
                            <td>
                                <img src="images/<?php echo $data['p_img']; ?>" class="product-img border" onerror="this.src='https://via.placeholder.com/50'">
                            </td>
                            <td>
                                <span class="fw-bold"><?php echo $data['p_name']; ?></span>
                                <div class="small text-muted">ID: <?php echo $data['p_id']; ?></div>
                            </td>
                            <td><?php echo $data['p_type']; ?></td>
                            <td class="text-primary fw-bold"><?php echo number_format($data['p_price'], 2); ?> ฿</td>
                            <td><?php echo $data['p_stock']; ?> ชิ้น</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="product_edit.php?id=<?php echo $data['p_id']; ?>" class="btn btn-sm btn-outline-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="product_delete.php?id=<?php echo $data['p_id']; ?>" 
                                       class="btn btn-sm btn-outline-danger" 
                                       onclick="return confirm('ยืนยันการลบสินค้าชิ้นนี้?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="text-center my-5 text-muted">