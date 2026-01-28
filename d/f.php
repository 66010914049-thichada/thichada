<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>สรุปข้อมูลการสมัครงาน</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm p-4 mx-auto" style="max-width: 720px;">

        <h2 class="text-center text-success mb-4">ข้อมูลการสมัครงาน</h2>
        <h5 class="text-center mb-3">บริษัท สไมล์เทค โซลูชั่น จำกัด</h5>
        <h2 class="text-center text-muted">ธิชาดา สีทอน (น้ำตาล)</h2>
        <hr>

        <?php
        // รับค่าจากฟอร์ม
        $position   = $_POST["position"];
        $title      = $_POST["title"];
        $fullname   = $_POST["fullname"];
        $birthday   = $_POST["birthday"];
        $education  = $_POST["education"];
        $skill      = $_POST["skill"];
        $experience = $_POST["experience"];
        ?>

        <table class="table table-bordered mt-3">
            <tr>
                <th class="bg-light">ตำแหน่งที่สมัคร</th>
                <td><?php echo $position; ?></td>
            </tr>
            <tr>
                <th class="bg-light">คำนำหน้า</th>
                <td><?php echo $title; ?></td>
            </tr>
            <tr>
                <th class="bg-light">ชื่อ - สกุล</th>
                <td><?php echo $fullname; ?></td>
            </tr>
            <tr>
                <th class="bg-light">วันเดือนปีเกิด</th>
                <td><?php echo $birthday; ?></td>
            </tr>
            <tr>
                <th class="bg-light">ระดับการศึกษา</th>
                <td><?php echo $education; ?></td>
            </tr>
            <tr>
                <th class="bg-light">ความสามารถพิเศษ</th>
                <td><?php echo nl2br($skill); ?></td>
            </tr>
            <tr>
                <th class="bg-light">ประสบการณ์ทำงาน</th>
                <td><?php echo nl2br($experience); ?></td>
            </tr>
        </table>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-primary px-4">กลับไปหน้าสมัครงาน</a>
        </div>

    </div>
</div>

</body>
</html>
