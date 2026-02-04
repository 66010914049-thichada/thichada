<?php
    session_start();
    // ตรวจสอบสิทธิ์การเข้าใช้งาน
    if (empty($_SESSION['aid'])) {
        echo "<div class='alert alert-danger m-5 text-center'>Access Denied! กำลังกลับหน้าหลัก...</div>";
        echo "<meta http-equiv='refresh' content='2;url=index.php'>";
        exit;
    }
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - ธิชาดา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-blue: #007bff;
            --light-blue: #e3f2fd;
        }
        body { background-color: #f4f7f6; font-family: 'Sarabun', sans-serif; }
        
        /* Sidebar Design */
        .sidebar { 
            background: linear-gradient(180deg, #0056b3 0%, #007bff 100%);
            min-height: 100vh; 
            color: white;
        }
        .nav-link { 
            color: rgba(255,255,255,0.8); 
            transition: 0.3s; 
            border-radius: 10px;
            margin: 5px 0;
        }
        .nav-link:hover, .nav-link.active { 
            background-color: rgba(255,255,255,0.2); 
            color: white; 
        }
        
        /* Table & Card */
        .main-content { padding: 40px; }
        .card { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .table thead { background-color: var(--light-blue); }
        .avatar-circle {
            width: 40px; height: 40px;
            background-color: var(--primary-blue);
            color: white;
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%; font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 sidebar p-4 shadow">
            <h4 class="fw-bold mb-4 text-center text-white">ADMIN PRO</h4>
            <div class="text-center mb-4">
                <div class="avatar-circle mx-auto mb-2" style="width: 60px; height: 60px; font-size: 1.5rem;">
                    <?php echo mb_substr($_SESSION['aname'], 0, 1, 'UTF-8'); ?>
                </div>
                <small class="d-block opacity-75">ยินดีต้อนรับ</small>
                <h6 class="fw-bold text-white"><?php echo $_SESSION['aname']; ?></h6>
            </div>
            <hr class="text-white-50">
            <nav class="nav flex-column">
                <a class="nav-link" href="index2.php"><i class="bi bi-speedometer2 me-2"></i> แผงควบคุม</a>
                <a class="nav-link" href="product.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a class="nav-link" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
                <a class="nav-link active" href="customer.php"><i class="bi bi-people-fill me-2"></i> จัดการลูกค้า</a>
                <hr class="text-white-50">
                <a class="nav-link text-warning" href="logout.php"><i class="bi bi-door-open me-2"></i> ออกจากระบบ</a>
            </nav>
        </div>

        <div class="col-md-9 col-lg-10 main-content">
            <div class="row mb-4 align-items-center">
                <div class="col">
                    <h2 class="fw-bold text-dark"><i class="bi bi-person-lines-fill text-primary"></i> ข้อมูลลูกค้าทั้งหมด</h2>
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="ค้นหาชื่อลูกค้า...">
                        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>

            <div class="card p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>รูปโปรไฟล์</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>อีเมล / เบอร์โทรศัพท์</th>
                                <th>วันที่สมัคร</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><div class="avatar-circle">น</div></td>
                                <td><span class="fw-bold">นายมานะ อดทน</span></td>
                                <td>mana@example.com <br> <small class="text-muted">081-234-5678</small></td>
                                <td>01 ก.พ. 2026</td>
                                <td class="text-center">
                                    <div class="btn-group shadow-sm">
                                        <button class="btn btn-light text-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-light text-danger btn-sm" onclick="return confirm('ยืนยันการลบ?')"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
                
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">ก่อนหน้า</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>