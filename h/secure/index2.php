<?php
session_start();
// ตรวจสอบว่ามีการ Login หรือไม่ (ถ้าไม่มีค่า aid ให้ดีดออกไปหน้า login)
if (empty($_SESSION['aid'])) {
    echo "<script>alert('กรุณาเข้าสู่ระบบก่อน'); window.location='login.php';</script>";
    exit;
}
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - ธิชาดา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8fbff; font-family: 'Sarabun', sans-serif; }
        .navbar { background-color: #007bff; }
        .card-menu {
            transition: transform 0.3s;
            border: none;
            border-radius: 15px;
        }
        .card-menu:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .icon-box {
            font-size: 3rem;
            color: #007bff;
        }
        a { text-decoration: none; color: inherit; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Admin System</a>
        <div class="navbar-text text-white">
            <i class="bi bi-person-circle"></i> แอดมิน: <strong><?php echo $_SESSION['aname'];?></strong>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center mb-5 text-primary fw-bold">จัดการระบบหลังบ้าน</h1>
    
    <div class="row g-4">
        <div class="col-md-4">
            <a href="product.php">
                <div class="card card-menu h-100 text-center p-4 shadow-sm">
                    <div class="icon-box mb-3"><i class="bi bi-box-seam"></i></div>
                    <h3>จัดการสินค้า</h3>
                    <p class="text-muted">เพิ่ม ลบ แก้ไข ข้อมูลสินค้าในคลัง</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="orders.php">
                <div class="card card-menu h-100 text-center p-4 shadow-sm">
                    <div class="icon-box mb-3"><i class="bi bi-cart-check"></i></div>
                    <h3>จัดการออเดอร์</h3>
                    <p class="text-muted">ตรวจสอบสถานะการสั่งซื้อของลูกค้า</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="customer.php">
                <div class="card card-menu h-100 text-center p-4 shadow-sm">
                    <div class="icon-box mb-3"><i class="bi bi-people"></i></div>
                    <h3>จัดการลูกค้า</h3>
                    <p class="text-muted">ดูข้อมูลสมาชิกและประวัติการใช้งาน</p>
                </div>
            </a>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="logout.php" class="btn btn-outline-danger px-5 py-2">
            <i class="bi bi-box-arrow-right"></i> ออกจากระบบอย่างปลอดภัย
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>