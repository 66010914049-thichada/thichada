<?php
	include_once("checklogin.php");
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
        body { background-color: #f0f7ff; font-family: 'Sarabun', sans-serif; }
        .sidebar { background: #003d80; min-height: 100vh; color: white; }
        .nav-link { color: #b8d9ff; border-radius: 5px; margin-bottom: 5px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { background: #0056b3; color: white; }
        .main-content { padding: 30px; }
        .product-img { width: 60px; height: 60px; object-fit: cover; border-radius: 8px; }
        .card { border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .btn-add { border-radius: 10px; padding: 10px 20px; font-weight: bold; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 sidebar p-3 shadow">
            <div class="text-center my-4">
                <i class="bi bi-box-seam-fill fs-1 text-info"></i>
                <h5 class="mt-2 fw-bold">Stock Manager</h5>
            </div>
            <hr>
            <nav class="nav flex-column">
                <a class="nav-link" href="index2.php"><i class="bi bi-grid-1x2-fill me-2"></i> Dashboard</a>
                <a class="nav-link active" href="product.php"><i class="bi bi-archive-fill me-2"></i> จัดการสินค้า</a>
                <a class="nav-link" href="orders.php"><i class="bi bi-receipt me-2"></i> จัดการออเดอร์</a>
                <a class="nav-link" href="customer.php"><i class="bi bi-person-badge-fill me-2"></i> จัดการลูกค้า</a>
                <hr>
                <div class="px-3 mb-3 small text-info">
                    <i class="bi bi-person-circle me-1"></i> Admin: <?php echo $_SESSION['aname']; ?>
                </div>
                <a class="nav-link text-danger" href="logout.php"><i class="bi bi-power me-2"></i> ออกจากระบบ</a>
            </nav>
        </div>

        <div class="col-md-9 col-lg-10 main-content">
            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <h2 class="text-dark fw-bold">คลังสินค้า (Products)</h2>
                    <p class="text-muted small">ระบบจัดการข้อมูลสินค้าและจำนวนสต็อกคงเหลือ</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <button class="btn btn-primary btn-add shadow-sm">
                        <i class="bi bi-plus-lg me-1"></i> เพิ่มสินค้าใหม่
                    </button>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-primary text-white">
                                <tr>
                                    <th class="ps-4 py-3">รูปภาพ</th>
                                    <th class="py-3">ชื่อสินค้า / SKU</th>
                                    <th class="py-3">ราคา/หน่วย</th>
                                    <th class="py-3">สต็อก</th>
                                    <th class="py-3">สถานะ</th>
                                    <th class="text-center py-3">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <tr>
                                    <td class="ps-4">
                                        <img src="https://via.placeholder.com/60" alt="Product" class="product-img border">
                                    </td>
                                    <td>
                                        <div class="fw-bold text-primary">สินค้าตัวอย่าง A</div>
                                        <small class="text-muted">SKU: PD-00123</small>
                                    </td>
                                    <td><span class="fw-bold text-dark">590 ฿</span></td>
                                    <td>120 ชิ้น</td>
                                    <td><span class="badge bg-success-subtle text-success border border-success-subtle px-3">พร้อมขาย</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-outline-danger btn-sm" onclick="return confirm('ยืนยันการลบสินค้า?')"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <footer class="text-center mt-5 text-muted small">
                © 2026 ธิชาดา สีทอน - พัฒนาด้วย Bootstrap 5.3
            </footer>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>