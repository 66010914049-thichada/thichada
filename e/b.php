<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครงาน - บริษัท สไมล์เทค โซลูชั่น จำกัด</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm p-4 mx-auto" style="max-width: 720px;">

        <h2 class="text-center text-primary mb-4">ฟอร์มสมัครงาน</h2>
        <h5 class="text-center">บริษัท สไมล์เทค โซลูชั่น จำกัด</h5>
        <h2 class="text-center text-muted">66010914049 ธิชาดา สีทอน (น้ำตาล)</h2>
        <hr>

        <form action="" method="post">

            <!-- ตำแหน่งที่ต้องการสมัคร -->
            <div class="mb-3">
                <label class="form-label">ตำแหน่งที่ต้องการสมัคร</label>
                <select class="form-select" name="position" required>
                    <option value="">-- เลือกตำแหน่งงาน --</option>
                    <option>เจ้าหน้าที่ฝ่ายบุคคล (HR Officer)</option>
                    <option>นักพัฒนาเว็บไซต์ (Web Developer)</option>
                    <option>นักออกแบบกราฟิก (Graphic Designer)</option>
                    <option>การตลาดออนไลน์ (Digital Marketing)</option>
                    <option>เจ้าหน้าที่บริการลูกค้า (Customer Service)</option>
                </select>
            </div>

            <!-- คำนำหน้าชื่อ -->
            <div class="mb-3">
                <label class="form-label">คำนำหน้าชื่อ</label>
                <select class="form-select" name="title" required>
                    <option>นาย</option>
                    <option>นาง</option>
                    <option>นางสาว</option>
                </select>
            </div>

            <!-- ชื่อ - สกุล -->
            <div class="mb-3">
                <label class="form-label">ชื่อ - สกุล</label>
                <input type="text" class="form-control" name="fullname" required>
            </div>

            <!-- วันเดือนปีเกิด -->
            <div class="mb-3">
                <label class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" name="birthday" required>
            </div>

            <!-- ระดับการศึกษา -->
            <div class="mb-3">
                <label class="form-label">ระดับการศึกษา</label>
                <select class="form-select" name="education" required>
                    <option>มัธยมศึกษาตอนปลาย (ม.6)</option>
                    <option>ประกาศนียบัตรวิชาชีพ (ปวช.)</option>
                    <option>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
                    <option>ปริญญาตรี</option>
                    <option>ปริญญาโท</option>
                </select>
            </div>

            <!-- ความสามารถพิเศษ -->
            <div class="mb-3">
                <label class="form-label">ความสามารถพิเศษ</label>
                <textarea class="form-control" rows="3" name="skill" placeholder="ระบุความสามารถ เช่น ใช้โปรแกรมกราฟิกได้ดี ทำงานเป็นทีมได้"></textarea>
            </div>

            <!-- ประสบการณ์ทำงาน -->
            <div class="mb-3">
                <label class="form-label">ประสบการณ์ทำงาน</label>
                <textarea class="form-control" rows="3" name="experience" placeholder="เคยทำงานบริษัทใด ตำแหน่งอะไร ระยะเวลาเท่าไหร่"></textarea>
            </div>

            <!-- ปุ่มส่งข้อมูล -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-4">ส่งใบสมัคร</button>
                <button type="reset" class="btn btn-secondary px-4">ล้างข้อมูล</button>
            </div>

        </form>
    </div>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $position   = $_POST['position'];
    $title      = $_POST['title'];
    $fullname   = $_POST['fullname'];
    $birthday   = $_POST['birthday'];
    $education  = $_POST['education'];
    $skill      = $_POST['skill'];
    $experience = $_POST['experience'];

    include_once("connectdb.php");
        

    $sql = "INSERT INTO application (a_id, a_position, a_title, a_fullname, a_birthday, a_education, a_skill, a_experience) VALUES (NULL, '{$position}', '{$title}','{$fullname}', '{$birthday}', '{$education}', '{$skill}', '{$experience}');";
    mysqli_query($conn,$sql) or die ("insert ไม่ได้");

    echo "<script>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "</script>";
}
?>


</body>
</html>
