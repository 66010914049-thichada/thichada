<?php
session_start();
include_once("connectdb.php"); // เชื่อมต่อฐานข้อมูล
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ - ธิชาดา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f8ff; } /* สีฟ้าอ่อน */
        .login-card { max-width: 400px; margin-top: 100px; border: none; border-radius: 15px; }
        .btn-primary { background-color: #007bff; border: none; }
        .btn-primary:hover { background-color: #0056b3; }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card login-card shadow-sm mx-auto">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4 text-primary">เข้าสู่ระบบ</h2>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="auser" class="form-control" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="apwd" class="form-control" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="Submit" class="btn btn-primary btn-lg">LOGIN</button>
                        </div>
                    </form>

                    <?php
                    if(isset($_POST['Submit'])) {
                        $user = $_POST['auser'];
                        $pwd = $_POST['apwd'];

                        // 1. ใช้ Prepared Statement ป้องกัน SQL Injection
                        $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
                        mysqli_stmt_bind_param($stmt, "s", $user);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        if($data = mysqli_fetch_array($result)){
                            // 2. ตรวจสอบรหัสผ่านที่เข้ารหัสด้วย password_verify
                            if(password_verify($pwd, $data['a_password'])) {
                                $_SESSION['aid'] = $data['a_id'];
                                $_SESSION['aname'] = $data['a_name'];
                                
                                echo "<script>window.location='index2.php';</script>";
                            } else {
                                echo "<div class='alert alert-danger mt-3 text-center'>รหัสผ่านไม่ถูกต้อง</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger mt-3 text-center'>ไม่พบ Username นี้</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>