<?php
    session_start();
    // ตรวจสอบความปลอดภัย: ถ้าไม่มี Session ID ให้ดีดกลับไปหน้าแรก
    if (empty($_SESSION['aid'])) {
        echo "<div style='text-align:center; margin-top:50px;'>";
        echo "<h3>Access Denied! กำลังกลับไปหน้าหลัก...</h3>";
        echo "</div>";
        echo "<meta http-equiv='refresh' content='2;url=index.php'>";
        exit;
    }
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - ธิชาดา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f0f5f9; font-family: 'Sarabun', sans-serif; }
        .sidebar { background-color: #ffffff; min-height: 100vh; border-right: 1px solid #dee2e6; }
        .nav-link { color: #495057; transition: 0.3s; margin-bottom: 5px; border-radius: 8px; }
        .nav-link:hover, .nav-link.active { background-color: #e7f1ff; color: #0d6efd; }
        .main-content { padding: 30px; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .status-badge { font-weight: normal; padding: 5px 12px; border-radius: 20px; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 sidebar p-3 shadow-sm">
            <h4 class="text-primary text-center mb-4 fw-bold">Admin Panel</h4>
            <div class="text-center mb-4">
                <i class="bi bi-person-circle fs-1 text-secondary"></i>
                <p class="mt-2 mb-0 small text-muted">ผู้ดูแลระบบ:</p>
                <h6 class="fw-bold text-dark"><?php echo $_SESSION['aname']; ?></h6>
            </div>
            <hr>
            <nav class="nav flex-column">
                <a class="nav-link" href="index2.php"><i class="bi bi-house-door me-2"></i> หน้าหลัก</a>
                <a class="nav-link" href="product.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a class="nav-link active" href="orders.php"><i class="bi bi-cart-check me-2"></i> จัดการออเดอร์</a>
                <a class="nav-link" href="customer.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr>
                <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </nav>
        </div>

        <div class="col-md-9 col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-primary"><i class="bi bi-list-stars"></i> รายการสั่งซื้อสินค้า</h2>
                <button class="btn btn-primary btn-sm rounded-pill px-3"><i class="bi bi-download me-1"></i> Export รายงาน</button>
            </div>

            <div class="card p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>รหัสสั่งซื้อ</th>
                                <th>ชื่อลูกค้า</th>
                                <th>วันที่สั่งซื้อ</th>
                                <th>ยอดรวม</th>
                                <th>สถานะ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-001</td>
                                <td>คุณสมชาย ใจดี</td>
                                <td>04 ก.พ. 2026</td>
                                <td class="fw-bold">1,500 ฿</td>
                                <td><span class="badge bg-warning text-dark status-badge">รอชำระเงิน</span></td>
                                <td class="text-center">
                                    <button class="btn btn-outline-info btn-sm"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-outline-success btn-sm"><i class="bi bi-check-lg"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>